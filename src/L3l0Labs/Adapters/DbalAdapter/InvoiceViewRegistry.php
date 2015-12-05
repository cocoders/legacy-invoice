<?php

namespace L3l0Labs\Adapters\DbalAdapter;

use Doctrine\DBAL\Connection;
use L3l0Labs\Accounting\Invoice;
use L3l0Labs\Accounting\Invoice\VatIdNumber;

class InvoiceViewRegistry implements \L3l0Labs\Accounting\InvoiceViewRegistry
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param $toVatNumber
     * @return Invoice\View[]
     */
    public function incoming(VatIdNumber $toVatNumber)
    {
        $invoicesResultStmt = $this
            ->connection
            ->prepare('SELECT invoice.*, item.*, invoice.total_price as invoice_total_price FROM invoices invoice LEFT JOIN invoice_items item ON invoice.id = item.invoice_id WHERE invoice.buyer_vat_number = :vat')
        ;
        $invoicesResultStmt->bindValue('vat', (string) $toVatNumber);
        $invoicesResultStmt->execute();
        $invoicesResults = $invoicesResultStmt->fetchAll();

        return $this->hydrateToInvoiceViews($invoicesResults);
    }

    /**
     * @param $fromVatNumber
     * @return Invoice\View[]
     */
    public function outgoing(VatIdNumber $fromVatNumber)
    {
        $invoicesResultStmt = $this
            ->connection
            ->prepare('SELECT invoice.*, item.*, invoice.total_price as invoice_total_price FROM invoices invoice LEFT JOIN invoice_items item ON invoice.id = item.invoice_id WHERE invoice.seller_vat_number = :vat')
        ;
        $invoicesResultStmt->bindValue('vat', (string) $fromVatNumber);
        $invoicesResultStmt->execute();
        $invoicesResults = $invoicesResultStmt->fetchAll();

        return $this->hydrateToInvoiceViews($invoicesResults);
    }

    /**
     * @param $invoicesResults
     * @return Invoice\View[]
     */
    private function hydrateToInvoiceViews($invoicesResults)
    {
        $invoiceViews = [];
        foreach ($invoicesResults as $invoiceResult) {
            if (!isset($invoiceViews[$invoiceResult['invoice_number']])) {
                $invoiceView = new Invoice\View;
                $invoiceView->number = $invoiceResult['invoice_number'];
                $invoiceView->sellerName = $invoiceResult['seller_name'];
                $invoiceView->sellerAddress = $invoiceResult['seller_address'];
                $invoiceView->sellerVatNumber = new VatIdNumber($invoiceResult['seller_vat_number']);
                $invoiceView->period = new Invoice\Period(
                    new \DateTimeImmutable($invoiceResult['date_of_invoice']),
                    new \DateTimeImmutable($invoiceResult['maturity_date'])
                );
                $invoiceView->sellDate = new \DateTimeImmutable($invoiceResult['sell_date']);
                $invoiceView->buyerName = $invoiceResult['buyer_name'];
                $invoiceView->buyerAddress = $invoiceResult['seller_address'];
                $invoiceView->buyerVatNumber = new VatIdNumber($invoiceResult['buyer_vat_number']);
                $invoiceView->additionalText = $invoiceResult['additional_info'];
                $invoiceView->totalPrice = $invoiceResult['invoice_total_price'];

                $invoiceViews[$invoiceResult['invoice_number']] = $invoiceView;
            }

            $invoiceViews[$invoiceResult['invoice_number']]->items[] = new Invoice\Item(
                $invoiceResult['name'],
                $invoiceResult['quantity'],
                $invoiceResult['net_price'],
                $invoiceResult['vat'],
                $invoiceResult['unit']
            );
        }

        return $invoiceViews;
    }
}


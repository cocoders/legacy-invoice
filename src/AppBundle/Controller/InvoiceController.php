<?php

namespace AppBundle\Controller;

use Doctrine\DBAL\Connection;
use L3l0Labs\Adapters\DbalAdapter\InvoiceViewRegistry;
use L3l0Labs\Adapters\MysqlAccountingAdapter\InvoiceRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InvoiceController extends Controller
{
    /**
     * @Route("/invoices/outgoing", name="outgoing_invoices")
     * @Route("/", name="homepage")
     */
    public function listOutgoingAction()
    {
        $invoices = $this->getInvoiceViewRepository()->outgoing(
            $this->getUser()->getVatIdNumber()
        );

        return $this->render('invoice/listOutgoing.html.twig', ['invoices' => $invoices]);
    }

    /**
     * @return InvoiceViewRegistry
     */
    private function getInvoiceViewRepository()
    {
        return $this->get('invoice_view.repository');
    }
}

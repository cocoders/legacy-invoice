<?php

namespace AppBundle\Controller;

use Doctrine\DBAL\Connection;
use L3l0Labs\Adapters\DbalAdapter\InvoiceViewRegistry;
use L3l0Labs\Adapters\MysqlAccountingAdapter\InvoiceRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class InvoiceController extends Controller
{
//    /**
//     * @Route("/", name="login")
//     */
//    public function indexAction() {
//        
//        return $this->render('invoice/login.html.twig');
//    }
    /**
     * @Route ("/", name="dashboard")
     */
    public function dashboardAction() {
        

        return $this->render('invoice/dashboard.html.twig');
    }
    
    /**
     * @Route("/invoices/outgoing", name="outgoing_invoices")
     */
    public function listOutgoingAction()
    {
        $invoices = $this->getInvoiceViewRepository()->outgoing(
            $this->getUser()->getVatIdNumber()
        );

        return $this->render('invoice/listOutgoing.html.twig', ['invoices' => $invoices]);
    }
    /**
     * @Route("/invoices/incoming", name="incoming_invoices")
     */    
    public function listIncomingAction() {
        
        $invoices = $this->getInvoiceViewRepository()->incoming(
            $this->getUser()->getVatIdNumber()
                
        );
        
        return $this->render('invoice/listIncoming.html.twig', ['invoices' => $invoices]);
    }
    
     /**
     * @Route ("/invoice/create", name="create_invoice")
     */
    public function createInvoiceAction() {
        
        return $this->render('invoice/createInvoice.html.twig');
    }

    /**
     * @return InvoiceViewRegistry
     */
    private function getInvoiceViewRepository()
    {
        return $this->get('invoice_view.repository');
    }
    
}

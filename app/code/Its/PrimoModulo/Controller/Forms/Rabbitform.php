<?php

namespace Its\PrimoModulo\Controller\Forms;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Its\PrimoModulo\Helper\Rabbithelper;
use Magento\Framework\App\Action\Context;
use Magento\Backend\Model\UrlInterface;

class Rabbitform extends Action
{

    protected $helper;
    protected $context;
    protected function __construct(Rabbithelper $helper, Context $context)
    {
        $this->helper = $helper;
        parent::__construct($context);
    }
    /**
     * Form action
     *
     * @return void
     */
    public function execute()
    {
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Retrieve your form data
            $fname   = $post['fname'];
            $lname    = $post['lname'];
            $email       = $post['email'];
            $message = $post['message'];

            // Doing-something with
            $dati = [$fname, $lname, $email, $message];
            //print_r($dati);
            $dataj = json_encode($dati, true);
            $this->helper->rabbit();

            //$this->curlClient->getDati($dataj);
            echo "curl ok";
            exit;
        }
        // 2. GET request : Render the form page
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}

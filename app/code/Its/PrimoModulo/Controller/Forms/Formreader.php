<?php

namespace Its\PrimoModulo\Controller\Forms;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;

class Formreader extends Action
{

    public function execute()
    {
        
        // $data = $this->getRequest()->getParams();
        // $fname = $this->getRequest()->getPostValue("fname");

        // Get post request data from the form
        $post = (array) $this->getRequest()->getPost();

        $fname = $post['fname'];
        $lname = $post['lname'];
        $email = $post['email'];
        $message = $post['message'];

        $formData = [$fname, $lname, $email, $message];
        $jsonData = json_encode($formData, true);

        
        // Call the function from Curl
        $this->index->send();

        
        // Render layout
        $this->_view->loadLayout();
        $this->_view->renderLayout();

        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        // /** @var Template $block */
        // $block = $page->getLayout()->getBlock('form-test');
        // // $block->setData('fname', $fname);
        // $block->setData('data', $data);
        
        return $page;
    }

}
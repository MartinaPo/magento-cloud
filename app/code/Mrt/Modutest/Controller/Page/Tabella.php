<?php

// WIP 

namespace Mrt\Modutest\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Tabella extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
        )
    
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        //return $this->resultPageFactory->create();
        echo 'madonna mia che casino Francesco mi strozza';
        exit;
    }

}
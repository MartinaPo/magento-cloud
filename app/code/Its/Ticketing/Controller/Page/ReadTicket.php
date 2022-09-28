<?php

namespace Its\Ticketing\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
// use Magento\Framework\App\Action\Context;
// use \Magento\Framework\View\Result\PageFactory;

class ReadTicket extends Action
{

    protected $resultPageFactory;

    // public function __construct(Context $context, PageFactory $resultPageFactory)
    // {
    //     parent::construct($context);
    //     $this->resultPageFactory = $resultPageFactory;
    // }
        
    public function execute()
    {
        $prova = 'prova';

        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        /** @var Template $block */
        $block = $page->getLayout()->getBlock('ticketid');
        $block->setData('message', $prova);
        
        // return $this->resultPageFactory->create();
        return $page;
    }
}
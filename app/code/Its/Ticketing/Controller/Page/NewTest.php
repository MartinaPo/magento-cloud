<?php

namespace Its\Ticketing\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class NewTest extends Action
{

    public function execute()
    {

        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        /** @var Template $block */
        $block = $page->getLayout()->getBlock('newtest');
        
        return $page;
    }

}
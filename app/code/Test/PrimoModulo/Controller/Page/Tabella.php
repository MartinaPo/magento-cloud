<?php

declare(strict_types=1);

namespace Test\PrimoModulo\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Result\Page;

class Tabella extends Action {
    public function execute() {
        /** @var Page $resultPage */

        // $tabella=$this->tableTicket();

        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        /** @var Template $block */

        $block = $resultPage->getLayout()->getBlock('test-tabella');
        $block->setData('my_key', "prova tabella");
        // $block->setData('my_key', $tabella);
        
        return $resultPage;

    }
}
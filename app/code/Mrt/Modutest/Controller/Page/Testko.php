<?php

namespace Mrt\Modutest\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
//use Magento\Framework\View\Element\Template;
//use Magento\Framework\View\Result\Page;


class Testko extends Action 
{
   public function execute()
   {
      /** @var Page $page */
      $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

      //$log = 'prova prova prova';
       
      /** @var Template $block */
      $block = $page->getLayout()->getBlock('provako');
      //block->setData($log);
      return $page;
   }
}
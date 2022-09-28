<?php

namespace Its\Ticketing\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class View extends Action
{

    public function execute()
    {
        $tickets = array(
            0 => array(
                'fName' => 'Marcello',
                'lName' => 'Macchia',
                'email' => 'macciocapa@tonda.it',
                'message' => 'test'
            ),
            1 => array(
                'fName' => 'David',
                'lName' => 'di Donatello',
                'email' => 'davidona@tello.it',
                'message' => ''
            ),
            2 => array(
                'fName' => 'Mark',
                'lName' => 'Caltagirone',
                'email' => 'pernacchia@girone.it',
                'message' => 'fregatura'
            )
        );

        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        /** @var Template $block */
        $block = $page->getLayout()->getBlock('ticketing');
        $block->setData('tickets', $tickets);
        
        return $page;
    }

}
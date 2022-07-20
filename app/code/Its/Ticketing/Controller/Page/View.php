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
                'fName' => 'Mario',
                'lName' => 'Rossi',
                'email' => 'mario@example.com',
                'message' => 'qui va il link'
            ),
            1 => array(
                'fName' => 'Davide',
                'lName' => 'Verdi',
                'email' => 'davide@example.com',
                'message' => 'qui va il link'
            ),
            2 => array(
                'fName' => 'Gianna',
                'lName' => 'Bianchi',
                'email' => 'gianna@example.com',
                'message' => 'qui va il link'
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
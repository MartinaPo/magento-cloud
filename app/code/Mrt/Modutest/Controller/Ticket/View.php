<?php

namespace Mrt\Modutest\Controller\Ticket;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class View extends Action
{

    public function execute()
    {
        echo 'eco per vedere se la pagina funziona';
        exit;

        $dati = array(
            0 => array(
                'nome' => 'Paolo',
                'cognome' => 'Paoletti',
                'email' => 'coso@test.com',
                'link' => 'link del ticket'
            ),
            1 => array(
                'nome' => 'Giada',
                'cognome' => 'Giadosa',
                'email' => 'ehgia@da.net',
                'link' => 'link del ticket'
            ),
            2 => array(
                'nome' => 'Richard',
                'cognome' => 'De Pennutis',
                'email' => 'riccardo@volatili.it',
                'link' => 'link del ticket'
            )
        );

        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        /** @var Template $block */
        $block = $page->getLayout()->getBlock('bloccodati');
        $block->setData('dati', $tickets);
        
        return $page;
    }

}
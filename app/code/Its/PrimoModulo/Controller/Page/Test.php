<?php

namespace Its\PrimoModulo\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use \Magento\Framework\View\Result\PageFactory;

class Test extends Action
{

    public function execute()
    {
        $prova = 'prova1';

        $names = array(
            "utente1" => array(
                "nome" => "Mario",
                "cognome" => "Rossi"
            ),
            "utente2" => array(
                "nome" => "Piero",
                "cognome" => "Bianchi"
            ),
            "utente3" => array(
                "nome" => "Gaspare",
                "cognome" => "Verdi"
            )
        );
        $names2 = json_encode($names);
        // $names3 = json_decode($names2, true);
        // echo $names3["utente1"]["nome"] . "<br />";
        // print_r($names3);
        // exit;

        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        // /** @var Template $block */
        // $block = $page->getLayout()->getBlock('its');
        // $block->setData('names', $names2);
        
        return $page;
    }

}
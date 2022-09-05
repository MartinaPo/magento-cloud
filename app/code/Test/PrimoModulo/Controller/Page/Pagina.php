<?php

declare(strict_types=1);

namespace Test\PrimoModulo\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\PageFactory;

class Pagina extends Action {
    public function execute() {
        /** @var Json $jsonResult */

        $jsonResult = $this->resultFactory->create(PageFactory::TYPE_PAGE);
        
        if($this->checkCliente()) {
            
            $jsonResult->setData([
                'cliente' => 'si'
            ]);
        } else {
            $jsonResult->setData([
                'cliente' => 'no'
            ]);
        }
        return $jsonResult;
    }
    
    public function checkCliente() {
        $cliente = [ 'nome'=> "Mario"];
        $clienti = [ 'nome'=> ["Mario", "Dario", "Laura", "Paola"]];
        
        foreach($clienti as $value) {
            foreach($value as $valore) {
                if(strcmp($cliente['nome'], $valore) === 0 ) {
                    return 1;
                }
            }
        }

        // if (in_array("Mario", $clienti['nome'])) {
        //     echo "il cliente è nella lista";
        // } else {
        //     echo "il cliente non è nella lista";
        // }
    }
}
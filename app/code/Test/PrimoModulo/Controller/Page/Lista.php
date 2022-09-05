<?php

declare(strict_types=1);

namespace Test\PrimoModulo\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Lista extends Action {

    public function execute() {
        /** @var Json $jsonResult */

        $jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        
        if($this->checkCliente()) {
            
            $jsonResult->setData([
                'cliente' => 'è nella lista'
            ]);
        } else {
            $jsonResult->setData([
                'cliente' => 'non è nella lista'
            ]);
        }
        return $jsonResult;
    }
    
    public function checkCliente() {
        $cliente = [ 'nome'=> "Luigi"];
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
<?php

declare(strict_types=1);
namespace Mrt\Modutest\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Returntestpage extends Action 
{
   public function execute()
   {
      /** @var Json $jsonResult */

      $jsonResult = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
      if($this->checkclient()) {
         $jsonResult->setData([
            'cliente' => 'cliente esiste'
         ]);
      } else {
         $jsonResult->setData([
            'cliente' => 'cliente NON esiste'
         ]);
      }
      return $jsonResult;
   }

   public function checkclient() {
      $cliente = ['nome'=> 'Martina'];
      $clienti = ['nome'=> ['Martina', 'Gino', 'Peppetto', 'Martella', 'Annetta']];

      foreach($clienti as $value) {
         foreach ($value as $valore){
            if(strcmp($cliente['nome'], $valore) === 0) {
               return 1;
               }
            }
         }
      }
   }
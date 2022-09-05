<?php

declare(strict_types=1);
namespace Mrt\Modutest\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class ReturnTest extends Action 
{
   public function execute()
   {
      /** @var Json $jsonResult */
      /* ^ NON è UN COMMENTO! */


        /* $jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $jsonResult->setData([
            'test' => 'AIUTO'
         ]);
        return $jsonResult;     */
      
      /*echo $this->checkclient();*/


      $jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
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
         /*return "Non c'è"; <---- non serve*/
      }
            
      /*if (in_array("Martina", $clienti['nome']))
      {
         echo "Martina c'è";
      }
      else {
         echo "Martina non c'è";
      }*/
   }
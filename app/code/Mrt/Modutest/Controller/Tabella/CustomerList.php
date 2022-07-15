<?php

declare(strict_types=1);
namespace Mrt\Modutest\Controller\Tabella;

use Magento\Framework\App\Action\Action;

class CustomerList extends Action 
{
   public function execute()
   {
        //echo 'magari qui ci mettiamo na tabella dai; il link funzia!';
        //exit;
   }

public function customerlist() {
   /* prima creiamo la nostra finta lista di clienti; se si usasse un database si 
   dovrebbero richiamare con una chiamata in mysql*/
   $id = ['id' => ['1', '2', '3', '4', '5']];
   $nome = ['nome'=> ['Martina', 'Rosella', 'Stefano', 'Giancarlo', 'Vanda']];
   $cognome = ['cognome' => ['Pola', 'Sabbatini', 'Di Pisa', 'Vinci', 'Virgili']];
   $email = ['email' => ['mar@tina.po', 'ros@sella.sab', 'none', '0', 'van@da.vir']];


      print $nome;
   /*if (in_array("Martina", $clienti['nome']))
   {
      echo "Martina c'è";
   }
   else {
      echo "Martina non c'è";
   }*/
}
}
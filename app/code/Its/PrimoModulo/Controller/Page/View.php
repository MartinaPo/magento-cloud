<?php

declare(strict_types=1);
namespace Mrt\Modutest\Controller\Page;

use Magento\Framework\App\Action\Action;

class View extends Action 
{
   public function execute()
   {
        echo 'Primo echo!';
        exit;
   }
}
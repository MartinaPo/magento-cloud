<?php

declare(strict_types=1);

namespace Test\PrimoModulo\Controller\Page;

use Magento\Framework\App\Action\Action;

class Prova extends Action {
    public function execute() {
        echo "1 2 3 prova";
        exit;
    }
}
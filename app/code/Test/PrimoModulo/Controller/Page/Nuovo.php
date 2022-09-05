<?php

declare(strict_types=1);

namespace Test\PrimoModulo\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Result\Page;

class Nuovo extends Action {

    public function execute() {
        // echo "test knockout 2";
        // exit;

        /** @var Page $resultPage */

        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}

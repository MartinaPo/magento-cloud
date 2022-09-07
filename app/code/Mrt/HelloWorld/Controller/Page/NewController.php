<?php

namespace Mrt\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Gemma\Database\Model\PostFactory;


class Index extends Action
{
    protected $_resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
		PostFactory $postFactory

    ) {
        $this->_resultPageFactory = $resultPageFactory;
		$this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function execute()
    {
		$post = $this->_postFactory->create();
		$post->setData('nome',"a");
		$post->save();
        return $this->_resultPageFactory->create();
    }
}
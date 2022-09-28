<?php

// fixare il blablablafactory!

namespace Nmdl\Ticketing\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Nmdl\Ticketing\Model\PostFactory;

class Test extends Action
{
    protected $_ticketFactory;

    public function __construct(
		Context $context,
		PostFactory $_ticketFactory
		)
	{
		parent::__construct($context);
		$this->_ticketFactory = $_ticketFactory;
	}

    public function execute()
    {
        
        $ticket = $this->_ticketFactory->create();
        $update = $ticket->load('2');
		$update->setData('firstName', 'Nuovo6');
		$update->save();

        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        /** @var Template $block */
        $block = $page->getLayout()->getBlock('ticket_test1');
        $block->setData('test', $update);
        
        return $page;

    }

}
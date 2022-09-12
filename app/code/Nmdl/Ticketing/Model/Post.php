<?php

namespace Nmdl\Ticketing\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'nmdl_ticketing_index';

	protected $_cacheTag = 'nmdl_ticketing_index';

	protected $_eventPrefix = 'nmdl_ticketing_index';

	protected function _construct()
	{
		$this->_init('Nmdl\Ticketing\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}

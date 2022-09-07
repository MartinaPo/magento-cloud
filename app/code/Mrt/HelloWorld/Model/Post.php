<?php

namespace Gemma\Database\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'gemma_database_new';

	protected $_cacheTag = 'gemma_database_new';

	protected $_eventPrefix = 'gemma_database_new';

	protected function _construct()
	{
		$this->_init('Gemma\Database\Model\ResourceModel\Post');
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


<?php

namespace Nmdl\Ticketing\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_postFactory;

	public function __construct(\Nmdl\Ticketing\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
			'name'         => "Inseriamo sti dati",
			'post_content' => "proviamo ad aggiungere dati",
			'url_key'      => 'http://178.79.141.132/',
			'tags'         => 'installData',
			'status'       => 1
		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}
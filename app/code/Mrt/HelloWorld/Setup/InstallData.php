<?php

namespace Mrt\HelloWorld\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_postFactory;

	public function __construct(\Mrt\HelloWorld\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
				'name'         => "Inserimento Dati",
				'url_key'      => 'http://178.79.141.132/',
				'post_content' => "test aggiunta dati",
				'tags'         => 'installData',
				'status'       => 1,
            	'test'         => ''
		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}
<?php

namespace Nmdl\Ticketing\Controller\Index\Form;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
//use Nmdl\Ticketing\Model\ResourceModel\Post;
use Nmdl\Ticketing\Model\PostFactory;

//use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\Framework\App\Action\Context;

class Form extends Action
{
//protected $helper;
//protected $context;
protected $po;
protected function __construct(Context $context, PostFactory $po)
{
// $this->helper = $post;
// $this->dbc = $dbc;
$this->po=$po;
//$this->context=$context;
parent::__construct($context);
}
/**
* Form action
*
* @return void
*/
public function execute()
{
// 1. POST request : Get booking data
$post = (array) $this->getRequest()->getPost();

if (!empty($post)) {
// Retrieve your form data
$name = $post['name'];
$pc=$post['post_content'];

// Doing-something with
//$dati = [$name];
//print_r($dati);

//$dataj = json_encode($dati, true);
// echo $dataj;
//var_dump($dataj);
//exit;

// $p1=$this->helper->super();
//$p1=new miopo();
//$p1=new Post();
$p=$this->po->create();
$p->setName($name);
$p->setPostContent($pc);
$p->save();


/*
//ok, ma evitare di usarlo
$p1 = $this->_objectManager->create('Nmdl\Ticketing\Model\Post');
$p1->setName($name);
$p1->save(); */

// Display the succes form validation message
$this->messageManager->addSuccessMessage('Dati salvati!');

// Redirect to your form page (or anywhere you want...)

$resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
$resultRedirect->setUrl('/ciao/index/display');

return $resultRedirect;
//exit;
}
// 2. GET request : Render the form page
$this->_view->loadLayout();
$this->_view->renderLayout();
}
}
<?php
declare(strict_types = 1);

namespace Its\PrimoModulo\Helper;

// use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Connection\AbstractConnection;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\Controller\Result\JsonFactory;


class Rabbithelper extends AbstractHelper
{

    /**
    * Scope Config
    *
    * @var \Magento\Framework\App\Config\ScopeConfigInterface
    */
    protected $scopeConfig;
    
    /**
    * Json Helper
    *
    * @var \Magento\Framework\Serialize\Serializer\Json
    */
    protected $jsonHelper;

    public function __construct(
    \Magento\Framework\View\Result\PageFactory $resultPageFactory,
    \Magento\Framework\HTTP\Client\Curl $curl,
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
    \Magento\Framework\Serialize\Serializer\Json $jsonHelper,
    AbstractConnection $AMQPConnection
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->_curl = $curl;
        $this->jsonHelper = $jsonHelper;
        $this->scopeConfig = $scopeConfig;
        $this->AMQPAbstractConnection = $AMQPAbstractConnection;
        // $this->AMQPMessage = $AMQPMessage;
    }

    /**
    * Confirm Order by API request
    *
    * @param string $incrementId
    * @param integer $orderId
    * @param integer $cartId
    * @param string $company
    * @param string $rifOrderClient
    * @param string $deliveryDate
    * @param boolean $alignPromisedDeliveryDate
    * @param boolean $telephoneBooking
    *
    * @return boolean|mixed
    * @throws \Exception
    */
    
    public function rabbit()
    {

        $hostdef=[];
        $hostdef['host']='localhost';
        $hostdef['port']=5672;
        $hostdef['user']='username';
        $hostdef['password']='password';
        $hostdef['vhost']='my_vhost';
        
        // print_R($hostdef);
        $connection= $this->amqpConnection->create_connection($hostdef);

        //echo "stampa connessione";

        // $msg = $this->AMQPMessage->setBody('Hello World!');
        // $channel->basic_publish($msg, '', 'hello');

        $channel = $connection->channel();

        $channel->queue_declare('hello', false, false, false, false);

        // $msg = new AMQPMessage('Hello World!');
        // $channel->basic_publish($msg, '', 'hello');

        echo " [x] Sent 'Hello World!'\n";
        exit;

        $channel->close();
        $connection->close();
    }

}
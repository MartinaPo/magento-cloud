<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Its\PrimoModulo\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;

class View extends Action
{
	/**
	 * @var JsonFactory
	 */
	protected $resultJsonFactory;

	/**
	 * @param Context $context
	 * @param JsonFactory $resultJsonFactory
	 */
	public function __construct(
		Context $context,
		JsonFactory $resultJsonFactory
	) {
		parent::__construct($context);
		$this->resultJsonFactory = $resultJsonFactory;
	}

	/**
	 * View  page action
	 *
	 * @return ResultInterface
	 */
	public function execute()
	{
		//echo "CIAO!";
		$customers = [
			['Martina', 'Paolina'],
			['Laura', 'Rossi'],
			['Gaspare', 'Verdi']
		];
		/**
		 * prende il parametro nome (se esiste) e lo assegna a $name
		 * dopo averlo trasformato in minuscolo.
		 */
		$name = strtolower($_GET["name"]??"");
		$answer = "Digitare il nome di un cliente: 178.79.141.132/routing/page/view?name=<nome>";

		/**
		 * loop per controllare se il cliente è nel nostro array.
		 * Verifichiamo prima che $name non sia vuota.
		 */
		if (!empty($name)) {
			$answer = "Cliente non trovato";
			for ($i = 0; $i < count($customers); $i++) {
				$customer = strtolower($customers[$i][0]);
				if ($name == $customer) {
					$answer = "Cliente {$name} trovato.";
					break;
				}
			}
		}

		$jsonResult = $this->resultJsonFactory->create();
		$jsonResult->setData([
			'message' => $answer
		]);
		return $jsonResult;
	}



	// $jsonResult = $this->resultJsonFactory->create();
	// $jsonResult->setData([
	// 	'message' => $this->checkCliente()
	// ]);
	// return $jsonResult;
}
	// Martina c'è o non c'è?

	// public function checkCliente()
	// {
	// 	$cliente = ['nome' => 'Martina'];
	// 	$clienti = ['nome' => ['Martina', 'Gino', 'Mario', 'Nicolas']];
	// 	// foreach ($clienti as $value) {
	// 	// 	foreach ($value as $val) {
	// 	// 		echo strcmp($cliente['nome'], $val);
	// 	// 	}
	// 	// }
	// 	if (in_array($cliente['nome'],$clienti['nome'])){
	// 		return "Martina c'è";
	// 	} else {
	// 		return "Martina non c'è";
	// 	}
	// }
	//}

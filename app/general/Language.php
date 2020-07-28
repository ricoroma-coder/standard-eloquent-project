<?php

namespace App\General;

use App\General\ModelObject;

class Language extends ModelObject {

	protected $current = 'pt-br';
	protected $messages;

	public function __construct() {
		$this->setMessages();
	}

	public function setMessages() {
		$messages = [
			'pt-br' => [
				'success' => 'Sucesso',
				'error' => 'Ocorreu um erro',
				'not-found' => 'Não foi possível encontrar',
				'authenticaded' => 'Autenticado'
			],
			'en' => [
				'success' => 'Success',
				'error' => 'Error',
				'not-found' => 'Not Found',
				'authenticaded' => 'Authenticaded'
			]
		];
		$this->messages = $messages[$this->current];
	}

}
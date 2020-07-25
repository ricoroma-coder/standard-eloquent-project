<?php

namespace Models\General;

use Models\General\Model;

class Language extends Model {

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
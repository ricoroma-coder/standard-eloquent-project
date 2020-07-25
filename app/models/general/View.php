<?php 

namespace Models\General;

use Models\General\Route;
use Models\General\Language;

class View extends Route {

	protected $content = [];

	public function __construct($content = []) {
		parent::__construct();
		foreach ($content as $key => $value) {
			$this->content[$key] = $value;
		}
		$language = new Language();
		$this->content['messages'] = $language->get('messages');
	}

}
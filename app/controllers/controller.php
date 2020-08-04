<?php 

namespace App\Controllers;

use App\General\Route;
use App\General\Request;

class Controller {

	public function view($view, $data = []) {
    	require __DIR__.'/../../resources/views/' . $view . '.php';
  	}

  	public function setViewData($data = []) {
  		if (!isset($_SESSION))
  			session_start();
		$_SESSION['data'] = $data;
  	}

  	public function redirect($uri, $data = [], $files = []) {
  		$this->setViewData($data);
  		return header('Location: '.$uri);
  	}

}
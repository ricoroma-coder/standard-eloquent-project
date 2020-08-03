<?php 

namespace App\Controllers;

use App\General\Route;
use App\General\Request;

class Controller {

	public function view($view, $data = [])
  	{
    	require __DIR__.'/../../resources/views/' . $view . '.php';
  	}

}
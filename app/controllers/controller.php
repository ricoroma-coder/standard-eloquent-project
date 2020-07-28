<?php 

namespace App\Controllers;

class Controller {

	public function view(string $view, $data = [])
  	{
    	require __DIR__.'/../../resources/views/' . $view . '.php';
    	
  	}

}
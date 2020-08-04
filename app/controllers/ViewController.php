<?php 

namespace App\Controllers; 

use App\Controllers\Controller;

class ViewController extends Controller {
 
    public function index() {
       	$this->view('index');
    }

}
<?php 

namespace App\Controllers;

use App\Controllers\Controller;

class ViewController extends Controller {
 
    public function index() {
       	$this->view('index');
    }

 	public function login() {
        $this->view('auth/login');
 	}

 	public function forgotPassword() {
        $this->view('auth/forgot-password');
 	}

 	public function register() {
        $this->view('auth/register');
 	}

}
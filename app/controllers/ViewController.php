<?php 

namespace App\Controllers; 

use App\Controllers\Controller;
use App\General\Request;
use App\General\View;
use App\User;

class ViewController extends Controller {
 
    public function index() {
       	$this->view('index');
    }

 	public function login() {
 		if (hasSession())
 			return $this->redirect('/');
        $this->view('auth/login');
 	}

 	public function forgotPassword() {
        $this->view('auth/forgot-password');
 	}

 	public function register() {
 		if (hasSession())
 			return $this->redirect('/');
        $this->view('auth/register');
 	}

 	public function auth($request) {
 		$user = new User();
 		$user = $user->checkAuthenticable($request['method']);
 		$redirect = '/';
 		$content = [];
 		if ($user) {
 			$content = [
 				'object' => $user,
 				'messages' => [
 					'validate' => 'Logado com sucesso'
 				]
 			];
 			$user->session();
 		}
 		else {
 			$content = [
 				'messages' => [
 					'validate' => 'Os campos não batem'
 				]
 			];
 			$redirect = '/login';
 		}
 		return $this->redirect($redirect, $content);
 	}

 	public function logOut() {
 		session_destroy();
 		return $this->redirect('/');
	}
	 
	public function signin() {
		$user = new User();
		$post = $_POST;

		foreach($post as $key => $value) {
			$user->$key = $value;
		}

		$rules = [
			'name' => 'require',
			'username' => 'require|unique:users',
			'password' => 'require|min:8|max:16',
			'email' => 'require|email|unique:users'
		];
		$validate = $user->validate($rules);

		var_dump($validate);
	}

	public function testando($data) {
	// array_values($params)
		var_dump($data);
	}


}
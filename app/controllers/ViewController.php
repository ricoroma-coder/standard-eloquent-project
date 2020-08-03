<?php 

namespace App\Controllers; 

use App\Controllers\Controller;
use App\General\Request;
use App\User;

class ViewController extends Controller {
 
    public function index() {
    	redirect('/login');
    	// $_SERVER['REQUEST_URI'] = '/qualquer-lugar';
       	// $this->view('index');
    }

 	public function login() {
 		if (isset($_SESSION['user']) && !empty($_SESSION['user']))
 			return header('Location: /');
        $this->view('auth/login');
 	}

 	public function forgotPassword() {
        $this->view('auth/forgot-password');
 	}

 	public function register() {
        $this->view('auth/register');
 	}

 	public function auth() {
 		$post = $_POST;
 		$user = new User();
 		$user = $user->checkAuthenticable($post);
 		if ($user) {
 			$content = [
 				'object' => $user,
 				'messages' => [
 					'validate' => 'Logado com sucesso'
 				]
 			];
 			$user->session();
 			return header('Location: /');
 		}
 		else {
 			$content = [
 				'messages' => [
 					'validate' => 'Os campos não batem'
 				]
 			];
 			return header('Location: /login');
 		}
 	}

 	public function logOut() {
 		session_destroy();
 		return header('Location: /');
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
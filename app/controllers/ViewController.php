<?php 

namespace App\Controllers; 

use App\Controllers\Controller;
use App\General\Request;
use App\User;

class ViewController extends Controller {
 
    public function index($data = []) {
    	redirect('/login', ['um'=>1,'dois'=>2]);
       	// $this->view('index', $data);
    }

 	public function login($data = []) {
 		var_dump($data);
 		// if (isset($_SESSION['obj']) && !empty($_SESSION['obj']))
 		// 	return redirect('/', ['object'=>User::find($_SESSION['obj'])]);
   //      $this->view('auth/login');
 	}

 	public function forgotPassword() {
        $this->view('auth/forgot-password');
 	}

 	public function register() {
 		if (isset($_SESSION['obj']) && !empty($_SESSION['obj']))
 			return redirect('/', ['object'=>User::find($_SESSION['obj'])]);
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
 			return redirect('/', [$user]);
 		}
 		else {
 			$content = [
 				'messages' => [
 					'validate' => 'Os campos não batem'
 				]
 			];
 			return redirect('/login', $content);
 		}
 	}

 	public function logOut() {
 		session_destroy();
 		return redirect('/');
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
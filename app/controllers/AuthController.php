<?php 

namespace App\Controllers;

use App\Controllers\Controller;
use App\User;

class AuthController extends Controller {

	public function login() {
 		if (hasSession())
 			return redirect('/');
        $this->view('auth/login');
 	}

 	public function forgotPassword() {
        $this->view('auth/forgot-password');
 	}

 	public function register() {
 		if (hasSession())
 			return redirect('/');
        $this->view('auth/register');
 	}

 	public function auth($request) {
 		$user = new User();
 		$user = $user->checkAuthenticable($request['method']);
 		$redirect = '/';
 		$content = [];
 		if ($user) {
 			$content = [
 				'messages' => [
 					'success' => ['Conectado com sucesso']
 				]
 			];
 			$user->session();
 		}
 		else {
 			$content = [
 				'messages' => [
 					'error' => ['Os campos não batem']
 				]
 			];
 			$redirect = '/login';
 		}
 		return redirect($redirect, $content);
 	}

 	public function logOut() {
 		unset($_SESSION['obj']);
 		$content = [
			'messages' => [
				'success' => ['Desconectado com sucesso']
			]
		];
 		return redirect('/', $content);
	}
	 
	public function signin($request) {
		$user = new User();

		foreach($request['method'] as $key => $value) {
			$user->$key = $value;
		}

		$rules = [
			'name' => 'require',
			'username' => 'require|unique:users',
			'password' => 'require|min:4|max:16',
			'email' => 'require|email|unique:users'
		];
		$validate['messages'] = $user->validate($rules);

		if (!empty($validate['messages']))
			return redirect('/cadastrar', $validate);
		$user->password = password_hash($user->password, PASSWORD_BCRYPT);
		if ($user->save()) {
			$validate['messages'] = ['success' => ['Cadastrado com sucesso']];
			return redirect('/', $validate);
		}
		else {
			$validate['messages'] = ['error' => ['conn' => 'Houve um erro de conexão']];
			return redirect('/cadastrar', $validate);
		}
		
	}

}
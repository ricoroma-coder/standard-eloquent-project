<?php 

namespace App\Controllers; 

use App\Controllers\Controller;
use App\User;

class ViewController extends Controller {
 
    public function index() {
       	$this->view('index');
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

}
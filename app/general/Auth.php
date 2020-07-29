<?php 

namespace App\General;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model {

	public function checkAuthenticable($data) {
		$user = $this::where('username', $data['username'])->first();

		if (isset($user) && !empty($user)) {
 			if (password_verify($data['password'], $user->password)) {
 				return $user;
 			}
 			else {
 				return false;
 			}
 		}
 		else
 			return false;
	}

	public function session() {
		if (isset($_SESSION))
			session_destroy();
		session_start();
		$_SESSION['user'] = $this->id;
	}

}
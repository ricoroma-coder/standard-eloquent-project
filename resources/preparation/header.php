<?php

use App\User;

$obj = false;
$session = false;

if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {

	$obj = User::find($_SESSION['user']);
	$session = true;

}



?>
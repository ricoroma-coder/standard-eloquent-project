<?php

use App\User;

$obj = false;
$session = false;

if (hasSession()) {

	$obj = User::find(getSessionValue('obj'));
	$session = true;

}

if (isset($_SESSION['data']) && empty($data)) {

	$data = $_SESSION['data'];
	unset($_SESSION['data']);

}

$messages = isset($data['messages']) ? $data['messages'] : [];

?>
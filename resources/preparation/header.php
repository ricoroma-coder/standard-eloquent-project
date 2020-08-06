<?php

use App\User;

$obj = false;
$session = false;

if (hasSession()) {

	$obj = User::find(getSessionValue('obj'));
	$session = true;

}

$messages = [];
if (isset($data['messages']))
	$messages = $data['messages'];

?>
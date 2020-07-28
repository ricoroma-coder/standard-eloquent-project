<?php

use App\General\Route as Route;
use App\Controllers\Controller;

Route::get('/', function () {
	$c = new Controller();
	return $c->view('index');
});


// auth
Route::get('/login', 'ViewController@login');
Route::get('/recuperar-senha', 'ViewController@forgotPassword');
Route::get('/cadastrar', 'ViewController@register');
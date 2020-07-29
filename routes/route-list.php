<?php

use App\General\Route as Route;
use App\Controllers\Controller;

Route::get('/', function () {
	$c = new Controller();
	return $c->view('index');
});


// auth
Route::get('/login', 'ViewController@login');
Route::post('/login/auth', 'ViewController@auth');
Route::get('/logout', 'ViewController@logOut');
Route::get('/recuperar-senha', 'ViewController@forgotPassword');
Route::get('/cadastrar', 'ViewController@register');
Route::post('/cadastrar/auth', 'ViewController@signin');

Route::get('/teste', function () {
	$c = new Controller();
	return $c->view('teste');
});
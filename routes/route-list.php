<?php

use App\General\Route as Route;
use App\Controllers\Controller;

Route::get('/', 'ViewController@index');

// auth
Route::get('/login', 'AuthController@login');
Route::post('/login/auth', 'AuthController@auth');
Route::get('/logout', 'AuthController@logOut');
Route::get('/recuperar-senha', 'AuthController@forgotPassword');
Route::get('/cadastrar', 'AuthController@register');
Route::post('/cadastrar/auth', 'AuthController@signin');

Route::get('/teste', function () {
	$c = new Controller();
	return $c->view('teste');
});
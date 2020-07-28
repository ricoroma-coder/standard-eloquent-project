<?php

use App\General\Route as Route;

Route::get('/', 'ViewController@index');

Route::get('/login', 'ViewController@login');
Route::get('/recuperar-senha', 'ViewController@forgotPassword');
Route::get('/cadastrar', 'ViewController@register');
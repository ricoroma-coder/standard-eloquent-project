<?php

use App\General\Route;
use App\General\Request;
 
function request() {
    return new Request;
}
 
 
function resolve($base = '', $data = [], $files = []) {
    $request = new Request($base, $data, $files);
    return Route::resolve($request);
}

function redirect($base, $data = [], $files = []) {
    if (!isset($_SESSION))
        session_start();
    $_SESSION['redirect'] = [
        'base' => $base,
        'data' => $data,
        'files' => $files
    ];
    return header('Location: '.$base);
}

function redirectHasData() {
    return isset($_SESSION['redirect']);
}

function redirectGetData() {
    $aux = $_SESSION['redirect'];
    unset($_SESSION['redirect']);
    return $aux;
}
 
 
function route($name, $params = null) {
    return Route::translate($name, $params);
}
 
function back()
{
    return header('Location: ' . $_SERVER['HTTP_REFERER']);
}

function asset($path) {
    $url = toAbsolute('../../public/'.$path,__FILE__);
    if (strpos($url, '/') !== 0)
        $url = $path;
	return $url;
}

function toAbsolute($relative_url, $path){
    $r = str_replace("\\","/",$relative_url);
    $r = dirname($path,substr_count($r,"../")+1)."/".$r;
    $r = str_replace("\\","/",$r);
    $r = str_replace("../","",$r);
    $r = str_replace($_SERVER["DOCUMENT_ROOT"],"",$r);
    return $r;
}

function toRoot($relative_url, $path){
    return $_SERVER['DOCUMENT_ROOT'].toAbsolute($relative_url, $path);
}

function routeIs($path) {
    $req = new Request();
    return $req->base() === $path;
}

function component($path, $data = []) {
    require __DIR__.'/../../resources/'.$path.'.php';
}

function hasSession() {
    return isset($_SESSION['obj']) && !empty($_SESSION['obj']);
}

function getSessionValue($key) {
    return $_SESSION[$key];
}

?>
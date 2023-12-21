<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return '<h1>Home</h1>';
});

Route::get('/cochoa', function () {
	return '<h1>Cochoa</h1>';
});

Route::get('/usuarios', function () {
	return '<h1>Usuarios</h1>';
});

Route::get('/usuarios/{id}', function ($id) {
	return "<h1>Mostrando detalle del usuario: {$id}</h1>";
})->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', function () {
	return '<h1>Crear nuevo usuario</h1>';
});

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
	$name = ucfirst($name);

	if ($nickname) {
		return "<h1>Bienvenido {$name}, tu apodo es {$nickname}</h1>";
	}else{
		return "<h1>Bienvenido {$name}<h1>";
	}
});

Route::get('/algoritmos-tema-1', 'App\Http\Controllers\algorithmsController@index');

Route::get('/number-of-words', 'App\Http\Controllers\wordsController@index');

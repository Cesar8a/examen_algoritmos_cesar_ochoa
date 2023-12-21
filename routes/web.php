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

Route::get('/usuarios', 'App\Http\Controllers\UsersController@index');
Route::get('/usuarios/{id}', 'App\Http\Controllers\UsersController@show')->where('id', '[0-9]+');
Route::get('/usuarios/nuevo', 'App\Http\Controllers\UsersController@create');

Route::get('/saludo/{name}/{nickname?}', 'App\Http\Controllers\WelcomeUsersController');

Route::get('/algoritmos-tema-1', 'App\Http\Controllers\algorithmsController@index');

Route::get('/number-of-words', 'App\Http\Controllers\wordsController@index');

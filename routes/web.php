<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'WelcomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('eventos','EventoController');

Route::resource('usuarios', 'UserController');

Route::resource('empresas', 'EmpresaController');


Route::post('/register2', 'UserController@pruebar')->name('guardaruser');
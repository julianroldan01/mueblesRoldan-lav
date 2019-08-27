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
    return view('usuario.welcome');
});

Route::get('/usuario', function () {
    return view('usuario.create');
});

Route::get('/usuario', function () {
    return view('usuario.formulario');
});
*/
/*Route::post('/eje1', function () {
    return view('usuario.ejercicio1');
});

Route::get('/eje2', function () {
    return view('usuario.ejercicio2');
});

Route::get('/eje3', function () {
    return view('usuario.ejercicio3');
});

Route::resource('usuario', 'UsuarioController');
*/
Route::get('/', function () {
    return view('usuario.welcome');
});
Route::view('/inicio', 'usuario.inicio');
Route::view('/registro', 'usuario.register');
Route::view('/venta', 'usuario.venta');
Route::view('/navegador', 'usuario.navegador');
Route::view('/compra', 'usuario.compra');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

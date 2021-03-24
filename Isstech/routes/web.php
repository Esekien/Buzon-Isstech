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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
    //return view('welcome');
});

Route::get('/derechohabiente', function () {
    return 'hola';
    //return view('welcome');
});

Route::get('/contacto', 'ContactoController@contacto');

Route::get('/contacto/derechohabiente', 'ContactoController@formContacto')->name('contacto.derechohabiente');

Route::get('/contacto/noderechohabiente', 'ContactoController@formContacto')->name('contacto.noderechohabiente');

Route::get('/contacto/anonimo', 'ContactoController@formContacto')->name('contacto.anonimo');


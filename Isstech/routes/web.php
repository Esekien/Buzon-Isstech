<?php

use App\Mail\EnvioCorreo;
use Illuminate\Support\Facades\Mail;

/*RUTAS GET*/
Auth::routes();




/*RUTAS DEL DEL LADO DEL USUARIO*/
Route::get('/', 'ContactoController@contacto');

Route::get('/contacto/derechohabiente', 'ContactoController@formContacto')->name('contacto.derechohabiente');

Route::get('/contacto/noderechohabiente', 'ContactoController@formContacto')->name('contacto.noderechohabiente');

Route::get('/contacto/anonimo', 'ContactoController@formContacto')->name('contacto.anonimo');



/*RUTAS DEL ADM*/
Route::get('/Buzon-Isstech/grafica', 'AdminBuzon@grafica')->name('Buzon-Isstech.grafica');

Route::get('/Buzon-Isstech', 'AdminBuzon@index')->name('Buzon-Isstech');

Route::get('/Buzon-Isstech/anonimo', 'AdminBuzon@anonimo')->name('Buzon-Isstech.anonimo');


Route::get('/Buzon-Isstech/no-derechohabiente', 'AdminBuzon@noDerechohabiente')->name('Buzon-Isstech.ndh');

Route::get('/Buzon-Isstech/derechohabiente', 'AdminBuzon@derechohabiente')->name('Buzon-Isstech.dh');



Route::get('/Buzon-Isstech/{id}', 'AdminBuzon@visualizar')->name('Buzon-Isstech.visualizar');



Route::get('/Buzon-Isstech/PDF/{id}', 'AdminBuzon@pdf')->name('Buzon-Isstech.pdf');




Route::post('/Buzon-Isstech/correo', 'AdminBuzon@msgCorreo')->name('Buzon-Isstech.msgCorreo');
/*RUTAS POST */




Route::post('/derechohabiente','ContactoController@sendFormDH')->name('sendformDH');

Route::post('/noderechohabiente','ContactoController@sendFormNoDH')->name('sendformNoDH');

Route::post('/anonimo','ContactoController@sendFormAN')->name('sendformAN');




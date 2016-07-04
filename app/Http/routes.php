<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//controlpago_cliente Resources
/********************* controlpago_cliente ***********************************************/
Route::resource('controlpago_cliente','\App\Http\Controllers\Controlpago_clienteController');
Route::post('controlpago_cliente/{id}/update','\App\Http\Controllers\Controlpago_clienteController@update');
Route::get('controlpago_cliente/{id}/delete','\App\Http\Controllers\Controlpago_clienteController@destroy');
Route::get('controlpago_cliente/{id}/deleteMsg','\App\Http\Controllers\Controlpago_clienteController@DeleteMsg');
/********************* controlpago_cliente ***********************************************/


//cotizaciones_transportista Resources
/********************* cotizaciones_transportista ***********************************************/
Route::resource('cotizaciones_transportista','\App\Http\Controllers\Cotizaciones_transportistaController');
Route::post('cotizaciones_transportista/{id}/update','\App\Http\Controllers\Cotizaciones_transportistaController@update');
Route::get('cotizaciones_transportista/{id}/delete','\App\Http\Controllers\Cotizaciones_transportistaController@destroy');
Route::get('cotizaciones_transportista/{id}/deleteMsg','\App\Http\Controllers\Cotizaciones_transportistaController@DeleteMsg');
/********************* cotizaciones_transportista ***********************************************/


//inscripcion_cliente Resources
/********************* inscripcion_cliente ***********************************************/
Route::resource('inscripcion_cliente','\App\Http\Controllers\Inscripcion_clienteController');
Route::post('inscripcion_cliente/{id}/update','\App\Http\Controllers\Inscripcion_clienteController@update');
Route::get('inscripcion_cliente/{id}/delete','\App\Http\Controllers\Inscripcion_clienteController@destroy');
Route::get('inscripcion_cliente/{id}/deleteMsg','\App\Http\Controllers\Inscripcion_clienteController@DeleteMsg');
/********************* inscripcion_cliente ***********************************************/


//mensualidades_transportista Resources
/********************* mensualidades_transportista ***********************************************/
Route::resource('mensualidades_transportista','\App\Http\Controllers\Mensualidades_transportistaController');
Route::post('mensualidades_transportista/{id}/update','\App\Http\Controllers\Mensualidades_transportistaController@update');
Route::get('mensualidades_transportista/{id}/delete','\App\Http\Controllers\Mensualidades_transportistaController@destroy');
Route::get('mensualidades_transportista/{id}/deleteMsg','\App\Http\Controllers\Mensualidades_transportistaController@DeleteMsg');
/********************* mensualidades_transportista ***********************************************/


//registro_cliente Resources
/********************* registro_cliente ***********************************************/
Route::resource('registro_cliente','\App\Http\Controllers\Registro_clienteController');
Route::post('registro_cliente/{id}/update','\App\Http\Controllers\Registro_clienteController@update');
Route::get('registro_cliente/{id}/delete','\App\Http\Controllers\Registro_clienteController@destroy');
Route::get('registro_cliente/{id}/deleteMsg','\App\Http\Controllers\Registro_clienteController@DeleteMsg');
/********************* registro_cliente ***********************************************/


//registro_transportistum Resources
/********************* registro_transportistum ***********************************************/
Route::resource('registro_transportistum','\App\Http\Controllers\Registro_transportistumController');
Route::post('registro_transportistum/{id}/update','\App\Http\Controllers\Registro_transportistumController@update');
Route::get('registro_transportistum/{id}/delete','\App\Http\Controllers\Registro_transportistumController@destroy');
Route::get('registro_transportistum/{id}/deleteMsg','\App\Http\Controllers\Registro_transportistumController@DeleteMsg');
/********************* registro_transportistum ***********************************************/


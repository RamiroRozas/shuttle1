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
Route::get('hotel', function () {
    return view('mantenimientos.hoteles');
});
Route::get('perfil', function () {
    return view('proveedores.content');
});
Route::get('traslados', function () {
    return view('proveedores.traslados');
});
Route::get('TrasladosAdmin', function () {
    return view('administrador.TrasladosPendientes');
});
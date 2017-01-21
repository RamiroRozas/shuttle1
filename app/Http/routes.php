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
Route::get('hotelesA', function () {
    return view('administrador.hoteles');
});
Route::get('ProveedorA', function () {
    return view('administrador.proveedores');
});
Route::get('AeropuertoA', function () {
    return view('administrador.Aeropuerto');
});
Route::get('Rutas', function () {
    return view('administrador.rutas');
});
Route::get('reserva', function () {
    return view('reservas.reserva');
});
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

Route::get('/', function () {
    return redirect()->intended('/login');
});

Auth::routes();

Route::resource('almacen', 'AlmacenController');
Route::resource('proveedor', 'ProveedorController');
Route::resource('requisicion', 'RequisicionController');
Route::resource('autorizarRQS', 'AutorizarRQSController');
Route::resource('producto', 'ProductoController');
Route::resource('categoria', 'CategoriaController');
Route::resource('conversion', 'ConversionController');
Route::resource('configuracion', 'ConfiguracionController');
Route::resource('solicitudcompra', 'SolicitudCompraController');
Route::resource('ordencompra', 'OrdenCompraController');
Route::resource('unidad', 'UnidadController');
Route::resource('factura', 'FacturaController');
Route::resource('reciboRQS', 'ReciboRQSController');

Route::resource('role', 'RoleController');
Route::resource('permisos', 'PermissionController');

Route::get('/home', 'HomeController@index')->name('home');



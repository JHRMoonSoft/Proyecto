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
   // return redirect()->intended('/login');
   return view('welcome');
});

Auth::routes();

Route::get('factura/cargarproveedorocp', 'FacturaController@cargarproveedorocp');
Route::get('ordencompra/cargarproductosdecategoria', 'OrdenCompraController@cargarproductosdecategoria');
Route::get('ordencompra/cargarproductosseleccionados', 'OrdenCompraController@cargarproductosseleccionados');


Route::get('solicitudcompra/cargardisponibleproducto', 'SolicitudCompraController@cargardisponibleproducto');
Route::get('solicitudcompra/cargarunidadesproducto', 'SolicitudCompraController@cargarunidadesproducto');
Route::get('solicitudcompra/buscarrqsutorizada','SolicitudCompraController@buscarRQSAutorizada');
Route::get('solicitudcompra/buscarrqsautorizadaporfecha','SolicitudCompraController@buscarRQSAutorizadaPorFecha');

Route::get('requisicion/cargarunidadesproducto', 'RequisicionController@cargarunidadesproducto');
Route::get('requisicion/cargarproveedor', 'RequisicionController@cargarproveedor');

Route::get('requisicion-user/{id}', 'RequisicionController@requisicionuser');
Route::get('autorizarRQS/create/{id}', 'AutorizarRQSController@create');
Route::get('autorizarRQS/cambioaccion', 'AutorizarRQSController@cambioaccion');

Route::get('inventarioRQS/{id}', 'RequisicionController@inventarioRequisicion');



Route::get('ordencompra/cargarproveedor', 'RequisicionController@cargarproveedor');

Route::get('requisicion/export-pdf/{id}', 'RequisicionController@exporpdftrqs');


Route::get('export-requisiciones', 'RequisicionController@exportRequisiciones');
Route::get('requisicion/export/{id}', 'RequisicionController@exportRequisicion');
Route::get('solicitudcompra/export/{id}', 'SolicitudCompraController@exportSolicitudCompra');
Route::get('export-ordencompra/{id}', 'OrdenCompraController@exportOrdenCompra');

Route::resource('almacen', 'AlmacenController');
Route::resource('area', 'AreaController');
Route::resource('cargo', 'CargoController');
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
Route::resource('entregarRQS', 'EntregarRQSController');
Route::resource('recibirRQS', 'ReciboRQSController');

Route::resource('role', 'RoleController');
Route::resource('permisos', 'PermissionController');
Route::resource('users', 'UsuarioController');

Route::get('/home', 'HomeController@index')->name('home');



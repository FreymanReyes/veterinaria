<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('layout');
// });

Auth::routes();



//Route
Route::middleware(['auth'])->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');


    //ROLES
    Route::post('roles/store','RoleController@store')->name('roles.store')->middleware('permission:roles.create');
    Route::get('roles','RoleController@index')->name('roles.index')->middleware('permission:roles.index');
    Route::get('roles/create','RoleController@create')->name('roles.create')->middleware('permission:roles.create');
    Route::put('roles/{role}','RoleController@update')->name('roles.update')->middleware('permission:roles.edit');
    Route::get('roles/{role}','RoleController@show')->name('roles.show')->middleware('permission:roles.show');
    Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');
    Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');


    //USERS
    Route::post('users/store','UserController@store')->name('users.store')->middleware('permission:users.create');
    Route::get('users','UserController@index')->name('users.index')->middleware('permission:users.index');
    Route::put('users/{user}','UserController@update')->name('users.update')->middleware('permission:users.edit');
    Route::get('users/create','UserController@create')->name('users.create')->middleware('permission:users.create');
    Route::get('users/{user}','UserController@show')->name('users.show')->middleware('permission:users.show');
    Route::delete('users/{user}','UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');
    Route::get('users/{user}/edit','UserController@edit')->name('users.edit')->middleware('permission:users.edit');


    //PRODUCTOS
    Route::post('productos/store','ProductosController@store')->name('productos.store')->middleware('permission:productos.create');
    Route::get('productos','ProductosController@index')->name('productos.index')->middleware('permission:productos.index');
    Route::get('productos/create','ProductosController@create')->name('productos.create')->middleware('permission:productos.create');
    Route::put('productos/{producto}','ProductosController@update')->name('productos.update')->middleware('permission:productos.edit');
    Route::get('productos/{producto}','ProductosController@show')->name('productos.show')->middleware('permission:productos.show');
    Route::delete('productos/{producto}','ProductosController@destroy')->name('productos.destroy')->middleware('permission:productos.destroy');
    Route::get('productos/{producto}/edit','ProductosController@edit')->name('productos.edit')->middleware('permission:productos.edit');


    //PROVEEDORES
    Route::post('proveedores/store','ProveedoresController@store')->name('proveedores.store')->middleware('permission:proveedores.create');
    Route::get('proveedores','ProveedoresController@index')->name('proveedores.index')->middleware('permission:proveedores.index');
    Route::get('proveedores/create','ProveedoresController@create')->name('proveedores.create')->middleware('permission:proveedores.create');
    Route::put('proveedores/{proveedor}','ProveedoresController@update')->name('proveedores.update')->middleware('permission:proveedores.edit');
    Route::get('proveedores/{proveedor}','ProveedoresController@show')->name('proveedores.show')->middleware('permission:proveedores.show');
    Route::delete('proveedores/{proveedor}','ProveedoresController@destroy')->name('proveedores.destroy')->middleware('permission:proveedores.destroy');
    Route::get('proveedores/{proveedor}/edit','ProveedoresController@edit')->name('proveedores.edit')->middleware('permission:proveedores.edit');


    //CLIENTES
    Route::post('clientes/store','ClientesController@store')->name('clientes.store')->middleware('permission:clientes.create');
    Route::get('clientes','ClientesController@index')->name('clientes.index')->middleware('permission:clientes.index');
    Route::get('clientes/create','ClientesController@create')->name('clientes.create')->middleware('permission:clientes.create');
    Route::put('clientes/{cliente}','ClientesController@update')->name('clientes.update')->middleware('permission:clientes.edit');
    Route::get('clientes/{cliente}','ClientesController@show')->name('clientes.show')->middleware('permission:clientes.show');
    Route::delete('clientes/{cliente}','ClientesController@destroy')->name('clientes.destroy')->middleware('permission:clientes.destroy');
    Route::get('clientes/{cliente}/edit','ClientesController@edit')->name('clientes.edit')->middleware('permission:clientes.edit');



    //COMPRAS
    Route::get('compras/store','ComprasController@store')->name('store')->middleware('permission:compras.create');
    Route::get('compras','ComprasController@index')->name('compras.index')->middleware('permission:compras.index');
    Route::get('compras/create','ComprasController@create')->name('compras.create')->middleware('permission:compras.create');
    Route::PUT('compras/{compra}','ComprasController@update')->name('compras.update')->middleware('permission:compras.edit');
    Route::get('compras/{compra}','ComprasController@show')->name('compras.show')->middleware('permission:compras.show');
    Route::delete('compras/{compra}','ComprasController@destroy')->name('compras.destroy')->middleware('permission:compras.destroy');
    Route::get('compras/{compra}/edit','ComprasController@edit')->name('compras.edit')->middleware('permission:compras.edit');


    //FACTURAS
    Route::get('facturas/store','facturasController@store')->name('store')->middleware('permission:facturas.create');
    Route::get('facturas','facturasController@index')->name('facturas.index')->middleware('permission:facturas.index');
    Route::get('facturas/create','facturasController@create')->name('facturas.create')->middleware('permission:facturas.create');
    Route::get('facturas/{factura}','facturasController@update')->name('facturas.update')->middleware('permission:facturas.edit');
    Route::get('facturas/{factura}','facturasController@show')->name('facturas.show')->middleware('permission:facturas.show');
    Route::delete('facturas/{factura}','facturasController@destroy')->name('facturas.destroy')->middleware('permission:facturas.destroy');
    Route::get('facturas/{factura}/edit','facturasController@edit')->name('facturas.edit')->middleware('permission:facturas.edit');


    //CAJAS
    Route::get('cajas/store','cajasController@store')->name('store')->middleware('permission:cajas.create');
    Route::get('cajas','cajasController@index')->name('cajas.index')->middleware('permission:cajas.index');
    Route::get('cajas/create','cajasController@create')->name('cajas.create')->middleware('permission:cajas.create');
    Route::get('cajas/update','cajasController@update')->name('cajas.update')->middleware('permission:cajas.edit');
    Route::get('cajas/{caja}','cajasController@show')->name('cajas.show')->middleware('permission:cajas.show');
    Route::delete('cajas/{caja}','cajasController@destroy')->name('cajas.destroy')->middleware('permission:cajas.destroy');
    Route::get('cajas/{caja}/edit','cajasController@edit')->name('cajas.edit')->middleware('permission:cajas.edit');


    //MASCOTAS
    Route::post('mascotas/store','mascotasController@store')->name('store')->middleware('permission:mascotas.create');
    Route::get('mascotas','mascotasController@index')->name('mascotas.index')->middleware('permission:mascotas.index');
    Route::get('mascotas/create','mascotasController@create')->name('mascotas.create')->middleware('permission:mascotas.create');
    Route::put('mascotas/{mascota}','mascotasController@update')->name('mascotas.update')->middleware('permission:mascotas.edit');
    Route::get('mascotas/{mascota}','mascotasController@show')->name('mascotas.show')->middleware('permission:mascotas.show');
    Route::delete('mascotas/{mascota}','mascotasController@destroy')->name('mascotas.destroy')->middleware('permission:mascotas.destroy');
    Route::get('mascotas/{mascota}/edit','mascotasController@edit')->name('mascotas.edit')->middleware('permission:mascotas.edit');


    //SERVICIOS
    Route::post('servicios/store','serviciosController@store')->name('servicios.store')->middleware('permission:servicios.create');
    Route::get('servicios','serviciosController@index')->name('servicios.index')->middleware('permission:servicios.index');
    Route::get('servicios/create','serviciosController@create')->name('servicios.create')->middleware('permission:servicios.create');
    Route::put('servicios/{servicio}','serviciosController@update')->name('servicios.update')->middleware('permission:servicios.edit');
    Route::get('servicios/{servicio}','serviciosController@show')->name('servicios.show')->middleware('permission:servicios.show');
    Route::delete('servicios/{servicio}','serviciosController@destroy')->name('servicios.destroy')->middleware('permission:servicios.destroy');
    Route::get('servicios/{servicio}/edit','serviciosController@edit')->name('servicios.edit')->middleware('permission:servicios.edit');



    Route::get('buscar','ClientesController@buscar')->name('buscar');
    Route::get('crear_cliente','ClientesController@crear_cliente')->name('crear_cliente');
    Route::PUT('editar_caja/{caja}','cajasController@editar_caja')->name('editar_caja')->middleware('permission:cajas.edit');
    Route::get('buscar_mascota','MascotasController@buscar_mascota')->name('buscar_mascota');
    Route::get('crear_mascota','MascotasController@crear_mascota')->name('crear_mascota');
    Route::get('buscar_producto','ProductosController@buscar_producto')->name('buscar_producto');
    Route::get('buscar_servicio','serviciosController@buscar_servicio')->name('buscar_servicio');
});

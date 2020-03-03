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
    return view('index');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('cuenta', 'UserController@cuenta');


//ABM

route::get('/admin', function(){
    return view('ABM.admin');
});
//listado de productos
route::get('admin/listadoProductos', 'productosController@listadoProductos');
route::post('/borrarProducto', 'productosController@borrarProducto');


//agregar producto
route::get('admin/crearProducto','productosController@crearProductoVista');
route::post('admin/crearProducto','productosController@crearProducto');

//editar producto

route::get('admin/editarProducto/{id}','productosController@editarProductoVista');
route::post('admin/editarProducto/{id}','productosController@editarProducto');

//listado de usuarios
route::get('admin/listadoUsuarios', 'UserController@listadoUsuarios');
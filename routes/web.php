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

//pagina principal
Route::get('/','IndexController@indexView');
//carrito
Route::get('carrito','CarritoController@view');
//cuenta
Route::get('cuenta', 'UserController@cuenta');
Route::post('cuenta', 'UserController@modificarDatos');
//productos
Route::get('productos','IndexController@productosVista')->name('todosLosProductos');
Route::get('productos/{nombre}','IndexController@productosPorCategoria')->name('productosPorCategoria');

Route::get('producto/{nombre}','IndexController@productoDetail')->name('productoDetail');

//ABM

route::get('/admin', function(){
    return view('ABM.admin');
});
//listado de productos
route::get('admin/listadoProductos', 'productosController@listadoProductos');
//agregar producto
route::get('admin/crearProducto','productosController@crearProductoVista');
route::post('admin/crearProducto','productosController@crearProducto')->name("producto.crear");
//editar producto
route::get('admin/editarProducto/{id}','productosController@editarProductoVista');
route::post('admin/editarProducto/{id}','productosController@editarProducto');
//borrar producto
route::post('/borrarProducto/{id}', 'productosController@borrarProducto')->name("producto-delete");
//borrar imagen de producto
route::post('/borrarImagen','productosController@borrarImagenDeProducto');

//listado de usuarios
route::get('admin/listadoUsuarios', 'UserController@listadoUsuarios');
//borrar usuario
route::post('/borrarUsuario','UserController@borrarUsuario');

//listado de categorias
route::get('admin/listadoCategorias', 'CategoriasController@listadoCategorias');
//agregar categoria
route::get('admin/crearCategoria','CategoriasController@crearCategoriaVista');
route::post('admin/crearCategoria','CategoriasController@crearCategoria');
//editar categoria
route::get('admin/editarCategoria/{id}','CategoriasController@editarCategoriaVista');
route::post('admin/editarCategoria/{id}','CategoriasController@editarCategoria');
//borrar categoria
route::post('/borrarCategoria/{id}', 'CategoriasController@borrarCategoria');

//listado Pedidos
route::get('admin/listadoPedidos',function(){
    return view('ABM.listadoPedidos');
});
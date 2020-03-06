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

/*Route::get('/', function () {
    return view('index');
});*/
Auth::routes();
Route::get('/','HomeController@index');
Route::get('cuenta', 'UserController@cuenta');
Route::get('faq', 'FaqController@load');
Route::get('contacto', 'ContactoController@load');
Route::get('productos', 'productosController@listadoProductos2');
Route::get('productosFavoritos', 'productosFavoritosController@listado');
Route::get('carrito','carritoController@listadoProductosCarrito');
Route::post('carrito','carritoController@addCarrito');

//Mati
Route::get('cuenta', 'UserController@cuenta');
Route::post('cuenta', 'UserController@modificarDatos');
route::get('/admin', function(){
    return view('ABM.admin');
});
//ABM

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

//listado de categorias
route::get('admin/listadoCategorias', 'CategoriasController@listadoCategorias');

//agregar categoria
route::get('admin/crearCategoria','CategoriasController@crearCategoriaVista');
route::post('admin/crearCategoria','CategoriasController@crearCategoria');








//Route::resource('prods', 'ProdsController');
//Route::get('categoria/{$categoria}', 'HomeController@categoria')->name('categoria');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('Carrito', 'ProductoController@carrito');






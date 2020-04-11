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
Route::get('/carrito','CarritoController@view')->name('cart')->middleware('auth');
Route::get('/add-to-cart/{product}','CarritoController@add')->name('cart.add')->middleware('auth');
Route::get('cart/destroy/{product}','CarritoController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('cart/update/{product}','CarritoController@update')->name('cart.update')->middleware('auth');
Route::get('cart/clear','CarritoController@clear')->name('cart.clear')->middleware('auth');

//favortios
Route::get('/add-to-favorito/{product}','FavoritosController@add')->name('favorito.add')->middleware('auth');
Route::get('favorito/destroy/{product}','FavoritosController@destroy')->name('favorito.destroy')->middleware('auth');






Route::get('/admin','Admin\AdminController@index')->name('admin.page')->middleware('can:administrar');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:administrar')->group(function(){
    Route::resource('/usuarios','UsersController', ['except' => ['show','store','create']]);
    Route::resource('/productos','ProductosController');
    Route::resource('/categorias','CategoriasController');
});

Route::post('/borrarImagen','Admin\ProductosController@borrarImagenDeProducto')->name('admin.productos.borrarImg');

















//cuenta
Route::get('cuenta', 'CuentaController@cuenta');
Route::post('cuenta', 'CuentaController@modificarDatos');
//productos
Route::get('productos','IndexController@productosVista')->name('todosLosProductos');
Route::get('productos/{nombre}','IndexController@productosPorCategoria')->name('productosPorCategoria');

Route::get('producto/{nombre}','IndexController@productoDetail')->name('productoDetail');






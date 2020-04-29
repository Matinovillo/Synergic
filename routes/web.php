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
Route::get('/','IndexController@indexView')->name('index');

//carrito
Route::get('/carrito','CarritoController@view')->name('cart')->middleware('auth');
Route::get('/add-to-cart/{product}','CarritoController@add')->name('cart.add')->middleware('auth');
Route::get('cart/destroy/{product}','CarritoController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('cart/update/{product}','CarritoController@update')->name('cart.update')->middleware('auth');
Route::get('cart/clear','CarritoController@clear')->name('cart.clear')->middleware('auth');

//favoritos
Route::post('/add-to-favorito/{product}','FavoritosController@add')->name('favorito.add')->middleware('auth');
Route::get('favorito/destroy/{product}','FavoritosController@destroy')->name('favorito.destroy')->middleware('auth');

//mercado pago
Route::post('carrito/confirmar','CarritoController@confirm')->name('confirmar.compra');
Route::get('mp/sucess', 'MercadoPagoController@sucess')->name('mp.sucess');
Route::get('mp/failure', 'MercadoPagoController@failure')->name('mp.failure');
Route::get('mp/pending', 'MercadoPagoController@pending')->name('mp.pending');

//Pasarela de pago
Route::get('/comprar/datos','ComprasController@completarDatos')->name('finalizar.compra');
Route::get('/comprar/opciones','ComprasController@opcionesCompra')->name('opciones.compra');
Route::post('/generarPedido','ComprasController@crearPedido')->name('generar.pedido');


//cuenta
Route::get('cuenta/datospersonales', 'CuentaController@datos')->middleware('auth');
Route::post('cuenta/datospersonales', 'CuentaController@updateAvatar')->middleware('auth');
Route::get('cuenta/misfavoritos', 'CuentaController@favoritos')->middleware('auth');
Route::get('cuenta/mispedidos', 'CuentaController@pedidos')->middleware('auth');
Route::get('cuenta/modificardatos', 'CuentaController@edit')->middleware('auth');
Route::post('cuenta/modificardatos', 'CuentaController@update')->name('cuenta.modificar')->middleware('auth');

//Catalogo de productos
Route::get('productos','IndexController@productosVista')->name('todosLosProductos');
Route::get('productos/{nombre}','IndexController@productosPorCategoria')->name('productosPorCategoria');
Route::get('producto/{nombre}','IndexController@productoDetail')->name('productoDetail');

//contacto

route::get('contacto','IndexController@contact');
route::post('contacto','IndexController@mensaje');

//admin page
Route::get('/admin','Admin\AdminController@index')->name('admin.page')->middleware('can:administrar');
Route::post('/borrarImagen','Admin\ProductosController@borrarImagenDeProducto')->name('admin.productos.borrarImg');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:administrar')->group(function(){
    Route::resource('/usuarios','UsersController', ['except' => ['show','store','create']]);
    Route::resource('/productos','ProductosController');
    Route::resource('/categorias','CategoriasController');
    Route::resource('/subcategorias','SubcategoriasController',['except' => ['show','destroy']]);
    Route::resource('/pedidos', 'VentasController',['except' => ['show','store','create']]);
});


Route::post('/validacion-iniciar-sesion', 'ValidacionIniciarSesionController@iniciar_sesion');

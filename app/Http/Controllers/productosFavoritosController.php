<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\User;
use App\ProductosFavoritos;
use App\Categoria;

class productosFavoritosController extends Controller
{
    public function listado(){
        $productos = ProductosFavoritos::where('id_usuario',auth()->user()->id)->paginate(5);
        $cantidad = User::obtenerCantidadProductoCarrito();	
        $categorias = Categoria::whereNull('id_categoria_padre')->with('subcategorias')->get();	

        return view('productosFavoritos',compact('productos','categorias', 'cantidad'));
    }
}

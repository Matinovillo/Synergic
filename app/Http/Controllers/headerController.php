<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categorias;
use App\User;

class headerController extends Controller
{
    public function header($view)
    {
        $cantidad = User::obtenerCantidadProductoCarrito();
        $productos = Producto::all();
        //$categorias = Categorias::whereNull('id_categoria_padre')->orderBy('nombre')->get();
        //$subcategorias = Categorias::where('id_categoria_padre', '!=', null)->whereHas('sub_category')->with('sub_category')->get();
        $categorias = Categorias::whereNull('id_categoria_padre')->with('subcategorias')->get();
        return view($view,  compact('productos', 'categorias', 'subcategorias', 'cantidad'));
    }
}

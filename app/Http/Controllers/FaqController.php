<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\User;

class FaqController extends Controller
{
    public function load()
    {
        $cantidad = User::obtenerCantidadProductoCarrito();
        //$categorias = Categorias::whereNull('id_categoria_padre')->orderBy('nombre')->get();
        //$subcategorias = Categorias::where('id_categoria_padre', '!=', null)->whereHas('sub_category')->with('sub_category')->get();
        $categorias = Categoria::whereNull('id_categoria_padre')->with('subcategorias')->get();
        return view('faq',  compact('categorias', 'cantidad'));
    }
}

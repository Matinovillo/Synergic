<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;


class ContactoController extends Controller
{
    public function load(){
        $cantidad = User::obtenerCantidadProductoCarrito();	
        $categorias = Categoria::whereNull('id_categoria_padre')->with('subcategorias')->get();

        return view('contacto', compact('cantidad', 'categorias'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\CarritoUser;

class carritoController extends Controller
{

    public function listadoProductosCarrito(){
    $productos = CarritoUser::where('id_usuario',auth()->user()->id);
    $cantidad = User::obtenerCantidadProductoCarrito();	
    $categorias = Categoria::whereNull('id_categoria_padre')->with('subcategorias')->get();

    return view('/carrito', compact('cantidad', 'categorias', 'productos'));
    }

    public function addCarrito(Request $form){
        $producto = new CarritoUser();
        $producto->id_producto= $form['id_producto'];
        $producto->id_usuario = auth()->user()->id;
        $producto->save();

        return redirect('/carrito');
    }

    public function quitarCarrito(){
        
    }

}

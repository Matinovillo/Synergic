<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Pagination\Paginator;
use App\Producto;
use App\CarritoUser;
use App\User;
use App\Categorias;

class ProductoController extends Controller
{
/*
    public function carrito(){

        return view('carrito');
    }

    public function addProductoCarrito(Request $form){
        $productos = Producto::all();
        $producto = new CarritoUser();
        $producto->id_producto = $form['add_cart'];
        $producto->id_usuario = auth()->user()->id;
        
        $producto->save();
         $cantidad = count(User::obtenerCantidadProductoCarrito());
        $vac = compact('productos','cantidad');
        return view("index", $vac);
        
    }
*/
    public function listadoProductos(){
        $productos = Producto::where('flag','!=', 'N')->paginate(5);
        $cantidad = User::obtenerCantidadProductoCarrito();
        //$categorias = Categorias::whereNull('id_categoria_padre')->orderBy('nombre')->get();
        //$categorias = Categorias::where('id_categoria_padre', '!=', null)->whereHas('sub_category')->with('sub_category')->get();
        $categorias = Categorias::whereNull('id_categoria_padre')->with('subcategorias')->get();
        
        return view('producto',  compact('productos','categorias', 'cantidad'));
    }

}

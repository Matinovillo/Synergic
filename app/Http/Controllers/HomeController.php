<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cantidad = User::obtenerCantidadProductoCarrito();
        $productos = Producto::all();
        //$categorias = Categorias::whereNull('id_categoria_padre')->orderBy('nombre')->get();
        //$subcategorias = Categorias::where('id_categoria_padre', '!=', null)->whereHas('sub_category')->with('sub_category')->get();
        $categorias = Categoria::whereNull('id_categoria_padre')->with('subcategorias')->get();
        
        return view('index',  compact('productos', 'categorias', 'cantidad'));
    }


   /* public function categoria(Categoria $categoria)
    {
        $productos = Producto::where('categoria', $categoria->id);
        $categorias = Categorias::orderBy('nombre')->get();
        return view('categoria', compact('productos', 'categorias'));
    }*/
}

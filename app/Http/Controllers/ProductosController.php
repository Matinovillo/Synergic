<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productoRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Producto;
use App\Categoria;
use App\Producto_foto;

class ProductosController extends Controller
{

  public function listadoapi(){
    $productos = DB::table('productos')
    ->leftJoin('categorias', 'productos.id_categoria', '=', 'categorias.id')
    ->select('productos.*', 'categorias.nombre as categoria')
    ->get();
    return json_encode($productos);
  }
      
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\User;

class IndexController extends Controller
{ 

    public function indexView(){
        $category = Categoria::where('nombre','Notebook')->first();
        if($category != null){
          $subcategory = $category->hijas;
          $all = array($category->id);
            foreach($subcategory as $sub){
               array_push($all,$sub->id);
              }
            $notebooks = Producto::whereIn('id_categoria',$all)->inRandomOrder()->take(8)->get();        
            return view('index',compact('notebooks'));
        }else{
            $notebooks = [];
            return view('index',compact('notebooks'));
        }
          
    }

    public function productosVista(){
        $productos = Producto::paginate(9);
        return view('productos', compact('productos'));
    }
    
    public function productosPorCategoria($nombre){ 
        $nombre = str_replace("+", " ", $nombre);
        $subcategoria = Categoria::where('nombre',$nombre)->get()->first();    
        if($subcategoria->id_categoria_padre == null){
          $category = Categoria::where('nombre',$subcategoria->nombre)->first();
          $subcategory = $category->hijas;
          $all = array($category->id);
          foreach($subcategory as $sub){
            array_push($all,$sub->id);
          }
          $productos = Producto::whereIn('id_categoria',$all)->paginate(9);
        }else{
          $productos = Producto::Where('id_categoria',"=",$subcategoria->id)->paginate(9);
        }
      
        return view('productos',compact('productos'));
      }
    
    public function productoDetail($nombre){
      $nombre = str_replace("+"," ", $nombre);
      $producto = Producto::where('nombre',$nombre)->with('fotos')->first();
      return view('detalle',compact('producto'));
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    public function listadoCategorias(){
        $categorias = Categoria::all()->sortBy('id_categoria_padre');
        $vac = compact('categorias');
        return view('ABM.listadoCategorias',$vac);
    }

    public function crearCategoriaVista(){
        $categorias = Categoria::all();
        $unique = $categorias->unique('id_categoria_padre');
        $vac = compact('unique');
        return view('ABM.crearCategoria',$vac);
      }

      public function crearCategoria (Request $req){
            
        $categoria = new Categoria();
        
        $categoria->nombre = $req['nombre'];
        $categoria->descripcion = $req['descripcion'];
        $categoria->id_categoria_padre = $req['id_categoria_padre'];
        // $categoria->orden = $req['orden'];
        
        $categoria->save();
        
        return redirect("/admin/listadoCategorias");
        
      }

}

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
        $reglas = [
          'nombre' => 'required|max:100|string',
          'descripcion' =>'required|string',
          'id_categoria_padre' =>'required|numeric',
          'orden' =>'numeric'
        ];

        $mensajes = [
          'required' => 'El campo :attribute no puede estar vacio',
          'string' => 'El campo :attribute debe ser de tipo texto',
          'max' => 'El campo :attributte no puede tener mas de :max caracteres',
          'id_categoria_padre.required' => 'Tenes que elegir una categoria!',
          'numeric' =>'El campo :attribute debe ser un numero'
        ];
        $this->validate($req,$reglas,$mensajes);
        $categoria = new Categoria();
        
        $categoria->nombre = $req['nombre'];
        $categoria->descripcion = $req['descripcion'];
        $categoria->id_categoria_padre = $req['id_categoria_padre'];
        // $categoria->orden = $req['orden'];
        
        $categoria->save();
        
        return redirect("/admin/listadoCategorias");
        
      }

}

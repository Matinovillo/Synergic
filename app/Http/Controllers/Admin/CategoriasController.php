<?php

namespace App\Http\Controllers\Admin;

use App\Categoria;
use App\Http\Requests\CategoriasRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $order = $req['orderBy'];
        $buscar = $req['buscar'];
        $tipo = $req['tipo'];
        $categorias = Categoria::whereNull('id_categoria_padre');
        $categorias = $categorias->BuscarSubCategoria($tipo,$buscar)->orderBy(($order=="") ? "id" : $order )->paginate(5);
        $vac = compact('categorias','buscar','tipo','order');
        return view('admin.categorias.index',$vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriasRequest $req)
    {
        $categoria = new Categoria();
        
        $categoria->nombre = $req['nombre'];
        $categoria->descripcion = $req['descripcion'];
        $categoria->id_categoria_padre = null;
        $categoria->orden = $req['orden'];
        $categoria->save();

        return redirect()->route('admin.categorias.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriasRequest $request, Categoria $categoria)
    {
      $categoria->nombre = $request['nombre'];
      $categoria->descripcion = $request['descripcion'];
      $categoria->orden= $request['orden'];
      $categoria->save();

      return redirect()->route('admin.categorias.edit',$categoria->id)->with('success', 'La categoria se modifico con exito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
      $categoria->delete();
      return response()->json([
        'message' => 'Data deleted successfully!'
      ]);
    }
}

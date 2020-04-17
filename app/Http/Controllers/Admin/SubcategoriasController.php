<?php

namespace App\Http\Controllers\Admin;

use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubcategoriaRequest;


class SubcategoriasController extends Controller
{   

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::whereNotNull('id_categoria_padre')->paginate(5);
        $vac = compact('categorias');
        return view('admin.subcategorias.index',$vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = $categorias = Categoria::whereNull('id_categoria_padre')->paginate(5);
        return view('admin.subcategorias.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoriaRequest $request)
    {
        $subcategoria = new Categoria();
        
        $subcategoria->nombre = $request['nombre'];
        $subcategoria->descripcion = $request['descripcion'];
        $subcategoria->id_categoria_padre = $request['id_categoria_padre'];
        $subcategoria->orden = $request['orden'];
        $subcategoria->save();

        return back()->with('success', 'La subcategoria se se creo con exito!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $subcategoria)
    {
        $category = $categorias = Categoria::whereNull('id_categoria_padre')->paginate(5);  
        return view('admin.subcategorias.edit',compact('subcategoria','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $subcategoria)
    {

      $subcategoria->nombre = $request['nombre'];
      $subcategoria->descripcion = $request['descripcion'];
      $subcategoria->orden= $request['orden'];
      $subcategoria->id_categoria_padre= $request['id_categoria_padre'];
      $subcategoria->save();

      return redirect()->route('admin.subcategorias.edit',$subcategoria->id)->with('success', 'La subcategoria se modifico con exito!');
    }

   
}

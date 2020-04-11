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
    public function index()
    {
        $categorias = Categoria::all();
        if(isset($_GET['orderBy'])){
          if($_GET['orderBy']=="id"){
            $categorias = Categoria::orderBy('id','asc')->paginate(5);
            $categorias->withPath('?orderBy='.$_GET['orderBy']);
          }else if($_GET['orderBy']=="nombre"){
            $categorias = Categoria::orderBy('nombre','asc')->paginate(5);
            $categorias->withPath('?orderBy='.$_GET['orderBy']);
          }else if($_GET['orderBy']=="padre"){
            $categorias = Categoria::orderBy('id_categoria_padre','asc')->paginate(5);
            $categorias->withPath('?orderBy='.$_GET['orderBy']);
          }else if($_GET['orderBy']=="orden"){
            $categorias = Categoria::orderBy('orden','asc')->paginate(5);
            $categorias->withPath('?orderBy='.$_GET['orderBy']);
          }
        }else{
          $categorias = Categoria::paginate(5);
        }
        $vac = compact('categorias');
        return view('admin.categorias.index',$vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::whereNull('id_categoria_padre')->get();
        
        $vac = compact('categorias');
        return view('admin.categorias.create',$vac);
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
        if($req['id_categoria_padre'] == '0'){
          $req['id_categoria_padre'] = null;
        }else{
          $categoria->id_categoria_padre = $req['id_categoria_padre'];
        }
        $categoria->orden = $req['orden'];
        $categoria->save();
        return redirect()->route('admin.categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        $category = Categoria::whereNull('id_categoria_padre')->get();
        $vac = compact('category','categoria');
        return view('admin.categorias.edit',$vac);
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
      if($request['id_categoria_padre'] == '0'){
        $categoria->id_categoria_padre = null;
      }else{
        $categoria->id_categoria_padre = $request['id_categoria_padre'];
      }
      $categoria->orden= $request['orden'];
      $categoria->save();

      return redirect()->route('admin.categorias.edit',$categoria->id)->with('success', 'El la categoria se modifico con exito!');

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

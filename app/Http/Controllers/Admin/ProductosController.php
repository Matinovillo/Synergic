<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\productoRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Categoria;
use App\Producto_foto;
use App\Producto;

class ProductosController extends Controller
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
        $productos = Producto::paginate(4);
        
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::whereNotNull('id_categoria_padre')->get();
        $vac = compact('categorias');
        return view('admin.productos.create',$vac);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productoRequest $request)
    {
        Producto::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'precio' => $request['precio'],
            'stock' => $request['stock'],
            'id_categoria' => $request['id_categoria']
          ]);

          if ($request->hasFile('imagen')){
            $producto = Producto::all();
            $producto = $producto->last();
            $productoId = $producto->id;
            
            $ruta = $request['imagen']->store('public');
            $nombreArchivo = basename($ruta);
            $imagen = new Producto_foto();
            $imagen->nombre = $nombreArchivo;
            $imagen->id_producto = $productoId;
            $imagen->save();
            }
            // return redirect('admin/crearProducto');
            return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        $imagen = $producto->fotos;
        
        // $imagen = Producto_foto::where('id_producto',$id)->get();
        $vac = compact('producto','categorias','imagen');
        return view('admin.productos.edit',$vac);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $reglas = [
            'nombre' => 'required|min:10|max:255|string',
            'descripcion' =>'required|string',
            'precio' =>'required|numeric',
            'stock' =>'required|numeric',
            'id_categoria' =>'required',
            'imagen' =>'file'

          ];
          $mensajes = [
            'required' => 'El campo :attribute no puede estar vacio',
            'string' => 'El campo :attribute debe ser de tipo texto',
            'min' => 'El campo :attribute debe tener un minimo de :min caracteres',
            'max' => 'El campo :attributte no puede tener mas de :max caracteres',
            'id_categoria.required' => 'Tenes que elegir una categoria!',
            'numeric' =>'El campo :attribute debe ser un numero',
            'imagen.file' => 'El campo debe ser un archivo!'
          ];
            $this->validate($request,$reglas,$mensajes);

        $producto->nombre = $request['nombre'];
        $producto->descripcion = $request['descripcion'];
        $producto->precio = $request['precio'];
        $producto->stock = $request['stock'];
        $producto->id_categoria = $request['id_categoria'];
        $producto->save();
        
        if (isset($request['imagen'])){
        $ruta = $request['imagen']->store('public');
        $nombreArchivo = basename($ruta);
        $imagen = new Producto_foto();
        $imagen->nombre = $nombreArchivo;
        $imagen->id_producto = $producto->id;
        $imagen->save();
        }

        return redirect()->route('admin.productos.edit',$producto->id)->with('success', 'El producto se modifico con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {   
        //$producto->fotos()->delete();
        $producto->delete();
        return response()->json([
          'message' => 'Data deleted successfully!'
        ]);
    }

    public function borrarImagenDeProducto(Request $req){
        $id = $req['id'];
        $producto_id = $req['producto_id'];
        $imagen = Producto_foto::find($id);
        $imagen->delete();
        return redirect()->route('admin.productos.edit',$producto_id)->with('success', 'La imagen fue eliminada!');
      }

}

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
    


        public function listadoProductos(){
         return view('ABM.listadoProductos');
      }


        public function crearProductoVista(){
          $categorias = Categoria::all();
          $vac = compact('categorias');
          return view('ABM.crearProducto',$vac);
        }

        public function crearProducto (productoRequest $request){
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

        public function editarProductoVista($id){
            $producto = Producto::find($id);
            $categorias = Categoria::all();
            $imagen = $producto->fotos;
            
            // $imagen = Producto_foto::where('id_producto',$id)->get();
            $vac = compact('producto','categorias','imagen');
            return view('ABM.editarProducto',$vac);
        }

        public function editarProducto(Request $request,$id){
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

            $producto = new Producto();
            $producto = Producto::find($id);
      
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
            $imagen->id_producto = $id;
            $imagen->save();
            }

            return redirect("admin/editarProducto/".$id)->with('success', 'El producto se modifico con exito!');
          }

          public function borrarProducto($id){
            $imagen = Producto_foto::where('id_producto',$id)->get();
            foreach($imagen as $productoFoto){
              $productoFoto->delete();
            }
            
            $producto = Producto::find($id);
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
            return redirect('admin/editarProducto/'.$producto_id)->with('success', 'La imagen se elimino con exito!');
          }

          public function listadoapi(){
            $productos = DB::table('productos')
            ->leftJoin('categorias', 'productos.id_categoria', '=', 'categorias.id')
            ->select('productos.*', 'categorias.nombre as categoria')
            ->get();
            return json_encode($productos);
          }

}

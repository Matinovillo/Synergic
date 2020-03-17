<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Producto_foto;

class ProductosController extends Controller
{
    


        public function listadoProductos(){
        
         if(isset($_GET['orderBy'])){
          if($_GET['orderBy']=="id"){
            $productos = Producto::orderBy('id','asc')->paginate(4);
            $productos->withPath('?orderBy='.$_GET['orderBy']);
          }else if ($_GET['orderBy']=="nombre"){
            $productos = Producto::orderBy('nombre','asc')->paginate(4);
            $productos->withPath('?orderBy='.$_GET['orderBy']);
          }else if ($_GET['orderBy']=="precio"){
            $productos = Producto::orderBy('precio','asc')->paginate(4);
            $productos->withPath('?orderBy='.$_GET['orderBy']);
          }else if ($_GET['orderBy']=="categoria"){
            $productos = Producto::orderBy('id_categoria','asc')->paginate(4);
            $productos->withPath('?orderBy='.$_GET['orderBy']);
          }
        }else{
          $productos = Producto::paginate(4);
        }
         $vac=compact('productos');
         return view('ABM.listadoProductos',$vac);
      }


        public function crearProductoVista(){
          $categorias = Categoria::all();
          $vac = compact('categorias');
          return view('ABM.crearProducto',$vac);
        }

        public function crearProducto (Request $req){
            $reglas = [
              'nombre' => 'required|min:10|max:255|string',
              'descripcion' =>'required|string',
              'precio' =>'required|numeric',
              'stock' =>'required|numeric',
              'id_categoria' =>'required',
              'imagen' =>'required'

            ];
            $mensajes = [
              'required' => 'El campo :attribute no puede estar vacio',
              'string' => 'El campo :attribute debe ser de tipo texto',
              'min' => 'El campo :attribute debe tener un minimo de :min caracteres',
              'max' => 'El campo :attributte no puede tener mas de :max caracteres',
              'id_categoria.required' => 'Tenes que elegir una categoria!',
              'numeric' =>'El campo :attribute debe ser un numero',
              'imagen.required' => 'Tenes que cargar al menos una imagen!'
            ];
            $this->validate($req,$reglas,$mensajes);
           
            Producto::create([
              'nombre' => $req['nombre'],
              'descripcion' => $req['descripcion'],
              'precio' => $req['precio'],
              'stock' => $req['stock'],
              'id_categoria' => $req['id_categoria']
            ]);

            if (isset($req['imagen'])){
              $producto = Producto::all();
              $producto = $producto->last();
              $productoId = $producto->id;
              
              $ruta = $req['imagen']->store('public');
              $nombreArchivo = basename($ruta);
              $imagen = new Producto_foto();
              $imagen->nombre = $nombreArchivo;
              $imagen->id_producto = $productoId;
              $imagen->save();
              }
            

            return redirect("/admin/crearProducto")->with('success', 'El producto se creo con exito!');
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

          public function borrarProducto(Request $request){
            $id = $request['id'];
            $imagen = Producto_foto::where('id_producto',$id)->get();
            foreach($imagen as $borrar){
              $borrar->delete();
            }
            
            $producto = Producto::find($id);
            $producto->delete();
            return redirect('admin/listadoProductos');
          }


          public function borrarImagenDeProducto(Request $req){
            $id = $req['id'];
            $producto_id = $req['producto_id'];
            $imagen = Producto_foto::find($id);
            $imagen->delete();
            return redirect('admin/editarProducto/'.$producto_id)->with('success', 'La imagen se elimino con exito!');
          }

}

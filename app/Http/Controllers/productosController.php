<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\User;

class productosController extends Controller
{
    


        public function listadoProductos(){
            $productos = Producto::All();
            if(count($productos)>0){
              foreach ($productos as $producto) {
                $categoria = Producto::find($producto->id)->categoria;
              }
            $productos = Producto::paginate(5);
            $vac = compact('productos','categoria');
            return view('ABM.listadoProductos',$vac);
              
            }else{
            $productos = Producto::paginate(5);
            $vac = compact('productos');
            return view('ABM.listadoProductos',$vac);
            }
            
            
        }


        public function crearProductoVista(){
          $categorias = Categoria::all();
          $vac = compact('categorias');
          return view('ABM.crearProducto',$vac);
        }

        public function crearProducto (Request $req){
            
            $producto = new Producto();
            
            $producto->nombre = $req['nombre'];
            $producto->descripcion = $req['descripcion'];
            $producto->precio = $req['precio'];
            $producto->stock = $req['stock'];
            $producto->id_categoria = $req['id_categoria'];
            
            $producto->save();
            
            return redirect("/admin/listadoProductos");
            
          }

        public function editarProductoVista($id){
            $producto = Producto::find($id);
            $categorias = Categoria::all();
            $vac = compact('producto','categorias');
            return view('ABM.editarProducto',$vac);
        }

        public function editarProducto(Request $request,$id){
            $producto = new Producto();
            $producto = Producto::find($id);
      
            $producto->nombre = $request['nombre'];
            $producto->descripcion = $request['descripcion'];
            $producto->precio = $request['precio'];
            $producto->stock = $request['stock'];
            $producto->id_categoria = $request['id_categoria'];
            $producto->save();
            return redirect("admin/listadoProductos");
          }

          public function borrarProducto(Request $request){
            $id = $request['id'];
            $producto = Producto::find($id);
            $producto->delete();
            return redirect('admin/listadoProductos');
          }
          
          public function listadoProductos2(){	
            $productos = Producto::where('flag','!=', 'N')->paginate(1);	
            $cantidad = User::obtenerCantidadProductoCarrito();	
            //$categorias = Categorias::whereNull('id_categoria_padre')->orderBy('nombre')->get();	
            //$categorias = Categorias::where('id_categoria_padre', '!=', null)->whereHas('sub_category')->with('sub_category')->get();	
            $categorias = Categoria::whereNull('id_categoria_padre')->with('subcategorias')->get();	
                
            return view('producto',  compact('productos','categorias', 'cantidad'));	
          }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\User;

class FavoritosController extends Controller
{
    public function add($id){
       $producto = Producto::where('id',$id)->first();
       $usuario = auth()->user();
       $usuario->productosFavoritos()->syncWithoutDetaching($producto);
       return redirect(url('cuenta/misfavoritos'));
    }

    public function destroy($id){
        $producto = Producto::find($id);
        $usuario = auth()->user();
        $usuario->productosFavoritos()->detach($producto);
        return back()->with('success', 'El producto fue eliminado de tus favoritos');
    }

}

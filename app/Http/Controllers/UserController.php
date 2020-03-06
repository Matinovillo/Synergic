<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Fotos;
use App\Producto;
use App\Categoria;
class UserController extends Controller
{
    public function cuenta(){
        $producto = Producto::find(8);
        $foto = User::find(auth()->user()->id)->foto;
        $categorias = Categoria::whereNull('id_categoria_padre')->with('subcategorias')->get();	
        $vac = compact('foto','producto','categorias');
        return view('/cuenta', $vac);
        
    }

    public function ListadoUsuarios(){
        $usuarios = User::all();

        foreach ($usuarios as $user) {
            $foto = User::find($user->id)->foto;
        }

        return view('ABM.listadoUsuarios',compact('usuarios','foto'));
    }

    public function modificarDatos(Request $req){
        $user = new User();
        $user = User::find(auth()->user()->id);

        $user->nombre = $req['nombre'];
        $user->apellido = $req['apellido'];
        $user->email = $req['email'];
        $user->save();

        return redirect('/cuenta');
    }
}

    
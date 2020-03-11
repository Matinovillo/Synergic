<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Fotos;
use App\Producto;
class UserController extends Controller
{
    
    //User profile methods
    public function cuenta(){
        $producto = Producto::find(8);
        $foto = User::find(auth()->user()->id)->foto;
        $vac = compact('foto','producto');
        return view('/cuenta', $vac);
        
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

    //User ABM methods
    public function ListadoUsuarios(){
        $usuarios = User::all();
        foreach ($usuarios as $user) {
            $foto = User::find($user->id)->foto;
        }
        return view('ABM.listadoUsuarios',compact('usuarios','foto'));
    }
    
    public function borrarUsuario(Request $request){
        $id = $request['id'];
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('admin/listadoUsuarios');
      }

}

    
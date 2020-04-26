<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Fotos;
use App\Producto;
use App\Domicilio;
use App\Provincia;
use App\Favoritos;
use Gate;
use Illuminate\Http\Request;

class UsersController extends Controller
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
        $buscar = $req['buscar'];
        $tipo = $req['tipo'];
        $usuarios = User::Buscar($tipo,$buscar)->paginate(8);
        return view('admin.usuarios.index',compact('usuarios','tipo','buscar'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {   
        if(Gate::denies('editar-usuario')){
            return redirect(route('admin.usuarios.index'))->with('unauthorized', 'No tienes permiso para realizar esta accion');
        }
        $roles = Role::all();
        $vac = compact('roles','usuario');
        return view('admin.usuarios.edit', $vac);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        $usuario->roles()->sync($request->roles);
        $usuario->nombre = $request->nombre;
        $usuario->apellido= $request->apellido;
        $usuario->email = $request->email;

        $usuario->save();
        return redirect()->route('admin.usuarios.index')->with('success', 'El Usuario se modifico correctamente');
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        if(Gate::denies('borrar-usuario')){
            return redirect(route('admin.usuarios.index'))->with('unauthorized', 'No tienes permiso para realizar esta accion');
        }

        $usuario->roles()->detach();
        $usuario->delete();

        return redirect()->route('admin.usuarios.index')->with('success', 'El usuario se elimino correctamente');
    }
}

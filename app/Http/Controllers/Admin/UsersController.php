<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

	public function __construct()
	{
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
		$order = $req['orderBy'];
		$usuarios = User::Buscar($tipo, $buscar)->orderBy(($order == "") ? "id" : $order)->paginate(8);
		return view('admin.usuarios.index', compact('usuarios', 'tipo', 'buscar', 'order'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\User  $usuario
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $usuario)
	{
		if (Gate::denies('editar-usuario')) {
			return redirect(route('admin.usuarios.index'))->with('unauthorized', 'No tienes permiso para realizar esta accion');
		}
		$roles = Role::all();
		$vac = compact('roles', 'usuario');
		return view('admin.usuarios.edit', $vac);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Http\Requests\userValidation  $request
	 * @param  \App\User  $usuario
	 * @return \App\Http\Requests\userValidation
	 */
	public function update(Request $request, User $usuario)
	{
		$reglas = [
			'email' => [
				'required',
				Rule::unique('users')->ignore($usuario->id),
				'email:rfc,dns',
			],
			'nombre' => 'required|string|min:3',
			'apellido' => 'required|string|min:3',
			'roles' => 'required',
		];
		$mensajes = [
			'email.unique' => 'El email ingresado ya esta en uso',
			'email:rfc,dns' => 'El email ingresado no parece ser valido',
			'roles.required' => 'El usuario debe tener al menos un rol asignado',
			'required' => 'El campo :attribute no puede estar vacio',
			'string' => 'El campo :attribute debe ser de tipo texto',
			'min' => 'El campo :attribute debe tener un minimo de :min caracteres',
			'max' => 'El campo :attributte no puede tener mas de :max caracteres'
		];
		$this->validate($request, $reglas, $mensajes);

		$usuario->roles()->sync($request->roles);
		$usuario->nombre = $request->nombre;
		$usuario->apellido = $request->apellido;
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
		if (Gate::denies('borrar-usuario')) {
			return redirect(route('admin.usuarios.index'))->with('unauthorized', 'No tienes permiso para realizar esta accion');
		}

		$usuario->roles()->detach();
		$usuario->delete();

		return response()->json([
			'message' => 'Data deleted successfully!'
		]);;
	}
}

<?php

namespace App\Http\Controllers;

use App\User;
use App\Fotos;
use App\Producto;
use App\Domicilio;
use App\Favoritos;
use App\Provincia;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\ModificarDatosCuentaRequest;

class CuentaController extends Controller
{

	public function datos()
	{
		$foto = User::find(auth()->user()->id)->foto;
		$domicilio = User::find(auth()->user()->id)->domicilio;
		$provincias = Provincia::all();
		$vac = compact('foto', 'domicilio', 'provincias');
		return view('cuenta.user', $vac);
	}

	public function favoritos()
	{
		return view('cuenta.favoritos');
	}

	public function pedidos()
	{
		$pedidos = auth()->user()->pedidos()->paginate(2);
		$vac = compact('pedidos');

		return view('cuenta.pedidos', $vac);
	}

	public function edit()
	{
		$domicilio = User::find(auth()->user()->id)->domicilio;
		$provincias = Provincia::all();
		$vac = compact('domicilio', 'provincias');
		return view('cuenta.actualizar', $vac);
	}

	public function update(Request $req)
	{

		$reglas = [
			'nombre' => 'required|min:3|max:15|string',
			'apellido' => 'required|min:3|max:15|string',
			'email' => [
				'required',
				Rule::unique('users')->ignore(auth()->user()->id),
				'email:rfc,dns',
			],
			'fecha_nacimiento' => 'required|date',
			'numero' => 'required|numeric',
			'barrio' => 'required|string',
			'codigo_postal' => 'required|numeric',
			'id_provincia' => 'required',
		];

		$mensajes = [
			'required' => 'Este campo es obligatorio.',
			'min' => 'El campo :attribute debe tener mas de :min caracteres',
			'max' => 'El campo :attribute debe tener menos de :max caracteres',
			'string' => 'El campo :attribute es de tipo texto',
			'email.unique' => 'El email ingresado ya esta en uso',
			'email:rfc,dns' => 'El email ingresado no es valido',
			'date' => 'La fecha ingresada no es valida',
			'numeric' => 'El campo :attribute debe ser de tipo numero',
		];

		$this->validate($req, $reglas, $mensajes);

		$user = User::find(auth()->user()->id);
		$user->nombre = $req['nombre'];
		$user->apellido = $req['apellido'];
		$user->email = $req['email'];
		$user->fecha_nacimiento = $req['fecha_nacimiento'];

		$domicilio = User::find(auth()->user()->id)->domicilio;
		if ($domicilio == null) {
			$domicilio = new Domicilio();
			$domicilio->calle = $req['calle'];
			$domicilio->barrio = $req['barrio'];
			$domicilio->numero = $req['numero'];
			$domicilio->codigo_postal = $req['codigo_postal'];
			$domicilio->id_provincia = $req['id_provincia'];
			$domicilios = Domicilio::all();
			if (count($domicilios) == 0) {
				$domicilio->save();
				$domicilios = Domicilio::all();
				$domicilios = $domicilios->last();
				$user->id_domicilio = $domicilios->id;
			} else {
				$domicilios = $domicilios->last();
				$domiciliosId = $domicilios->id + 1;
				$user->id_domicilio = $domiciliosId;
				$domicilio->save();
			}
		} else {
			$domicilio->calle = $req['calle'];
			$domicilio->barrio = $req['barrio'];
			$domicilio->numero = $req['numero'];
			$domicilio->codigo_postal = $req['codigo_postal'];
			$domicilio->id_provincia = $req['id_provincia'];
			$domicilio->save();
		}
		$user->save();

		return back()->with('success', 'Los datos fueron actualizados.');
	}

	public function updateAvatar(Request $req)
	{
		$reglas = [
			'avatar' => "file|required|filled|image"
		];

		$mensajes = [
			'avatar.required' => "No seleccionaste ningun archivo",
			'avatar.file' => "El campo requiere un archivo",
			'avatar.filled' => "No seleccionaste ningun archivo",
			"avatar.image" => "El archivo debe ser una imagen: jpeg, png, bmp, gif, svg, o webp",
		];

		$this->validate($req, $reglas, $mensajes);

		$user = User::find(auth()->user())->first();
		if ($user->id_foto == 1) {
			$ruta = $req['avatar']->store('public');
			$nombreArchivo = basename($ruta);
			$foto = new Fotos();
			$foto->nombre = $nombreArchivo;
			$foto->save();
			$avatars = Fotos::all();
			$avatar = $avatars->last();

			$user->id_foto = $avatar->id;
			$user->save();
			return back();
		} else {
			$id = $user->id_foto;
			$avatar = Fotos::find($id);
			$ruta = $req['avatar']->store('public');
			$nombreArchivo = basename($ruta);
			$avatar->nombre = $nombreArchivo;
			$avatar->save();
			return back();
		}
	}
}

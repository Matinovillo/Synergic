<?php

namespace App\Http\Controllers;

use App\Http\Requests\IniciarSesionFormRequest;
use App\Http\Requests\RegistroFormRequest;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidacionIniciarSesionController extends Controller
{
    public function iniciar_sesion(Request $request) // Validación formulario [ FormRequest ]
    {
        $remember = ($request->remember) ? true : false;

        if ( Auth::attempt(['email' => $request->email, 'password' => $request->contrasena ], $remember) ) {

            return response()->json('Has iniciado sesion', 200);

        } else {

            return response()->json( ['errors' => ['login' => ['Error al inciar sesion, comprueba los datos ingresados.']]], 422);

        }

    }
}

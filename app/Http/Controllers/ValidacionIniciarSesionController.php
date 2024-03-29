<?php

namespace App\Http\Controllers;

use App\Http\Requests\IniciarSesionFormRequest;
use Illuminate\Support\Facades\Auth;

class ValidacionIniciarSesionController extends Controller
{
    public function iniciar_sesion(IniciarSesionFormRequest $request) // Validación formulario [ FormRequest ]
    {
        $remember = ($request->remember) ? true : false;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->contrasena], $remember)) {
            return response()->json('Has iniciado sesion', 200);
        } else {

            return response()->json(['errors' => ['login' => ['Credenciales de login invalidas']]], 422);
        }
    }
}

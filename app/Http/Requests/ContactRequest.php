<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nombre' => 'required|min:3|max:20|string',
            'apellido' =>'required|min:3|max:20|string',
            'celular' =>'required|numeric',
            'telefono' =>'numeric|nullable',
            'email' => 'required|email:rfc,dns',
            'mensaje' =>'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'No te olvides de poner tu nombre',
            'apellido.required' => 'No te olvides de poner tu apellido',
            'email.required' => 'Porfavor, Ingresa un mail',
            'email.email:rfc,dns' => 'El mail ingresado no es valido',
            'celular.required' =>'No te olvides de ingresar tu numero celular',
            'string' => 'El campo tiene que ser un texto',
            'min' => 'El campo :attribute debe tener un minimo de :min caracteres',
            'max' => 'El campo :attribute no puede tener mas de :max caracteres',
            'numeric' =>'El campo tiene que ser un numero',
            'mensaje.required' => 'No te olvides de escribir tu mensaje!'
        ];
    }
}

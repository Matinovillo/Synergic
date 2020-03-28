<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:10|max:255|string',
            'descripcion' =>'required|string',
            'precio' =>'required|numeric',
            'stock' =>'required|numeric',
            'id_categoria' =>'required',
            'imagen' =>'file'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute no puede estar vacio',
            'string' => 'El campo :attribute debe ser de tipo texto',
            'min' => 'El campo :attribute debe tener un minimo de :min caracteres',
            'max' => 'El campo :attributte no puede tener mas de :max caracteres',
            'id_categoria.required' => 'Tenes que elegir una categoria!',
            'numeric' =>'El campo :attribute debe ser un numero',
            'file' => 'El archivo debe ser una imagen!'
        ];
    }
}

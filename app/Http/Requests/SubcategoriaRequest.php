<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubcategoriaRequest extends FormRequest
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
            'nombre' => 'required|max:30|string|min:5',
            'descripcion' => 'required|string',
            'id_categoria_padre' => 'required',
            'orden' =>'numeric'
        ];
    }

    public function messages()
    {
        return [
          'required' => 'El campo :attribute no puede estar vacio',
          'string' => 'El campo :attribute debe ser de tipo texto',
          'max' => 'El campo :attribute no puede tener mas de :max caracteres',
          'min' => 'El campo :attribute tiene que tener mas de :min caracteres',
          'numeric' =>'El campo :attribute debe ser un numero',
          'id_categoria_padre.required' => 'Tenes que seleccionar una categoria!',
        ];
    }
}

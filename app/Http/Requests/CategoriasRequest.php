<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasRequest extends FormRequest
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
          'nombre' => 'required|max:100|string',
          'descripcion' =>'required|string',
          'id_categoria_padre' =>'required|numeric',
          'orden' =>'numeric'
        ];
    }

    public function messages()
    {
        return [
          'required' => 'El campo :attribute no puede estar vacio',
          'string' => 'El campo :attribute debe ser de tipo texto',
          'max' => 'El campo :attributte no puede tener mas de :max caracteres',
          'id_categoria_padre.required' => 'Tenes que elegir una categoria!',
          'numeric' =>'El campo :attribute debe ser un numero'
        ];
    }
}

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
          'nombre' => 'required|max:100|string|min:3',
          'descripcion' =>'required|string|min:3|max:200',
          'orden' =>'numeric'
        ];
    }

    public function messages()
    {
        return [
          'required' => 'El campo :attribute no puede estar vacio',
          'string' => 'El campo :attribute debe ser de tipo texto',
          'max' => 'El campo :attribute no puede tener mas de :max caracteres',
          'min' => 'El campo :attribute debe tener al menos :min caracteres'
          'numeric' =>'El campo :attribute debe ser un numero'
        ];
    }
}

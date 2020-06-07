<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonajeRequest extends FormRequest
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
            'nombre'=>['required'],
            'rareza'=>['required'],
            'color'=>['required'],
            'tipo'=>['required'],
            'imagen'=>['nullable','image']
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>"El campo nombre debe ser obligatorio",
            'rareza.required'=>"El campo rareza debe ser obligatorio",
            'color.required'=>"El campo color debe ser obligatorio",
            'tipo.required'=>"El campo tipo debe ser obligatorio",
            'imagen.image' => 'El fichero debe ser de tipo imagen',

        ];
    }
}

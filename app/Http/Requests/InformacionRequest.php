<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformacionRequest extends FormRequest
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
            'nombrehp'=>['required'],
            'habilidadprincipal'=>['required'],
            'habilidadz'=>['required'],
            'nombrehu'=>['required'],
            'habilidadunica'=>['required'],
            'nombrehuu'=>['required'],
            'habilidadunicaa'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'nombrehp.required'=>"El campo nombre de la habilidad principal debe ser obligatorio",
            'habilidadprincipal.required'=>"El campo habilidad principal debe ser obligatorio",
            'habilidadz.required'=>"El campo habilidadZ debe ser obligatorio",
            'nombrehu.required'=>"El campo nombre habilidad unica 1 debe ser obligatorio",
            'habilidadunica.required' => 'El campo habilidad unica 1 debe ser obligatorio',
            'nombrehuu.required'=>"El campo nombre habilidad unica 2 debe ser obligatorio",
            'habilidadunicaa.required'=>"El campo habilidad unica 2 debe ser obligatorio"
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstadisticaRequest extends FormRequest
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
            'niveldepoder'=>['required'],
            'salud'=>['required'],
            'ataquefisico'=>['required'],
            'ataquedeki'=>['required'],
            'defensafisica'=>['required'],
            'defensadeki'=>['required'],
            'critico'=>['required'],
            'velocidadderecuperaciondeki'=>['required'],
            'ranurasdeequipamiento'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'niveldepoder.required'=>"El campo nivel de poder debe ser obligatorio",
            'salud.required'=>"El campo salud debe ser obligatorio",
            'ataquefisico.required'=>"El campo ataque fisico debe ser obligatorio",
            'ataquedeki.required'=>"El campo ataque de ki debe ser obligatorio",
            'defensafisica.required' => 'El campo defensa fisica debe ser obligatorio',
            'defensadeki.required' => 'El campo defensa ki debe ser obligatorio',
            'critico.required' => 'El campo critico debe ser obligatorio',
            'velocidadderecuperaciondeki.required' => 'El campo velocidad de recuperacion de ki debe ser obligatorio',
            'ranurasdeequipamiento.required' => 'El campo  ranuras de equipamiento debe ser obligatorio',
        ];
    }
}

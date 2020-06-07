<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CambiarContraseñaRequest extends FormRequest
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
            'contraseña'=>['required', 'string'],
            'password'=>['required','string','min:8','confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'contraseña.required'=>"Debes escribir la antigua contraseña",
            'password.required'=>"Debes escribir una nueva contraseña",
            'password.min'=>"La contraseña debe tener al menos 8 carácteres",
            'password.confirmed'=>"Las contraseñas no coinciden",
        ];
    }
}

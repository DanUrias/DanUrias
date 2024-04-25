<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombres' => array(
                'required',
            ),

            'apellidos' => array(
                'required'
            ),

            'correo electronico' => array(
                'required', 
            ),

            'fecha_nacimiento' => array(
                'required', 'date'
            ),

            'usuario' => array(
                'required', 
            ),

            'clave' => array(
                'required', 
            ),
        ];
    }
}

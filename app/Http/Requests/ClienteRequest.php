<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nombre' => 'required|max:60',
            'apellido' => 'required|max:60',
            'dni' => 'required|max:13|min:13',
            'fechaNacimiento' => 'required',
            'correo' => 'required|max:60',
            'telefono' => 'max:20',
            'lugarTrabajo' => 'required|max:50',
            'estado'=>'max:1'
        ];
    }
}

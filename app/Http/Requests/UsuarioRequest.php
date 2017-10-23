<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
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
            'primer_nombre' => "required|max:15",
            'segundo_nombre' => "required|max:15",
            'primer_apellido' => "required|max:15",
            'segundo_apellido' => "required|max:15",
            'dui' => "required|max:10",
            'nit' => "required|max:15",
            'correo' => "required|max:45|email",
            'afp' => "required|max:45",
            'cuenta' => "required|max:45",
            'foto' => 'required|mimes:jpeg,png,jpg|max:2048',
            'tipo_usuario' => 'required',
            'sector' => 'required',
            'facultad' => 'required',
            'propietario' => 'required',


        ];
    }


    /**
     * Get the error messages that apply to the request
     *
     * @return array
     */
    public function messages()
    {
        return [
            //'nombre.required' => 'El nombre de la comision es requerido',
            'nombre.max' => 'El nombre de la comision no debe de exceder los 50 caracteres',
            //'primer_nombre.required' => "Ingrese el primer nombre",
            'primer_nombre.max' => "El primer nombre no debe exceder los 15 caracteres",
            //'segundo_nombre.required' => "Ingrese el segundo nombre",
            'segundo_nombre.max' => "El primer nombre no debe exceder los 15 caracteres",
            //'primer_apellido.required' => "Ingrese el primer apellido",
            'primer_apellido.max' => "El primer nombre no debe exceder los 15 caracteres",
            //'segundo_apellido.required' => "Ingrese el segundo apellido",
            'segundo_apellido.max' => "El primer nombre no debe exceder los 15 caracteres",
            //'dui.required' => "Ingrese el DUI",
            'dui.max' => "El DUI no debe exceder los 10 caracteres",
            //'nit.required' => "Ingrese el NIT",
            'correo.required' => "Ingrese el correo",
            //'correo.email' => "El correo ingresado no es un formato valido",
            //'afp.required' => "Ingrese el AFP",
            //'cuenta.required' => "Ingrese la cuenta bancaria",
            'foto.required' => 'Ingrese una imagen de perfil',
            'foto.mimes' => 'La imagen debe de ser: jpp, png o jpeg'

        ];
    }
}

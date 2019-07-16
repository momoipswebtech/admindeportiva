<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'role' => 'required|numeric',
            'name' => 'required|string|max:255',
            'dob' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'

        ];
    }

    public function messages()
    {
        return [
            'role.required' => 'Este campo es requerido',
            'role.numeric' => 'El valor no es correcto',
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permiten 255 caracteres',
            'dob.required' => 'Este campo es requerido',
            'email.required' => 'Este campo es requerido',
            'email.string' => 'El valor noes correcto',
            'email.max' => 'Solo se permiten 255 caracteres',
            'email.unique' => 'Este email ya esta registrado',
            'password.required' => 'Ete campo es requerido',
            'password.string' => 'El valor no es correcto',
            'password.min' => 'Tu contraseña debe tener al menos 8 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
        ];
    }
}

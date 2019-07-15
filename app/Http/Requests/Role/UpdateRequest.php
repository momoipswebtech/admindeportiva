<?php

namespace App\Http\Requests\Role;

use App\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:roles,name,'.$this->route('role')->id.'|max:255',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.unique' => 'El nombre ya esta en uso',
            'description.required' => 'La descripción es requerida',
        ];
    }
}

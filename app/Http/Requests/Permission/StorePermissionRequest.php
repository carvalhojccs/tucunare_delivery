<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;

class StorePermissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:100', 'unique:permissions,name'],
            'description' => ['nullable', 'min:3','max:255']            
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Este campo é de preenchimento obrigatório',
            'name.min' => 'O nome da permissão deve ter no mínimo três caracteres',
            'name.max' => 'O nome do permissão deve ter no máximo 100 caracteres',
            'name.unique' => 'Este nome de permissão já está sendo utilizado',
            'description.min' => 'Este campo, se preenchido, deve ter no mínimo três caracteres',
            'description.max' => 'Este campo, se preenchido, deve ter no máximo 255 caracteres'            
        ];
    }
}

<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:100', 'unique:profiles,name'],
            'description' => ['nullable', 'min:3', 'max:255']
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'O nome do papel é obrigatório',
            'name.unique'       => 'Este nome de papel já está em uso',
            'name.min'          => 'O nome do papel deverá conter no mínimo três caracteres',
            'name.max'          => 'O nome do papel deverá conter no máximo 100 caracteres',
            'description.min'   => 'A descrição deverá conter no mínimo três caracteres',
            'description.max'   => 'A descrição deverá conter no máximo 255 caracteres',
        ];
    }
}

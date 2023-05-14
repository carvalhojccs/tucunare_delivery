<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
        $id = $this->segment(3);        

        return [
            'name' => ['required', 'min:3', 'max:100', "unique:profiles,name,{$id},id"]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome do perfil é obrigatório',
            'name.min' => 'O nome do perfil deverá conter no mínimo três caracteres',
            'name.max' => 'O nome do perfil deverá conter no máximo 100 caracteres',
            'name.unique' => 'Este nome de perfil já está em uso'
        ];
    }
}

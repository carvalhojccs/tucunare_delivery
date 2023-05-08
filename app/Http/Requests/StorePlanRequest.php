<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:100', 'unique:plans,name'],
            'description' => ['nullable', 'min:3','max:255'],
            'price' => ['required', 'decimal:2']            
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Este campo é de preenchimento obrigatório',
            'name.min' => 'O nome do plano deve ter no mínimo três caracteres',
            'name.max' => 'O nome do plano deve ter no máximo 100 caracteres',
            'name.unique' => 'Este nome de plano já está sendo utilizado',
            'description.min' => 'Este campo, se preenchido, deve ter no mínimo três caracteres',
            'description.max' => 'Este campo, se preenchido, deve ter no máximo 255 caracteres',
            'price.required' => 'O valor do plano é de preenchimento obrigatório',
            'price.decimal' => 'O valor do plano deve conter duas casas decimais'
        ];
    }
}

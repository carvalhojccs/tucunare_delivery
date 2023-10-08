<?php

namespace App\Http\Requests\Table;

use Illuminate\Foundation\Http\FormRequest;

class StoreTableRequest extends FormRequest
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
            'identify' => ['required', 'min:3', 'max:50', 'unique:tables,identify'],
            'description' => ['nullable', 'min:3', 'max:255']
        ];
    }

    public function messages()
    {
        return [
            'identify.required' => 'A identificação da mesa é de preenchimento obrigatório',
            'identify.min' => 'A identificação da mesa deve ter no mínimo três caracteres',
            'identify.max' => 'A identificação da mesa deve ter no máximo 50 caracteres',
            'identify.unique' => 'Esta identificação já está em uso',
            'description.min' => 'A descrição da mesa deve ter no mínimo três caracteres',
            'description.max' => 'A descrição da mesa deve ter no máximo 255 caracteres',            
        ];
    }
}

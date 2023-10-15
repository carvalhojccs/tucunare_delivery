<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'max:200'],
            'description' => ['required', 'min:3', 'max:500'],
            'image' => ['nullable', 'image'],
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/",
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Este campo é obrigatório',
            'title.min' => 'O título deve possuir pelo menos 3 caracteres',
            'title.max' => 'O título deve possuir no máximo 200 caracteres',
            'description.required' => 'Este campo é obrigatório',
            'description.min' => 'A descrição deve possuir pelo menos 3 caracteres',
            'image.image' => 'O arqruivo deve ser uma imagem',
            'price.required' => 'Este campo é obrigatório'


        ];
    }
}

<?php

namespace App\Http\Requests\Tenant;

use Illuminate\Foundation\Http\FormRequest;

class StoreTenantRequest extends FormRequest
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
            'plan_id' => ['required'],
            'cnpj' => ['required','unique:tenants,cnpj'],
            'business_name' => ['required', 'min:3', 'max:255'],
            'fantasy_name' => ['nullable','min:3', 'max:255'],            
            'email' => ['required','email'],
            'logo' => ['nullable', 'image'],
        ];
    }
}

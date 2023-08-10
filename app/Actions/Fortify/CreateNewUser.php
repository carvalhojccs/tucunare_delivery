<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Services\TenantService;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cnpj' => ['required', 'unique:tenants'],
            'empresa' => ['required', 'unique:tenants,business_name'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        if (!$plan = session('plan')) {
            return to_route('home');
        }
        
        $tenantService = app(TenantService::class);
        $user = $tenantService->make($plan, $input);        

        return $user;
    }
}

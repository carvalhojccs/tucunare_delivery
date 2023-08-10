<?php

namespace App\Services;

use App\Models\Plan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class TenantService
{
    private $plan, $input = [];

    public function make(Plan $plan, array $input)
    {
        $this->plan = $plan;
        $this->input = $input;

        $tenant = $this->storeTenant();
        $user = $this->storeUser($tenant);

        return $user;
    }

    public function storeTenant()
    {
        $input = $this->input;

        return $this->plan->tenants()->create([
            'cnpj' => $input['cnpj'],
            'business_name' => $input['empresa'],            
            'email' => $input['email'],
            'subscription' => now(),
            'expires_at' => now()->addDays(7),
        ]);
    }

    public function storeUser($tenant)
    {
        $input = $this->input;

        $user = $tenant->users()->create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        return $user;
    }
}
<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenant::create([
            'plan_id' => 3,
            'cnpj' => '37888151000138',
            'business_name' => 'J.A. COMÉRCIO',
            'fantasy_name' => 'PARÁ CLEAN',
            'url' => 'https://app.tucubare.local.br/paraclean',
            'email' => 'admin@paraclean.com.br',
            'logo' => 'logo.png',
            'subscription' => now(), 
            'expires_at' => Carbon::now()->addDays(15),
            'subscription_id' => bcrypt('inter'),
        ]);        
    }
}

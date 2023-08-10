<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'FREE', 'price' => 0.00, 'description' => 'Para quem está começando',            
        ]);
        Plan::create([
            'name' => 'PREMIUM', 'price' => 100.00,'description' => 'Para negócios'
        ]);
        Plan::create([
            'name' => 'BUSINESS', 'price' => 300.00,'description' => 'Plano empresarial'           
        ]);

    }
}

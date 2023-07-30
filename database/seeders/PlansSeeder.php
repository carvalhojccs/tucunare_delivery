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
            ['name' => 'FREE', 'url' => 'free', 'price' => 0.00,],
            ['name' => 'PREMIUM', 'url' => 'premium', 'price' => 100.00,],
            ['name' => 'BUSINESS', 'url' => 'business', 'price' => 300.00,],
        ]);
    }
}

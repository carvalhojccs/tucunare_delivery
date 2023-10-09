<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanProfileSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plan = Plan::find(1);
        $plan->profiles()->attach(1);        
        $plan->profiles()->attach(2);

        $plan = Plan::find(2);
        $plan->profiles()->attach(1);        
        $plan->profiles()->attach(2);        
        $plan->profiles()->attach(3); 
    }
}

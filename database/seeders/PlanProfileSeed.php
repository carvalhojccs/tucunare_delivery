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
        $free = Plan::find(1);
        $free->profiles()->attach(1);        
        $free->profiles()->attach(2);

        $premium = Plan::find(2);
        $premium->profiles()->attach(1);        
        $premium->profiles()->attach(2);        
        $premium->profiles()->attach(3); 
    }
}

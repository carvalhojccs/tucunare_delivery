<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create(['name' => 'Categorias']);
        Profile::create(['name' => 'Produtos']);
        Profile::create(['name' => 'Mesas']);
    }
}

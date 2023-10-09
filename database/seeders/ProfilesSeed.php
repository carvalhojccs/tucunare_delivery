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
        Profile::create(['name' => 'Gestor de categorias']);
        Profile::create(['name' => 'Gestor de produtos']);
        Profile::create(['name' => 'Gestor de mesas']);
    }
}

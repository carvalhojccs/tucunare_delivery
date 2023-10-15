<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                PlansSeeder::class,
                TenantsSeeder::class,
                UsersSeeder::class,
                ProfilesSeed::class,
                PermissionsSeed::class,
                PlanProfileSeed::class,
                RoleSeed::class,
            ]
        );
    }
}

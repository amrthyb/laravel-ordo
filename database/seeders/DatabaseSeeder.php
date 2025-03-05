<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Feature;
use App\Models\Manufactures;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ManufacturesSeeder::class);
        $this->call(CarsSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(CarFeatureSeeder::class);
    }
}

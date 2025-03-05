<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CarFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carFeatures = [
            ['car_id' => 1, 'feature_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['car_id' => 1, 'feature_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['car_id' => 2, 'feature_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['car_id' => 3, 'feature_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['car_id' => 4, 'feature_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['car_id' => 5, 'feature_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('car_features')->insert($carFeatures);
    }
}

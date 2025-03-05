<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            ['nama' => 'Seat Heater', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nama' => 'Parking Camera', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nama' => 'Remote Key', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nama' => 'Sunroof', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nama' => 'Bluetooth Audio', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('features')->insert($features);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'nama' => 'Toyota Avanza',
                'jenis' => 'MPV',
                'harga' => 200000000,
                'tanggal_pembuatan' => '2022-01-15',
                'manufactures_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Honda Civic',
                'jenis' => 'Sedan',
                'harga' => 500000000,
                'tanggal_pembuatan' => '2021-05-20',
                'manufactures_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Mitsubishi Pajero',
                'jenis' => 'SUV',
                'harga' => 700000000,
                'tanggal_pembuatan' => '2023-02-10',
                'manufactures_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Suzuki Ertiga',
                'jenis' => 'MPV',
                'harga' => 250000000,
                'tanggal_pembuatan' => '2020-09-05',
                'manufactures_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Ford Ranger',
                'jenis' => 'Pickup',
                'harga' => 600000000,
                'tanggal_pembuatan' => '2019-07-30',
                'manufactures_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

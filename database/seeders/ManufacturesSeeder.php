<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ManufacturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manufactures')->insert([
            ['nama' => 'Toyota', 'alamat' => 'Jakarta', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nama' => 'Honda', 'alamat' => 'Surabaya', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nama' => 'Mitsubishi', 'alamat' => 'Bandung', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nama' => 'Suzuki', 'alamat' => 'Yogyakarta', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nama' => 'Ford', 'alamat' => 'Semarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}

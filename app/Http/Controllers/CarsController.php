<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class CarsController extends Controller
{
    public function addCar()
    {
        DB::table('cars')->insert([
            'nama' => 'Toyota Avanza',
            'jenis' => 'MPV',
            'harga' => 250000000,
            'tanggal_pembuatan' => '2023-05-10',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    public function showCars()
    {

        // Mengambil data dari tabel cars
        $cars = DB::table('cars')->get();
        
        return view('cars', compact('cars'));
    }
}

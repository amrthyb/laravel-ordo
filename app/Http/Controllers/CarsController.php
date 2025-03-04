<?php

namespace App\Http\Controllers;

use App\Models\Car; // Pastikan nama model sesuai
use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class CarsController extends Controller
{
//     public function insertCars(){
//     DB::table('cars')->insert([
//         'nama' => 'Toyota Avanza',
//         'jenis' => 'MPV',
//         'harga' => 250000000,
//         'tanggal_pembuatan' => '2023-05-10',
//         'created_at' => now(),
//         'updated_at' => now()
//     ]);
//     }

//     public function showCars()
// {
//     $cars = DB::table('cars')->get();
//     return view('cars', compact('cars'));
// }
    // public function addCars()
    // {
    //     Cars::create([
    //         'nama' => 'Honda',
    //         'jenis' => 'Sedan', // Pastikan jenis kendaraan benar
    //         'harga' => 400000000,
    //         'tanggal_pembuatan' => '2022-06-19'
    //     ]);

    //     return "Data mobil berhasil ditambahkan!";
    // }

    // public function showCars()
    // {
    //     // Menggunakan Eloquent untuk mengambil semua data
    //     $cars = Cars::all();
    //     return view('cars', compact('cars'));
    // }


}

<?php

namespace App\Http\Controllers;

use App\Models\Car; // Pastikan nama model sesuai
use App\Models\Review;
use App\Models\Cars;
use App\Models\Manufactures;
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


        public function addCars()
        {
            $manufacture=Manufactures::create([
                // 'Cars_id'=>$cars->id,
                'nama' => 'Honda',
                'alamat' => 'Tokyo, Jepang',
            ]);

            $cars=Cars::create([
            'manufactures_id'=>$manufacture->id,
            'nama' => 'Honda Civic',
            'jenis' => 'Sedan',
            'harga' => 350000000,
            'tanggal_pembuatan' => '2023-05-15',

            ]);


            return "Data mobil berhasil ditambahkan!";
        }

        // public function showCars()
        // {
        //     // Menggunakan Eloquent untuk mengambil semua data
        //     $cars = Cars::all();
        //     return view('cars', compact('cars'));
        // }

        public function showCars()
        {
            $cars = Cars::with('manufactures')->get();
            // dd($cars); // Mengambil mobil dengan relasi pabrik
            return view('cars', compact('cars'));
        }
    }

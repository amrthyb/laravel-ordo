<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Manufactures;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addCarWithReviews()
{
    $manufacture=Manufactures::create([
        // 'Cars_id'=>$cars->id,
        'nama' => 'Honda',
        'alamat' => 'Tokyo, Jepang',
    ]);

    // Menambahkan mobil
    $cars = Cars::create([
        'manufactures_id'=>$manufacture->id,
        'nama' => 'Honda Civic',
        'jenis' => 'Sedan',
        'harga' => 350000000,
        'tanggal_pembuatan' => '2023-05-15',
    ]);

    // Menambahkan review untuk mobil tersebut
    $review = $cars->reviews()->create([
        'nilai' => 5,
        'nama' => 'John Doe',
        'isi' => 'Mobil yang sangat nyaman dan irit bahan bakar.',
    ]);

    return "Data mobil dan review berhasil ditambahkan!";
}
public function showCarWithReviews($id)
{
    // Mengambil mobil beserta ulasannya
    $cars = Cars::with('manufactures', 'reviews')->find($id);

    if (!$cars) {
        return "Mobil tidak ditemukan!";
    }

    // Menampilkan mobil dan ulasannya
    return view('show', compact('cars'));
}
}

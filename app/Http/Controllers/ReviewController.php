<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Cars;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addReview($carId)
{
    // Menambahkan review untuk mobil tertentu
    $car = Cars::findOrFail($carId);

    $car->reviews()->create([
        'nilai' => 5,  // Nilai review
        'nama' => 'John Doe',  // Nama pemberi review
        'isi' => 'Mobil ini sangat nyaman dan cepat!'  // Isi review
    ]);

    return "Review berhasil ditambahkan!";
}
public function showCarWithReviews($carId)
{
    $car = Cars::with('reviews')->findOrFail($carId);

    return view('car.show', compact('car'));
}

}

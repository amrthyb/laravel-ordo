<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Http\Requests\StorefeatureRequest;
use App\Http\Requests\UpdatefeatureRequest;
use App\Models\Cars;

class FeatureController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    // Fungsi untuk menambahkan fitur baru
    public function addFeatures()
    {
        // Menambahkan fitur ke tabel features
        $features = [
            'Seat Heater',
            'Parking Camera',
            'Remote Key'
        ];

        foreach ($features as $feature) {
            Feature::create(['nama' => $feature]);
        }

        echo "Fitur telah ditambahkan!";
    }

    // Fungsi untuk menghubungkan fitur dengan mobil
    public function assignFeatureToCar()
    {
        $car = Cars::find(1); // Ambil mobil dengan ID 1

        if ($car) {
            // Ambil ID fitur yang sudah ada di tabel features
            $features = Feature::whereIn('nama', ['Seat Heater', 'Parking Camera', 'Remote Key'])->get();

            // Menambahkan fitur-fitur tersebut ke mobil
            foreach ($features as $feature) {
                $car->features()->attach($feature->id);
            }

            echo "Fitur telah ditambahkan ke mobil!";
        } else {
            echo "Mobil tidak ditemukan.";
        }
    }
// Fungsi untuk mengambil semua fitur dari mobil
public function getCarFeatures()
{
    $car = Cars::find(1); // Ambil mobil dengan ID 1
    $features = $car->features; // Mengambil semua fitur yang dimiliki mobil tersebut

    // Menampilkan fitur mobil
    return view('car_features', compact('features'));
}
    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreFeatureRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    // public function show(Feature $feature)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefeatureRequest $request, feature $feature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feature $feature)
    {
        //
    }
}

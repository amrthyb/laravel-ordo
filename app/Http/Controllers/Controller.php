<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        return 'Buku baru';
    }
    public function show($nama)
    {
        return "Detail $nama";
    }

    public function store(Request $request)
    {
        $title = $request->input('title');

        //
    }
    public function tambah(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'angka1' => ['required', 'numeric'],
            'angka2' => ['required', 'numeric'],
        ]);

        // Jika validasi sukses, lakukan perhitungan
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        $hasil = $angka1 + $angka2;

        return view('tambah', compact('angka1', 'angka2', 'hasil'));
    }
}

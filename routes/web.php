<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('heloo', function () {
    return 'hello word';
});
// routing
Route::get('/perkalian/{id}', function ($id) {
    // $id=$id*2;
    return 'Angka ' . $id;
});

// controller
Route::get('/book', [Controller::class, 'index']);
Route::get('/book-detail/{nama}', [Controller::class, 'show']);

// request & respon
Route::get('/tambah', function (Request $request) {
    $angka1 = $request->query('angka1', 0);
    $angka2 = $request->query('angka2', 0);
    $hasil = $angka1 + $angka2;
    //  return response()->json(['hasil' => $hasil]);
    return view('tambah', compact('angka1', 'angka2', 'hasil'));
});

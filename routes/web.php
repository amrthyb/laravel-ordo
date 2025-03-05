<?php
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FeatureController;
use App\Models\Feature;
use App\Models\Cars;
use App\Models\Reviews;
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

Route::get('hello', function () {
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

//car
Route::get('/insert-cars', [CarsController::class, 'insertCars']);

Route::get('/cars', [CarsController::class, 'showCars']);
Route::get('/cars/add', [CarsController::class, 'addCars'])->name('cars.add');

Route::get('/show-cars', [CarsController::class, 'showCars']);
Route::get('/add-cars', [CarsController::class, 'addCars'])->name('add.cars');

Route::get('/add-car', [ReviewController::class, 'addCarWithReviews']);
Route::get('/car/{id}', [ReviewController::class, 'showCarWithReviews']);


// Route untuk menambahkan fitur
Route::get('/add-feature', [FeatureController::class, 'addFeatures']);

Route::get('/add-car-features', [FeatureController::class, 'assignFeatureToCar']);

Route::get('/view-car-features', [FeatureController::class, 'getCarFeatures']);



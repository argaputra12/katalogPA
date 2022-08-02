<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\FormpengusulController;
use App\Http\Controllers\DaftarHKIController;
use App\Http\Controllers\DatapengusulController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminKatalogController;
use App\Http\Controllers\Apk1Controller;
use App\Http\Controllers\PembimbingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TpsController;
use App\Http\Controllers\MisController;
use App\Http\Controllers\DssController;
use App\Http\Controllers\HkiController;
use App\Http\Controllers\KaprodiHKIController;
use App\Http\Controllers\MahasiswaHkiController;
use App\Http\Controllers\PembimbingHkiController;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (auth()->user()) {
        return view('welcome');
    } else {
        return view('index');
    }
});


Route::get('/home', function () {
    return view('index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/katalog', [KatalogController::class, 'index']);
//Route::get("/search", [KatalogController::class, "search"]);
Route::get('/formpengusul', [FormpengusulController::class, 'index']);
Route::get('/datapengusul', [DatapengusulController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/apk1', [Apk1Controller::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/tps', [TpsController::class, 'index']);
Route::get('/mis', [MisController::class, 'index']);
Route::get('/dss', [DssController::class, 'index']);


// Route::group(['middleware' => ['auth', 'cekRole:1,2,3,4']],function () {
//         route::get('/dashboard', function () {
//             return view('welcome');
//         });
//     }
// );


Route::group(['middleware' => ['auth', 'cekRole:1,3,2,4']], function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    });
});

Route::group(['middleware' => ['auth', 'cekRole:4']], function () {
    Route::get('/pembimbing', [PembimbingController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'cekRole:1']], function () {
    Route::get('/daftarHKI', [HkiController::class, 'create']);
    Route::post('/daftarHKI', [HkiController::class, 'store']);
});



Route::resource('/admin/katalog', AdminKatalogController::class);
Route::resource('/pembimbing/hki', PembimbingHkiController::class);
Route::get('/kaprodi/hki', [KaprodiHKIController::class, 'index']);
Route::put('/pembimbing/konfirmasiHKI/{hki}', [PembimbingHkiController::class, 'konfirmasiHKI']);
Route::resource('/mahasiswa/hki', MahasiswaHkiController::class);

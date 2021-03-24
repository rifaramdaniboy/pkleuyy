<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;
use App\Models\Provinsi;
use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\kota;
use App\Models\Kasus;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Provinsi
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::post('provinsi/store', [ProvinsiController::class, 'store']);
Route::get('provinsi/{id?}', [ProvinsiController::class, 'show']);
Route::put('provinsi/update/{id?}',[ProvinsiController::class, 'update']);
Route::delete('provinsi/{id?}',[ProvinsiController::class, 'destroy']);

// API
// Provinsi
Route::get('laporan', [ApiController::class, 'provinsi_index']);
// Rekap Negara
Route::get('negara',[ApiController::class, 'negara_index']);
// Rekap Semua Provinsi
Route::get('total', [ApiController::class, 'indonesia']);
// Lihat Data Berdasarkan ID
Route::get('laporan/{id?}', [ApiController::class, 'show']);

//semua data table
Route::get('kota', [ApiController::class, 'kota_index']);
Route::get('kecamatan', [ApiController::class, 'kecamatan_index']);
Route::get('kelurahan', [ApiController::class, 'kelurahan_index']);
Route::get('rw', [ApiController::class, 'rw_index']);
<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [DashboardController::class,'index']);
Route::get('/buku', [BukuController::class,'index']);
Route::get('/tambahbuku', [BukuController::class, 'tambahbuku']);
Route::post('/buku', [BukuController::class, 'simpan']);
Route::get('/buku/{buku_id}', [BukuController::class, 'show']);
Route::get('/buku/{buku_id}/edit', [BukuController::class, 'edit']);
Route::put('/buku/{buku_id}', [BukuController::class, 'update']);
Route::delete('/buku/{buku_id}', [BukuController::class, 'destroy']);
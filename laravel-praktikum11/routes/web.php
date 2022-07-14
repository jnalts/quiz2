<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

Route::get('/Golongan', [App\Http\Controllers\GolonganController::class, 'index']);
Route::get('/golongan/create', [App\Http\Controllers\GolonganController::class, 'create']);
Route::post('/golongan', [App\Http\Controllers\GolonganController::class, 'store']);
Route::get('/golongan/{id}/edit', [App\Http\Controllers\GolonganController::class, 'edit']);
Route::patch('/golongan/{id}', [App\Http\Controllers\GolonganController::class, 'update']);
Route::delete('/golongan/{id}', [App\Http\Controllers\GolonganController::class, 'destroy']);

Route::get('/barangmasuk', [App\Http\Controllers\BarangmasukController::class, 'index']);
Route::get('/barangmasuk/create', [App\Http\Controllers\BarangmasukController::class, 'create']);
Route::post('/barangmasuk', [App\Http\Controllers\BarangmasukController::class, 'store']);
Route::get('/barangmasuk/{id}/edit', [App\Http\Controllers\BarangmasukController::class, 'edit']);
Route::patch('/barangmasuk/{id}', [App\Http\Controllers\BarangmasukController::class, 'update']);
Route::delete('/barangmasuk/{id}', [App\Http\Controllers\BarangmasukController::class, 'destroy']);

Route::get('/barangkeluar', [App\Http\Controllers\BarangkeluarController::class, 'index']);
Route::get('/barangkeluar/create', [App\Http\Controllers\BarangkeluarController::class, 'create']);
Route::post('/barangkeluar', [App\Http\Controllers\BarangkeluarController::class, 'store']);
Route::get('/barangkeluar/{id}/edit', [App\Http\Controllers\BarangkeluarController::class, 'edit']);
Route::patch('/barangkeluar/{id}', [App\Http\Controllers\BarangkeluarController::class, 'update']);
Route::delete('/barangkeluar/{id}', [App\Http\Controllers\BarangkeluarController::class, 'destroy']);


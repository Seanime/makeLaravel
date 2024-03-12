<?php

use App\Http\Controllers\AbsensiController;
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

// web.php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PelangganControllerController;

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/tambahkaryawan', [KaryawanController::class, 'tambahkaryawan']);
Route::post('/karyawan', [KaryawanController::class, 'karyawan']);
Route::get('/karyawan/{karyawan_id}', [KaryawanController::class, 'show']);
Route::get('/karyawan/{karyawan_id}/edit', [KaryawanController::class, 'edit']);
Route::put('/karyawan/{karyawan_id}', [KaryawanController::class, 'update']);
Route::delete('/karyawan/{karyawan_id}', [KaryawanController::class, 'destroy']);
Route::get('/absensi', [AbsensiController::class, 'index']);
Route::get('/gaji', [GajiController::class, 'index']);
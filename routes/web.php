<?php

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
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PelangganControllerController;

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');


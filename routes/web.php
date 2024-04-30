<?php

// web.php
use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\UserController;

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
    return view('homepage');
});
// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth']);
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    // Route::get('/user/{user_id}', [UserController::class, 'show']);
    // Route::get('/user/{user_id}/edit', [UserController::class, 'edit']);
    // Route::put('/user/{user_id}', [UserController::class, 'update']);
    // Route::delete('/user/{user_id}', [UserController::class, 'destroy']);
});

// Route Profile
// Route::get('/profile', [ProfileController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::get('/karyawan', [KaryawanController::class, 'index']);
    Route::get('/tambahkaryawan', [KaryawanController::class, 'tambahkaryawan']);
    Route::post('/karyawan', [KaryawanController::class, 'karyawan']);
    Route::get('/karyawan/{karyawan_id}', [KaryawanController::class, 'show']);
    Route::get('/karyawan/{karyawan_id}/edit', [KaryawanController::class, 'edit']);
    Route::put('/karyawan/{karyawan_id}', [KaryawanController::class, 'update']);
    Route::delete('/karyawan/{karyawan_id}', [KaryawanController::class, 'destroy']);
    // Route Absen
    Route::get('/absensi', [AbsensiController::class, 'index']);
    // Route Gaji
    Route::get('/gaji', [GajiController::class, 'index']);
});



Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
// Route::get('/profile', [ProfileController::class, 'index']);{
Route::get('/karyawan', [KaryawanController::class, 'index'])->middleware(['auth']);
Route::get('/tambahkaryawan', [KaryawanController::class, 'tambahkaryawan'])->middleware(['auth']);
Route::post('/karyawan', [KaryawanController::class, 'karyawan'])->middleware(['auth']);
Route::get('/karyawan/{karyawan_id}', [KaryawanController::class, 'show'])->middleware(['auth']);
Route::get('/karyawan/{karyawan_id}/edit', [KaryawanController::class, 'edit'])->middleware(['auth']);
Route::put('/karyawan/{karyawan_id}', [KaryawanController::class, 'update'])->middleware(['auth']);
Route::delete('/karyawan/{karyawan_id}', [KaryawanController::class, 'destroy'])->middleware(['auth']);
// Route Absen
Route::get('/absensi', [AbsensiController::class, 'index'])->middleware(['auth']);
// Route Gaji
Route::get('/gaji', [GajiController::class, 'index'])->middleware(['auth']);



Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

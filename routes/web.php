<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PensiunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin');
})->name('dashboard');

Route::get('/datapensiun', [PensiunController::class, 'index'])->name('datapensiun');


// Menampilkan halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Menangani proses login
Route::post('/login', [AuthController::class, 'login']);


// Route for logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');




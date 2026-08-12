<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;


// Route Khusus Admin
Route::prefix('admin')->name('admin.')->group(function () {
    
    // URL: /admin
    // Route Name: admin.dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // Nanti route untuk CRUD UMKM dan Wisata ditaruh di dalam grup ini juga
    
});

Route::get('/', [HomeController::class, 'home']); 
Route::get('/umkm', [HomeController::class, 'umkm']);

// Rute untuk halaman utama (Home)
Route::get('/', function () {
    return view('pages.home');
});

// Rute untuk halaman Wisata
Route::get('/wisata', function () {
    return view('pages.wisata');
});

// Tambahkan baris ini di routes/web.php
Route::get('/umkm', function () {
    return view('pages.umkm');
});
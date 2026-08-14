<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;

// ==========================================
// 1. ROUTE KHUSUS ADMIN
// ==========================================
Route::prefix('admin')->name('admin.')->group(function () {
    
    // URL: /admin
    // Route Name: admin.dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // Nanti route untuk CRUD UMKM dan Wisata ditaruh di dalam grup ini juga
    
});


// ==========================================
// 2. ROUTE PENGUNJUNG (FRONTEND)
// ==========================================

// Rute untuk halaman utama (Home)
Route::get('/', function () {
    return view('pages.home');
});

// Rute untuk halaman Wisata
Route::get('/wisata', function () {
    return view('pages.wisata');
});

// Rute untuk halaman Hasil Bumi & UMKM
Route::get('/umkm', function () {
    return view('pages.umkm');
});

// Rute untuk halaman Berita (Ini yang baru ditambahkan)
Route::get('/berita', function () {
    return view('pages.berita');
});

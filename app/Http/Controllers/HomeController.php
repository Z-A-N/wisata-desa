<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Hapus tulisan "extends Controller" di sini
class HomeController
{
    // Method untuk halaman Beranda utama
    public function index()
    {
        return view('pages.home');
    }

    // Method untuk halaman UMKM
    public function umkm()
    {
        return view('pages.umkm');
    }

    // Method untuk halaman Wisata
    public function wisata()
    {
        return view('pages.wisata');
    }

    public function beritaDetail()
    {
        // Akan memanggil file resources/views/pages/berita-detail.blade.php
        return view('pages.berita-detail');
    }
}

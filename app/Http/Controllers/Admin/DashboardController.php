<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

// Hapus tulisan "extends Controller" di sini
class DashboardController
{
    public function index()
    {
        // Mengarahkan ke file resources/views/admin/pages/dashboard.blade.php
        return view('admin.pages.dashboard');
    }
}
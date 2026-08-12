@extends('admin.layouts.main')

@section('title', 'Dashboard - Admin Karangcengis')

@section('content')

<!-- Breadcrumb -->
<div class="flex items-center gap-2 text-sm text-slate-500 mb-8 font-medium">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
    <span>Overview</span>
    <span class="text-slate-300">/</span>
    <span class="text-emerald-600 font-semibold">Dashboard Utama</span>
</div>

<!-- Welcome Banner Modern -->
<div class="relative bg-white rounded-[2rem] p-8 sm:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 overflow-hidden mb-10 group">
    <!-- Dekorasi Background -->
    <div class="absolute right-0 top-0 w-1/2 h-full bg-gradient-to-l from-emerald-50 to-white/0 pointer-events-none"></div>
    <div class="absolute -right-10 -top-24 w-64 h-64 bg-emerald-400/20 rounded-full blur-3xl group-hover:bg-teal-400/30 transition-colors duration-700 pointer-events-none"></div>
    
    <div class="relative z-10 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
        <div>
            <span class="inline-block py-1 px-3 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold tracking-wide mb-3">UPDATE SISTEM</span>
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight mb-2">Selamat Datang di Panel Kendali ✨</h2>
            <p class="text-slate-500 text-sm sm:text-base max-w-xl leading-relaxed">
                Pantau perkembangan UMKM dan kelola data pariwisata Desa Karangcengis secara *real-time* untuk memberikan pengalaman terbaik bagi pengunjung.
            </p>
        </div>
        <button class="shrink-0 bg-slate-900 hover:bg-emerald-600 text-white font-semibold py-3 px-6 rounded-2xl shadow-xl shadow-slate-900/20 hover:shadow-emerald-500/30 transition-all duration-300 hover:-translate-y-1">
            + Tambah Data Baru
        </button>
    </div>
</div>

<!-- Modern Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
    
    <!-- Stat 1 -->
    <div class="bg-white rounded-[2rem] p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 relative overflow-hidden group">
        <div class="flex justify-between items-start mb-6">
            <div>
                <p class="text-sm font-semibold text-slate-500 mb-1">Total UMKM</p>
                <h3 class="text-4xl font-black text-slate-800">24</h3>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-500 group-hover:scale-110 group-hover:rotate-6 transition-transform">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <span class="flex items-center gap-1 text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-lg">
                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg>
                12%
            </span>
            <span class="text-xs font-medium text-slate-400">vs bulan lalu</span>
        </div>
    </div>

    <!-- Stat 2 -->
    <div class="bg-white rounded-[2rem] p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 relative overflow-hidden group">
        <div class="flex justify-between items-start mb-6">
            <div>
                <p class="text-sm font-semibold text-slate-500 mb-1">Destinasi Wisata</p>
                <h3 class="text-4xl font-black text-slate-800">8</h3>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-500 group-hover:scale-110 group-hover:-rotate-6 transition-transform">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" /></svg>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <span class="flex items-center gap-1 text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-lg">
                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg>
                2 Baru
            </span>
            <span class="text-xs font-medium text-slate-400">minggu ini</span>
        </div>
    </div>

    <!-- Stat 3 -->
    <div class="bg-white rounded-[2rem] p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 relative overflow-hidden group">
        <div class="flex justify-between items-start mb-6">
            <div>
                <p class="text-sm font-semibold text-slate-500 mb-1">Klik Kontak</p>
                <h3 class="text-4xl font-black text-slate-800">142</h3>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-500 group-hover:scale-110 group-hover:rotate-6 transition-transform">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" /></svg>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <span class="flex items-center gap-1 text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-lg">
                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg>
                24%
            </span>
            <span class="text-xs font-medium text-slate-400">kunjungan harian</span>
        </div>
    </div>
</div>

<!-- Section Bawah: Timeline & Pintasan -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <!-- Aktivitas Terbaru (Makan tempat 2 kolom) -->
    <div class="lg:col-span-2 bg-white rounded-[2rem] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100">
        <div class="flex items-center justify-between mb-8">
            <h3 class="text-lg font-bold text-slate-800">Aktivitas Terbaru</h3>
            <button class="text-emerald-600 hover:text-emerald-700 text-sm font-semibold">Lihat Semua</button>
        </div>
        
        <div class="space-y-6">
            <!-- Item 1 -->
            <div class="flex items-start gap-4 group cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 shrink-0 group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-slate-800 group-hover:text-emerald-600 transition-colors">Data UMKM Baru Ditambahkan</h4>
                    <p class="text-xs text-slate-500 mt-1">Produk "Jeruk Karangcengis Super" telah masuk ke database.</p>
                    <span class="text-[10px] font-bold text-slate-400 mt-2 block">2 Jam yang lalu</span>
                </div>
            </div>
            
            <!-- Item 2 -->
            <div class="flex items-start gap-4 group cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-amber-50 flex items-center justify-center text-amber-500 shrink-0 group-hover:bg-amber-500 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-slate-800 group-hover:text-amber-600 transition-colors">Pembaruan Destinasi</h4>
                    <p class="text-xs text-slate-500 mt-1">Deskripsi "Botania Garden" diperbarui oleh Admin.</p>
                    <span class="text-[10px] font-bold text-slate-400 mt-2 block">5 Jam yang lalu</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions (Makan tempat 1 kolom) -->
    <div class="bg-gradient-to-br from-slate-900 to-slate-800 rounded-[2rem] p-8 shadow-xl text-white relative overflow-hidden">
        <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-emerald-500/20 rounded-full blur-2xl"></div>
        <h3 class="text-lg font-bold text-white mb-6 relative z-10">Pintasan Cepat</h3>
        
        <div class="space-y-3 relative z-10">
            <button class="w-full bg-white/10 hover:bg-white/20 border border-white/10 p-4 rounded-xl flex items-center gap-3 transition-all group">
                <div class="bg-white/10 p-2 rounded-lg group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg>
                </div>
                <span class="text-sm font-medium">Unggah Foto Galeri</span>
            </button>
            
            <button class="w-full bg-white/10 hover:bg-white/20 border border-white/10 p-4 rounded-xl flex items-center gap-3 transition-all group">
                <div class="bg-white/10 p-2 rounded-lg group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <span class="text-sm font-medium">Pengaturan Web</span>
            </button>
        </div>
    </div>
</div>

@endsection
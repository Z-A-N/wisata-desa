@extends('layouts.main')

@section('title', 'Kabar Desa - Desa Wisata Karangcengis')

@section('content')

    <!-- 1. HEADER (Clean & Elegan) -->
    <section class="pt-32 pb-8 bg-slate-50 relative overflow-hidden">
        <!-- Ornamen Latar Belakang Halus -->
        <div class="absolute -left-20 top-0 w-96 h-96 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        <div class="absolute right-0 bottom-0 w-72 h-72 bg-teal-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                
                <!-- Judul Halaman -->
                <div class="w-full md:w-1/2">
                    <span class="inline-flex items-center gap-2 text-emerald-600 font-extrabold text-xs tracking-widest uppercase mb-3 px-4 py-1.5 rounded-full bg-emerald-100/50 border border-emerald-200/50 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Update Desa
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight">
                        Kabar <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">Desa</span>
                    </h1>
                </div>

                <!-- Search Bar -->
                <div class="w-full md:w-1/3">
                    <div class="relative w-full shadow-sm group">
                        <input type="text" placeholder="Cari kabar terbaru..." class="w-full pl-12 pr-4 py-3.5 rounded-2xl border-none shadow-[0_8px_30px_rgb(0,0,0,0.04)] bg-white focus:ring-4 focus:ring-emerald-500/20 outline-none text-sm font-medium transition-all group-hover:shadow-[0_8px_30px_rgb(16,185,129,0.1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-emerald-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </div>
                </div>

            </div>

            <!-- Kategori / Tab (Gaya Elegan) -->
            <div class="flex overflow-x-auto gap-3 mt-10 pb-2 scrollbar-hide">
                <a href="#" class="whitespace-nowrap px-6 py-2.5 rounded-2xl bg-emerald-600 text-white text-sm font-bold shadow-md shadow-emerald-500/30 hover:-translate-y-0.5 transition-transform">Semua Berita</a>
                <a href="#" class="whitespace-nowrap px-6 py-2.5 rounded-2xl bg-white text-slate-600 text-sm font-bold shadow-sm hover:shadow-md hover:text-emerald-600 transition-all">Pemerintahan</a>
                <a href="#" class="whitespace-nowrap px-6 py-2.5 rounded-2xl bg-white text-slate-600 text-sm font-bold shadow-sm hover:shadow-md hover:text-emerald-600 transition-all">Pariwisata</a>
                <a href="#" class="whitespace-nowrap px-6 py-2.5 rounded-2xl bg-white text-slate-600 text-sm font-bold shadow-sm hover:shadow-md hover:text-emerald-600 transition-all">Pertanian & UMKM</a>
                <a href="#" class="whitespace-nowrap px-6 py-2.5 rounded-2xl bg-white text-slate-600 text-sm font-bold shadow-sm hover:shadow-md hover:text-emerald-600 transition-all">Agenda</a>
            </div>
        </div>
    </section>

    <!-- 2. HIGHLIGHT SECTION (1 Berita Besar + List Berita di Kanan) -->
    <section class="pb-12 bg-slate-50 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                
                <!-- Headline Utama (Kiri, Besar, Porsi 8 Kolom) -->
                <a href="#" class="group relative col-span-1 lg:col-span-8 h-[400px] lg:h-[500px] rounded-[2.5rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(16,185,129,0.15)] transition-all duration-500">
                    <!-- Gambar -->
                    <img src="https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=1200" alt="Headline" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000 ease-in-out">
                    <!-- Gradient Overlay yang Halus -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-90"></div>
                    
                    <!-- Label Kategori -->
                    <div class="absolute top-6 left-6">
                        <span class="bg-emerald-500/90 backdrop-blur-md text-white text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-xl shadow-lg border border-white/20">Sorotan</span>
                    </div>

                    <!-- Teks Berita Utama -->
                    <div class="absolute bottom-0 left-0 p-6 sm:p-10 w-full md:w-4/5">
                        <div class="flex items-center gap-3 text-slate-300 text-xs font-semibold mb-4">
                            <span class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                12 Agustus 2026
                            </span>
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            <span>Admin Desa</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mb-4 leading-tight group-hover:text-emerald-300 transition-colors">
                            Panen Raya Jeruk Berjalan Sukses, Petani Karangcengis Gembira
                        </h2>
                        <p class="text-slate-200 text-sm md:text-base line-clamp-2 leading-relaxed">
                            Musim panen jeruk di kawasan Botania Garden kali ini menghasilkan buah dengan kualitas super berkat penerapan sistem irigasi baru.
                        </p>
                    </div>
                </a>

                <!-- Daftar Berita Populer (Kanan, Porsi 4 Kolom) -->
                <div class="col-span-1 lg:col-span-4 bg-white rounded-[2.5rem] p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 flex flex-col">
                    
                    <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-100">
                        <h3 class="text-lg font-extrabold text-slate-900 flex items-center gap-2">
                            <span class="w-2 h-6 rounded-full bg-emerald-500"></span> Sedang Hangat
                        </h3>
                    </div>

                    <!-- List Berita (Padat & Rapi) -->
                    <div class="flex flex-col gap-5 flex-1 justify-between">
                        
                        <!-- Item Hangat 1 -->
                        <a href="#" class="group flex gap-4 items-center">
                            <div class="w-20 h-20 rounded-2xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=400" alt="News" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex-1">
                                <span class="text-[10px] font-bold text-indigo-500 uppercase tracking-wider mb-1 block">Pemerintahan</span>
                                <h4 class="text-sm font-bold text-slate-800 leading-snug group-hover:text-emerald-600 transition-colors line-clamp-2">Peresmian Jalan Baru Mempermudah Akses Menuju Agrowisata</h4>
                            </div>
                        </a>

                        <!-- Item Hangat 2 -->
                        <a href="#" class="group flex gap-4 items-center">
                            <div class="w-20 h-20 rounded-2xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=400" alt="News" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex-1">
                                <span class="text-[10px] font-bold text-teal-500 uppercase tracking-wider mb-1 block">Pariwisata</span>
                                <h4 class="text-sm font-bold text-slate-800 leading-snug group-hover:text-emerald-600 transition-colors line-clamp-2">Kunjungan Wisatawan Meningkat Pesat di Libur Akhir Pekan</h4>
                            </div>
                        </a>

                        <!-- Item Hangat 3 -->
                        <a href="#" class="group flex gap-4 items-center">
                            <div class="w-20 h-20 rounded-2xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=400" alt="News" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex-1">
                                <span class="text-[10px] font-bold text-amber-500 uppercase tracking-wider mb-1 block">Acara</span>
                                <h4 class="text-sm font-bold text-slate-800 leading-snug group-hover:text-emerald-600 transition-colors line-clamp-2">Festival Jajanan Tradisional Siap Digelar Minggu Depan!</h4>
                            </div>
                        </a>
                        
                    </div>

                    <!-- Tombol Lainya (Bawah Box) -->
                    <a href="#" class="mt-6 w-full py-3 bg-slate-50 hover:bg-emerald-50 text-slate-600 hover:text-emerald-600 text-sm font-bold text-center rounded-xl transition-colors border border-slate-100 hover:border-emerald-200 flex items-center justify-center gap-2 group">
                        Lihat Topik Lainnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTENT SECTION (Main News + Sidebar) -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                
                <!-- KIRI: Daftar Berita Terbaru -->
                <div class="lg:col-span-8">
                    <div class="flex items-center justify-between border-b-2 border-slate-100 pb-3 mb-6">
                        <h3 class="text-xl font-extrabold text-slate-900 uppercase">Berita <span class="text-emerald-600">Terbaru</span></h3>
                    </div>

                    <div class="space-y-8">
                        
                        <!-- List Item 1 -->
                        <article class="group flex flex-col sm:flex-row gap-5">
                            <a href="#" class="w-full sm:w-2/5 h-48 sm:h-auto relative rounded-2xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1595225330364-c2c31e67bb93?q=80&w=800" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" alt="News">
                            </a>
                            <div class="flex flex-col justify-center py-1">
                                <div class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-2">
                                    <span class="text-indigo-600 uppercase tracking-wider">UMKM</span>
                                    <span>•</span>
                                    <span>05 Ags 2026</span>
                                </div>
                                <a href="#">
                                    <h4 class="text-xl font-bold text-slate-900 leading-tight mb-2 group-hover:text-emerald-600 transition-colors">Pelatihan Anyaman Bambu Sukses Tarik Minat Pemuda Desa</h4>
                                </a>
                                <p class="text-slate-500 text-sm line-clamp-2 mb-4">Dalam upaya melestarikan kerajinan lokal dan meningkatkan kemandirian ekonomi, Pokdarwis mengadakan pelatihan menganyam bambu secara gratis.</p>
                                <a href="{{ url('/berita/detail') }}" class="text-emerald-600 text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all mt-auto">Baca selengkapnya <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></a>
                            </div>
                        </article>

                        <!-- Divider -->
                        <hr class="border-slate-100">

                        <!-- List Item 2 -->
                        <article class="group flex flex-col sm:flex-row gap-5">
                            <a href="#" class="w-full sm:w-2/5 h-48 sm:h-auto relative rounded-2xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=800" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" alt="News">
                            </a>
                            <div class="flex flex-col justify-center py-1">
                                <div class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-2">
                                    <span class="text-amber-600 uppercase tracking-wider">Acara</span>
                                    <span>•</span>
                                    <span>20 Jun 2026</span>
                                </div>
                                <a href="#">
                                    <h4 class="text-xl font-bold text-slate-900 leading-tight mb-2 group-hover:text-emerald-600 transition-colors">Siap-siap! Festival Jajanan Tradisional Digelar Minggu Depan</h4>
                                </a>
                                <p class="text-slate-500 text-sm line-clamp-2 mb-4">Mendoan panas, getuk, dan klepon khas Karangcengis akan memanjakan lidah pengunjung dalam festival tahunan di halaman Balai Desa.</p>
                                <a href="{{ url('/berita/detail') }}" class="text-emerald-600 text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all mt-auto">Baca selengkapnya <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></a>
                            </div>
                        </article>

                        <!-- Divider -->
                        <hr class="border-slate-100">

                        <!-- List Item 3 -->
                        <article class="group flex flex-col sm:flex-row gap-5">
                            <a href="#" class="w-full sm:w-2/5 h-48 sm:h-auto relative rounded-2xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1557800636-894a64c1696f?q=80&w=800" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" alt="News">
                            </a>
                            <div class="flex flex-col justify-center py-1">
                                <div class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-2">
                                    <span class="text-emerald-600 uppercase tracking-wider">Inovasi</span>
                                    <span>•</span>
                                    <span>10 Jun 2026</span>
                                </div>
                                <a href="#">
                                    <h4 class="text-xl font-bold text-slate-900 leading-tight mb-2 group-hover:text-emerald-600 transition-colors">Sistem Pengairan Kebun Berbasis IoT Mulai Diterapkan</h4>
                                </a>
                                <p class="text-slate-500 text-sm line-clamp-2 mb-4">Mahasiswa KKN Universitas ternama bekerja sama dengan petani lokal meluncurkan alat penyiram cerdas yang bisa dipantau langsung dari HP.</p>
                                <a href="{{ url('/berita/detail') }}" class="text-emerald-600 text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all mt-auto">Baca selengkapnya <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></a>
                            </div>
                        </article>

                    </div>

                    <!-- Pagination Modern -->
                    <div class="mt-12 flex justify-center items-center gap-2">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg></a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-emerald-600 text-white font-bold shadow-md">1</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-200 text-slate-600 font-semibold hover:bg-emerald-50 hover:text-emerald-600 transition-colors">2</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-200 text-slate-600 font-semibold hover:bg-emerald-50 hover:text-emerald-600 transition-colors">3</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg></a>
                    </div>
                </div>

                <!-- KANAN: Sidebar Berita Populer -->
                <div class="lg:col-span-4 mt-12 lg:mt-0">
                    <div class="sticky top-28 bg-slate-50 p-6 rounded-3xl border border-slate-100 shadow-sm">
                        
                        <div class="flex items-center gap-2 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                            <h3 class="text-lg font-extrabold text-slate-900 uppercase">Paling Populer</h3>
                        </div>

                        <div class="space-y-6">
                            
                            <!-- Populer 1 -->
                            <a href="#" class="group flex gap-4 items-start">
                                <span class="text-4xl font-black text-slate-200 group-hover:text-emerald-200 transition-colors">1</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-800 leading-snug mb-1 group-hover:text-emerald-600 transition-colors">Daftar Homestay Murah di Karangcengis, Cocok untuk Keluarga</h4>
                                    <p class="text-[11px] text-slate-400">Dibaca 2.4rb kali</p>
                                </div>
                            </a>

                            <!-- Populer 2 -->
                            <a href="#" class="group flex gap-4 items-start">
                                <span class="text-4xl font-black text-slate-200 group-hover:text-emerald-200 transition-colors">2</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-800 leading-snug mb-1 group-hover:text-emerald-600 transition-colors">Alokasi Dana Desa 2026: Fokus Perbaikan Saluran Irigasi</h4>
                                    <p class="text-[11px] text-slate-400">Dibaca 1.8rb kali</p>
                                </div>
                            </a>

                            <!-- Populer 3 -->
                            <a href="#" class="group flex gap-4 items-start">
                                <span class="text-4xl font-black text-slate-200 group-hover:text-emerald-200 transition-colors">3</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-800 leading-snug mb-1 group-hover:text-emerald-600 transition-colors">Resep Keripik Pisang Khas Ibu-ibu PKK yang Laris Manis di Marketplace</h4>
                                    <p class="text-[11px] text-slate-400">Dibaca 1.5rb kali</p>
                                </div>
                            </a>

                            <!-- Populer 4 -->
                            <a href="#" class="group flex gap-4 items-start">
                                <span class="text-4xl font-black text-slate-200 group-hover:text-emerald-200 transition-colors">4</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-800 leading-snug mb-1 group-hover:text-emerald-600 transition-colors">Waspada Kemarau, Ini Imbauan Kades Untuk Penggunaan Air</h4>
                                    <p class="text-[11px] text-slate-400">Dibaca 1.1rb kali</p>
                                </div>
                            </a>

                        </div>

                        <!-- Banner Iklan/Pengumuman (Opsional) -->
                        <div class="mt-8 rounded-2xl overflow-hidden relative group">
                            <img src="https://images.unsplash.com/photo-1574581297576-92bba40a76be?q=80&w=600" alt="Banner" class="w-full h-40 object-cover transform group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-emerald-900/60 flex flex-col items-center justify-center p-4 text-center">
                                <span class="text-white font-bold text-sm mb-1">Panduan Wisata</span>
                                <span class="text-emerald-200 text-xs">Unduh Peta Desa Karangcengis (PDF)</span>
                                <button class="mt-3 px-4 py-1.5 bg-white text-emerald-700 text-xs font-bold rounded-full hover:bg-emerald-100">Download</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
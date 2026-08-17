@extends('layouts.main')

@section('title', 'Hasil Bumi & UMKM - Desa Karangcengis')

@section('content')

    <style>
        /* Animasi Latar Belakang (Blobs) */
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob { animation: blob 8s infinite alternate; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }

        /* Pattern Daun/Titik Organik */
        .bg-organic-pattern {
            background-image: radial-gradient(rgba(16, 185, 129, 0.15) 2px, transparent 2px);
            background-size: 30px 30px;
        }

        /* Transisi Halus antar Halaman (SPA) */
        .page-transition {
            transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
        }
        .page-hidden {
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
            position: absolute;
            width: 100%;
            visibility: hidden;
        }
        .page-visible {
            opacity: 1;
            transform: translateY(0);
            position: relative;
            visibility: visible;
        }
    </style>

    <!-- WRAPPER UTAMA -->
    <div class="relative bg-slate-50 min-h-screen overflow-hidden">
        
        <!-- ========================================== -->
        <!-- DEKORASI SECTION (Rame & Vibrant)          -->
        <!-- ========================================== -->
        <!-- Efek Cahaya Latar Belakang Utama -->
        <div class="absolute top-[-10%] right-[-5%] w-[400px] sm:w-[600px] h-[400px] sm:h-[600px] bg-gradient-to-br from-emerald-300 to-teal-200 rounded-full mix-blend-multiply filter blur-[80px] sm:blur-[120px] animate-blob pointer-events-none z-0 opacity-70"></div>
        <div class="absolute top-[10%] left-[-10%] w-[300px] sm:w-[500px] h-[300px] sm:h-[500px] bg-gradient-to-tr from-amber-200 to-yellow-300 rounded-full mix-blend-multiply filter blur-[80px] sm:blur-[120px] animate-blob animation-delay-2000 pointer-events-none z-0 opacity-60"></div>
        <div class="absolute top-[40%] right-[20%] w-[400px] h-[400px] bg-sky-200 rounded-full mix-blend-multiply filter blur-[100px] animate-blob animation-delay-4000 pointer-events-none z-0 opacity-50"></div>
        
        <!-- Pattern Keseluruhan -->
        <div class="absolute inset-0 bg-organic-pattern z-0 pointer-events-none opacity-60"></div>

        <!-- ========================================== -->
        <!-- VIEW 1: KATALOG UTAMA                      -->
        <!-- ========================================== -->
        <div id="view-catalog" class="page-transition page-visible relative z-10 pt-32 pb-32">
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- HERO HEADER (Atraktif tapi Clean) -->
                <div class="text-center max-w-4xl mx-auto mb-16" data-aos="fade-down">
                    
                    <!-- Badge Atas -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 backdrop-blur-md border border-emerald-100 shadow-sm mb-6">
                        <span class="flex h-3 w-3 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                        </span>
                        <span class="text-xs font-black text-emerald-700 uppercase tracking-widest">Pusat Ekonomi Desa</span>
                    </div>

                    <!-- Judul Besar -->
                    <h1 class="text-4xl md:text-6xl font-black text-slate-900 tracking-tight mb-5 leading-tight">
                        Eksplorasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-500 via-teal-500 to-sky-500">Hasil Bumi</span> & <br class="hidden sm:block"> Karya Warga Kita
                    </h1>
                    
                    <p class="text-slate-600 text-base md:text-lg leading-relaxed mb-10 max-w-2xl mx-auto font-medium">
                        Dukung kemandirian Karangcengis dengan berbelanja produk lokal terbaik langsung dari tangan pertama. Segar, otentik, dan berkualitas!
                    </p>

                    <!-- Filter Bar Minimalis & Elegan -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 max-w-2xl mx-auto">
                        <div class="relative w-full sm:w-2/3">
                            <input type="text" placeholder="Cari produk unggulan..." class="w-full pl-12 pr-4 py-3.5 rounded-2xl border border-white/80 shadow-lg shadow-emerald-900/5 focus:ring-2 focus:ring-emerald-400 outline-none text-sm font-medium bg-white/80 backdrop-blur-lg text-slate-800 transition">
                            <svg class="h-5 w-5 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        </div>
                        <select class="w-full sm:w-1/3 px-4 py-3.5 rounded-2xl border border-white/80 shadow-lg shadow-emerald-900/5 focus:ring-2 focus:ring-emerald-400 outline-none text-sm font-medium text-slate-600 cursor-pointer appearance-none bg-white/80 backdrop-blur-lg transition text-center">
                            <option value="semua">Semua Kategori</option>
                            <option value="buah">Hasil Bumi</option>
                            <option value="kerajinan">Kerajinan</option>
                            <option value="kuliner">Kuliner Olahan</option>
                        </select>
                    </div>
                </div>
                
                <!-- GRID PRODUK: (Clean & Minimalis) -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6" data-aos="fade-up">
                    
                    <!-- KARTU 1 -->
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer group"
                         onclick="showDetail('Jeruk Karangcengis', 'Rp 15.000', '/ kg', 'Jeruk berkualitas super hasil budidaya kebun desa Karangcengis. Manis, segar, dan dipetik langsung saat Anda memesan.', 'https://images.unsplash.com/photo-1557800636-894a64c1696f?w=800', 'Hasil Bumi', 'Tani Makmur', 'TM', 'Dusun II, Desa Karangcengis', 'https://wa.me/6281234567890')">
                        <div class="relative aspect-square overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1557800636-894a64c1696f?w=800" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                            <div class="absolute top-3 left-3 bg-white/95 backdrop-blur text-slate-700 text-[10px] font-bold px-3 py-1.5 rounded-lg shadow-sm">Hasil Bumi</div>
                        </div>
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm sm:text-base font-bold text-slate-800 mb-1 group-hover:text-emerald-600 transition-colors line-clamp-2">Jeruk Karangcengis</h3>
                                <p class="text-emerald-600 font-black text-base sm:text-lg mb-4">Rp 15.000<span class="text-[10px] text-slate-400 font-medium"> / kg</span></p>
                            </div>
                            <div class="pt-3 border-t border-slate-100 flex items-center gap-3 mt-auto">
                                <div class="w-9 h-9 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-600 font-bold text-xs shrink-0">TM</div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-800 line-clamp-1">Tani Makmur</span>
                                    <span class="text-[10px] text-slate-500 flex items-center gap-1 mt-0.5">
                                        <svg class="w-3 h-3 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        Dusun II
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KARTU 2 -->
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer group"
                         onclick="showDetail('Jambu Kristal Tanpa Biji', 'Rp 20.000', '/ kg', 'Jambu kristal super renyah, manis, dan tanpa biji. Dipanen setiap pagi untuk menjaga kesegarannya.', 'https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?w=800', 'Hasil Bumi', 'Ibu Siti', 'IS', 'RT 01/RW 03, Karangcengis', 'https://wa.me/6281234567890')">
                        <div class="relative aspect-square overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?w=800" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                            <div class="absolute top-3 left-3 bg-white/95 backdrop-blur text-slate-700 text-[10px] font-bold px-3 py-1.5 rounded-lg shadow-sm">Hasil Bumi</div>
                        </div>
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm sm:text-base font-bold text-slate-800 mb-1 group-hover:text-emerald-600 transition-colors line-clamp-2">Jambu Kristal Tanpa Biji</h3>
                                <p class="text-emerald-600 font-black text-base sm:text-lg mb-4">Rp 20.000<span class="text-[10px] text-slate-400 font-medium"> / kg</span></p>
                            </div>
                            <div class="pt-3 border-t border-slate-100 flex items-center gap-3 mt-auto">
                                <div class="w-9 h-9 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-600 font-bold text-xs shrink-0">IS</div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-800 line-clamp-1">Ibu Siti</span>
                                    <span class="text-[10px] text-slate-500 flex items-center gap-1 mt-0.5">
                                        <svg class="w-3 h-3 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        RT 01/RW 03
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KARTU 3 -->
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer group"
                         onclick="showDetail('Keranjang Anyaman Bambu', 'Rp 35.000', '/ pcs', 'Kerajinan anyaman bambu khas pedesaan asli buatan tangan ibu-ibu. Estetik, kuat, dan tahan lama.', 'https://images.unsplash.com/photo-1595225330364-c2c31e67bb93?w=800', 'Kerajinan', 'Paguyuban Kriya', 'PK', 'Balai Desa Karangcengis', 'https://wa.me/6281234567890')">
                        <div class="relative aspect-square overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1595225330364-c2c31e67bb93?w=800" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                            <div class="absolute top-3 left-3 bg-white/95 backdrop-blur text-slate-700 text-[10px] font-bold px-3 py-1.5 rounded-lg shadow-sm">Kerajinan</div>
                        </div>
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm sm:text-base font-bold text-slate-800 mb-1 group-hover:text-emerald-600 transition-colors line-clamp-2">Keranjang Anyaman Bambu</h3>
                                <p class="text-emerald-600 font-black text-base sm:text-lg mb-4">Rp 35.000<span class="text-[10px] text-slate-400 font-medium"> / pcs</span></p>
                            </div>
                            <div class="pt-3 border-t border-slate-100 flex items-center gap-3 mt-auto">
                                <div class="w-9 h-9 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-600 font-bold text-xs shrink-0">PK</div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-800 line-clamp-1">Paguyuban Kriya</span>
                                    <span class="text-[10px] text-slate-500 flex items-center gap-1 mt-0.5">
                                        <svg class="w-3 h-3 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        Balai Desa
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KARTU 4 -->
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer group"
                         onclick="showDetail('Gula Kelapa / Gula Merah Asli', 'Rp 18.000', '/ kg', 'Gula merah murni tanpa bahan pengawet hasil penderes lokal. Sangat cocok untuk bumbu masak.', 'https://images.unsplash.com/photo-1621251911961-4c7b8081f953?w=800', 'Hasil Bumi', 'Bapak Sugeng', 'BS', 'Dusun I, Karangcengis', 'https://wa.me/6281234567890')">
                        <div class="relative aspect-square overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1621251911961-4c7b8081f953?w=800" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                            <div class="absolute top-3 left-3 bg-white/95 backdrop-blur text-slate-700 text-[10px] font-bold px-3 py-1.5 rounded-lg shadow-sm">Hasil Bumi</div>
                        </div>
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm sm:text-base font-bold text-slate-800 mb-1 group-hover:text-emerald-600 transition-colors line-clamp-2">Gula Kelapa Asli</h3>
                                <p class="text-emerald-600 font-black text-base sm:text-lg mb-4">Rp 18.000<span class="text-[10px] text-slate-400 font-medium"> / kg</span></p>
                            </div>
                            <div class="pt-3 border-t border-slate-100 flex items-center gap-3 mt-auto">
                                <div class="w-9 h-9 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-600 font-bold text-xs shrink-0">BS</div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-800 line-clamp-1">Bapak Sugeng</span>
                                    <span class="text-[10px] text-slate-500 flex items-center gap-1 mt-0.5">
                                        <svg class="w-3 h-3 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        Dusun I
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KARTU 5 -->
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer group"
                         onclick="showDetail('Kopi Bubuk Robusta Desa', 'Rp 25.000', '/ 250gr', 'Kopi robusta hasil petikan kebun desa yang disangrai manual menggunakan tungku kayu bakar.', 'https://images.unsplash.com/photo-1559525839-b184a4d698c7?w=800', 'Kuliner', 'Warung Mbah Dar', 'MD', 'Pertigaan Desa Karangcengis', 'https://wa.me/6281234567890')">
                        <div class="relative aspect-square overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1559525839-b184a4d698c7?w=800" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                            <div class="absolute top-3 left-3 bg-white/95 backdrop-blur text-slate-700 text-[10px] font-bold px-3 py-1.5 rounded-lg shadow-sm">Kuliner</div>
                        </div>
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm sm:text-base font-bold text-slate-800 mb-1 group-hover:text-emerald-600 transition-colors line-clamp-2">Kopi Bubuk Robusta Desa</h3>
                                <p class="text-emerald-600 font-black text-base sm:text-lg mb-4">Rp 25.000<span class="text-[10px] text-slate-400 font-medium"> / 250g</span></p>
                            </div>
                            <div class="pt-3 border-t border-slate-100 flex items-center gap-3 mt-auto">
                                <div class="w-9 h-9 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-600 font-bold text-xs shrink-0">MD</div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-800 line-clamp-1">Warung Mbah Dar</span>
                                    <span class="text-[10px] text-slate-500 flex items-center gap-1 mt-0.5">
                                        <svg class="w-3 h-3 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        Pertigaan Desa
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KARTU 6 -->
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden cursor-pointer group"
                         onclick="showDetail('Keripik Pisang Manis Gurih', 'Rp 12.000', '/ bungkus', 'Keripik pisang kepok yang diiris tipis dengan bumbu manis gurih rahasia. Sangat renyah!', 'https://images.unsplash.com/photo-1621852004158-f3bc188ace2d?w=800', 'Kuliner', 'Snack Ndeso', 'SN', 'Dusun III, Bukateja', 'https://wa.me/6281234567890')">
                        <div class="relative aspect-square overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1621852004158-f3bc188ace2d?w=800" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                            <div class="absolute top-3 left-3 bg-white/95 backdrop-blur text-slate-700 text-[10px] font-bold px-3 py-1.5 rounded-lg shadow-sm">Kuliner</div>
                        </div>
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm sm:text-base font-bold text-slate-800 mb-1 group-hover:text-emerald-600 transition-colors line-clamp-2">Keripik Pisang Manis</h3>
                                <p class="text-emerald-600 font-black text-base sm:text-lg mb-4">Rp 12.000<span class="text-[10px] text-slate-400 font-medium"> / bks</span></p>
                            </div>
                            <div class="pt-3 border-t border-slate-100 flex items-center gap-3 mt-auto">
                                <div class="w-9 h-9 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-600 font-bold text-xs shrink-0">SN</div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-slate-800 line-clamp-1">Snack Ndeso</span>
                                    <span class="text-[10px] text-slate-500 flex items-center gap-1 mt-0.5">
                                        <svg class="w-3 h-3 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        Dusun III
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- Tombol Muat Lebih Banyak -->
                <div class="flex justify-center mt-12" data-aos="fade-up">
                    <button class="px-8 py-3.5 bg-white border border-slate-200 text-slate-600 font-bold rounded-xl shadow-sm hover:shadow hover:text-emerald-600 transition-all flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
                        Tampilkan Lebih Banyak
                    </button>
                </div>

            </div>
        </div>

        <!-- ========================================== -->
        <!-- VIEW 2: HALAMAN DETAIL PRODUK              -->
        <!-- ========================================== -->
        <div id="view-detail" class="page-transition page-hidden relative z-20 pt-32 pb-32 min-h-screen">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Breadcrumb & Tombol Kembali -->
                <div class="flex flex-wrap items-center gap-4 mb-8">
                    <button onclick="hideDetail()" class="group flex items-center gap-2 px-4 py-2.5 bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow text-slate-600 hover:text-emerald-600 font-bold text-sm transition-all">
                        <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                        Kembali ke Katalog
                    </button>
                    <div class="hidden sm:flex items-center gap-2 text-xs font-bold text-slate-400 uppercase tracking-widest">
                        <span>Produk UMKM</span>
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        <span id="detail-category-crumb" class="text-emerald-600">Kategori</span>
                    </div>
                </div>

                <!-- Kontainer Layout Detail -->
                <div class="bg-white border border-slate-100 rounded-[2rem] p-5 sm:p-8 lg:p-10 shadow-[0_10px_40px_rgb(0,0,0,0.05)]">
                    <div class="flex flex-col lg:grid lg:grid-cols-12 gap-8 lg:gap-12">
                        
                        <!-- Kolom Kiri: Gambar Produk -->
                        <div class="w-full lg:col-span-5 flex flex-col">
                            <div class="relative w-full aspect-square bg-slate-100 rounded-[1.5rem] overflow-hidden">
                                <img id="detail-img" src="" class="w-full h-full object-cover">
                            </div>
                        </div>

                        <!-- Kolom Kanan: Info Produk -->
                        <div class="w-full lg:col-span-7 flex flex-col justify-center">
                            
                            <div class="mb-3">
                                <span id="detail-category" class="inline-block bg-slate-100 text-slate-600 font-bold text-[10px] uppercase tracking-widest px-3 py-1.5 rounded-md">Kategori</span>
                            </div>

                            <h2 id="detail-title" class="text-3xl sm:text-4xl font-black text-slate-900 leading-tight mb-3">Nama Produk</h2>
                            
                            <div class="flex items-end gap-2 mb-8 pb-6 border-b border-slate-100">
                                <span id="detail-price" class="text-3xl sm:text-4xl font-black text-emerald-600">Rp 0</span>
                                <span id="detail-unit" class="text-slate-400 font-medium text-lg mb-1">/ unit</span>
                            </div>

                            <div class="bg-slate-50 border border-slate-100 rounded-2xl p-5 mb-8 flex items-center gap-4">
                                <div id="detail-seller-initial" class="w-12 h-12 rounded-full bg-white border border-slate-200 shadow-sm flex items-center justify-center text-slate-600 font-bold text-sm">
                                    TM
                                </div>
                                <div class="flex-1">
                                    <h3 id="detail-seller-name" class="text-sm font-bold text-slate-800">Nama Penjual</h3>
                                    <div class="flex items-center gap-1.5 mt-1 text-slate-500 text-[11px]">
                                        <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        <span id="detail-seller-location">Lokasi Penjual</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-10">
                                <h3 class="text-sm font-bold text-slate-900 mb-2">Deskripsi Produk</h3>
                                <p id="detail-desc" class="text-slate-600 text-sm leading-relaxed">Isi deskripsi produk akan muncul di sini.</p>
                            </div>

                            <div class="mt-auto">
                                <a id="btn-buy" href="#" target="_blank" class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-bold text-base py-4 px-6 rounded-xl flex items-center justify-center gap-2 transition-all shadow-lg shadow-emerald-500/25">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                                    Hubungi Penjual via WhatsApp
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 20, duration: 700 });

        const viewCatalog = document.getElementById('view-catalog');
        const viewDetail = document.getElementById('view-detail');

        window.showDetail = (title, price, unit, desc, img, category, sellerName, sellerInitial, sellerLocation, waLink) => {
            document.getElementById('detail-title').innerText = title;
            document.getElementById('detail-price').innerText = price;
            document.getElementById('detail-unit').innerText = unit;
            document.getElementById('detail-desc').innerText = desc;
            document.getElementById('detail-img').src = img;
            document.getElementById('detail-category').innerText = category;
            document.getElementById('detail-category-crumb').innerText = category;
            
            document.getElementById('detail-seller-name').innerText = sellerName;
            document.getElementById('detail-seller-initial').innerText = sellerInitial;
            document.getElementById('detail-seller-location').innerText = sellerLocation;
            
            document.getElementById('btn-buy').href = waLink;

            viewCatalog.classList.remove('page-visible');
            viewCatalog.classList.add('page-hidden');

            setTimeout(() => {
                viewDetail.classList.remove('page-hidden');
                viewDetail.classList.add('page-visible');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }, 300);
        };

        window.hideDetail = () => {
            viewDetail.classList.remove('page-visible');
            viewDetail.classList.add('page-hidden');

            setTimeout(() => {
                viewCatalog.classList.remove('page-hidden');
                viewCatalog.classList.add('page-visible');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }, 300);
        };
    </script>

@endsection
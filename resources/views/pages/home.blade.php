@extends('layouts.main')

@section('title', 'Beranda - Desa Wisata Karangcengis')

@section('content')

<style>
    .hero-bg {
        background-image:
            linear-gradient(
                180deg,
                rgba(15,23,42,.5) 0%,
                rgba(15,23,42,.85) 100%
            ),
            url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=2000');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .glass-card {
        background: rgba(255,255,255,.85);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255,255,255,.3);
    }
    
    /* Animasi fade in untuk masing-masing huruf (Sangat smooth) */
    .char-reveal {
        opacity: 0;
        transition: opacity 0.4s ease-out; /* Transisi pudar yang halus */
    }
    
    .char-reveal.active {
        opacity: 1;
    }
</style>

    <!-- Hero Section -->
    <section id="beranda" class="hero-bg min-h-screen flex items-center justify-center relative pt-24 pb-16 px-4">
        <div class="max-w-5xl mx-auto text-center relative z-10" data-aos="fade-up" data-aos-duration="1000">
            <div class="inline-flex items-center gap-2 bg-emerald-500/20 border border-emerald-400/30 backdrop-blur-md px-4 py-1.5 rounded-full text-emerald-300 text-xs font-medium mb-6">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Kecamatan Bukateja, Kab. Purbalingga
            </div>

            <!-- Bagian ini sudah dipastikan keduanya memiliki class 'reveal-text' -->
            <h1 class="text-4xl sm:text-6xl md:text-7xl font-black text-white mb-6 leading-tight tracking-tight min-h-[100px] sm:min-h-[140px] md:min-h-[170px] lg:min-h-[180px]">
                <span class="reveal-text">Jelajahi Surga Agrowisata</span>
                <br class="hidden sm:block">
                <!-- Teks gradasi ini juga akan dianimasikan menyambung -->
                <span class="reveal-text text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-teal-300 to-green-200">Desa Karangcengis</span>
            </h1>

            <p class="text-base sm:text-lg md:text-xl text-slate-300 mb-10 max-w-3xl mx-auto leading-relaxed font-normal">
                Nikmati udara segar pedesaan, petik buah langsung dari kebunnya, dan dukung produk lokal asli buatan masyarakat Karangcengis.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#wisata" class="w-full sm:w-auto bg-emerald-500 hover:bg-emerald-600 text-white font-bold px-8 py-4 rounded-2xl shadow-xl shadow-emerald-500/25 transition duration-300 transform hover:-translate-y-1 text-sm">
                    Jelajahi Wisata
                </a>
            </div>
        </div>

        <!-- Floating Stats Banner -->
        <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 w-11/12 max-w-4xl hidden md:block z-20">
            <div class="glass-card rounded-3xl p-6 shadow-2xl border border-white/40 grid grid-cols-3 divide-x divide-slate-200">
                <div class="text-center px-4">
                    <span class="block text-2xl font-extrabold text-emerald-700">Botania Garden</span>
                    <span class="text-xs text-slate-500 font-medium">Ikon Agrowisata Utama</span>
                </div>
                <div class="text-center px-4">
                    <span class="block text-2xl font-extrabold text-emerald-700">Jeruk & Jambu</span>
                    <span class="text-xs text-slate-500 font-medium">Hasil Tani Unggulan</span>
                </div>
                <div class="text-center px-4">
                    <span class="block text-2xl font-extrabold text-emerald-700">100% Lokal</span>
                    <span class="text-xs text-slate-500 font-medium">Dikelola Warga Desa</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tentang Desa -->
    <section id="tentang" class="pt-40 pb-24 bg-white relative overflow-hidden">
        <!-- Ornamen Latar Belakang -->
        <div class="absolute -left-20 top-20 w-96 h-96 bg-emerald-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
        <div class="absolute right-0 bottom-10 w-72 h-72 bg-teal-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <!-- Bagian Teks (Kiri) -->
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-flex items-center gap-2 text-emerald-600 font-extrabold text-xs tracking-widest uppercase mb-4 px-4 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Profil Desa
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-6">
                        Mengenal Lebih Dekat <br class="hidden lg:block" />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-400">Karangcengis</span>
                    </h2>
                    <p class="text-slate-600 text-base md:text-lg leading-relaxed mb-6">
                        Desa Wisata Karangcengis adalah surga tersembunyi di Kecamatan Bukateja yang memadukan keasrian alam dan kearifan lokal. Kami mengajak Anda untuk kembali menyatu dengan alam, menjauh sejenak dari hiruk-pikuk perkotaan.
                    </p>
                    <p class="text-slate-600 text-base leading-relaxed mb-8">
                        Mayoritas masyarakat kami berprofesi sebagai petani yang menjunjung tinggi semangat gotong-royong. Bersama-sama, kami mengelola potensi desa ini menjadi kawasan agrowisata mandiri yang menyajikan buah segar dan produk kerajinan berkualitas.
                    </p>
                    
                    <!-- Poin Keunggulan -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center shrink-0 text-emerald-600 shadow-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <div>
                                <h4 class="text-slate-900 font-bold mb-1">Agrowisata Subur</h4>
                                <p class="text-sm text-slate-500 leading-relaxed">Tanah vulkanis yang cocok untuk perkebunan jeruk dan jambu.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center shrink-0 text-emerald-600 shadow-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </div>
                            <div>
                                <h4 class="text-slate-900 font-bold mb-1">Dikelola Warga</h4>
                                <p class="text-sm text-slate-500 leading-relaxed">Diberdayakan langsung oleh kelompok sadar wisata (Pokdarwis) desa.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bagian Galeri (Kanan) -->
                <div class="relative" data-aos="fade-left" data-aos-duration="1000">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4 pt-12">
                            <div class="rounded-[2rem] overflow-hidden shadow-lg h-48 sm:h-64 border-4 border-white">
                                <img src="{{ asset('suasana.jpg') }}" alt="Suasana Desa" class="w-full h-full object-cover hover:scale-110 transition duration-700">
                            </div>
                            <div class="rounded-[2rem] overflow-hidden shadow-lg h-32 sm:h-48 border-4 border-white">
                                <img src="{{ asset('kebunjeruk.jpg') }}" alt="Kebun Jeruk" class="w-full h-full object-cover hover:scale-110 transition duration-700">
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="rounded-[2rem] overflow-hidden shadow-lg h-32 sm:h-48 border-4 border-white">
                                <img src="{{ asset('petani.png') }}" alt="Petani Desa" class="w-full h-full object-cover hover:scale-110 transition duration-700">
                            </div>
                            <div class="rounded-[2rem] overflow-hidden shadow-lg h-48 sm:h-64 border-4 border-white">
                                <img src="{{ asset('pemandangan.jpg') }}" alt="Pemandangan Karangcengis" class="w-full h-full object-cover hover:scale-110 transition duration-700">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section Wisata -->
    <section id="wisata" class="pt-24 pb-24 bg-slate-50 relative overflow-hidden">
        <!-- Ornamen Latar Belakang -->
        <div class="absolute top-0 right-0 w-72 h-72 bg-emerald-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-40 left-10 w-72 h-72 bg-teal-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute inset-0 bg-pattern opacity-50"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Wisata -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12" data-aos="fade-up">
                <div>
                    <span class="text-emerald-600 font-extrabold text-xs tracking-widest uppercase mb-3 flex items-center gap-2">
                        <span class="w-8 h-0.5 bg-emerald-600 rounded-full"></span>
                        Eksplorasi Desa
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">Destinasi Wisata</h2>
                    <p class="text-slate-500 text-sm mt-3 max-w-lg leading-relaxed">
                        Temukan berbagai spot rekreasi edukatif dan alami yang siap memanjakan momen liburan keluarga Anda di Karangcengis.
                    </p>
                </div>
            </div>

            <!-- Grid Wisata -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- KARTU WISATA 1 -->
                <div class="group relative h-[450px] rounded-[2rem] overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 border border-white" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=800" alt="Botania Garden" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                    
                    <div class="absolute top-5 left-5 bg-white/90 backdrop-blur-md text-emerald-700 text-[10px] font-bold uppercase tracking-wider px-4 py-2 rounded-full shadow-md">
                        Agrowisata
                    </div>

                    <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col justify-end">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <div class="flex items-center gap-1.5 text-emerald-300 text-xs font-semibold mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                Jl. Raya Bukateja
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2 line-clamp-1">Botania Garden (Bogar)</h3>
                            <p class="text-slate-300 text-sm line-clamp-2 mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                Nikmati wisata petik buah segar langsung dari pohonnya dan edukasi pertanian dengan suasana asri khas pedesaan.
                            </p>
                            <a href="#" class="inline-flex items-center justify-center w-full bg-emerald-500 hover:bg-emerald-600 text-white text-sm font-bold py-3 rounded-xl transition shadow-lg opacity-0 group-hover:opacity-100">
                                Lihat Detail Lokasi
                            </a>
                        </div>
                    </div>
                </div>

                <!-- KARTU WISATA 2 -->
                <div class="group relative h-[450px] rounded-[2rem] overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 border border-white" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=800" alt="Sawah Terasering" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                    
                    <div class="absolute top-5 left-5 bg-white/90 backdrop-blur-md text-emerald-700 text-[10px] font-bold uppercase tracking-wider px-4 py-2 rounded-full shadow-md">
                        Alam & Relaksasi
                    </div>

                    <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col justify-end">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <div class="flex items-center gap-1.5 text-emerald-300 text-xs font-semibold mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                Dusun Karangcengis
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2 line-clamp-1">Jalur Sepeda Sawah</h3>
                            <p class="text-slate-300 text-sm line-clamp-2 mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                Bersepeda santai mengelilingi persawahan warga dengan udara pagi yang sejuk dan pemandangan hijau menyejukkan mata.
                            </p>
                            <a href="#" class="inline-flex items-center justify-center w-full bg-emerald-500 hover:bg-emerald-600 text-white text-sm font-bold py-3 rounded-xl transition shadow-lg opacity-0 group-hover:opacity-100">
                                Lihat Detail Lokasi
                            </a>
                        </div>
                    </div>
                </div>

                <!-- KARTU WISATA 3 -->
                <div class="group relative h-[450px] rounded-[2rem] overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 border border-white" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=800" alt="Pusat Oleh-oleh" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                    
                    <div class="absolute top-5 left-5 bg-white/90 backdrop-blur-md text-emerald-700 text-[10px] font-bold uppercase tracking-wider px-4 py-2 rounded-full shadow-md">
                        Edukasi & Belanja
                    </div>

                    <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col justify-end">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <div class="flex items-center gap-1.5 text-emerald-300 text-xs font-semibold mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                Balai Desa
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2 line-clamp-1">Pusat Kerajinan & Tani</h3>
                            <p class="text-slate-300 text-sm line-clamp-2 mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                Pusat edukasi cara pembuatan kerajinan lokal dan lokasi pembelian bibit tanaman buah asli Karangcengis.
                            </p>
                            <a href="#" class="inline-flex items-center justify-center w-full bg-emerald-500 hover:bg-emerald-600 text-white text-sm font-bold py-3 rounded-xl transition shadow-lg opacity-0 group-hover:opacity-100">
                                Lihat Detail Lokasi
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section UMKM & Tani -->
    <section id="umkm" class="py-32 bg-white relative overflow-hidden">
        <!-- Ornamen Latar Belakang -->
        <div class="absolute -left-20 top-20 w-96 h-96 bg-amber-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute right-0 bottom-10 w-72 h-72 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute inset-0 bg-pattern opacity-50"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Section -->
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 text-amber-600 font-extrabold text-xs tracking-widest uppercase mb-4 px-4 py-1.5 rounded-full bg-amber-50 border border-amber-200 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                    Perekonomian Desa
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-4">
                    Hasil Bumi & UMKM Lokal
                </h2>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed">
                    Dukung pertumbuhan ekonomi desa! Beli produk segar dan kerajinan asli berkualitas tinggi langsung dari tangan masyarakat Karangcengis.
                </p>
            </div>

            <!-- Grid Produk UMKM -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- PRODUK 1 -->
                <div class="group bg-white/80 backdrop-blur-sm border border-slate-200/80 rounded-[2.5rem] overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-4 -right-10 bg-amber-500 text-white font-bold text-[10px] uppercase tracking-widest py-1 px-10 rotate-45 z-20 shadow-md">Terlaris</div>
                    <div class="relative h-64 overflow-hidden p-2">
                        <div class="relative w-full h-full rounded-[2rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1557800636-894a64c1696f?w=800" alt="Jeruk" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2 text-amber-400 text-sm">
                                ★★★★★ <span class="text-xs font-bold text-slate-500 ml-1">(Terjual 150+)</span>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-amber-600 transition-colors">Jeruk Karangcengis</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-2">Jeruk berkualitas super hasil budidaya kebun desa. Manis, segar, dan dipetik langsung saat Anda memesan.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-3 pt-4 border-t border-slate-100 mb-5">
                                <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 font-bold text-sm shrink-0">KT</div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Petani</span>
                                    <span class="text-sm font-bold text-slate-800">Tani Makmur</span>
                                </div>
                            </div>
                            <a href="https://wa.me/6281234567890" target="_blank" class="w-full bg-emerald-50 hover:bg-emerald-500 text-emerald-600 hover:text-white font-bold py-3.5 px-4 rounded-xl text-sm flex items-center justify-center gap-2 transition-all border border-emerald-200 hover:border-emerald-500">
                                🛒 Pesan via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PRODUK 2 -->
                <div class="group bg-white/80 backdrop-blur-sm border border-slate-200/80 rounded-[2.5rem] overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-64 overflow-hidden p-2">
                        <div class="relative w-full h-full rounded-[2rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?w=800" alt="Jambu Kristal" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2 text-amber-400 text-sm">
                                ★★★★★ <span class="text-xs font-bold text-slate-500 ml-1">(Terjual 80+)</span>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-teal-600 transition-colors">Jambu Kristal</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-2">Primadona camilan sehat! Jambu kristal super renyah, manis, dan hampir tanpa biji.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-3 pt-4 border-t border-slate-100 mb-5">
                                <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-600 font-bold text-sm shrink-0">
                                    <img src="https://ui-avatars.com/api/?name=Ibu+Siti&background=ccfbf1&color=0f766e" alt="Avatar" class="w-full h-full rounded-full">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">UMKM</span>
                                    <span class="text-sm font-bold text-slate-800">Ibu Siti</span>
                                </div>
                            </div>
                            <a href="https://wa.me/6281234567890" target="_blank" class="w-full bg-emerald-50 hover:bg-teal-500 text-emerald-600 hover:text-white font-bold py-3.5 px-4 rounded-xl text-sm flex items-center justify-center gap-2 transition-all border border-emerald-200 hover:border-teal-500">
                                🛒 Pesan via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PRODUK 3 -->
                <div class="group bg-white/80 backdrop-blur-sm border border-slate-200/80 rounded-[2.5rem] overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col relative" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-64 overflow-hidden p-2">
                        <div class="relative w-full h-full rounded-[2rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1595225330364-c2c31e67bb93?w=800" alt="Kerajinan Bambu" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2 text-amber-400 text-sm">
                                ★★★★☆ <span class="text-xs font-bold text-slate-500 ml-1">(Terjual 45+)</span>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-indigo-600 transition-colors">Kerajinan Anyaman</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-2">Berbagai produk anyaman bambu khas pedesaan. Estetik untuk dekorasi rumah.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-3 pt-4 border-t border-slate-100 mb-5">
                                <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-sm shrink-0">PK</div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Kriya</span>
                                    <span class="text-sm font-bold text-slate-800">Paguyuban Kriya</span>
                                </div>
                            </div>
                            <a href="https://wa.me/6281234567890" target="_blank" class="w-full bg-emerald-50 hover:bg-indigo-500 text-emerald-600 hover:text-white font-bold py-3.5 px-4 rounded-xl text-sm flex items-center justify-center gap-2 transition-all border border-emerald-200 hover:border-indigo-500">
                                🛒 Pesan via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mt-16 flex justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ url('/umkm') }}" class="group relative inline-flex items-center justify-center gap-3 bg-slate-900 hover:bg-emerald-600 text-white font-bold text-sm sm:text-base py-4 px-8 rounded-full transition-all duration-300 shadow-xl hover:shadow-emerald-500/30 hover:-translate-y-1 overflow-hidden">
                    <span class="relative z-10 flex items-center gap-2">
                        Eksplorasi Semua Produk
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- SCRIPT ANIMASI MUNCUL PER HURUF (FADE-IN LAMBAT DAN LOOPING HALUS) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const revealElements = document.querySelectorAll('.reveal-text');
            let allChars = [];

            // 1. Pecah teks menjadi elemen span per huruf
            revealElements.forEach(el => {
                const text = el.innerText;
                el.innerHTML = ''; 
                
                text.split('').forEach(char => {
                    const span = document.createElement('span');
                    // Ganti spasi dengan &nbsp; agar struktur layout tidak rusak
                    span.innerHTML = char === ' ' ? '&nbsp;' : char;
                    span.className = 'char-reveal';
                    el.appendChild(span);
                    allChars.push(span);
                });
            });

            // Pengaturan Waktu
            const typeSpeed = 100; // 100ms: santai dan perlahan
            const readTime = 3000; // 3 detik berhenti setelah selesai
            const fadeOutSpeed = 800; // 0.8 detik waktu pudar serentak

            function animateLetters() {
                // Sembunyikan semua huruf (Pudar)
                allChars.forEach(char => char.classList.remove('active'));

                // Tunggu sampai pudar sepenuhnya, baru munculkan lagi perlahan
                setTimeout(() => {
                    allChars.forEach((char, index) => {
                        setTimeout(() => {
                            char.classList.add('active');
                        }, index * typeSpeed);
                    });

                    // Hitung kapan animasi selesai untuk lanjut ke siklus loop berikutnya
                    const finishTypingTime = allChars.length * typeSpeed;
                    
                    // Ulangi
                    setTimeout(animateLetters, finishTypingTime + readTime);
                    
                }, fadeOutSpeed); 
            }

            // Jalankan animasi!
            animateLetters();
        });
    </script>

@endsection
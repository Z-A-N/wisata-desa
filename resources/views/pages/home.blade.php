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
    
    /* Animasi fade in untuk masing-masing huruf */
    .char-reveal {
        opacity: 0;
        transition: opacity 0.4s ease-out;
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

            <h1 class="text-4xl sm:text-6xl md:text-7xl font-black text-white mb-6 leading-tight tracking-tight min-h-[100px] sm:min-h-[140px] md:min-h-[170px] lg:min-h-[180px]">
                <span class="reveal-text inline-block" data-text="Jelajahi Surga Agrowisata"></span>
                <br class="hidden sm:block">
                
                <!-- Class gradasi dipindah ke data-gradient agar dibaca JS, menghindari bug browser -->
                <span class="reveal-text inline-block" data-text="Desa Karangcengis" data-gradient="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-teal-300 to-green-200"></span>
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

    <!-- Section Sambutan Kepala Desa -->
    <section id="sambutan" class="pt-32 pb-16 bg-white relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-emerald-50/50 border border-emerald-100 rounded-[3rem] p-8 md:p-12 lg:p-16 relative" data-aos="fade-up">
                
                <!-- Ornamen Quote Petik -->
                <div class="absolute top-10 right-10 text-emerald-200 opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
                    <!-- Foto Kepala Desa -->
                    <div class="lg:col-span-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="relative w-full aspect-[4/5] max-w-sm mx-auto lg:mx-0">
                            <div class="absolute inset-0 bg-emerald-500 rounded-3xl transform rotate-3 scale-105 opacity-20"></div>
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800" alt="Kepala Desa Karangcengis" class="relative w-full h-full object-cover rounded-3xl shadow-xl border-4 border-white">
                        </div>
                    </div>
                    
                    <!-- Teks Sambutan -->
                    <div class="lg:col-span-8" data-aos="fade-left" data-aos-delay="200">
                        <div class="inline-flex items-center gap-2 text-emerald-600 font-extrabold text-xs tracking-widest uppercase mb-4">
                            <span class="w-8 h-0.5 bg-emerald-600 rounded-full"></span>
                            Pesan Singkat
                        </div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">Sambutan Kepala Desa</h2>
                        
                        <blockquote class="text-lg md:text-xl text-slate-600 italic leading-relaxed mb-8">
                            "Selamat datang di website resmi Desa Wisata Karangcengis. Kami sangat bangga dapat memperkenalkan potensi luar biasa dari desa kami, mulai dari hamparan agrowisata petik buah segar, kerajinan tangan lokal, hingga keramahan warga desa kami. Kami terus berinovasi untuk menjadikan Karangcengis sebagai destinasi wisata unggulan yang tidak hanya lestari, tetapi juga mampu menggerakkan ekonomi seluruh masyarakat."
                        </blockquote>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            </div>
                            <div>
                                <p class="font-bold text-slate-900 text-lg">Bapak Supriyanto</p>
                                <p class="text-sm font-semibold text-emerald-600 uppercase tracking-wider">Kepala Desa Karangcengis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tentang Desa (Background diubah jadi slate-50) -->
    <section id="tentang" class="pt-24 pb-24 bg-slate-50 relative overflow-hidden">
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

    <!-- Section Wisata (Rich & Vibrant Mode) -->
    <section id="wisata" class="pt-24 pb-32 bg-slate-50 relative overflow-hidden">
        <!-- Ornamen Latar Belakang (Lebih Rame dengan 3 Warna) -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-emerald-300/30 rounded-full mix-blend-multiply filter blur-[80px] animate-blob"></div>
        <div class="absolute bottom-0 left-[-10%] w-[600px] h-[600px] bg-teal-200/30 rounded-full mix-blend-multiply filter blur-[100px] animate-blob animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 w-[400px] h-[400px] bg-amber-200/30 rounded-full mix-blend-multiply filter blur-[80px] animate-blob animation-delay-4000"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.03]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Wisata -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16" data-aos="fade-up">
                <div class="max-w-2xl relative">
                    <!-- Aksen Titik di dekat header -->
                    <div class="absolute -top-6 -left-6 w-12 h-12 bg-[radial-gradient(circle,rgba(16,185,129,0.2)_2px,transparent_2px)] bg-[size:8px_8px]"></div>
                    
                    <span class="inline-flex items-center gap-2 text-emerald-600 font-extrabold text-xs tracking-widest uppercase mb-4 px-4 py-1.5 rounded-full bg-white border border-emerald-100 shadow-sm relative z-10">
                        <span class="relative flex h-2.5 w-2.5">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                        </span>
                        Eksplorasi Desa
                    </span>
                    <h2 class="text-3xl md:text-5xl lg:text-5xl font-black text-slate-900 tracking-tight mb-4 relative z-10">
                        Destinasi Wisata <br class="hidden sm:block">
                        <span class="relative inline-block">
                            <span class="relative z-10 text-transparent bg-clip-text bg-gradient-to-r from-emerald-500 to-teal-400">Karangcengis</span>
                            <span class="absolute bottom-1 left-0 w-full h-3 bg-amber-300/40 -z-10 transform -skew-x-12"></span>
                        </span>
                    </h2>
                    <p class="text-slate-500 text-base leading-relaxed relative z-10">
                        Temukan berbagai spot rekreasi edukatif dan alami yang siap memanjakan momen liburan keluarga Anda. Bersih, segar, dan menenangkan pikiran.
                    </p>
                </div>
                
                <div class="hidden md:block pb-2">
                    <a href="#" class="inline-flex items-center gap-2 font-bold text-emerald-600 hover:text-emerald-700 transition-colors group px-6 py-3 bg-white rounded-full shadow-sm border border-emerald-50 hover:shadow-md">
                        Lihat Peta Wisata 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                </div>
            </div>

            <!-- Grid Wisata (Lebih Rame) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">
                
                <!-- KARTU WISATA 1: BOGAR -->
                <div class="group bg-white rounded-[2.5rem] p-3 sm:p-4 shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:shadow-[0_20px_40px_rgb(16,185,129,0.15)] transition-all duration-500 border border-slate-100/80 transform hover:-translate-y-2 flex flex-col h-full relative" data-aos="fade-up" data-aos-delay="100">
                    
                    <!-- Image Area -->
                    <div class="relative h-64 sm:h-72 w-full rounded-[2rem] overflow-hidden mb-5">
                        <img src="https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=800" alt="Botania Garden" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-1000 ease-in-out">
                        
                        <!-- Overlay Gradasi Bawah -->
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        
                        <!-- Floating Badges Kiri Atas (Kategori) -->
                        <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-xl flex items-center gap-1.5 shadow-lg border border-white/40">
                            <span class="text-[10px] font-extrabold text-emerald-600 uppercase tracking-widest">🍊 Agrowisata</span>
                        </div>

                        <!-- Floating Badges Kanan Atas (Rating) -->
                        <div class="absolute top-4 right-4 bg-amber-400 text-slate-900 px-2.5 py-1.5 rounded-xl flex items-center gap-1 shadow-lg font-bold text-xs">
                            ⭐ 4.9
                        </div>

                        <!-- Info Social Proof di dalam gambar (Kiri Bawah) -->
                        <div class="absolute bottom-4 left-4 flex items-center gap-2">
                            <div class="flex -space-x-2">
                                <img class="w-6 h-6 rounded-full border-2 border-slate-800 object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100&auto=format&fit=crop" alt="User">
                                <img class="w-6 h-6 rounded-full border-2 border-slate-800 object-cover" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=100&auto=format&fit=crop" alt="User">
                                <div class="w-6 h-6 rounded-full border-2 border-slate-800 bg-emerald-500 text-white text-[8px] font-bold flex items-center justify-center">+2k</div>
                            </div>
                            <span class="text-white text-xs font-medium shadow-sm">Telah Berkunjung</span>
                        </div>
                    </div>

                    <!-- Content Area -->
                    <div class="px-3 pb-2 flex-1 flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center gap-1 text-emerald-500 text-xs font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /></svg>
                                Jl. Raya Bukateja
                            </div>
                            <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-md">Buka Hari Ini</span>
                        </div>
                        
                        <h3 class="text-2xl font-extrabold text-slate-900 mb-2 group-hover:text-emerald-600 transition-colors line-clamp-1">Botania Garden</h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2 mb-4">
                            Nikmati keseruan petik buah segar langsung dari pohonnya dipadukan dengan suasana edukasi pertanian modern.
                        </p>

                        <!-- Hastags / Features (Bikin Rame) -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-2.5 py-1 bg-slate-50 text-slate-500 border border-slate-100 rounded-lg text-[10px] font-bold hover:bg-emerald-50 hover:text-emerald-600 transition-colors cursor-default">#PetikBuah</span>
                            <span class="px-2.5 py-1 bg-slate-50 text-slate-500 border border-slate-100 rounded-lg text-[10px] font-bold hover:bg-emerald-50 hover:text-emerald-600 transition-colors cursor-default">#Keluarga</span>
                            <span class="px-2.5 py-1 bg-slate-50 text-slate-500 border border-slate-100 rounded-lg text-[10px] font-bold hover:bg-emerald-50 hover:text-emerald-600 transition-colors cursor-default">#SpotFoto</span>
                        </div>

                        <!-- Action Button -->
                        <div class="mt-auto pt-4 border-t border-slate-100 border-dashed">
                            <a href="#" class="flex items-center justify-between w-full group/btn">
                                <span class="text-slate-800 font-bold text-sm group-hover/btn:text-emerald-600 transition-colors">Lihat Detail Lokasi</span>
                                <div class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center group-hover/btn:bg-emerald-500 text-emerald-600 group-hover/btn:text-white transition-all duration-300 transform group-hover/btn:-rotate-45 group-hover/btn:shadow-lg group-hover/btn:shadow-emerald-500/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- KARTU WISATA 2: SAWAH -->
                <div class="group bg-white rounded-[2.5rem] p-3 sm:p-4 shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:shadow-[0_20px_40px_rgb(20,184,166,0.15)] transition-all duration-500 border border-slate-100/80 transform hover:-translate-y-2 flex flex-col h-full relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-64 sm:h-72 w-full rounded-[2rem] overflow-hidden mb-5">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=800" alt="Sawah Terasering" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-1000 ease-in-out">
                        
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        
                        <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-xl flex items-center gap-1.5 shadow-lg border border-white/40">
                            <span class="text-[10px] font-extrabold text-teal-600 uppercase tracking-widest">🌾 Relaksasi</span>
                        </div>

                        <!-- Badge Tren -->
                        <div class="absolute top-4 right-4 bg-rose-500 text-white px-2.5 py-1.5 rounded-xl flex items-center gap-1 shadow-lg font-bold text-[10px] uppercase tracking-wider animate-pulse">
                            🔥 Tren
                        </div>

                        <div class="absolute bottom-4 left-4 flex items-center gap-2">
                            <div class="flex -space-x-2">
                                <img class="w-6 h-6 rounded-full border-2 border-slate-800 object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=100&auto=format&fit=crop" alt="User">
                                <img class="w-6 h-6 rounded-full border-2 border-slate-800 object-cover" src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=100&auto=format&fit=crop" alt="User">
                                <div class="w-6 h-6 rounded-full border-2 border-slate-800 bg-teal-500 text-white text-[8px] font-bold flex items-center justify-center">+800</div>
                            </div>
                            <span class="text-white text-xs font-medium shadow-sm">Telah Berkunjung</span>
                        </div>
                    </div>

                    <div class="px-3 pb-2 flex-1 flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center gap-1 text-teal-500 text-xs font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /></svg>
                                Dusun Karangcengis
                            </div>
                            <span class="text-xs font-bold text-teal-600 bg-teal-50 px-2 py-1 rounded-md">Buka Hari Ini</span>
                        </div>
                        
                        <h3 class="text-2xl font-extrabold text-slate-900 mb-2 group-hover:text-teal-600 transition-colors line-clamp-1">Jalur Sepeda Sawah</h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2 mb-4">
                            Bersepeda santai mengelilingi persawahan warga dengan udara pagi yang sejuk dan pemandangan hijau asri.
                        </p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-2.5 py-1 bg-slate-50 text-slate-500 border border-slate-100 rounded-lg text-[10px] font-bold hover:bg-teal-50 hover:text-teal-600 transition-colors cursor-default">#GowesBarang</span>
                            <span class="px-2.5 py-1 bg-slate-50 text-slate-500 border border-slate-100 rounded-lg text-[10px] font-bold hover:bg-teal-50 hover:text-teal-600 transition-colors cursor-default">#Healing</span>
                            <span class="px-2.5 py-1 bg-slate-50 text-slate-500 border border-slate-100 rounded-lg text-[10px] font-bold hover:bg-teal-50 hover:text-teal-600 transition-colors cursor-default">#UdaraSegar</span>
                        </div>

                        <div class="mt-auto pt-4 border-t border-slate-100 border-dashed">
                            <a href="#" class="flex items-center justify-between w-full group/btn">
                                <span class="text-slate-800 font-bold text-sm group-hover/btn:text-teal-600 transition-colors">Lihat Detail Lokasi</span>
                                <div class="w-10 h-10 rounded-full bg-teal-50 flex items-center justify-center group-hover/btn:bg-teal-500 text-teal-600 group-hover/btn:text-white transition-all duration-300 transform group-hover/btn:-rotate-45 group-hover/btn:shadow-lg group-hover/btn:shadow-teal-500/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- KARTU WISATA 3: PUSAT EDUKASI -->
                <div class="group bg-white rounded-[2.5rem] p-3 sm:p-4 shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:shadow-[0_20px_40px_rgb(16,185,129,0.15)] transition-all duration-500 border border-slate-100/80 transform hover:-translate-y-2 flex flex-col h-full relative" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-64 sm:h-72 w-full rounded-[2rem] overflow-hidden mb-5">
                        <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=800" alt="Pusat Oleh-oleh" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-1000 ease-in-out">
                        
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        
                        <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-xl flex items-center gap-1.5 shadow-lg border border-white/40">
                            <span class="text-[10px] font-extrabold text-emerald-600 uppercase tracking-widest">🧵 Edukasi & Seni</span>
                        </div>

                        <div class="absolute top-4 right-4 bg-amber-400 text-slate-900 px-2.5 py-1.5 rounded-xl flex items-center gap-1 shadow-lg font-bold text-xs">
                            ⭐ 4.8
                        </div>

                        <div class="absolute bottom-4 left-4 flex items-center gap-2">
                            <div class="flex -space-x-2">
                                <img class="w-6 h-6 rounded-full border-2 border-slate-800 object-cover" src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=100&auto=format&fit=crop" alt="User">
                                <img class="w-6 h-6 rounded-full border-2 border-slate-800 object-cover" src="https://images.unsplash.com/photo-1488161628813-04466f872be2?q=80&w=100&auto=format&fit=crop" alt="User">
                                <div class="w-6 h-6 rounded-full border-2 border-slate-800 bg-emerald-500 text-white text-[8px] font-bold flex items-center justify-center">+1.2k</div>
                            </div>
                            <span class="text-white text-xs font-medium shadow-sm">Telah Berkunjung</span>
                        </div>
                    </div>

                    <div class="px-3 pb-2 flex-1 flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center gap-1 text-emerald-500 text-xs font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /></svg>
                                Balai Desa
                            </div>
                            <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-md">Buka Hari Ini</span>
                        </div>
                        
                        <h3 class="text-2xl font-extrabold text-slate-900 mb-2 group-hover:text-emerald-600 transition-colors line-clamp-1">Pusat Kerajinan</h3>
                        <p class="text-slate-500 text-sm leading-relaxed line-clamp-2 mb-4">
                            Pusat pembelajaran cara pembuatan kerajinan lokal bambu dan lokasi pembelian bibit tanaman asli.
                        </p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-2.5 py-1 bg-slate-50 text-slate-500 border border-slate-100 rounded-lg text-[10px] font-bold hover:bg-emerald-50 hover:text-emerald-600 transition-colors cursor-default">#OlehOleh</span>
                            <span class="px-2.5 py-1 bg-slate-50 text-slate-500 border border-slate-100 rounded-lg text-[10px] font-bold hover:bg-emerald-50 hover:text-emerald-600 transition-colors cursor-default">#BelajarKriya</span>
                            <span class="px-2.5 py-1 bg-slate-50 text-slate-500 border border-slate-100 rounded-lg text-[10px] font-bold hover:bg-emerald-50 hover:text-emerald-600 transition-colors cursor-default">#UMKMLokal</span>
                        </div>

                        <div class="mt-auto pt-4 border-t border-slate-100 border-dashed">
                            <a href="#" class="flex items-center justify-between w-full group/btn">
                                <span class="text-slate-800 font-bold text-sm group-hover/btn:text-emerald-600 transition-colors">Lihat Detail Lokasi</span>
                                <div class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center group-hover/btn:bg-emerald-500 text-emerald-600 group-hover/btn:text-white transition-all duration-300 transform group-hover/btn:-rotate-45 group-hover/btn:shadow-lg group-hover/btn:shadow-emerald-500/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- Tombol Mobile -->
            <div class="mt-12 text-center md:hidden" data-aos="fade-up">
                <a href="#" class="inline-flex items-center gap-2 bg-slate-900 text-white font-bold px-8 py-4 rounded-full shadow-xl hover:bg-emerald-600 transition-colors">
                    Lihat Peta Wisata
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Section Berita & Informasi Desa (Magazine Layout) -->
    <section id="berita" class="py-24 bg-white border-t border-slate-100 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12" data-aos="fade-up">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 text-emerald-600 font-extrabold text-xs tracking-widest uppercase mb-4 px-4 py-1.5 rounded-full bg-emerald-50 border border-emerald-100 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Kabar Desa
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight mb-4">
                        Berita & Informasi
                    </h2>
                    <p class="text-slate-500 text-base leading-relaxed">
                        Ikuti terus perkembangan, event wisata, dan aktivitas warga sehari-hari di Desa Karangcengis.
                    </p>
                </div>
                <!-- Tombol Desktop -->
                <div class="hidden md:block pb-2">
                    <a href="{{ url('/berita') }}" class="inline-flex items-center gap-2 font-bold text-emerald-600 hover:text-emerald-700 transition-colors group">
                        Lihat Semua Berita 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                </div>
            </div>
            
            <!-- Grid Berita Magazine Style -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                
                <!-- HEADLINE BESA (Kiri) - Mengambil 7 Kolom -->
                <article class="lg:col-span-7 group" data-aos="fade-right" data-aos-delay="100">
                    <a href="#" class="block bg-slate-50 rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl hover:shadow-emerald-500/10 transition-all duration-500 border border-slate-100 h-full flex flex-col relative">
                        
                        <!-- Gambar Headline -->
                        <div class="relative w-full aspect-[16/10] sm:aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=1200" alt="Panen Jeruk" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition duration-700 ease-out">
                            <!-- Kategori Badge -->
                            <div class="absolute top-6 left-6 bg-emerald-500 text-white text-xs font-black uppercase tracking-widest px-4 py-2 rounded-xl shadow-lg">
                                Pertanian
                            </div>
                        </div>

                        <!-- Konten Headline -->
                        <div class="p-8 sm:p-10 flex-1 flex flex-col justify-center bg-white relative z-10 -mt-10 mx-4 sm:mx-8 mb-4 sm:mb-8 rounded-[2rem] shadow-lg border border-slate-50">
                            <div class="flex items-center gap-3 text-slate-400 text-xs font-semibold mb-4">
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                    12 Agustus 2024
                                </span>
                                <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                <span>Oleh Pokdarwis</span>
                            </div>
                            
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-4 group-hover:text-emerald-600 transition-colors leading-tight">
                                Panen Raya Jeruk Berjalan Sukses, Petani Karangcengis Gembira
                            </h3>
                            <p class="text-slate-500 text-base leading-relaxed mb-6 line-clamp-3">
                                Musim panen jeruk di kawasan Botania Garden kali ini menghasilkan buah dengan kualitas super. Ribuan pengunjung dari luar daerah memadati wisata petik buah sejak pagi hari...
                            </p>
                            
                            <div class="flex items-center gap-2 text-emerald-600 font-bold text-sm">
                                Baca Selengkapnya 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:translate-x-2 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                            </div>
                        </div>
                    </a>
                </article>

                <!-- DAFTAR BERITA LAINNYA (Kanan) - Mengambil 5 Kolom -->
                <div class="lg:col-span-5 flex flex-col gap-6" data-aos="fade-left" data-aos-delay="200">
                    <h4 class="font-extrabold text-slate-900 text-lg border-b-2 border-slate-100 pb-4 mb-2">Berita Terbaru Lainnya</h4>
                    
                    <!-- Item List 1 -->
                    <a href="#" class="group flex items-center gap-5 p-3 rounded-3xl hover:bg-slate-50 transition-colors border border-transparent hover:border-slate-100">
                        <div class="relative w-28 h-28 sm:w-32 sm:h-32 shrink-0 rounded-2xl overflow-hidden shadow-sm">
                            <img src="https://images.unsplash.com/photo-1595225330364-c2c31e67bb93?q=80&w=400" alt="Pelatihan Warga" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="flex-1">
                            <div class="text-amber-500 text-[10px] font-black uppercase tracking-widest mb-1.5">UMKM</div>
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 group-hover:text-emerald-600 transition-colors line-clamp-2 mb-2 leading-tight">
                                Pelatihan Pembuatan Anyaman Bambu untuk Pemuda Desa
                            </h3>
                            <div class="text-slate-400 text-xs font-medium flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                05 Agustus 2024
                            </div>
                        </div>
                    </a>

                    <!-- Item List 2 -->
                    <a href="#" class="group flex items-center gap-5 p-3 rounded-3xl hover:bg-slate-50 transition-colors border border-transparent hover:border-slate-100">
                        <div class="relative w-28 h-28 sm:w-32 sm:h-32 shrink-0 rounded-2xl overflow-hidden shadow-sm">
                            <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=400" alt="Wisata" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="flex-1">
                            <div class="text-teal-500 text-[10px] font-black uppercase tracking-widest mb-1.5">Pariwisata</div>
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 group-hover:text-emerald-600 transition-colors line-clamp-2 mb-2 leading-tight">
                                Kunjungan Wisatawan Meningkat Pesat di Akhir Pekan
                            </h3>
                            <div class="text-slate-400 text-xs font-medium flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                28 Juli 2024
                            </div>
                        </div>
                    </a>

                    <!-- Item List 3 -->
                    <a href="#" class="group flex items-center gap-5 p-3 rounded-3xl hover:bg-slate-50 transition-colors border border-transparent hover:border-slate-100">
                        <div class="relative w-28 h-28 sm:w-32 sm:h-32 shrink-0 rounded-2xl overflow-hidden shadow-sm">
                            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=400" alt="Infrastruktur" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="flex-1">
                            <div class="text-indigo-500 text-[10px] font-black uppercase tracking-widest mb-1.5">Desa</div>
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 group-hover:text-emerald-600 transition-colors line-clamp-2 mb-2 leading-tight">
                                Peresmian Jalan Baru Mempermudah Akses Menuju Agrowisata
                            </h3>
                            <div class="text-slate-400 text-xs font-medium flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                15 Juli 2024
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
            
            <!-- Tombol Lihat Semua (Muncul di Mobile) -->
            <div class="mt-12 text-center md:hidden" data-aos="fade-up">
                <a href="{{ url('/berita') }}" class="inline-flex items-center gap-2 bg-slate-900 text-white font-bold px-8 py-4 rounded-full shadow-xl hover:bg-emerald-600 transition-colors">
                    Lihat Semua Kabar Desa
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Section UMKM & Tani -->
    <section id="umkm" class="pt-24 pb-32 bg-white relative overflow-hidden">
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
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight mb-4">
                    Hasil Bumi & UMKM Lokal
                </h2>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed">
                    Dukung pertumbuhan ekonomi desa! Beli produk segar dan kerajinan asli berkualitas tinggi langsung dari tangan masyarakat Karangcengis.
                </p>
            </div>

            <!-- Grid Produk UMKM -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- PRODUK 1: Punya WA, IG, dan Marketplace -->
                <div class="group bg-white/90 backdrop-blur-md border border-slate-200/80 rounded-[2.5rem] overflow-hidden hover:shadow-[0_20px_40px_rgb(245,158,11,0.1)] hover:-translate-y-2 transition-all duration-500 flex flex-col relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-4 -right-10 bg-amber-500 text-white font-bold text-[10px] uppercase tracking-widest py-1 px-10 rotate-45 z-20 shadow-md">Terlaris</div>
                    <div class="relative h-64 overflow-hidden p-2">
                        <div class="relative w-full h-full rounded-[2rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1557800636-894a64c1696f?w=800" alt="Jeruk" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-1000 ease-in-out">
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2 text-amber-400 text-sm">
                                ★★★★★ <span class="text-xs font-bold text-slate-500 ml-1">(Terjual 150+)</span>
                            </div>
                            <h3 class="text-2xl font-extrabold text-slate-900 mb-2 group-hover:text-amber-600 transition-colors">Jeruk Karangcengis</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-2">Jeruk berkualitas super hasil budidaya kebun desa. Manis, segar, dan dipetik langsung saat Anda memesan.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-3 pt-4 border-t border-slate-100 mb-5">
                                <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 font-bold text-sm shrink-0">TM</div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Petani Lokal</span>
                                    <span class="text-sm font-bold text-slate-800">Tani Makmur</span>
                                </div>
                            </div>
                            
                            <!-- Area Tombol Aksi Lengkap -->
                            <div class="flex items-center gap-2">
                                <a href="https://wa.me/6281234567890" target="_blank" class="flex-1 bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-4 rounded-2xl text-sm flex items-center justify-center gap-2 transition-all shadow-md shadow-emerald-500/20 hover:shadow-lg hover:shadow-emerald-500/40">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    Via WhatsApp
                                </a>
                                <a href="https://instagram.com/" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-2xl bg-pink-50 text-pink-500 hover:bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white transition-all border border-pink-100 hover:border-transparent group/ig" title="Kunjungi Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover/ig:scale-110 transition-transform"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                </a>
                                <a href="#" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-2xl bg-orange-50 text-orange-500 hover:bg-orange-500 hover:text-white transition-all border border-orange-100 hover:border-transparent group/shop" title="Toko Online">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover/shop:scale-110 transition-transform"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRODUK 2: Hanya WA & Instagram -->
                <div class="group bg-white/90 backdrop-blur-md border border-slate-200/80 rounded-[2.5rem] overflow-hidden hover:shadow-[0_20px_40px_rgb(20,184,166,0.1)] hover:-translate-y-2 transition-all duration-500 flex flex-col relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-64 overflow-hidden p-2">
                        <div class="relative w-full h-full rounded-[2rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?w=800" alt="Jambu Kristal" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-1000 ease-in-out">
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2 text-teal-400 text-sm">
                                ★★★★★ <span class="text-xs font-bold text-slate-500 ml-1">(Terjual 80+)</span>
                            </div>
                            <h3 class="text-2xl font-extrabold text-slate-900 mb-2 group-hover:text-teal-600 transition-colors">Jambu Kristal</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-2">Primadona camilan sehat! Jambu kristal super renyah, manis, dan hampir tanpa biji.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-3 pt-4 border-t border-slate-100 mb-5">
                                <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center overflow-hidden shrink-0">
                                    <img src="https://ui-avatars.com/api/?name=Ibu+Siti&background=ccfbf1&color=0f766e" alt="Avatar" class="w-full h-full object-cover">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">UMKM Kuliner</span>
                                    <span class="text-sm font-bold text-slate-800">Ibu Siti</span>
                                </div>
                            </div>
                            
                            <!-- Area Tombol Aksi (WA + IG) -->
                            <div class="flex items-center gap-2">
                                <a href="https://wa.me/6281234567890" target="_blank" class="flex-1 bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-4 rounded-2xl text-sm flex items-center justify-center gap-2 transition-all shadow-md shadow-emerald-500/20 hover:shadow-lg hover:shadow-emerald-500/40">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    Via WhatsApp
                                </a>
                                <a href="https://instagram.com/" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-2xl bg-pink-50 text-pink-500 hover:bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white transition-all border border-pink-100 hover:border-transparent group/ig" title="Kunjungi Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover/ig:scale-110 transition-transform"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRODUK 3: Hanya WA -->
                <div class="group bg-white/90 backdrop-blur-md border border-slate-200/80 rounded-[2.5rem] overflow-hidden hover:shadow-[0_20px_40px_rgb(99,102,241,0.1)] hover:-translate-y-2 transition-all duration-500 flex flex-col relative" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-64 overflow-hidden p-2">
                        <div class="relative w-full h-full rounded-[2rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1595225330364-c2c31e67bb93?w=800" alt="Kerajinan Bambu" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-1000 ease-in-out">
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2 text-indigo-400 text-sm">
                                ★★★★☆ <span class="text-xs font-bold text-slate-500 ml-1">(Terjual 45+)</span>
                            </div>
                            <h3 class="text-2xl font-extrabold text-slate-900 mb-2 group-hover:text-indigo-600 transition-colors">Kerajinan Anyaman</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-2">Berbagai produk anyaman bambu khas pedesaan. Estetik untuk dekorasi rumah.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-3 pt-4 border-t border-slate-100 mb-5">
                                <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-sm shrink-0">PK</div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Kriya Khas</span>
                                    <span class="text-sm font-bold text-slate-800">Paguyuban Kriya</span>
                                </div>
                            </div>
                            
                            <!-- Area Tombol Aksi (Hanya WA) -->
                            <div class="flex items-center gap-2">
                                <a href="https://wa.me/6281234567890" target="_blank" class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-4 rounded-2xl text-sm flex items-center justify-center gap-2 transition-all shadow-md shadow-emerald-500/20 hover:shadow-lg hover:shadow-emerald-500/40">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    Pesan via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Tombol CTA Utama ke Halaman UMKM -->
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

<!-- SCRIPT ANIMASI MUNCUL PER HURUF (ANTI BUG BROWSER & GRADASI MENYATU) -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const revealElements = document.querySelectorAll('.reveal-text');
        let allChars = [];

        // 1. Fungsi untuk menyiapkan huruf
        function setupLetters() {
            revealElements.forEach(el => {
                const text = el.getAttribute('data-text'); 
                const gradientData = el.getAttribute('data-gradient');
                const gradientClasses = gradientData ? gradientData.split(' ') : [];

                el.innerHTML = ''; 
                el.style.position = 'relative';
                
                text.split('').forEach(char => {
                    const span = document.createElement('span');
                    span.innerHTML = char === ' ' ? '&nbsp;' : char;
                    // Class inline-block Wajib agar animasi opacity jalan
                    span.className = 'char-reveal inline-block';
                    
                    // Jika kalimat ini punya gradasi, suntikkan ke hurufnya
                    if (gradientClasses.length > 0) {
                        span.classList.add(...gradientClasses);
                    }
                    
                    el.appendChild(span);
                    allChars.push(span);
                });
            });
        }

        // 2. Fungsi Puzzle: Menyambungkan gradasi tiap huruf jadi satu
        function updateGradientPositions() {
            revealElements.forEach(el => {
                const gradientData = el.getAttribute('data-gradient');
                if (gradientData) {
                    const parentWidth = el.offsetWidth;
                    const spans = el.querySelectorAll('.char-reveal');
                    spans.forEach(span => {
                        // Tarik ukuran background sejauh lebar kalimat
                        span.style.backgroundSize = `${parentWidth}px 100%`;
                        // Geser posisi background mengikuti posisi spesifik huruf tersebut
                        span.style.backgroundPosition = `-${span.offsetLeft}px 0`;
                    });
                }
            });
        }

        // Jalankan Persiapan
        setupLetters();
        
        // Tunggu Browser merender HTML, lalu satukan gradasinya
        requestAnimationFrame(() => {
            updateGradientPositions();
        });

        // Pastikan gradasi tetap pas meskipun layar HP/Laptop diperbesar-kecil
        window.addEventListener('resize', updateGradientPositions);

        // Pengaturan Animasi
        const typeSpeed = 100; 
        const readTime = 3000; 
        const fadeOutSpeed = 800; 

        function animateLetters() {
            allChars.forEach(char => char.classList.remove('active'));

            setTimeout(() => {
                allChars.forEach((char, index) => {
                    setTimeout(() => {
                        char.classList.add('active');
                    }, index * typeSpeed);
                });

                const finishTypingTime = allChars.length * typeSpeed;
                setTimeout(animateLetters, finishTypingTime + readTime);
                
            }, fadeOutSpeed); 
        }

        animateLetters();
    });
</script>

@endsection
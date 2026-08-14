@extends('layouts.main')

<!-- Nanti judul ini bisa dibuat dinamis dari database, contoh: $berita->judul -->
@section('title', 'Panen Raya Jeruk Berjalan Sukses, Petani Karangcengis Gembira - Desa Wisata Karangcengis')

@section('content')

    <!-- 1. BREADCRUMB & HEADER ARTIKEL -->
    <section class="pt-32 pb-8 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Breadcrumb (Navigasi Jejak) -->
            <nav class="flex text-sm text-slate-500 mb-8 font-medium" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}" class="hover:text-emerald-600 transition-colors">Beranda</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-slate-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="{{ url('/berita') }}" class="ml-1 md:ml-2 hover:text-emerald-600 transition-colors">Kabar Desa</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-slate-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="ml-1 md:ml-2 text-slate-400">Pariwisata & UMKM</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Judul Utama (Diperbesar & Diberi jarak line-height pas) -->
            <div class="max-w-4xl">
                <div class="mb-5">
                    <span class="bg-emerald-100 text-emerald-700 text-[11px] font-black uppercase tracking-widest px-3.5 py-1.5 rounded-lg">Pariwisata & UMKM</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-[2.75rem] font-black text-slate-900 leading-[1.2] mb-6 tracking-tight">
                    Panen Raya Jeruk Berjalan Sukses, Petani Karangcengis Gembira
                </h1>
                
                <!-- Meta Info (Penulis & Tanggal) -->
                <div class="flex flex-wrap items-center gap-6 text-sm text-slate-500 border-b border-slate-200 pb-6">
                    <div class="flex items-center gap-3">
                        <img src="https://ui-avatars.com/api/?name=Admin+Desa&background=10b981&color=fff" alt="Admin Desa" class="w-11 h-11 rounded-full border-2 border-white shadow-sm">
                        <div>
                            <p class="font-bold text-slate-900 text-base">Admin Pokdarwis</p>
                            <p class="text-xs font-medium text-slate-500">Tim Redaksi Karangcengis</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 text-xs font-semibold">
                        <span class="flex items-center gap-1.5 bg-white px-3 py-1.5 rounded-full border border-slate-200 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            12 Agustus 2026
                        </span>
                        <span class="flex items-center gap-1.5 bg-amber-50 px-3 py-1.5 rounded-full border border-amber-100 text-amber-700 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            4 Menit Baca
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. GAMBAR UTAMA & KONTEN ARTIKEL -->
    <section class="pb-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                
                <!-- KOLOM KIRI (Artikel Utama - 8 Kolom) -->
                <div class="lg:col-span-8">
                    
                    <!-- Featured Image -->
                    <div class="relative w-full h-[300px] sm:h-[450px] md:h-[500px] rounded-[2rem] overflow-hidden shadow-lg mb-10 group">
                        <img src="https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=1200" alt="Panen Raya Jeruk" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000">
                        <div class="absolute bottom-0 w-full bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent p-5 pt-16">
                            <p class="text-white/90 text-sm font-medium border-l-2 border-emerald-500 pl-3">Ilustrasi: Warga Desa Karangcengis saat melakukan panen jeruk di Botania Garden.</p>
                        </div>
                    </div>

                    <!-- Isi Artikel (TYPOGRAPHY DIPERBAIKI) -->
                    <!-- Menggunakan text-lg, leading-[1.8] untuk jarak baris lega, dan text-justify agar rata kiri kanan -->
                    <article class="text-lg md:text-[1.15rem] text-slate-700 leading-[1.8] text-justify space-y-6">
                        
                        <!-- Paragraf Pembuka (Lead Paragraph) - Font sedikit dibold dan abu-abu lebih pekat -->
                        <p class="text-xl md:text-[1.35rem] font-medium text-slate-800 leading-[1.7]">
                            <span class="float-left text-[4rem] leading-[0.8] font-black text-emerald-600 mr-4 mt-2">K</span>
                            <span class="uppercase tracking-widest font-black text-slate-900 text-sm mr-1">ARANGCENGIS —</span> Musim panen jeruk di kawasan wisata edukasi Botania Garden tahun ini mencatatkan rekor baru. Sejak dibuka untuk umum pada awal Agustus, ribuan pengunjung dari dalam dan luar daerah memadati kebun untuk menikmati sensasi memetik buah langsung dari pohonnya.
                        </p>

                        <p>
                            Keberhasilan panen raya ini tidak lepas dari kerja keras kelompok tani lokal (Poktan) Tani Makmur yang menerapkan sistem irigasi tetes berbasis IoT <em>(Internet of Things)</em>. Sistem ini mulai diinisiasi sejak akhir tahun lalu berkat kerjasama dengan mahasiswa KKN dan pendampingan intensif dari penyuluh pertanian lapangan.
                        </p>

                        <!-- Sub Judul H2 - Spacing atas bawah lebih luas -->
                        <h2 class="text-2xl md:text-3xl font-black text-slate-900 mt-14 mb-6 text-left leading-tight">
                            Meningkatkan Perekonomian Warga
                        </h2>
                        
                        <p>
                            Dampak positif dari melimpahnya panen ini langsung dirasakan oleh warga sekitar. Tidak hanya petani pemilik kebun yang tersenyum lebar, para pelaku UMKM yang berjualan di sekitar area wisata juga meraup keuntungan berlipat.
                        </p>

                        <!-- Kutipan / Blockquote - Desain Jurnalistik Elegan -->
                        <blockquote class="relative border-l-4 border-emerald-500 bg-white shadow-sm p-6 sm:p-8 rounded-r-2xl my-10 text-left">
                            <svg class="absolute top-4 right-4 w-12 h-12 text-slate-100" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            <p class="relative z-10 italic text-xl text-slate-800 font-medium leading-relaxed mb-4">
                                "Alhamdulillah, tahun ini buahnya lebat, ukurannya besar, dan rasanya jauh lebih manis dari tahun lalu. Penjualan tiket masuk dan buah yang dibawa pulang pengunjung naik hampir 300% dibandingkan musim panen sebelumnya."
                            </p>
                            <footer class="relative z-10 text-sm font-bold text-emerald-700">
                                — Bapak Sutrisno <span class="text-slate-500 font-normal">/ Ketua Kelompok Tani Makmur</span>
                            </footer>
                        </blockquote>

                        <p>
                            Selain jeruk segar, ibu-ibu PKK Desa Karangcengis juga berinovasi dengan mengolah buah jeruk yang ukurannya kurang standar menjadi produk turunan bernilai jual tinggi, seperti sirup jeruk, manisan kulit jeruk, dan sabun pencuci piring ekstrak jeruk alami.
                        </p>

                        <!-- Sub Judul H3 -->
                        <h3 class="text-xl md:text-2xl font-bold text-slate-900 mt-12 mb-4 text-left">
                            Target Menjadi Sentra Agrowisata Unggulan
                        </h3>
                        
                        <p>
                            Melihat antusiasme pengunjung yang luar biasa, Kepala Desa Karangcengis menargetkan bahwa tahun depan desa ini tidak hanya dikenal sebagai desa wisata biasa, melainkan Sentra Agrowisata Edukasi unggulan di tingkat kabupaten.
                        </p>

                        <p class="mb-4">
                            Bagi wisatawan yang ingin berkunjung dan ikut memanen jeruk, Botania Garden Karangcengis masih dibuka setiap hari mulai pukul 08.00 hingga 16.00 WIB. Disarankan untuk datang lebih awal guna menghindari terik matahari siang dan mendapatkan buah dengan kualitas terbaik.
                        </p>

                    </article>

                    <!-- Tag & Share Section -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 border-t border-b border-slate-200 py-6 mt-12">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-sm font-bold text-slate-900 mr-2">Topik:</span>
                            <a href="#" class="px-3 py-1.5 bg-slate-100 text-slate-600 text-xs font-bold rounded-lg hover:bg-emerald-100 hover:text-emerald-700 transition-colors">#PanenRaya</a>
                            <a href="#" class="px-3 py-1.5 bg-slate-100 text-slate-600 text-xs font-bold rounded-lg hover:bg-emerald-100 hover:text-emerald-700 transition-colors">#Pertanian</a>
                            <a href="#" class="px-3 py-1.5 bg-slate-100 text-slate-600 text-xs font-bold rounded-lg hover:bg-emerald-100 hover:text-emerald-700 transition-colors">#UMKM</a>
                        </div>
                        
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-bold text-slate-900">Bagikan:</span>
                            <button class="w-9 h-9 rounded-full bg-blue-600 text-white flex items-center justify-center hover:-translate-y-1 transition-transform shadow-sm" title="Share ke Facebook">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </button>
                            <button class="w-9 h-9 rounded-full bg-green-500 text-white flex items-center justify-center hover:-translate-y-1 transition-transform shadow-sm" title="Share ke WhatsApp">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </button>
                            <button class="w-9 h-9 rounded-full bg-slate-800 text-white flex items-center justify-center hover:-translate-y-1 transition-transform shadow-sm" title="Copy Link">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Navigasi Berita Sebelumnya / Selanjutnya -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
                        <a href="#" class="group p-5 bg-white border border-slate-200 rounded-2xl hover:border-emerald-500 hover:shadow-md transition-all flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-slate-50 flex items-center justify-center shrink-0 group-hover:bg-emerald-50 transition-colors border border-slate-100 group-hover:border-emerald-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 group-hover:text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                            </div>
                            <div>
                                <span class="text-[10px] uppercase font-bold text-slate-400 group-hover:text-emerald-500 block mb-1 tracking-wider">Sebelumnya</span>
                                <span class="text-sm font-bold text-slate-800 line-clamp-2 leading-snug group-hover:text-emerald-700">Sistem Pengairan Kebun Berbasis IoT Diterapkan</span>
                            </div>
                        </a>
                        <a href="#" class="group p-5 bg-white border border-slate-200 rounded-2xl hover:border-emerald-500 hover:shadow-md transition-all flex items-center justify-end gap-4 text-right">
                            <div>
                                <span class="text-[10px] uppercase font-bold text-slate-400 group-hover:text-emerald-500 block mb-1 tracking-wider">Selanjutnya</span>
                                <span class="text-sm font-bold text-slate-800 line-clamp-2 leading-snug group-hover:text-emerald-700">Jalan Baru Agrowisata Resmi Dibuka</span>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-slate-50 flex items-center justify-center shrink-0 group-hover:bg-emerald-50 transition-colors border border-slate-100 group-hover:border-emerald-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 group-hover:text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            </div>
                        </a>
                    </div>

                    <!-- 3. KOLOM KOMENTAR PEMBACA -->
                    <div class="mt-12 bg-white p-6 sm:p-8 rounded-[2rem] border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
                        <div class="flex items-center justify-between mb-8 pb-4 border-b border-slate-100">
                            <h3 class="text-xl font-black text-slate-900 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                                Komentar Pembaca (2)
                            </h3>
                        </div>

                        <!-- Daftar Komentar -->
                        <div class="space-y-6">
                            <!-- Komentar 1 -->
                            <div class="flex gap-4">
                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=e2e8f0&color=64748b" alt="User" class="w-11 h-11 rounded-full shrink-0 border border-slate-200">
                                <div class="flex-1">
                                    <div class="bg-slate-50 p-5 rounded-2xl rounded-tl-none border border-slate-100">
                                        <div class="flex items-center justify-between mb-2">
                                            <h5 class="font-bold text-slate-900 text-sm">Budi Santoso</h5>
                                            <span class="text-slate-400 text-[11px] font-medium">2 jam yang lalu</span>
                                        </div>
                                        <p class="text-slate-600 text-sm leading-relaxed">Wah mantap! Akhir pekan besok meluncur bawa keluarga ke sana ah. Tiket masuknya berapa ya min?</p>
                                    </div>
                                    <button class="text-xs font-bold text-slate-400 hover:text-emerald-600 mt-2 ml-2 transition-colors">Balas</button>
                                </div>
                            </div>
                            
                            <!-- Balasan Admin -->
                            <div class="flex gap-4 ml-8 sm:ml-12">
                                <img src="https://ui-avatars.com/api/?name=Admin+Desa&background=10b981&color=fff" alt="Admin" class="w-11 h-11 rounded-full border-2 border-emerald-500 shrink-0 shadow-sm">
                                <div class="flex-1">
                                    <div class="bg-emerald-50/50 p-5 rounded-2xl rounded-tl-none border border-emerald-100">
                                        <div class="flex items-center justify-between mb-2">
                                            <h5 class="font-bold text-emerald-800 text-sm flex items-center gap-2">
                                                Admin Desa 
                                                <span class="bg-emerald-200 text-emerald-800 px-2 py-0.5 rounded text-[9px] uppercase font-black tracking-wider">Author</span>
                                            </h5>
                                            <span class="text-emerald-600/70 text-[11px] font-medium">1 jam yang lalu</span>
                                        </div>
                                        <p class="text-emerald-900 text-sm leading-relaxed">Halo Pak Budi, tiket masuk hanya Rp 10.000 saja. Nanti buah yang dipetik ditimbang saat pulang. Ditunggu kedatangannya ya Pak!</p>
                                    </div>
                                    <button class="text-xs font-bold text-slate-400 hover:text-emerald-600 mt-2 ml-2 transition-colors">Balas</button>
                                </div>
                            </div>
                        </div>

                        <!-- Form Kirim Komentar Baru -->
                        <div class="mt-10 pt-8 border-t border-slate-100">
                            <h4 class="font-bold text-slate-900 text-sm mb-5">Tinggalkan Komentar</h4>
                            <form class="space-y-4">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <input type="text" placeholder="Nama Lengkap..." class="w-full px-5 py-3.5 rounded-xl border border-slate-200 text-sm focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 outline-none transition-all">
                                    <input type="email" placeholder="Alamat Email..." class="w-full px-5 py-3.5 rounded-xl border border-slate-200 text-sm focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 outline-none transition-all">
                                </div>
                                <textarea rows="4" placeholder="Tulis tanggapan atau pendapatmu..." class="w-full p-5 rounded-xl border border-slate-200 text-sm focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500 outline-none resize-none transition-all"></textarea>
                                <div class="text-right">
                                    <button type="button" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3.5 px-8 rounded-xl text-sm transition-all shadow-md shadow-emerald-500/20 hover:shadow-lg hover:-translate-y-0.5">Kirim Komentar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <!-- KOLOM KANAN (Sidebar Baca Juga) -->
                <div class="lg:col-span-4 mt-12 lg:mt-0">
                    <div class="sticky top-28 bg-white p-6 md:p-8 rounded-[2rem] border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
                        
                        <div class="flex items-center gap-2 mb-8">
                            <span class="w-2 h-6 rounded-full bg-emerald-500"></span>
                            <h3 class="text-lg font-extrabold text-slate-900 uppercase tracking-wide">Baca Juga</h3>
                        </div>

                        <div class="space-y-6">
                            
                            <!-- Terkait 1 -->
                            <a href="#" class="group flex gap-4 items-center">
                                <div class="w-24 h-24 rounded-2xl overflow-hidden shrink-0 shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=400" alt="News" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div class="flex-1">
                                    <span class="text-[10px] font-bold text-emerald-500 uppercase tracking-wider mb-1 block">Pariwisata</span>
                                    <h4 class="text-sm font-bold text-slate-800 leading-snug group-hover:text-emerald-600 transition-colors line-clamp-2">Peresmian Jalan Baru Mempermudah Akses Menuju Agrowisata</h4>
                                </div>
                            </a>

                            <!-- Terkait 2 -->
                            <a href="#" class="group flex gap-4 items-center">
                                <div class="w-24 h-24 rounded-2xl overflow-hidden shrink-0 shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=400" alt="News" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div class="flex-1">
                                    <span class="text-[10px] font-bold text-emerald-500 uppercase tracking-wider mb-1 block">Pariwisata</span>
                                    <h4 class="text-sm font-bold text-slate-800 leading-snug group-hover:text-emerald-600 transition-colors line-clamp-2">Kunjungan Wisatawan Meningkat Pesat di Libur Akhir Pekan</h4>
                                </div>
                            </a>

                            <!-- Terkait 3 -->
                            <a href="#" class="group flex gap-4 items-center">
                                <div class="w-24 h-24 rounded-2xl overflow-hidden shrink-0 shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=400" alt="News" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div class="flex-1">
                                    <span class="text-[10px] font-bold text-emerald-500 uppercase tracking-wider mb-1 block">Acara</span>
                                    <h4 class="text-sm font-bold text-slate-800 leading-snug group-hover:text-emerald-600 transition-colors line-clamp-2">Festival Jajanan Tradisional Siap Digelar Minggu Depan!</h4>
                                </div>
                            </a>
                            
                        </div>

                        <!-- Banner Promosi UMKM Desa -->
                        <a href="{{ url('/umkm') }}" class="mt-10 block rounded-2xl overflow-hidden relative group shadow-md">
                            <img src="https://images.unsplash.com/photo-1557800636-894a64c1696f?q=80&w=600" alt="Banner UMKM" class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent flex flex-col justify-end p-6">
                                <span class="bg-amber-500 text-slate-900 text-[10px] font-black uppercase tracking-wider px-2.5 py-1 rounded w-max mb-2">Promo Spesial</span>
                                <h4 class="text-white font-bold text-lg leading-snug mb-1">Pesan Jeruk Hasil Panen Langsung dari Petani!</h4>
                                <p class="text-slate-300 text-xs mb-4">Klik untuk melihat katalog UMKM & Hasil Bumi.</p>
                                <span class="text-emerald-400 text-xs font-bold flex items-center gap-1.5 group-hover:gap-2.5 transition-all">Lihat Katalog <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></span>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
@extends('layouts.main')

@section('title', 'Hasil Bumi & UMKM - Desa Karangcengis')

@section('content')

    <!-- Header Katalog -->
    <section class="pt-36 pb-16 relative overflow-hidden bg-slate-50">
        <!-- Ornamen Latar Belakang -->
        <div class="absolute -left-20 top-20 w-96 h-96 bg-amber-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute right-0 bottom-10 w-72 h-72 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <span class="inline-flex items-center gap-2 text-emerald-600 font-extrabold text-xs tracking-widest uppercase mb-4 px-4 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Katalog Resmi Desa
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight mb-6">
                    Hasil Bumi & <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">UMKM Lokal</span>
                </h1>
                <p class="text-slate-600 text-base md:text-lg leading-relaxed mb-10">
                    Eksplorasi kekayaan alam dan kreativitas warga Desa Karangcengis. Dukung pertumbuhan ekonomi desa dengan membeli produk langsung dari tangan masyarakat.
                </p>

                <!-- Filter & Search -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 max-w-2xl mx-auto">
                    <div class="relative w-full sm:w-2/3">
                        <input type="text" placeholder="Cari buah, sayur, atau kerajinan..." class="w-full pl-12 pr-4 py-4 rounded-2xl border-none shadow-lg shadow-emerald-900/5 focus:ring-4 focus:ring-emerald-500/20 outline-none text-sm font-medium bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </div>
                    <select class="w-full sm:w-1/3 px-4 py-4 rounded-2xl border-none shadow-lg shadow-emerald-900/5 focus:ring-4 focus:ring-emerald-500/20 outline-none text-sm font-medium text-slate-600 cursor-pointer appearance-none bg-white">
                        <option value="semua">Semua Kategori</option>
                        <option value="buah">Buah & Sayur</option>
                        <option value="kerajinan">Kerajinan Tangan</option>
                        <option value="kuliner">Kuliner Olahan</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Grid Katalog -->
    <section class="pb-32 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- PRODUK 1: Punya WA, IG, dan Marketplace -->
                <div class="group bg-white/80 backdrop-blur-sm border border-slate-200/80 rounded-[2.5rem] overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-4 -right-10 bg-emerald-500 text-white font-bold text-[10px] uppercase tracking-widest py-1 px-10 rotate-45 z-20 shadow-md">Segar</div>
                    <div class="relative h-64 overflow-hidden p-2">
                        <div class="relative w-full h-full rounded-[2rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1557800636-894a64c1696f?w=800" alt="Jeruk" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-emerald-600 transition-colors">Jeruk Karangcengis</h3>
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
                            
                            <!-- Area Tombol Aksi -->
                            <div class="flex items-center gap-2">
                                <!-- Tombol Utama: WhatsApp -->
                                <a href="https://wa.me/6281234567890" target="_blank" class="flex-1 bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-4 rounded-2xl text-sm flex items-center justify-center gap-2 transition-all shadow-md shadow-emerald-500/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    Via WhatsApp
                                </a>
                                <!-- Tombol Instagram -->
                                <a href="https://instagram.com/" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-2xl bg-pink-50 text-pink-600 hover:bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white transition-all border border-pink-100 hover:border-transparent" title="Kunjungi Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                </a>
                                <!-- Tombol Toko Online (Shopee/Tokped) -->
                                <a href="#" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-2xl bg-orange-50 text-orange-600 hover:bg-orange-500 hover:text-white transition-all border border-orange-100 hover:border-transparent" title="Toko Online">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRODUK 2: Hanya WA & Instagram -->
                <div class="group bg-white/80 backdrop-blur-sm border border-slate-200/80 rounded-[2.5rem] overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-64 overflow-hidden p-2">
                        <div class="relative w-full h-full rounded-[2rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?w=800" alt="Jambu Kristal" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-teal-600 transition-colors">Jambu Kristal</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-2">Primadona camilan sehat! Jambu kristal super renyah, manis, dan hampir tanpa biji.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-3 pt-4 border-t border-slate-100 mb-5">
                                <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-600 font-bold text-sm shrink-0">IS</div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">UMKM Kuliner</span>
                                    <span class="text-sm font-bold text-slate-800">Ibu Siti</span>
                                </div>
                            </div>
                            
                            <!-- Area Tombol Aksi -->
                            <div class="flex items-center gap-2">
                                <a href="https://wa.me/6281234567890" target="_blank" class="flex-1 bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-4 rounded-2xl text-sm flex items-center justify-center gap-2 transition-all shadow-md shadow-emerald-500/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    Via WhatsApp
                                </a>
                                <a href="https://instagram.com/" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-2xl bg-pink-50 text-pink-600 hover:bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white transition-all border border-pink-100 hover:border-transparent" title="Kunjungi Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRODUK 3: Hanya WA -->
                <div class="group bg-white/80 backdrop-blur-sm border border-slate-200/80 rounded-[2.5rem] overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col relative" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-64 overflow-hidden p-2">
                        <div class="relative w-full h-full rounded-[2rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1595225330364-c2c31e67bb93?w=800" alt="Kerajinan Bambu" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-indigo-600 transition-colors">Kerajinan Anyaman</h3>
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
                            
                            <!-- Area Tombol Aksi -->
                            <div class="flex items-center gap-2">
                                <a href="https://wa.me/6281234567890" target="_blank" class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-4 rounded-2xl text-sm flex items-center justify-center gap-2 transition-all shadow-md shadow-emerald-500/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    Via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

@endsection
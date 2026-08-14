<!-- resources/views/partials/navbar.blade.php -->
<!-- Navbar Utama -->
<nav id="main-navbar" class="fixed w-full z-50 transition-all duration-500 bg-slate-50/70 backdrop-blur-md border-b border-slate-200/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="navbar-container" class="flex items-center justify-between h-20 transition-all duration-500 relative">
            
            <!-- Logo (Kiri) dengan efek Glow -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group relative z-20">
                <div class="relative w-17 h-17 flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                    
                    <!-- Efek Glow di belakang logo -->
                    <div class="absolute inset-0 bg-emerald-400 rounded-full blur-md opacity-30 group-hover:opacity-60 transition-opacity"></div>
                    
                    <!-- Logo langsung tanpa kotak -->
                    <img src="{{ asset('logo_pemkab.png') }}"
                         alt="Logo Desa Karangcengis"
                         class="relative w-17 h-17 object-contain drop-shadow-lg">
                </div>

                <div class="flex flex-col">
                    <span class="font-extrabold text-xl text-slate-900 tracking-tight leading-none group-hover:text-emerald-600 transition-colors duration-300">
                        Karangcengis
                    </span>
                    <span class="text-[10px] font-bold tracking-[0.2em] text-emerald-600 uppercase mt-0.5 opacity-80">
                        Desa Wisata
                    </span>
                </div>
            </a>

            <!-- Menu Utama Desktop (Tengah Presisi - Floating Island style) -->
            <div class="hidden md:flex absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 items-center p-1 bg-white/60 backdrop-blur-xl rounded-full border border-white/80 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] z-10 transition-all duration-300 hover:bg-white/80 hover:shadow-[0_8px_30px_-4px_rgba(16,185,129,0.1)]">
                
                <a href="{{ url('/') }}" 
                   class="relative px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 overflow-hidden group 
                   {{ request()->is('/') ? 'text-emerald-700 bg-white shadow-sm ring-1 ring-slate-900/5' : 'text-slate-600 hover:text-emerald-700 hover:bg-white/50' }}">
                    <span class="relative z-10">Beranda</span>
                </a>

                <a href="{{ url('/wisata') }}" 
                   class="relative px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 overflow-hidden group 
                   {{ request()->is('wisata*') ? 'text-emerald-700 bg-white shadow-sm ring-1 ring-slate-900/5' : 'text-slate-600 hover:text-emerald-700 hover:bg-white/50' }}">
                    <span class="relative z-10">Wisata</span>
                </a>

                <!-- MENU BERITA BARU DITAMBAHKAN -->
                <a href="{{ url('/berita') }}" 
                   class="relative px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 overflow-hidden group 
                   {{ request()->is('berita*') ? 'text-emerald-700 bg-white shadow-sm ring-1 ring-slate-900/5' : 'text-slate-600 hover:text-emerald-700 hover:bg-white/50' }}">
                    <span class="relative z-10">Berita</span>
                </a>

                <a href="{{ url('/umkm') }}" 
                   class="relative px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 overflow-hidden group 
                   {{ request()->is('umkm*') ? 'text-emerald-700 bg-white shadow-sm ring-1 ring-slate-900/5' : 'text-slate-600 hover:text-emerald-700 hover:bg-white/50' }}">
                    <span class="relative z-10">Hasil Bumi & UMKM</span>
                </a>

            </div>

            <!-- Bagian Kanan (Tombol Hamburger & Aksi) -->
            <div class="relative z-20 flex items-center gap-3">
                
                <!-- Tombol Desktop (Premium Button) -->
                <div class="hidden md:block group">
                    <a href="{{ url('/umkm') }}" class="relative inline-flex items-center justify-center gap-2 px-6 py-2.5 text-sm font-bold text-white transition-all duration-300 bg-emerald-600 border border-transparent rounded-full hover:bg-emerald-500 hover:shadow-[0_0_20px_rgba(16,185,129,0.4)] focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:ring-offset-2 overflow-hidden">
                        <!-- Efek kilap saat di-hover -->
                        <div class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-12deg)_translateX(-150%)] group-hover:duration-1000 group-hover:[transform:skew(-12deg)_translateX(150%)]">
                            <div class="relative h-full w-8 bg-white/20"></div>
                        </div>
                        <span class="relative">Hasil Tani</span>
                    </a>
                </div>

                <!-- Tombol Hamburger Mobile -->
                <button id="mobile-menu-button" class="md:hidden relative w-10 h-10 bg-white rounded-full flex items-center justify-center text-slate-600 hover:text-emerald-600 hover:bg-emerald-50 transition-all shadow-sm border border-slate-200 focus:outline-none">
                    <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Ikon X (Silang) disembunyikan default -->
                    <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute hidden transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                
            </div>
        </div>
    </div>

    <!-- Dropdown Menu Mobile (Khusus Tampilan HP) -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100 absolute w-full shadow-2xl overflow-hidden transition-all duration-300 transform origin-top opacity-0 -translate-y-2">
        <div class="px-4 pt-2 pb-6 space-y-1 max-w-7xl mx-auto">
            
            <a href="{{ url('/') }}" class="block px-4 py-3 rounded-2xl text-base font-semibold transition-colors {{ request()->is('/') ? 'bg-emerald-50 text-emerald-600' : 'text-slate-600 hover:bg-slate-50 hover:text-emerald-600' }}">
                Beranda
            </a>
            
            <a href="{{ url('/wisata') }}" class="block px-4 py-3 rounded-2xl text-base font-semibold transition-colors {{ request()->is('wisata*') ? 'bg-emerald-50 text-emerald-600' : 'text-slate-600 hover:bg-slate-50 hover:text-emerald-600' }}">
                Wisata
            </a>

            <!-- MENU BERITA MOBILE BARU DITAMBAHKAN -->
            <a href="{{ url('/berita') }}" class="block px-4 py-3 rounded-2xl text-base font-semibold transition-colors {{ request()->is('berita*') ? 'bg-emerald-50 text-emerald-600' : 'text-slate-600 hover:bg-slate-50 hover:text-emerald-600' }}">
                Berita
            </a>
            
            <a href="{{ url('/umkm') }}" class="block px-4 py-3 rounded-2xl text-base font-semibold transition-colors {{ request()->is('umkm*') ? 'bg-emerald-50 text-emerald-600' : 'text-slate-600 hover:bg-slate-50 hover:text-emerald-600' }}">
                Hasil Bumi & UMKM
            </a>
            
        </div>
    </div>
</nav>

<!-- Script Interaktivitas (Simpan di paling bawah file ini) -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navbar = document.getElementById('main-navbar');
        const navContainer = document.getElementById('navbar-container');
        const mobileBtn = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');
        let isMenuOpen = false;

        // 1. Efek saat halaman di-scroll
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                // Saat scroll turun: Navbar jadi lebih tipis & bayangan lebih kuat
                navbar.classList.add('bg-white/90', 'shadow-sm');
                navbar.classList.remove('bg-slate-50/70', 'border-b');
                navContainer.classList.remove('h-20');
                navContainer.classList.add('h-16'); // Mengecil
            } else {
                // Saat di paling atas: Navbar kembali transparan dan agak besar
                navbar.classList.remove('bg-white/90', 'shadow-sm');
                navbar.classList.add('bg-slate-50/70', 'border-b');
                navContainer.classList.remove('h-16');
                navContainer.classList.add('h-20'); // Membesar
            }
        });

        // 2. Fungsi Buka-Tutup Menu Mobile
        mobileBtn.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            
            if (isMenuOpen) {
                // Buka menu
                mobileMenu.classList.remove('hidden');
                // Sedikit delay agar animasi CSS berjalan mulus
                setTimeout(() => {
                    mobileMenu.classList.remove('opacity-0', '-translate-y-2');
                    mobileMenu.classList.add('opacity-100', 'translate-y-0');
                }, 10);
                
                // Ganti Ikon ke Silang (X)
                iconMenu.classList.add('hidden', 'rotate-90');
                iconClose.classList.remove('hidden');
                iconClose.classList.add('rotate-0');
            } else {
                // Tutup menu
                mobileMenu.classList.remove('opacity-100', 'translate-y-0');
                mobileMenu.classList.add('opacity-0', '-translate-y-2');
                
                // Tunggu animasi selesai baru disembunyikan total
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
                
                // Ganti Ikon kembali ke Hamburger
                iconClose.classList.add('hidden', '-rotate-90');
                iconMenu.classList.remove('hidden', 'rotate-90');
                iconMenu.classList.add('rotate-0');
            }
        });
    });
</script>
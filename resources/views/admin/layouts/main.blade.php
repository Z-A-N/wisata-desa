<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - Desa Wisata')</title>
    @vite('resources/css/app.css')
    <!-- Menambahkan Font Inter untuk kesan modern -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50/50 text-slate-800 antialiased selection:bg-emerald-200 selection:text-emerald-900">
    <div class="flex h-screen overflow-hidden">
        
        <!-- ================= SIDEBAR ================= -->
        <aside class="w-72 bg-slate-950 flex flex-col z-20 transition-all duration-300 relative border-r border-slate-800">
            <!-- Ornamen Blur di Sidebar -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
                <div class="absolute -top-20 -left-20 w-48 h-48 bg-emerald-500/10 rounded-full blur-3xl"></div>
            </div>

            <!-- Logo / Brand -->
            <div class="h-24 flex items-center px-8 relative z-10 border-b border-slate-800/60">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center shadow-lg shadow-emerald-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
                    </div>
                    <span class="text-xl font-black text-white tracking-wide">Desa<span class="text-emerald-400">Wisata</span></span>
                </div>
            </div>
            
            <!-- Menu Navigasi -->
            <nav class="flex-1 px-4 py-8 space-y-2 overflow-y-auto relative z-10">
                <div class="px-4 text-[10px] font-extrabold text-slate-500 uppercase tracking-widest mb-4">Menu Utama</div>
                
                <!-- Menu Aktif -->
                <a href="{{ route('admin.dashboard') }}" class="group flex items-center gap-4 px-4 py-3.5 bg-emerald-500/10 text-emerald-400 rounded-2xl font-semibold transition-all shadow-[inset_0_1px_1px_rgba(255,255,255,0.05)] border border-emerald-500/20">
                    <div class="p-2 bg-emerald-500/20 rounded-xl group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
                    </div>
                    Dashboard
                </a>
                
                <!-- Menu Lain -->
                <a href="#" class="group flex items-center gap-4 px-4 py-3.5 text-slate-400 hover:text-white hover:bg-slate-800/50 rounded-2xl font-medium transition-all">
                    <div class="p-2 rounded-xl group-hover:bg-slate-700/50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                    </div>
                    Kelola UMKM
                </a>
                
                <a href="#" class="group flex items-center gap-4 px-4 py-3.5 text-slate-400 hover:text-white hover:bg-slate-800/50 rounded-2xl font-medium transition-all">
                    <div class="p-2 rounded-xl group-hover:bg-slate-700/50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" /></svg>
                    </div>
                    Destinasi Wisata
                </a>
            </nav>
            
            <div class="p-6 relative z-10">
                <a href="#" class="flex items-center justify-center gap-2 w-full py-3.5 bg-slate-900 border border-slate-800 text-rose-400 hover:text-rose-300 hover:bg-rose-500/10 rounded-2xl font-semibold transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                    Keluar Sistem
                </a>
            </div>
        </aside>

        <!-- ================= MAIN AREA ================= -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden bg-slate-50/50">
            
            <!-- ================= TOPBAR ================= -->
            <header class="h-24 bg-white/60 backdrop-blur-xl flex items-center justify-between px-8 sticky top-0 z-30 border-b border-slate-200/50">
                
                <!-- Pencarian Modern -->
                <div class="flex-1 max-w-md">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-5 h-5 text-slate-400 group-focus-within:text-emerald-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        </div>
                        <input type="text" class="w-full bg-white/50 border border-slate-200 text-slate-900 text-sm rounded-2xl focus:ring-emerald-500 focus:border-emerald-500 block pl-11 p-3 shadow-sm transition-all placeholder-slate-400" placeholder="Cari data UMKM atau wisata...">
                    </div>
                </div>
                
                <!-- Profil Admin -->
                <div class="flex items-center gap-6">
                    <!-- Notifikasi -->
                    <button class="relative p-2 text-slate-400 hover:text-emerald-500 transition-colors">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-rose-500 rounded-full ring-2 ring-white"></span>
                    </button>

                    <!-- Profil User -->
                    <div class="flex items-center gap-4 pl-6 border-l border-slate-200 cursor-pointer group">
                        <div class="text-right hidden md:block">
                            <p class="text-sm font-bold text-slate-700 group-hover:text-emerald-600 transition-colors">Zulfika Ajrun</p>
                            <p class="text-xs text-slate-500 font-medium">Administrator</p>
                        </div>
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-emerald-500 to-teal-400 p-0.5 shadow-lg shadow-emerald-500/30 group-hover:scale-105 transition-transform">
                            <div class="w-full h-full bg-white rounded-[14px] flex items-center justify-center overflow-hidden">
                                <span class="font-bold text-emerald-600 text-sm">ZA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ================= CONTENT ================= -->
            <main class="p-8 max-w-7xl mx-auto w-full">
                @yield('content')
            </main>
            
        </div>
    </div>
</body>
</html>
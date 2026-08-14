<!-- resources/views/admin/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Desa Wisata Karangcengis</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-200 selection:text-emerald-900 min-h-screen flex items-center justify-center relative overflow-hidden">

    <!-- Ornamen Background -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -left-20 w-96 h-96 bg-emerald-400/20 rounded-full blur-[100px]"></div>
        <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-teal-400/20 rounded-full blur-[100px]"></div>
    </div>

    <!-- Container Utama -->
    <div class="w-full max-w-5xl mx-auto p-6 relative z-10 flex items-center justify-center">
        
        <div class="w-full max-w-md bg-white/80 backdrop-blur-xl rounded-[2rem] p-8 sm:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100">
            
            <!-- Logo & Heading -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-400 to-teal-500 shadow-lg shadow-emerald-500/20 mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
                </div>
                <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Selamat Datang Kembali</h2>
                <p class="text-slate-500 text-sm mt-2">Silakan masuk ke panel admin Desa Karangcengis.</p>
            </div>

            <!-- Form Login -->
            <!-- Note: Sesuaikan action form ini dengan route login kamu nanti -->
            <form action="#" method="POST" class="space-y-5">
                @csrf
                
                <!-- Input Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Alamat Email</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-5 h-5 text-slate-400 group-focus-within:text-emerald-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        </div>
                        <input type="email" id="email" name="email" class="w-full bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-2xl focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 block pl-11 p-3.5 transition-all placeholder-slate-400" placeholder="admin@karangcengis.desa.id" required autofocus>
                    </div>
                </div>

                <!-- Input Password -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="block text-sm font-semibold text-slate-700">Kata Sandi</label>
                        <a href="#" class="text-xs font-semibold text-emerald-600 hover:text-emerald-700 transition-colors">Lupa sandi?</a>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-5 h-5 text-slate-400 group-focus-within:text-emerald-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                        </div>
                        <input type="password" id="password" name="password" class="w-full bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-2xl focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 block pl-11 p-3.5 transition-all placeholder-slate-400" placeholder="••••••••" required>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="w-4 h-4 text-emerald-500 bg-slate-50 border-slate-300 rounded focus:ring-emerald-500 focus:ring-2 transition-colors cursor-pointer">
                    <label for="remember_me" class="ml-2 text-sm font-medium text-slate-600 cursor-pointer">Ingat saya di perangkat ini</label>
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="w-full bg-slate-900 hover:bg-emerald-600 text-white font-bold py-3.5 px-4 rounded-2xl shadow-xl shadow-slate-900/20 hover:shadow-emerald-500/30 transition-all duration-300 hover:-translate-y-1 mt-2 flex justify-center items-center gap-2">
                    Masuk Sistem
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </button>
            </form>

            <!-- Copyright -->
            <div class="mt-8 text-center">
                <p class="text-xs text-slate-400 font-medium">&copy; {{ date('Y') }} Desa Karangcengis. All rights reserved.</p>
            </div>
            
        </div>
    </div>

</body>
</html>
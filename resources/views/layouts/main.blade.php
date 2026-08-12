<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- @yield('title') akan diisi dinamis dari masing-masing halaman -->
    <title>@yield('title', 'Desa Karangcengis')</title>
    
    <!-- Vite CSS -->
    @vite('resources/css/app.css')
    
    <!-- Google Fonts & AOS CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-pattern { background-image: radial-gradient(rgba(15, 118, 110, 0.1) 1px, transparent 1px); background-size: 30px 30px; }
        .glass-nav { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(16px); border-bottom: 1px solid rgba(226, 232, 240, 0.6); }
        @keyframes blob { 0% { transform: translate(0px, 0px) scale(1); } 33% { transform: translate(30px, -50px) scale(1.1); } 66% { transform: translate(-20px, 20px) scale(0.9); } 100% { transform: translate(0px, 0px) scale(1); } }
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white relative overflow-x-hidden">

    <!-- Memanggil Navbar dari folder partials -->
    @include('partials.navbar')

    <!-- Bagian ini akan diisi secara dinamis oleh halaman beranda/wisata/umkm -->
    <main>
        @yield('content')
    </main>

    <!-- Memanggil Footer dari folder partials -->
    @include('partials.footer')

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 40, duration: 700 });
    </script>
</body>
</html>
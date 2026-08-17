<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata - Desa Karangcengis</title>
    
    <!-- Vite CSS -->
    @vite('resources/css/app.css')
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .bg-pattern {
            background-image: radial-gradient(rgba(16, 185, 129, 0.2) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        /* Animasi Latar Belakang (Blobs) */
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }

        /* Animasi Geser */
        @keyframes swipe-hint {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(8px); }
        }
        .animate-swipe { animation: swipe-hint 2s ease-in-out infinite; }

        /* Animasi Teks Gradasi */
        @keyframes text-gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-text-gradient {
            background-size: 200% auto;
            animation: text-gradient 4s linear infinite;
        }

        #dynamic-content {
            transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
        }
        .content-hidden {
            opacity: 0;
            transform: translateY(15px) scale(0.98);
        }
        .content-visible {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        /* Hilangkan scrollbar bawaan untuk container wisata */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-slate-100/50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white relative overflow-x-hidden">

    @extends('layouts.main')

@section('content')

    <!-- HEADER SECTION -->
    <section class="pt-28 pb-4 relative overflow-hidden">
        <!-- Latar Belakang Warna-Warni Beranimasi -->
        <div class="absolute top-0 right-0 w-80 h-80 bg-emerald-300 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob"></div>
        <div class="absolute top-40 left-10 w-80 h-80 bg-sky-300 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-20 left-1/2 w-80 h-80 bg-amber-200 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob animation-delay-4000"></div>
        <div class="absolute inset-0 bg-pattern opacity-60 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center mb-6" data-aos="fade-down">
                <!-- Badge Modern Mengkilap -->
                <div class="inline-flex items-center gap-2.5 px-5 py-2 rounded-full bg-white/60 border border-emerald-200 mb-5 shadow-lg shadow-emerald-500/10 backdrop-blur-md">
                    <span class="relative flex h-3 w-3">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                    </span>
                    <span class="text-[11px] font-black text-emerald-800 uppercase tracking-widest">Eksplorasi Warna Desa</span>
                </div>
                
                <!-- Judul dengan Efek Gradasi Berjalan -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight mb-4 leading-tight">
                    Temukan <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-500 via-sky-500 to-teal-400 animate-text-gradient">Destinasi</span> Kami
                </h1>
                
                <p class="text-slate-500 text-sm md:text-base max-w-xl mx-auto leading-relaxed">
                    Geser kartu di bawah ini untuk mengintip serunya fasilitas, harga tiket, ulasan, hingga rute lokasinya.
                </p>
            </div>

            <!-- Hint Geser Warna Emas/Amber -->
            <div class="flex justify-center mb-4 relative z-20" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-gradient-to-r from-slate-900 to-slate-800 text-white text-[10px] sm:text-xs font-bold uppercase tracking-widest px-6 py-3 rounded-full shadow-xl shadow-slate-900/20 flex items-center gap-3 border border-slate-700">
                    <svg class="w-4 h-4 text-amber-400 rotate-180 animate-swipe" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    Pilih & Geser Kartu
                    <svg class="w-4 h-4 text-amber-400 animate-swipe" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </div>
            </div>

            <!-- DRAGGABLE CONTAINER -->
            <div class="relative overflow-hidden py-4 w-full touch-pan-x">
                <!-- Frame Tengah dengan Efek Glow (Bercahaya) -->
                <div class="absolute pointer-events-none top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 w-[270px] sm:w-[320px] md:w-[350px] h-[320px] rounded-[2rem] border-[4px] border-emerald-400 shadow-[0_0_40px_rgba(16,185,129,0.4)] z-20 transition-all duration-300"></div>

                <div id="wisata-scroll-wrapper" class="w-full overflow-x-auto hide-scrollbar snap-x snap-mandatory cursor-grab active:cursor-grabbing">
                    <div id="wisata-container" class="flex flex-nowrap gap-5 sm:gap-8 relative w-max px-[50vw]" style="padding-left: calc(50vw - (var(--card-w) / 2)); padding-right: calc(50vw - (var(--card-w) / 2)); --card-w: 270px;">
                        
                        <!-- KARTU 1 -->
                        <div class="wisata-card snap-center flex-none w-[270px] sm:w-[320px] md:w-[350px] group relative h-[320px] rounded-[2rem] overflow-hidden shadow-2xl transition-all duration-300 ease-out border-2 border-transparent opacity-50 scale-95" data-index="0">
                            <img src="https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=800" class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-emerald-900 via-slate-900/40 to-transparent opacity-90 pointer-events-none"></div>
                            <div class="absolute top-5 left-5 bg-emerald-500/90 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-wider px-4 py-2 rounded-full shadow-lg pointer-events-none">Agrowisata</div>
                            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col justify-end pointer-events-none">
                                <h3 class="text-2xl sm:text-3xl font-black text-white mb-1 line-clamp-1 drop-shadow-md">Botania Garden</h3>
                                <p class="text-emerald-300 text-xs font-bold tracking-wide">Wisata Petik Buah</p>
                            </div>
                        </div>

                        <!-- KARTU 2 -->
                        <div class="wisata-card snap-center flex-none w-[270px] sm:w-[320px] md:w-[350px] group relative h-[320px] rounded-[2rem] overflow-hidden shadow-2xl transition-all duration-300 ease-out border-2 border-transparent opacity-100 scale-100" data-index="1">
                            <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=800" class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-sky-900 via-slate-900/40 to-transparent opacity-90 pointer-events-none"></div>
                            <div class="absolute top-5 left-5 bg-sky-500/90 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-wider px-4 py-2 rounded-full shadow-lg pointer-events-none">Alam Bebas</div>
                            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col justify-end pointer-events-none">
                                <h3 class="text-2xl sm:text-3xl font-black text-white mb-1 line-clamp-1 drop-shadow-md">Jalur Sepeda</h3>
                                <p class="text-sky-300 text-xs font-bold tracking-wide">Relaksasi & Olahraga</p>
                            </div>
                        </div>

                        <!-- KARTU 3 -->
                        <div class="wisata-card snap-center flex-none w-[270px] sm:w-[320px] md:w-[350px] group relative h-[320px] rounded-[2rem] overflow-hidden shadow-2xl transition-all duration-300 ease-out border-2 border-transparent opacity-50 scale-95" data-index="2">
                            <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=800" class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-amber-900 via-slate-900/40 to-transparent opacity-90 pointer-events-none"></div>
                            <div class="absolute top-5 left-5 bg-amber-500/90 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-wider px-4 py-2 rounded-full shadow-lg pointer-events-none">Edukasi Tani</div>
                            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col justify-end pointer-events-none">
                                <h3 class="text-2xl sm:text-3xl font-black text-white mb-1 line-clamp-1 drop-shadow-md">Pusat Kerajinan</h3>
                                <p class="text-amber-300 text-xs font-bold tracking-wide">Oleh-oleh Khas Desa</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION DETAIL DINAMIS -->
    <section class="pb-24 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center -mb-5 relative z-30">
                <div class="bg-gradient-to-b from-emerald-400 to-emerald-600 text-white p-3 rounded-full border-4 border-slate-100 shadow-lg shadow-emerald-500/30">
                    <svg class="w-6 h-6 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 14l-7 7m0 0l-7-7m7 7V3" /></svg>
                </div>
            </div>
            
            <!-- Menggunakan bg-white/80 yang lebih soft dipadu dengan border slate-200 -->
            <div id="dynamic-content" class="content-visible bg-white/80 backdrop-blur-2xl border border-slate-200/60 rounded-[2.5rem] pt-14 pb-8 px-6 sm:px-10 shadow-[0_20px_50px_rgb(0,0,0,0.03)] relative overflow-hidden">
                <!-- Elemen dekoratif sudut -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50 pointer-events-none"></div>
                <!-- Konten akan dimuat di sini -->
            </div>
        </div>
    </section>

@endsection

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 20, duration: 700 });
    </script>

    <!-- SCRIPT LOGIKA KONTEN DINAMIS & DRAG SCROLL -->
    <script>
        // Data dengan tambahan konfigurasi warna tema
        const wisataData = [
            {
                title: "Botania Garden (Bogar)",
                category: "Agrowisata",
                themeColors: {
                    badgeBg: "bg-emerald-100", badgeText: "text-emerald-800", border: "border-emerald-500", shadow: "shadow-emerald-500/20"
                },
                address: "Jl. Raya Bukateja - Karangcengis, Kec. Bukateja, Kab. Purbalingga",
                rating: 4.8,
                totalReviews: 124,
                description: "Botania Garden atau sering disebut Bogar adalah agrowisata andalan Desa Karangcengis. Nikmati pengalaman luar biasa memetik buah langsung dari pohonnya sambil belajar sistem pertanian hidroponik dan tradisional. Sangat cocok untuk wisata keluarga dan edukasi anak-anak.",
                videoEmbed: "https://www.youtube.com/embed/ScMzIvxBSi4?si=R1e5d7_M6ZtO0jYg", 
                mapEmbed: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.273752538137!2d109.4312!3d-7.4348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65ab4000000001%3A0x1!2sDesa%20Karangcengis!5e0!3m2!1sid!2sid!4v1680000000000!5m2!1sid!2sid",
                jamBuka: "Setiap Hari, 08:00 - 17:00 WIB",
                htm: "Rp 10.000 / Orang",
                kontak: "+62 821-3344-5566 (Admin Bogar)",
                spots: [
                    { name: "Kebun Petik Buah", image: "https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=500", desc: "Sensasi memetik buah segar langsung dari pohonnya." },
                    { name: "Green House Edukasi", image: "https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=500", desc: "Belajar tentang pertanian modern hidroponik." }
                ],
                reviews: [
                    { name: "Budi Santoso", avatar: "https://ui-avatars.com/api/?name=Budi+Santoso&background=10b981&color=fff", rating: 5, date: "2 minggu lalu", comment: "Tempatnya asri dan edukatif. Anak-anak senang sekali!" },
                    { name: "Siti Rahmawati", avatar: "https://ui-avatars.com/api/?name=Siti+Rahmawati&background=0ea5e9&color=fff", rating: 5, date: "1 bulan lalu", comment: "Fasilitas lengkap, harganya ramah di kantong." }
                ],
                gallery: [
                    "https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=600",
                    "https://images.unsplash.com/photo-1511693892705-24e0303c621f?q=80&w=600",
                    "https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=600",
                    "https://images.unsplash.com/photo-1557800636-894a64c1696f?q=80&w=600"
                ]
            },
            {
                title: "Jalur Sepeda Sawah",
                category: "Alam Bebas",
                themeColors: {
                    badgeBg: "bg-sky-100", badgeText: "text-sky-800", border: "border-sky-500", shadow: "shadow-sky-500/20"
                },
                address: "Area Persawahan Dusun II Karangcengis, Kec. Bukateja, Kab. Purbalingga",
                rating: 4.9,
                totalReviews: 89,
                description: "Melarikan diri sejenak dari hiruk-pikuk kota dengan menyusuri jalur sepeda yang membelah hamparan sawah hijau Karangcengis. Rasakan udara pagi yang sangat segar, sapaan hangat warga desa, dan pemandangan Gunung Slamet dari kejauhan.",
                videoEmbed: "https://www.youtube.com/embed/1la4Tzi4HlE?si=D1oQvH16y1-QfW1f",
                mapEmbed: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.273752538137!2d109.4312!3d-7.4348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65ab4000000001%3A0x1!2sDesa%20Karangcengis!5e0!3m2!1sid!2sid!4v1680000000000!5m2!1sid!2sid",
                jamBuka: "Setiap Hari, 05:30 - 18:00 WIB",
                htm: "Gratis (Sewa Sepeda Rp 20.000)",
                kontak: "+62 812-9988-7766 (Sewa Sepeda)",
                spots: [
                    { name: "Track Estetik Sawah", image: "https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=500", desc: "Jalur semen mulus yang aman untuk bersepeda." },
                    { name: "Titik Foto Sunset", image: "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=500", desc: "Pemandangan siluet Gunung Slamet saat sore." }
                ],
                reviews: [
                    { name: "Dimas Anggara", avatar: "https://ui-avatars.com/api/?name=Dimas+Anggara&background=8b5cf6&color=fff", rating: 5, date: "3 hari lalu", comment: "Gowes pagi di sini vibes-nya dapet banget." },
                    { name: "Rina Nose", avatar: "https://ui-avatars.com/api/?name=Rina+Nose&background=f43f5e&color=fff", rating: 4, date: "1 minggu lalu", comment: "Sewa sepedanya murah, udaranya segar." }
                ],
                gallery: [
                    "https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=600",
                    "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=600",
                    "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=600",
                    "https://images.unsplash.com/photo-1505232070786-2a42dd6e2230?q=80&w=600"
                ]
            },
            {
                title: "Pusat Kerajinan & Tani",
                category: "Edukasi & Belanja",
                themeColors: {
                    badgeBg: "bg-amber-100", badgeText: "text-amber-800", border: "border-amber-500", shadow: "shadow-amber-500/20"
                },
                address: "Kawasan Balai Desa Karangcengis, Kec. Bukateja, Kab. Purbalingga",
                rating: 4.7,
                totalReviews: 65,
                description: "Sebuah wadah pemberdayaan masyarakat desa. Di sini wisatawan bisa melihat langsung warga lokal membuat kerajinan tangan, sekaligus menjadi sentra belanja bibit buah unggulan serta oleh-oleh otentik.",
                videoEmbed: "https://www.youtube.com/embed/ScMzIvxBSi4?si=R1e5d7_M6ZtO0jYg",
                mapEmbed: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.273752538137!2d109.4312!3d-7.4348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65ab4000000001%3A0x1!2sDesa%20Karangcengis!5e0!3m2!1sid!2sid!4v1680000000000!5m2!1sid!2sid",
                jamBuka: "Senin - Sabtu, 09:00 - 16:00 WIB",
                htm: "Gratis Masuk",
                kontak: "+62 856-1122-3344 (Pengurus BUMDes)",
                spots: [
                    { name: "Workshop Anyaman", image: "https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=500", desc: "Melihat proses pembuatan kerajinan bambu." },
                    { name: "Etalase Bibit Buah", image: "https://images.unsplash.com/photo-1593489115206-8dce2828bce0?q=80&w=500", desc: "Sentra bibit buah unggulan hasil okulasi petani." }
                ],
                reviews: [
                    { name: "Maya Kartika", avatar: "https://ui-avatars.com/api/?name=Maya+Kartika&background=10b981&color=fff", rating: 4, date: "1 bulan lalu", comment: "Kerajinan anyamannya rapi dan unik. Cocok untuk oleh-oleh." }
                ],
                gallery: [
                    "https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=600",
                    "https://images.unsplash.com/photo-1593489115206-8dce2828bce0?q=80&w=600",
                    "https://images.unsplash.com/photo-1516962215378-7fa2e137ae93?q=80&w=600",
                    "https://images.unsplash.com/photo-1620619767323-b95a89183081?q=80&w=600"
                ]
            }
        ];

        const renderStars = (rating) => {
            let starsHtml = '';
            const fullStars = Math.floor(rating);
            for (let i = 1; i <= 5; i++) {
                if (i <= fullStars) {
                    starsHtml += `<svg class="w-4 h-4 fill-amber-400 text-amber-400 drop-shadow-sm" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>`;
                } else {
                    starsHtml += `<svg class="w-4 h-4 text-slate-200" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>`;
                }
            }
            return `<div class="flex items-center gap-0.5">${starsHtml}</div>`;
        };

        window.openLightbox = (src) => {
            const lightbox = document.createElement('div');
            lightbox.id = 'lightbox-overlay';
            lightbox.className = 'fixed inset-0 z-[100] flex items-center justify-center bg-slate-900/95 backdrop-blur-sm p-4 opacity-0 transition-opacity duration-300 cursor-zoom-out';
            lightbox.innerHTML = `<img src="${src}" class="max-h-[90vh] max-w-full rounded-2xl shadow-2xl shadow-emerald-500/20 border border-white/10 scale-95 transition-transform duration-300">`;
            
            document.body.appendChild(lightbox);
            document.body.style.overflow = 'hidden';
            
            setTimeout(() => {
                lightbox.classList.remove('opacity-0');
                lightbox.querySelector('img').classList.remove('scale-95');
            }, 10);

            lightbox.addEventListener('click', () => {
                lightbox.classList.add('opacity-0');
                lightbox.querySelector('img').classList.add('scale-95');
                setTimeout(() => {
                    lightbox.remove();
                    document.body.style.overflow = 'auto';
                }, 300);
            });
        };

        document.addEventListener('DOMContentLoaded', () => {
            const scrollWrapper = document.getElementById('wisata-scroll-wrapper');
            const cards = document.querySelectorAll('.wisata-card');
            const dynamicContentDiv = document.getElementById('dynamic-content');
            let currentIndex = -1;

            const updateCardStyles = (activeIndex) => {
                cards.forEach((card, i) => {
                    if (i === activeIndex) {
                        card.classList.remove('opacity-50', 'scale-95');
                        card.classList.add('opacity-100', 'scale-100');
                    } else {
                        card.classList.add('opacity-50', 'scale-95');
                        card.classList.remove('opacity-100', 'scale-100');
                    }
                });
            };

            const renderDynamicContent = (index) => {
                if (currentIndex === index) return;
                currentIndex = index;
                const data = wisataData[index];
                
                const reviewsHTML = `
                    <div class="flex items-center gap-3 mb-5">
                        <div class="h-6 w-1.5 rounded-full bg-gradient-to-b from-emerald-400 to-teal-500"></div>
                        <h3 class="text-sm font-black text-slate-800 uppercase tracking-widest">Apa Kata Pengunjung?</h3>
                    </div>
                    
                    <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl p-6 mb-6 flex flex-col sm:flex-row items-center justify-between gap-5 shadow-lg shadow-emerald-500/30 relative overflow-hidden">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-white opacity-10 rounded-full blur-2xl pointer-events-none"></div>
                        
                        <div class="flex items-center gap-5 relative z-10 text-white w-full sm:w-auto">
                            <div class="text-center bg-white/20 p-3 rounded-2xl backdrop-blur-sm border border-white/30">
                                <span class="text-4xl font-black">${data.rating}</span>
                            </div>
                            <div>
                                ${renderStars(data.rating).replace(/text-slate-200/g, 'text-white/40')}
                                <p class="text-xs font-medium text-emerald-50 mt-1.5 tracking-wide">Dari total <b>${data.totalReviews} ulasan</b></p>
                            </div>
                        </div>
                        <button class="w-full sm:w-auto px-6 py-3 bg-white hover:bg-slate-50 text-teal-700 text-sm font-bold rounded-xl shadow-md transition transform active:scale-95 relative z-10">
                            Tulis Ulasan Anda
                        </button>
                    </div>

                    <div class="grid grid-cols-1 gap-4">
                        ${data.reviews.map(review => `
                            <!-- Background ulasan diubah ke slate-50 agar tidak terlalu putih silau -->
                            <div class="bg-slate-50/80 border border-slate-200/60 rounded-2xl p-5 shadow-sm hover:shadow-md transition duration-300">
                                <div class="flex items-center gap-3 mb-3">
                                    <img src="${review.avatar}" alt="${review.name}" class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-sm">
                                    <div>
                                        <h4 class="text-sm font-bold text-slate-800">${review.name}</h4>
                                        <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider">${review.date}</span>
                                    </div>
                                </div>
                                ${renderStars(review.rating)}
                                <p class="text-slate-600 text-sm leading-relaxed mt-3 italic">"${review.comment}"</p>
                            </div>
                        `).join('')}
                    </div>
                `;

                dynamicContentDiv.classList.remove('content-visible');
                dynamicContentDiv.classList.add('content-hidden');

                setTimeout(() => {
                    dynamicContentDiv.innerHTML = `
                        <div class="space-y-12 relative z-10">
                            
                            <!-- FLEX CONTAINER UTAMA -->
                            <div class="flex flex-col lg:grid lg:grid-cols-12 gap-10 items-start">
                                
                                <!-- ================= KOLOM KIRI ================= -->
                                <div class="w-full lg:col-span-7 space-y-10 flex flex-col order-1">
                                    
                                    <!-- Header Info & Deskripsi -->
                                    <div>
                                        <div class="flex flex-wrap items-center gap-2.5 mb-4">
                                            <span class="${data.themeColors.badgeBg} ${data.themeColors.badgeText} text-[11px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest border border-white/50 shadow-sm">${data.category}</span>
                                        </div>
                                        <h2 class="text-3xl lg:text-5xl font-black text-slate-900 mt-2 mb-5 leading-tight tracking-tight">${data.title}</h2>
                                        <p class="text-slate-600 leading-relaxed text-sm sm:text-base font-medium">${data.description}</p>
                                    </div>

                                    <!-- Cuplikan Video -->
                                    <div>
                                        <div class="flex items-center gap-3 mb-5">
                                            <div class="h-6 w-1.5 rounded-full bg-gradient-to-b from-red-400 to-rose-500"></div>
                                            <h3 class="text-sm font-black text-slate-800 uppercase tracking-widest">Cuplikan Suasana</h3>
                                        </div>
                                        <div class="relative w-full rounded-3xl overflow-hidden shadow-lg shadow-slate-300/50 bg-slate-800 border border-slate-200 p-1" style="padding-top: 56.25%;">
                                            <iframe class="absolute top-1 left-1 w-[calc(100%-8px)] h-[calc(100%-8px)] rounded-[1.2rem]" src="${data.videoEmbed}" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <!-- INFORMASI KUNJUNGAN -->
                                    <div class="pt-2">
                                        <div class="flex items-center gap-3 mb-5">
                                            <div class="h-6 w-1.5 rounded-full bg-gradient-to-b from-sky-400 to-blue-500"></div>
                                            <h3 class="text-sm font-black text-slate-800 uppercase tracking-widest">Informasi Kunjungan</h3>
                                        </div>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                            <!-- Mengubah base box jadi slate-50 yang lebih kalem -->
                                            <div class="flex items-start gap-4 p-5 bg-gradient-to-br from-slate-50 to-slate-100/80 border border-slate-200/60 rounded-3xl shadow-sm hover:shadow-md transition">
                                                <div class="p-3 bg-emerald-100/80 text-emerald-600 rounded-2xl shadow-inner"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg></div>
                                                <div>
                                                    <p class="text-[10px] uppercase font-black tracking-widest text-slate-400 mb-1">Harga Tiket</p>
                                                    <p class="text-sm font-bold text-slate-800">${data.htm}</p>
                                                </div>
                                            </div>
                                            <!-- Box Jam Buka -->
                                            <div class="flex items-start gap-4 p-5 bg-gradient-to-br from-slate-50 to-slate-100/80 border border-slate-200/60 rounded-3xl shadow-sm hover:shadow-md transition">
                                                <div class="p-3 bg-sky-100/80 text-sky-600 rounded-2xl shadow-inner"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                                                <div>
                                                    <p class="text-[10px] uppercase font-black tracking-widest text-slate-400 mb-1">Jam Operasional</p>
                                                    <p class="text-sm font-bold text-slate-800">${data.jamBuka}</p>
                                                </div>
                                            </div>
                                            <!-- Box Kontak -->
                                            <div class="sm:col-span-2 flex items-start gap-4 p-5 bg-gradient-to-br from-slate-50 to-slate-100/80 border border-slate-200/60 rounded-3xl shadow-sm hover:shadow-md transition">
                                                <div class="p-3 bg-amber-100/80 text-amber-600 rounded-2xl shadow-inner"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></div>
                                                <div>
                                                    <p class="text-[10px] uppercase font-black tracking-widest text-slate-400 mb-1">Kontak Reservasi</p>
                                                    <p class="text-sm font-bold text-slate-800">${data.kontak}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ULASAN PENGUNJUNG (Hanya tampil di Desktop) -->
                                    <div class="hidden lg:block pt-4">
                                        ${reviewsHTML}
                                    </div>

                                </div>

                                <!-- ================= KOLOM KANAN ================= -->
                                <div class="w-full lg:col-span-5 space-y-10 flex flex-col order-2">
                                    
                                    <!-- Pengalaman Seru -->
                                    <div class="pt-8 lg:pt-0 border-t border-slate-200/60 lg:border-t-0">
                                        <div class="flex items-center gap-3 mb-5">
                                            <div class="h-6 w-1.5 rounded-full bg-gradient-to-b from-amber-400 to-orange-500"></div>
                                            <h3 class="text-sm font-black text-slate-800 uppercase tracking-widest">Pengalaman Seru di Sini</h3>
                                        </div>
                                        <div class="space-y-5">
                                            ${data.spots.map((spot) => `
                                                <!-- Card background menggunakan warna keabuan slate-50 -->
                                                <div class="bg-slate-50/80 border-x border-t border-slate-200/60 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col transform hover:-translate-y-1 border-b-4 border-b-transparent hover:${data.themeColors.border}">
                                                    <div class="relative h-44 overflow-hidden">
                                                        <img src="${spot.image}" alt="${spot.name}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">
                                                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 pointer-events-none"></div>
                                                    </div>
                                                    <div class="p-5">
                                                        <h4 class="text-base font-bold text-slate-900 mb-2 group-hover:text-emerald-600 transition-colors">${spot.name}</h4>
                                                        <p class="text-xs text-slate-500 leading-relaxed">${spot.desc}</p>
                                                    </div>
                                                </div>
                                            `).join('')}
                                        </div>
                                    </div>

                                    <!-- GALERI DENGAN LIGHTBOX -->
                                    <!-- Background galeri memakai transparan slate-100 -->
                                    <div class="bg-slate-100/50 p-6 rounded-[2rem] border border-slate-200/60">
                                        <div class="flex items-center gap-3 mb-5">
                                            <div class="h-6 w-1.5 rounded-full bg-gradient-to-b from-purple-400 to-indigo-500"></div>
                                            <h3 class="text-sm font-black text-slate-800 uppercase tracking-widest">Galeri Pengunjung</h3>
                                        </div>
                                        <div class="grid grid-cols-2 gap-3 sm:gap-4">
                                            ${data.gallery.map(img => `
                                                <div class="aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group shadow-sm relative">
                                                    <img src="${img}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                                                    <div class="absolute inset-0 bg-emerald-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                                        <svg class="w-8 h-8 text-white scale-50 group-hover:scale-100 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                                    </div>
                                                </div>
                                            `).join('')}
                                        </div>
                                    </div>

                                    <!-- Lokasi Maps -->
                                    <div>
                                        <div class="flex items-center gap-3 mb-5">
                                            <div class="h-6 w-1.5 rounded-full bg-gradient-to-b from-slate-400 to-slate-600"></div>
                                            <h3 class="text-sm font-black text-slate-800 uppercase tracking-widest">Rute Lokasi</h3>
                                        </div>
                                        <div class="rounded-3xl overflow-hidden border border-slate-200/60 shadow-md relative p-1.5 bg-slate-50">
                                            <iframe src="${data.mapEmbed}" class="w-full h-64 border-0 rounded-[1.2rem]" allowfullscreen loading="lazy"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ================= ULASAN VERSI MOBILE ================= -->
                            <div class="block lg:hidden pt-10 border-t border-slate-200/60 mt-10">
                                ${reviewsHTML}
                            </div>

                        </div>
                    `;
                    dynamicContentDiv.classList.remove('content-hidden');
                    dynamicContentDiv.classList.add('content-visible');
                }, 400);
            };

            const handleScroll = () => {
                const scrollLeft = scrollWrapper.scrollLeft;
                const wrapperWidth = scrollWrapper.offsetWidth;
                const centerPoint = scrollLeft + (wrapperWidth / 2);
                
                let closestIndex = 0;
                let minDistance = Infinity;

                cards.forEach((card, index) => {
                    const cardCenter = card.offsetLeft + (card.offsetWidth / 2);
                    const distance = Math.abs(centerPoint - cardCenter);
                    
                    if (distance < minDistance) {
                        minDistance = distance;
                        closestIndex = index;
                    }
                });

                updateCardStyles(closestIndex);
                
                clearTimeout(window.renderTimeout);
                window.renderTimeout = setTimeout(() => {
                    renderDynamicContent(closestIndex);
                }, 150);
            };

            scrollWrapper.addEventListener('scroll', handleScroll);

            let isDown = false;
            let startX;
            let scrollLeft;

            scrollWrapper.addEventListener('mousedown', (e) => {
                isDown = true;
                scrollWrapper.classList.add('active:cursor-grabbing');
                scrollWrapper.classList.remove('snap-x', 'snap-mandatory');
                startX = e.pageX - scrollWrapper.offsetLeft;
                scrollLeft = scrollWrapper.scrollLeft;
            });
            scrollWrapper.addEventListener('mouseleave', () => {
                isDown = false;
                scrollWrapper.classList.add('snap-x', 'snap-mandatory');
            });
            scrollWrapper.addEventListener('mouseup', () => {
                isDown = false;
                scrollWrapper.classList.add('snap-x', 'snap-mandatory');
                handleScroll();
            });
            scrollWrapper.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - scrollWrapper.offsetLeft;
                const walk = (x - startX) * 2;
                scrollWrapper.scrollLeft = scrollLeft - walk;
            });

            cards.forEach((card, index) => {
                card.addEventListener('click', () => {
                    const cardLeft = card.offsetLeft;
                    const cardWidth = card.offsetWidth;
                    const wrapperWidth = scrollWrapper.offsetWidth;
                    
                    const scrollPos = cardLeft - (wrapperWidth / 2) + (cardWidth / 2);
                    scrollWrapper.scrollTo({ left: scrollPos, behavior: 'smooth' });
                });
            });

            setTimeout(() => {
                const initialCard = cards[1];
                const scrollPos = initialCard.offsetLeft - (scrollWrapper.offsetWidth / 2) + (initialCard.offsetWidth / 2);
                scrollWrapper.scrollTo({ left: scrollPos, behavior: 'auto' });
                handleScroll();
            }, 100);

            window.addEventListener('resize', () => {
                if (currentIndex !== -1) {
                    const activeCard = cards[currentIndex];
                    const scrollPos = activeCard.offsetLeft - (scrollWrapper.offsetWidth / 2) + (activeCard.offsetWidth / 2);
                    scrollWrapper.scrollTo({ left: scrollPos, behavior: 'auto' });
                }
            });
        });
    </script>
</body>
</html>
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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .bg-pattern {
            background-image: radial-gradient(rgba(16, 185, 129, 0.15) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }

        /* Animasi Swipe Kiri Kanan */
        @keyframes swipe-hint {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(8px); }
        }
        .animate-swipe { animation: swipe-hint 2s ease-in-out infinite; }

        /* Transisi untuk bagian konten dinamis */
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
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white relative overflow-x-hidden">

    @extends('layouts.main')

@section('content')

    <!-- Section Utama Halaman Wisata -->
    <section class="pt-28 pb-4 relative overflow-hidden">
        <!-- Ornamen Latar -->
        <div class="absolute top-0 right-0 w-72 h-72 bg-emerald-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-40 left-10 w-72 h-72 bg-teal-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute inset-0 bg-pattern opacity-50 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- HEADER YANG LEBIH MENARIK -->
            <div class="text-center mb-6" data-aos="fade-down">
                
                <!-- Badge Modern -->
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-emerald-100/80 border border-emerald-200 mb-5 shadow-sm backdrop-blur-sm">
                    <span class="relative flex h-3 w-3">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                    </span>
                    <span class="text-[11px] font-black text-emerald-800 uppercase tracking-widest">Eksplorasi Desa</span>
                </div>
                
                <!-- Judul Gradasi -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight mb-4 leading-tight">
                    Temukan <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-500 to-teal-400">Destinasi</span> Kami
                </h1>
                
                <p class="text-slate-500 text-sm md:text-base max-w-xl mx-auto leading-relaxed">
                    Pilih dan sentuh kartu di bawah ini untuk mengintip serunya fasilitas, harga tiket, ulasan, hingga rute lokasinya.
                </p>
            </div>

            <!-- INDIKATOR GESER (Dibuat Nyolok & Menyatu dengan Kartu) -->
            <div class="flex justify-center mb-4 relative z-20" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-900 text-white text-[10px] sm:text-xs font-bold uppercase tracking-widest px-5 py-2.5 rounded-full shadow-lg shadow-slate-900/20 flex items-center gap-3">
                    <svg class="w-4 h-4 text-emerald-400 rotate-180 animate-swipe" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    Geser Kartu
                    <svg class="w-4 h-4 text-emerald-400 animate-swipe" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </div>
            </div>

            <!-- WRAPPER CAROUSEL -->
            <!-- py-2 membuat kartu hampir nempel dengan teks di atas dan kotak detail di bawah -->
            <div class="relative overflow-hidden py-2 mb-2">
                
                <!-- BINGKAI DIAM DI TENGAH (Lebar dan Tinggi disesuaikan) -->
                <div class="absolute pointer-events-none top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 w-[270px] sm:w-[320px] md:w-[350px] h-[320px] rounded-[2rem] border-[4px] border-emerald-500 shadow-[0_0_30px_rgba(16,185,129,0.3)] z-20 transition-all duration-300"></div>

                <!-- TRACK SLIDER (Gap diperkecil jadi gap-4 agar kartu samping terlihat jelas terpotong) -->
                <div id="wisata-container" class="flex flex-nowrap gap-4 sm:gap-6 relative transition-transform duration-700 ease-[cubic-bezier(0.25,1,0.5,1)] cursor-grab active:cursor-grabbing">
                    
                    <!-- KARTU WISATA 1 -->
                    <!-- h-[320px] agar lebih cebol dan menyisakan banyak ruang untuk detail di bawah -->
                    <div class="wisata-card flex-none w-[270px] sm:w-[320px] md:w-[350px] group relative h-[320px] rounded-[2rem] overflow-hidden shadow-lg transition-all duration-700 ease-out border border-white/50">
                        <img src="https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=800" alt="Botania Garden" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-out pointer-events-none">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/30 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-300 pointer-events-none"></div>
                        <div class="absolute top-5 left-5 bg-white/95 backdrop-blur-md text-emerald-700 text-[10px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md pointer-events-none">Agrowisata</div>
                        <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col justify-end pointer-events-none">
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-1 line-clamp-1">Botania Garden</h3>
                            <p class="text-emerald-300 text-xs font-semibold">Wisata Petik Buah</p>
                        </div>
                    </div>

                    <!-- KARTU WISATA 2 -->
                    <div class="wisata-card flex-none w-[270px] sm:w-[320px] md:w-[350px] group relative h-[320px] rounded-[2rem] overflow-hidden shadow-lg transition-all duration-700 ease-out border border-white/50">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=800" alt="Sawah Terasering" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-out pointer-events-none">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/30 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-300 pointer-events-none"></div>
                        <div class="absolute top-5 left-5 bg-white/95 backdrop-blur-md text-emerald-700 text-[10px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md pointer-events-none">Alam</div>
                        <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col justify-end pointer-events-none">
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-1 line-clamp-1">Jalur Sepeda Sawah</h3>
                            <p class="text-emerald-300 text-xs font-semibold">Relaksasi & Olahraga</p>
                        </div>
                    </div>

                    <!-- KARTU WISATA 3 -->
                    <div class="wisata-card flex-none w-[270px] sm:w-[320px] md:w-[350px] group relative h-[320px] rounded-[2rem] overflow-hidden shadow-lg transition-all duration-700 ease-out border border-white/50">
                        <img src="https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=800" alt="Pusat Oleh-oleh" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-out pointer-events-none">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/30 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-300 pointer-events-none"></div>
                        <div class="absolute top-5 left-5 bg-white/95 backdrop-blur-md text-emerald-700 text-[10px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md pointer-events-none">Edukasi</div>
                        <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col justify-end pointer-events-none">
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-1 line-clamp-1">Pusat Kerajinan & Tani</h3>
                            <p class="text-emerald-300 text-xs font-semibold">Oleh-oleh Khas Desa</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SECTION DETAIL DINAMIS -->
    <!-- Tidak pakai pt (padding top), langsung menyambung dari section atas -->
    <section class="pb-24 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Panah kecil ke bawah sebagai penghubung visual dari kartu ke kotak detail -->
            <div class="flex justify-center -mb-4 relative z-20">
                <div class="bg-emerald-500 text-white p-2 rounded-full border-4 border-slate-50">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 14l-7 7m0 0l-7-7m7 7V3" /></svg>
                </div>
            </div>
            
            <div id="dynamic-content" class="content-visible bg-white/80 backdrop-blur-xl border border-slate-200/80 rounded-[2.5rem] pt-12 pb-6 px-6 sm:px-10 shadow-[0_8px_30px_rgb(0,0,0,0.06)]">
                <!-- Konten dinamis akan di-inject ke sini oleh JavaScript -->
            </div>
        </div>
    </section>

@endsection

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 20, duration: 700 });
    </script>

    <!-- SCRIPT LOGIKA KONTEN DINAMIS -->
    <script>
        const wisataData = [
            {
                title: "Botania Garden (Bogar)",
                category: "Agrowisata",
                address: "Jl. Raya Bukateja - Karangcengis, Kec. Bukateja, Kab. Purbalingga, Jawa Tengah",
                rating: 4.8,
                totalReviews: 124,
                description: "Botania Garden atau sering disebut Bogar adalah agrowisata andalan Desa Karangcengis. Nikmati pengalaman luar biasa memetik buah langsung dari pohonnya sambil belajar sistem pertanian hidroponik dan tradisional. Sangat cocok untuk wisata keluarga dan edukasi anak-anak.",
                videoEmbed: "https://www.youtube.com/embed/ScMzIvxBSi4?si=R1e5d7_M6ZtO0jYg", 
                mapEmbed: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.273752538137!2d109.4312!3d-7.4348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65ab4000000001%3A0x1!2sDesa%20Karangcengis!5e0!3m2!1sid!2sid!4v1680000000000!5m2!1sid!2sid",
                mapsUrl: "https://maps.google.com/?q=Desa+Karangcengis",
                jamBuka: "Setiap Hari, 08:00 - 17:00 WIB",
                htm: "Rp 10.000 / Orang",
                kontak: "+62 821-3344-5566 (Admin Bogar)",
                fasilitas: ["Area Parkir Luas", "Toilet & Mushola", "Saung Makan", "Pusat Edukasi Hidroponik"],
                spots: [
                    { 
                        name: "Kebun Petik Buah Langsung", 
                        image: "https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=500",
                        desc: "Rasakan sensasi memetik jambu kristal, jeruk, dan stroberi langsung dari pohonnya."
                    },
                    { 
                        name: "Green House Edukasi", 
                        image: "https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=500",
                        desc: "Area ini dirancang khusus bagi Anda yang ingin belajar tentang pertanian modern tanpa tanah."
                    },
                    { 
                        name: "Saung Kuliner Tradisional", 
                        image: "https://images.unsplash.com/photo-1511693892705-24e0303c621f?q=80&w=500",
                        desc: "Setelah lelah berkeliling, bersantailah di saung bambu yang sejuk ini dengan hidangan desa."
                    }
                ],
                reviews: [
                    { name: "Budi Santoso", avatar: "https://ui-avatars.com/api/?name=Budi+Santoso&background=10b981&color=fff", rating: 5, date: "2 minggu lalu", comment: "Tempatnya asri dan edukatif. Anak-anak senang sekali petik buah segar langsung dari pohonnya!" },
                    { name: "Siti Rahmawati", avatar: "https://ui-avatars.com/api/?name=Siti+Rahmawati&background=0284c7&color=fff", rating: 5, date: "1 bulan lalu", comment: "Fasilitas lengkap, saung kulinernya nyaman dan harganya ramah di kantong." }
                ],
                // DATA GALERI BARU
                gallery: [
                    "https://images.unsplash.com/photo-1595844730298-b960fad9733c?q=80&w=400",
                    "https://images.unsplash.com/photo-1511693892705-24e0303c621f?q=80&w=400",
                    "https://images.unsplash.com/photo-1464226184884-fa280b87c399?q=80&w=400",
                    "https://images.unsplash.com/photo-1557800636-894a64c1696f?q=80&w=400"
                ]
            },
            {
                title: "Jalur Sepeda Sawah",
                category: "Alam & Relaksasi",
                address: "Area Persawahan Dusun II Karangcengis, Kec. Bukateja, Kab. Purbalingga",
                rating: 4.9,
                totalReviews: 89,
                description: "Melarikan diri sejenak dari hiruk-pikuk kota dengan menyusuri jalur sepeda yang membelah hamparan sawah hijau Karangcengis. Rasakan udara pagi yang sangat segar, sapaan hangat warga desa, dan pemandangan Gunung Slamet dari kejauhan.",
                videoEmbed: "https://www.youtube.com/embed/1la4Tzi4HlE?si=D1oQvH16y1-QfW1f",
                mapEmbed: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.273752538137!2d109.4312!3d-7.4348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65ab4000000001%3A0x1!2sDesa%20Karangcengis!5e0!3m2!1sid!2sid!4v1680000000000!5m2!1sid!2sid",
                mapsUrl: "https://maps.google.com/?q=Karangcengis+Bukateja",
                jamBuka: "Setiap Hari, 05:30 - 18:00 WIB",
                htm: "Gratis (Sewa Sepeda Rp 20.000)",
                kontak: "+62 812-9988-7766 (Sewa Sepeda)",
                fasilitas: ["Track Sepeda Bersemen", "Penyewaan Sepeda", "Rest Area", "Spot Foto Sunset"],
                spots: [
                    { 
                        name: "Track Estetik Sawah", 
                        image: "https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=500",
                        desc: "Jalur semen mulus sepanjang hampir 2 kilometer yang aman untuk bersepeda maupun jogging pagi."
                    },
                    { 
                        name: "Titik Foto Sunset", 
                        image: "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=500",
                        desc: "Bagi pecinta fotografi, area ini wajib dikunjungi saat sore hari dengan siluet Gunung Slamet."
                    }
                ],
                reviews: [
                    { name: "Dimas Anggara", avatar: "https://ui-avatars.com/api/?name=Dimas+Anggara&background=8b5cf6&color=fff", rating: 5, date: "3 hari lalu", comment: "Gowes pagi di sini vibes-nya dapet banget. Sawahnya hijau membentang dan viewnya mantap!" }
                ],
                // DATA GALERI BARU
                gallery: [
                    "https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=400",
                    "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=400",
                    "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=400",
                    "https://images.unsplash.com/photo-1505232070786-2a42dd6e2230?q=80&w=400"
                ]
            },
            {
                title: "Pusat Kerajinan & Tani",
                category: "Edukasi & Belanja",
                address: "Kawasan Balai Desa Karangcengis, Kec. Bukateja, Kab. Purbalingga",
                rating: 4.7,
                totalReviews: 65,
                description: "Sebuah wadah pemberdayaan masyarakat desa. Di sini wisatawan bisa melihat langsung warga lokal membuat kerajinan tangan, sekaligus menjadi sentra belanja bibit buah unggulan serta oleh-oleh otentik khas Desa Karangcengis.",
                videoEmbed: "https://www.youtube.com/embed/ScMzIvxBSi4?si=R1e5d7_M6ZtO0jYg",
                mapEmbed: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.273752538137!2d109.4312!3d-7.4348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65ab4000000001%3A0x1!2sDesa%20Karangcengis!5e0!3m2!1sid!2sid!4v1680000000000!5m2!1sid!2sid",
                mapsUrl: "https://maps.google.com/?q=Balai+Desa+Karangcengis",
                jamBuka: "Senin - Sabtu, 09:00 - 16:00 WIB",
                htm: "Gratis Masuk",
                kontak: "+62 856-1122-3344 (Pengurus BUMDes)",
                fasilitas: ["Galeri Oleh-oleh", "Workshop Kerajinan", "Toilet", "Area Parkir"],
                spots: [
                    { 
                        name: "Workshop Anyaman Bambu", 
                        image: "https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=500",
                        desc: "Saksikan langsung kepiawaian ibu-ibu desa mengolah bilah bambu menjadi berbagai kerajinan estetik."
                    },
                    { 
                        name: "Etalase Bibit Buah", 
                        image: "https://images.unsplash.com/photo-1593489115206-8dce2828bce0?q=80&w=500",
                        desc: "Sentra ini menyediakan berbagai bibit buah unggulan bersertifikat hasil okulasi petani Karangcengis."
                    }
                ],
                reviews: [
                    { name: "Maya Kartika", avatar: "https://ui-avatars.com/api/?name=Maya+Kartika&background=10b981&color=fff", rating: 4, date: "1 bulan lalu", comment: "Kerajinan anyamannya rapi dan unik. Cocok untuk oleh-oleh khas Karangcengis." }
                ],
                // DATA GALERI BARU
                gallery: [
                    "https://images.unsplash.com/photo-1601002937583-040f1a91e1d0?q=80&w=400",
                    "https://images.unsplash.com/photo-1593489115206-8dce2828bce0?q=80&w=400",
                    "https://images.unsplash.com/photo-1516962215378-7fa2e137ae93?q=80&w=400",
                    "https://images.unsplash.com/photo-1620619767323-b95a89183081?q=80&w=400"
                ]
            }
        ];

        // Helper Bintang Rating (TETAP)
        const renderStars = (rating) => {
            let starsHtml = '';
            const fullStars = Math.floor(rating);
            for (let i = 1; i <= 5; i++) {
                if (i <= fullStars) {
                    starsHtml += `<svg class="w-4 h-4 fill-amber-400 text-amber-400" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>`;
                } else {
                    starsHtml += `<svg class="w-4 h-4 text-slate-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>`;
                }
            }
            return `<div class="flex items-center gap-0.5">${starsHtml}</div>`;
        };

        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('wisata-container');
            const cards = document.querySelectorAll('.wisata-card');
            const dynamicContentDiv = document.getElementById('dynamic-content');

            const renderDynamicContent = (index) => {
                const data = wisataData[index];
                
                dynamicContentDiv.classList.remove('content-visible');
                dynamicContentDiv.classList.add('content-hidden');

                setTimeout(() => {
                    dynamicContentDiv.innerHTML = `
                        <div class="space-y-12">
                            
                            <!-- GRID UTAMA: Kiri & Kanan -->
                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                                
                                <!-- ================= KOLOM KIRI ================= -->
                                <div class="lg:col-span-7 space-y-8">
                                    
                                    <!-- Header Info & Deskripsi -->
                                    <div>
                                        <div class="flex flex-wrap items-center gap-2.5 mb-3">
                                            <span class="bg-emerald-100 text-emerald-800 text-[11px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                                ${data.category}
                                            </span>
                                        </div>
                                        <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 mb-4">${data.title}</h2>
                                        <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                                            ${data.description}
                                        </p>
                                    </div>

                                    <!-- Cuplikan Video -->
                                    <div>
                                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-3 border-l-4 border-emerald-500 pl-3">Cuplikan Suasana</h3>
                                        <div class="relative w-full rounded-2xl overflow-hidden shadow-md bg-slate-800" style="padding-top: 56.25%;">
                                            <iframe class="absolute top-0 left-0 w-full h-full" src="${data.videoEmbed}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <!-- Informasi Kunjungan -->
                                    <div class="pt-6 border-t border-slate-200">
                                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-4 border-l-4 border-emerald-500 pl-3">Informasi Kunjungan</h3>
                                        
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                            <div class="bg-emerald-50/70 rounded-2xl p-4 border border-emerald-100 shadow-sm">
                                                <span class="text-[10px] uppercase font-bold tracking-wider text-emerald-700 block mb-1">Harga Tiket</span>
                                                <span class="text-sm font-bold text-slate-900">${data.htm}</span>
                                            </div>
                                            <div class="bg-sky-50/70 rounded-2xl p-4 border border-sky-100 shadow-sm">
                                                <span class="text-[10px] uppercase font-bold tracking-wider text-sky-700 block mb-1">Jam Buka</span>
                                                <span class="text-sm font-bold text-slate-900">${data.jamBuka}</span>
                                            </div>
                                            <div class="bg-amber-50/70 rounded-2xl p-4 border border-amber-100 sm:col-span-2 shadow-sm">
                                                <span class="text-[10px] uppercase font-bold tracking-wider text-amber-700 block mb-1">Kontak & Reservasi</span>
                                                <p class="text-sm font-semibold text-slate-800">${data.kontak}</p>
                                            </div>
                                            <div class="sm:col-span-2 mt-2">
                                                <span class="text-[10px] uppercase font-bold tracking-wider text-slate-500 mb-2 block">Fasilitas Tersedia</span>
                                                <div class="flex flex-wrap gap-2">
                                                    ${data.fasilitas.map(fasil => `
                                                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white shadow-sm text-xs font-semibold text-slate-700 border border-slate-200">
                                                            <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                                            ${fasil}
                                                        </span>
                                                    `).join('')}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ULASAN PENGUNJUNG (Paling Bawah di Kolom Kiri) -->
                                    <div class="pt-6 border-t border-slate-200">
                                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-4 border-l-4 border-emerald-500 pl-3">Apa Kata Pengunjung?</h3>
                                        
                                        <div class="bg-gradient-to-r from-emerald-50 to-teal-50 border border-emerald-100 rounded-2xl p-5 mb-6 flex items-center justify-between flex-wrap gap-4 shadow-sm">
                                            <div class="flex items-center gap-4">
                                                <div class="text-center">
                                                    <span class="text-4xl font-extrabold text-emerald-900">${data.rating}</span>
                                                </div>
                                                <div>
                                                    ${renderStars(data.rating)}
                                                    <p class="text-xs text-slate-600 mt-1">Dari total <b>${data.totalReviews} ulasan</b> terverifikasi</p>
                                                </div>
                                            </div>
                                            <button class="px-5 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold rounded-xl shadow transition transform active:scale-95">
                                                Tulis Ulasan
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                            ${data.reviews.map(review => `
                                                <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm hover:shadow-md transition">
                                                    <div class="flex items-center justify-between mb-3">
                                                        <div class="flex items-center gap-3">
                                                            <img src="${review.avatar}" alt="${review.name}" class="w-10 h-10 rounded-full object-cover">
                                                            <div>
                                                                <h4 class="text-sm font-bold text-slate-800">${review.name}</h4>
                                                                <span class="text-[10px] text-slate-400">${review.date}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ${renderStars(review.rating)}
                                                    <p class="text-slate-600 text-xs leading-relaxed mt-3">"${review.comment}"</p>
                                                </div>
                                            `).join('')}
                                        </div>
                                    </div>

                                </div>

                                <!-- ================= KOLOM KANAN ================= -->
                                <div class="lg:col-span-5 space-y-8">
                                    
                                    <!-- Spot dengan Deskripsi -->
                                    <div>
                                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-4 border-l-4 border-emerald-500 pl-3">Pengalaman Seru di Sini</h3>
                                        <div class="space-y-4">
                                            ${data.spots.map((spot, i) => `
                                                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition duration-300 group flex flex-col">
                                                    <div class="relative h-40 overflow-hidden">
                                                        <img src="${spot.image}" alt="${spot.name}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-out">
                                                    </div>
                                                    <div class="p-4">
                                                        <h4 class="text-sm font-bold text-slate-900 mb-2">${spot.name}</h4>
                                                        <p class="text-xs text-slate-600 leading-relaxed">${spot.desc}</p>
                                                    </div>
                                                </div>
                                            `).join('')}
                                        </div>
                                    </div>

                                    <!-- ================= GALERI PENGUNJUNG (TEPAT DI ATAS MAPS) ================= -->
                                    <div class="pt-4 border-t border-slate-200">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider border-l-4 border-emerald-500 pl-3">Galeri Pengunjung</h3>
                                            <span class="text-[10px] font-bold text-emerald-700 bg-emerald-100 px-3 py-1.5 rounded-lg border border-emerald-200">
                                                Momen Terbaik
                                            </span>
                                        </div>
                                        <div class="grid grid-cols-2 gap-3 sm:gap-4">
                                            ${data.gallery.map(img => `
                                                <div class="group relative aspect-[4/3] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 bg-slate-100">
                                                    <img src="${img}" alt="Galeri Pengunjung" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out cursor-pointer">
                                                    <div class="absolute inset-0 bg-slate-900/10 group-hover:bg-transparent transition-colors duration-300 pointer-events-none"></div>
                                                </div>
                                            `).join('')}
                                        </div>
                                    </div>

                                    <!-- Lokasi & Maps (Paling Bawah di Kolom Kanan) -->
                                    <div class="pt-4 border-t border-slate-200">
                                        <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider mb-2 border-l-4 border-emerald-500 pl-3">Lokasi Maps</h3>
                                        <p class="text-xs text-slate-500 mb-4 ml-3">${data.address}</p>
                                        
                                        <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-100 shadow-sm relative">
                                            <div class="h-64 w-full">
                                                <iframe 
                                                    src="${data.mapEmbed}" 
                                                    class="absolute inset-0 w-full h-full border-0" 
                                                    allowfullscreen="" 
                                                    loading="lazy" 
                                                    referrerpolicy="no-referrer-when-downgrade">
                                                </iframe>
                                            </div>
                                            <div class="p-3 bg-white border-t border-slate-100">
                                                <a href="${data.mapsUrl}" target="_blank" rel="noopener noreferrer" class="w-full py-2.5 px-4 bg-slate-900 hover:bg-emerald-600 text-white text-xs font-semibold rounded-xl flex items-center justify-center gap-2 transition duration-300">
                                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                                    </svg>
                                                    Buka di Google Maps
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    `;
                    dynamicContentDiv.classList.remove('content-hidden');
                    dynamicContentDiv.classList.add('content-visible');
                }, 400);
            };

            const centerCard = (index) => {
                const parentWidth = container.parentElement.offsetWidth; 
                const targetCard = cards[index];
                const cardWidth = targetCard.offsetWidth;
                const cardLeft = targetCard.offsetLeft;

                const translateX = (parentWidth / 2) - (cardLeft + (cardWidth / 2));
                container.style.transform = `translateX(${translateX}px)`;

                cards.forEach((card, i) => {
                    if (i === index) {
                        card.classList.remove('opacity-50', 'scale-95', 'border', 'border-white/50');
                        card.classList.add('opacity-100', 'scale-100');
                    } else {
                        card.classList.add('opacity-50', 'scale-95', 'border', 'border-white/50');
                        card.classList.remove('opacity-100', 'scale-100');
                    }
                });

                renderDynamicContent(index);
            };

            setTimeout(() => { centerCard(1); }, 100);

            cards.forEach((card, index) => {
                card.addEventListener('click', () => { centerCard(index); });
            });

            window.addEventListener('resize', () => {
                let activeIndex = Array.from(cards).findIndex(c => c.classList.contains('opacity-100'));
                if(activeIndex === -1) activeIndex = 1;
                centerCard(activeIndex);
            });
        });
    </script>
</body>
</html>
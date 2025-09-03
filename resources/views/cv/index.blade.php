<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | {{ $data['name'] ?? 'Aplikasi Desa' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav-logo">DESA JAGAPURA LOR</a>
            </div>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item"><a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Dashboard</a></li>
                    <li class="nav-item"><a href="{{ route('seblak') }}" class="nav-link {{ request()->routeIs('seblak') ? 'active' : '' }}">Seblak MelsyaJGP</a></li>
                    <li class="nav-item"><a href="{{ route('cs') }}" class="nav-link {{ request()->routeIs('cs') ? 'active' : '' }}">Cybersecurity</a></li>
                </ul>
            </div>

            <div class="nav-toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <section class="home" id="index">
            <div class="home-container bd-grid">
                <h1 class="home-title">
                    <span class="produk-text">Desa Jagapura Lor</span>
                </h1>

                <div class="home-scroll">
                    <p class="home-description">
                        Desa Jagapura Lor terletak di Kecamatan Gegesik, Kabupaten Cirebon (Jawa Barat). Ini merupakan desa yang mengusung visi menjadi “Desa Cerdas & Berdata”, mencerminkan semangat modernisasi dan pelayanan publik yang efektif serta efisien.
                        
                        Kami mahasiswa KKM Universitas Muhammadiyah Cirebon siap mendampingi dan menghadirkan teknologi sederhana agar desa Jagapura Lor semakin maju, mandiri, dan sejahtera.
                    </p>
                    <a href="#about" class="home-scroll-link">
                        <i class='bx bx-up-arrow-alt'></i> SCROLL DOWN
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Pilihan -->
        <section class="about section" id="about">
            <h2 class="section-title">Pilih Halaman</h2>

            <div class="about-container bd-grid">
                <!-- UMKM Seblak -->
                <div class="about-item">
                    <div class="about-img">
                        <img src="{{ asset('images/logoseblak.jpg') }}" alt="">
                    </div>
                    <h3 class="about-nama">Melsya JGP</h3>
                    <p class="about-deskripsi">Informasi dan produk UMKM Mie Jebew & Seblak Prasmanan</p>
                    <a href="{{ route('seblak') }}" class="about-social-btn">
                        <i class='bx bx-right-arrow-alt'></i> Lihat
                    </a>
                </div>

                <!-- Cyber Security -->
                <div class="about-item">
                    <div class="about-img">
                        <i class='bx bx-shield-quarter' style="font-size:4rem; color:#2a3b47;"></i>
                    </div>
                    <h3 class="about-nama">Cyber Security</h3>
                    <p class="about-deskripsi">Penyampaian informasi terkait pentingnya bijak berinternet dan melindungi diri dari bahaya penipuan online <i>(fraud)</i>.</p>
                    <a href="{{ route('cs') }}" class="about-social-btn">
                        <i class='bx bx-right-arrow-alt'></i> Lihat
                    </a>
                </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer section">
        <div class="footer-container bd-grid">
            <div class="footer-data">
                <h2 class="footer-title">{{ $data['name'] }}</h2>
                <p class="footer-text">Halo guys ini adalah web buatan KKM UMC kelompok 46 Desa Jagapura Lor</p>
            </div>
            
            <div class="footer-data">
                <h2 class="footer-title">Follow Me</h2>
                <p>karikop seafood</p>
                <a href="#" class="footer-social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer-social"><i class='bx bxl-facebook'></i></a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>


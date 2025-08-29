<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['name'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav-logo">UMKM KARANGSONG</a>
            </div>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item"><a href="{{ route('karikop') }}" class="nav-link {{ request()->routeIs('karikop') ? 'active' : '' }}">Karikop</a></li>
                    <li class="nav-item"><a href="{{ route('produkumi') }}" class="nav-link {{ request()->routeIs('produkumi') ? 'active' : '' }}">Produk Umi</a></li>
                    <li class="nav-item"><a href="{{ route('istypj') }}" class="nav-link {{ request()->routeIs('istypj') ? 'active' : '' }}">Isty_Poenya Jamu</a></li>
                </ul>
            </div>

            <div class="nav-toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <section class="home" id="karikop">
            <div class="home-container bd-grid">
                <h1 class="home-title">
                    <span class="produk-text">Karikop</span>
                </h1>

                <div class="home-scroll">
                    <p class="home-description">
                        Karikop menyajikan beragam hidangan seafood segar yang diolah dengan cita rasa khas. Menu yang tersedia meliputi kerang hijau, kerang dara, scallop, kerang batik, udang, cumi, kepiting, kerang putih, hingga kerang tahu, yang semuanya dimasak dengan bumbu pilihan untuk memberikan pengalaman kuliner yang lezat dan memuaskan.
                    </p>
                    <a href="#about" class="home-scroll-link">
                        <i class='bx bx-up-arrow-alt'></i> SCROLL DOWN
                    </a>
                </div>
            </div>
        </section>

        <section class="about section" id="about">
            <!-- Header -->
            <div class="about-header">
                <img src="{{ asset('images/karikop.jpg') }}" alt="Karikop" class="about-subtitle">
                <span class="about-profession">kerang putih | kerang simping | kerang dara | kerang ijo | kerang tahu | kepiting | udang | cumi</span>
                <br>
                <a href="https://wa.me/6285776048157" target="_blank" class="btn-wa">Pesan via WA</a>
            </div>

            <!-- Menu Grid -->
            <div class="about-container">
                <div class="about-item">
                    <div class="about-img">
                        <img src="{{ asset('images/kerang.jpg') }}" alt="">
                    </div>
                    <h3 class="about-nama">Seafood Bancakan</h3>
                    <span class="about-harga">Rp 25.000</span>
                </div>

                <div class="about-item">
                    <div class="about-img">
                        <img src="{{ asset('images/kerangkomplit.jpg') }}" alt="">
                    </div>
                    <h3 class="about-nama">Seafood Bancakan Komplit</h3>
                    <span class="about-harga">Rp 35.000</span>
                </div>

                <div class="about-item">
                    <div class="about-img">
                        <img src="{{ asset('images/kerangSimping.jpg') }}" alt="">
                    </div>
                    <h3 class="about-nama">Kerang Simping</h3>
                    <span class="about-harga">Rp 25.000</span>
                </div>

                <div class="about-item">
                    <div class="about-img">
                        <img src="{{ asset('images/kerangTahu.jpg') }}" alt="">
                    </div>
                    <h3 class="about-nama">Kerang Tahu</h3>
                    <span class="about-harga">Rp 35.000</span>
                </div>

                <div class="about-item">
                    <div class="about-img">
                        <img src="{{ asset('images/kerangIjo.jpg') }}" alt="">
                    </div>
                    <h3 class="about-nama">Kerang Ijo</h3>
                    <span class="about-harga">Rp 35.000</span>
                </div>
            </div>
        </section>


    </main>

    <footer class="footer section">
        <div class="footer-container bd-grid">
            <div class="footer-data">
                <h2 class="footer-title">{{ $data['name'] }}</h2>
                <p class="footer-text">Halo {{ $data['name'] }} ini adalah Katalog Menu Kami</p>
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

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
        <section class="home" id="istypj">
            <div class="home-container bd-grid">
                <h1 class="home-title">
                    <span class="produk-text">Isty_Poenya Jamu</span>
                </h1>

                <div class="home-scroll">
                    <p class="home-description">
                        Isty_Poenya Jamu menghadirkan aneka minuman herbal tradisional yang menyehatkan, mulai dari Wedang Jahe yang hangat dan menjaga stamina, Kunyit Biasa untuk daya tahan tubuh, Kunyit Asam dengan rasa segar yang menyehatkan, hingga Kunyit Asam Sirih yang bermanfaat bagi kesehatan wanita. Tak ketinggalan, ada Beras Kencur dengan cita rasa manis segar yang mampu mengembalikan energi, serta Paitan (Sambiroto) dengan rasa khas pahit yang dipercaya berkhasiat menjaga kesehatan tubuh secara alami.
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
                <img src="{{ asset('images/isty.png') }}" alt="istypj" class="about-subtitle">
                <br>
                <a href="https://wa.me/6282375597287" target="_blank" class="btn-wa">Pesan via WA</a>
            </div>

            <!-- Menu Grid -->
            <div class="about-container">
                <div class="about-item-jamu">
                    <div class="about-img">
                        <img src="{{ asset('images/jamu.png') }}" alt="">
                    </div>
                    <h3 class="about-nama">Jamu</h3>
                    <span class="about-harga"> </span>
                </div>
    </main>

    <footer class="footer section">
        <div class="footer-container bd-grid">
            <div class="footer-data">
                <h2 class="footer-title">{{ $data['name'] }}</h2>
                <p class="footer-text">Halo {{ $data['name'] }} ini adalah Katalog Menu Kami</p>
            </div>
            
            <div class="footer-data">
                <h2 class="footer-title">Follow Me</h2>
                <p>Isty_Poenya Jamu</p>
                <a href="#" class="footer-social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer-social"><i class='bx bxl-facebook'></i></a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

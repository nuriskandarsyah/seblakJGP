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
        <a href="#" class="nav-logo">DESA JAGAPURA LOR</a>
      </div>

      <div class="nav-menu" id="nav-menu">
        <ul class="nav-list">
          <li class="nav-item"><a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Dashboard</a></li>
          <li class="nav-item"><a href="{{ route('seblak') }}" class="nav-link {{ request()->routeIs('seblak') ? 'active' : '' }}"> Seblak MelsyaJGP</a></li>
          <li class="nav-item"><a href="{{ route('cs') }}" class="nav-link {{ request()->routeIs('cs') ? 'active' : '' }}">Cybersecurity</a></li>
        </ul>
      </div>

      <div class="nav-toggle" id="nav-toggle">
        <i class='bx bx-menu'></i>
      </div>
    </nav>
  </header>

  <main class="l-main">
    <section class="home" id="seblak">
      <div class="home-container bd-grid">
        <h1 class="home-title">
          <span class="produk-text">Mie Jebew & Seblak Prasmanan</span>
        </h1>

        <div class="home-scroll">
          <p class="home-description">
            Mie Jebew mie kenyal dengan racikan bumbu khas, berpadu kuah pedas gurih yang bisa dipilih levelnya. Cocok untuk kamu yang suka tantangan rasa pedas dan ingin pengalaman kuliner ekstrem yang seru.

            Seblak Prasmanan sensasi seblak unik dengan konsep prasmanan. Bebas pilih topping favoritmu mulai dari kerupuk, sosis, bakso, ceker, sayuran, hingga topping spesial lainnya. Semua tersaji dengan kuah seblak pedas gurih khas MelsyaJGP yang hangat dan menggugah selera.

            Baik untuk nongkrong bareng teman, makan santai, atau sekadar mengisi perut dengan hidangan pedas nikmat, MelsyaJGP siap memanjakan lidahmu!
          </p>
          <a href="#seblakkatalog" class="home-scroll-link">
            <i class='bx bx-up-arrow-alt'></i> SCROLL DOWN
          </a>
        </div>
      </div>
    </section>

    <section class="about section" id="seblakkatalog">
      <!-- Header -->
      <div class="about-header">
        <img src="{{ asset('images/1.jpeg') }}" alt="seblak" class="about-subtitle">
        <br>
        <a href="https://wa.me/6282214011915" target="_blank" class="btn-wa">Pesan via WA</a>
      </div>

      <!-- Menu Grid -->
      <div class="about-container">
        <div class="about-item-jamu">
          <div class="about-img">
            <img src="{{ asset('images/2.jpeg') }}" alt="">
          </div>
          <h3 class="about-nama">Daftar Menu Melsya JGP</h3>
          <span class="about-harga"> </span>
        </div>
      </div>
    </section>
    
    <section class="menu-section">
      <div class="menu-slider">
        <!-- Tombol panah kiri -->
        <button class="arrow left" onclick="slideMenu(-1)">&#10094;</button>
    
        <!-- Container menu -->
        <div class="menu-container">
          <div class="menu-item"><div class="menu-img"><img src="{{ asset('images/9.jpg') }}" alt=""></div></div>
          <div class="menu-item"><div class="menu-img"><img src="{{ asset('images/10.jpg') }}" alt=""></div></div>
          <div class="menu-item"><div class="menu-img"><img src="{{ asset('images/11.jpg') }}" alt=""></div></div>
          <div class="menu-item"><div class="menu-img"><img src="{{ asset('images/12.jpg') }}" alt=""></div></div>
          <div class="menu-item"><div class="menu-img"><img src="{{ asset('images/13.jpg') }}" alt=""></div></div>
          <div class="menu-item"><div class="menu-img"><img src="{{ asset('images/14.jpg') }}" alt=""></div></div>
          <div class="menu-item"><div class="menu-img"><img src="{{ asset('images/15.jpg') }}" alt=""></div></div>
          <div class="menu-item"><div class="menu-img"><img src="{{ asset('images/16.jpg') }}" alt=""></div></div>
          <div class="menu-item"><div class="menu-img"><img src="{{ asset('images/17.jpg') }}" alt=""></div></div>
        </div>
    
        <!-- Tombol panah kanan -->
        <button class="arrow right" onclick="slideMenu(1)">&#10095;</button>
      </div>
    </section>
  </main>

  <footer class="footer section">
    <div class="footer-container bd-grid">
      <div class="footer-data">
        <h2 class="footer-title">Melsya JGP</h2>
        <p class="footer-text">Halo Wargi, ini adalah Katalog Menu Kami</p>
      </div>
      
      <div class="footer-data">
        <h2 class="footer-title">Follow Me</h2>
        <p>Melsya JGP</p>
        <a href="#" class="footer-social"><i class='bx bxl-instagram'></i></a>
        <a href="#" class="footer-social"><i class='bx bxl-facebook'></i></a>
      </div>
    </div>
    <div class=bawah>
      <span>Created by: Nur Iskandar S</span>
    </div>
  </footer>

    <script>
      const navToggle = document.getElementById("nav-toggle");
      const navMenu = document.getElementById("nav-menu");
      navToggle.addEventListener("click", () => {  
          navMenu.classList.toggle("show");
      });
    
      document.querySelectorAll(".nav-link").forEach(link => {
          link.addEventListener("click", () => {
              navMenu.classList.remove("show");
          });
      });
    
      let currentIndex = 0;
      const container = document.querySelector('.menu-container');
      const items = document.querySelectorAll('.menu-item');
      const itemWidth = 160 + 19; // width + gap (disesuaikan)
    
      // Hitung jumlah item yang bisa tampil sesuai ukuran layar
      function getVisibleItems() {
        if (window.innerWidth >= 1024) return 5; // desktop
        if (window.innerWidth >= 768) return 4;  // tablet
        return 3; // hp
      }
    
      function slideMenu(direction) {
        const visibleItems = getVisibleItems();
        const maxIndex = items.length - visibleItems;
    
        currentIndex += direction;
        if (currentIndex < 0) currentIndex = 0;
        if (currentIndex > maxIndex) currentIndex = maxIndex;
    
        container.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    
        // toggle tombol panah
        document.querySelector('.arrow.left').style.display = currentIndex === 0 ? 'none' : 'block';
        document.querySelector('.arrow.right').style.display = currentIndex === maxIndex ? 'none' : 'block';
      }
    
      // Update saat resize
      window.addEventListener("resize", () => {
        currentIndex = 0;
        slideMenu(0);
      });
    
      // Inisialisasi
      slideMenu(0);
    </script>

</body>
</html>




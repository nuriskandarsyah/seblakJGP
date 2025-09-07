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
    <section class="about section" id="seblakkatalog">
      <div class="about-header">
        <h2>Katalog Menu</h2>
      </div>

      <!-- Layout kiri kanan -->
      <div class="menu-layout">
        <!-- Kolom kiri -->
        <div class="menu-left">
          <h3>Daftar Menu Melsya JGP</h3>
          <div class="menu-thumbs">
            <img src="{{ asset('images/2.jpeg') }}" alt="Menu 1">
            <img src="{{ asset('images/3.jpeg') }}" alt="Menu 2">
            <img src="{{ asset('images/4.jpeg') }}" alt="Menu 3">
          </div>
        </div>

        <!-- Kolom kanan -->
        <div class="menu-right">
          <img src="{{ asset('images/1.jpeg') }}" alt="Menu Utama">
          <a href="https://wa.me/6282214011915" target="_blank" class="btn-wa">Pesan via WA</a>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer section">
    <div class="footer-container bd-grid">
      <div class="footer-data">
        <h2 class="footer-title">Melsya JGP</h2>
        <p class="footer-text">Halo {{ $data['name'] }} ini adalah Katalog Menu Kami</p>
      </div>
      <div class="footer-data">
        <h2 class="footer-title">Follow Me</h2>
        <p>Produk Umi</p>
        <a href="#" class="footer-social"><i class='bx bxl-instagram'></i></a>
        <a href="#" class="footer-social"><i class='bx bxl-facebook'></i></a>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/main.js') }}"></script>

  <script>
    // Toggle nav biar bisa dipencet di Android/iOS
    const navMenu = document.getElementById('nav-menu'),
          toggle = document.getElementById('nav-toggle');

    if(toggle){
      toggle.addEventListener('click', () => {
        navMenu.classList.toggle('show');
      });
    }
  </script>
</body>
</html>

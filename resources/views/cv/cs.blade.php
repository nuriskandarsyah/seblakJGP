<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | {{'Literasi Digital itu Penting' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <meta charset="UTF-8" />
    <title>Literasi Digital Itu Penting</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root{
      background: #731919;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family:"Poppins", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      color:var(--text);
      background: radial-gradient(1600px 800px at -10% -10%, #9c3f3f40, #ffffff00 60%),
                  radial-gradient(1200px 600px at 110% 0%, #502a2a30, #ffffff00 60%),
                  linear-gradient(180deg, var(--bg-top), var(--bg-bottom));
      
      display:flex;
      align-items:flex-start;
      justify-content:center;
      padding:32px 16px 48px;
    }
    .wrap{
      width:min(1024px, 100%);
      background: linear-gradient(180deg, #ffffffbb, #81202080 40%, #81202080);
      backdrop-filter:saturate(130%) blur(6px);
      border-radius:28px;
      padding:24px;
      box-shadow: 0 20px 60px #00000020, inset 0 1px 0 #ffffffcc;
      position:relative;
      overflow:hidden;
      margin-top: 20px;
    }
    /* Decorative shapes */
    .wrap::before, .wrap::after{
      content:''; position:absolute; border-radius:50%; filter:blur(40px); opacity:.28; z-index:0;
    }
    .wrap::before{ width:360px; height:360px; background:#8c7bff; top:-120px; left:-120px; }
    .wrap::after{ width:420px; height:420px; background:#c8baff; bottom:-160px; right:-140px; }

    header{position:relative; z-index:1; text-align:center; padding:8px 8px 16px}
    .eyebrow{display:inline-block; font-weight:600; color: #ffffffc9; background: #720b0bc9; padding:6px 14px; border-radius:999px; box-shadow:0 6px 18px #d1393970; letter-spacing:.25px}
    h1{margin:14px 0 8px; font-size:clamp(28px, 4.6vw, 54px); color: #720b0bc9; text-shadow:0 2px 0 #200f0fff}
    .subtitle{margin:0 auto; max-width:760px; color: #3d1717ff; font-weight:500}

    .panel {
        background: #731919;
        border: 2px solid #731919;
        border-radius: 18px;
        padding: 16px;
        margin: 16px auto 0;
        max-width: 860px;
        box-shadow: inset 0 1px 0 #ffffff79;
        color: #fff; /* ✅ semua teks dalam panel jadi putih */
    }

    .panel b {
        color: #fff;
    }

    .grid{
        position:relative;
        z-index:1; 
        display:grid;
        gap:16px; 
        grid-template-columns:repeat(12, 1fr); 
        margin-top:22px
    }

    .card{grid-column:span 6; background:var(--card); border-radius:18px; padding:18px 18px; box-shadow:0 8px 24px #ffffff12; border:1px solid #ffeeeeff}
    .card h3{margin:8px 0 6px; font-size:18px}
    .card p{margin:6px 0 0; color:var #fff; line-height:1.55}

    .grid .card h3,
    .grid .card p,
    .grid .card b {
        color: #fff;
    }

    .icon{
      width:42px; height:42px; display:grid; place-items:center; border-radius:10px; 
      background:linear-gradient(135deg, #490f0fff, #ffe9e9ff);
      border:1px solid #640a0aff; box-shadow:inset 0 1px 0 #fff;
      font-size:22px; color:var(--accent-dark)
    }

    /* Banner bottom */
    .banner{position:relative; z-index:1; margin-top:24px; background:linear-gradient(90deg, var(--accent), var(--accent-dark)); color:#fff; padding:18px 20px; border-radius:16px; display:flex; align-items:center; gap:12px; box-shadow:0 10px 26px #46040455}
    .banner i{font-size:28px}
    .credit{margin-top:10px; text-align:center; font-size:14px; color:#fff; opacity:.9}

    /* Responsive */
    @media (max-width: 880px){
      .card{grid-column:span 12}
      .panel{margin-inline:0}
      .wrap{padding:18px}
    }
  </style>
</head>
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav-logo">Literasi Digital itu Penting</a>
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
        <section class="cs" id="cs">
            <div class="cs-container bd-grid">
                <main class="wrap" role="main" aria-label="Infografik Literasi Digital">
                    <header>
                    <span class="eyebrow">Literasi Digital itu Penting</span>
                    <h1>Transaksi Online Aman di Era Serba Digital</h1>
                    <p class="subtitle"><b>Kejahatan siber semakin marak, pastikan kamu melakukan transaksi online dengan aman. Ikuti tips berikut:</b></p>
                    <div class="panel"><b>Catatan:</b> Terapkan beberapa tips sekaligus untuk lapisan keamanan yang lebih kuat.</div>
                    </header>

                    <section class="grid" aria-label="Daftar Tips Keamanan">
                    <!-- 1 -->
                    <article class="card" aria-label="Gunakan Koneksi Internet Aman">
                        <div class="icon" aria-hidden="true"><i class='bx bx-wifi'></i></div>
                        <h3>Gunakan Koneksi Internet Aman</h3>
                        <p>Hindari memakai Wi‑Fi publik saat bertransaksi. Gunakan jaringan pribadi (hotspot pribadi atau rumah) yang lebih aman.</p>
                    </article>

                    <!-- 2 -->
                    <article class="card" aria-label="Aktifkan Verifikasi Dua Langkah (2FA)">
                        <div class="icon" aria-hidden="true"><i class='bx bx-shield-quarter'></i></div>
                        <h3>Aktifkan Verifikasi Dua Langkah (2FA)</h3>
                        <p>Tambah lapisan keamanan dengan kode OTP, aplikasi authenticator, atau biometrik pada akun pentingmu.</p>
                    </article>

                    <!-- 3 -->
                    <article class="card" aria-label="Pastikan Website Resmi">
                        <div class="icon" aria-hidden="true"><i class='bx bx-link-alt'></i></div>
                        <h3>Pastikan Website yang Digunakan Resmi</h3>
                        <p>Cek alamat situs sebelum mengisi data pribadi. Situs resmi umumnya memakai <b>HTTPS</b> dan domain tepercaya.</p>
                    </article>

                    <!-- 4 -->
                    <article class="card" aria-label="Jangan Bagikan Data Pribadi">
                        <div class="icon" aria-hidden="true"><i class='bx bx-lock-alt'></i></div>
                        <h3>Jangan Bagikan Data Pribadi</h3>
                        <p>Bank/layanan keuangan <b>tidak akan</b> meminta PIN, OTP, atau kata sandi lewat chat/telepon. Waspada modus penipuan!</p>
                    </article>

                    <!-- 5 -->
                    <article class="card" aria-label="Gunakan Metode Pembayaran Terpercaya">
                        <div class="icon" aria-hidden="true"><i class='bx bx-wallet'></i></div>
                        <h3>Gunakan Metode Pembayaran yang Tepercaya</h3>
                        <p>Pilih e‑wallet, kartu kredit, atau rekening yang punya fitur proteksi transaksi dan notifikasi real‑time.</p>
                    </article>

                    <!-- 6 -->
                    <article class="card" aria-label="Laporkan Jika Terjadi Penipuan">
                        <div class="icon" aria-hidden="true"><i class='bx bx-error-circle'></i></div>
                        <h3>Laporkan Jika Terjadi Penipuan</h3>
                        <p>Jika ada transaksi mencurigakan, segera hubungi pihak berwenang atau layanan pelanggan bank/penyedia terkait.</p>
                    </article>
                    </section>

                    <div class="banner" role="note" aria-label="Keamanan Digital adalah Kunci">
                    <i class='bx bx-key'></i>
                    <strong>Keamanan Digital adalah Kunci!</strong>
                    <span style="margin-left:auto; opacity:.92">Selalu waspada & jaga transaksi onlinemu tetap aman.</span>
                    </div>

                    <p class="credit">Salsa Dhiva Yolanda · IG: <b>@salsadhiva</b></p>
                </main>
        </section>
    </main>
</body>
</html>

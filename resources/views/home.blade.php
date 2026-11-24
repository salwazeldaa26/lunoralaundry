<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lunoralaundry — Laundry Kilat, Hasil Rapi</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="nav">
  <div class="container">
    <a href="{{ url('/') }}" class="brand">
      <svg class="logo-mark" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M24 8v5"/>
        <path d="M14 20c0-5.5 4.5-10 10-10s10 4.5 10 10"/>
        <path d="M8 20h32l-3 5H11l-3-5Z"/>
        <path d="M10 25l4 12h20l4-12"/>
        <path d="M6 12l2 2M42 12l-2 2M24 4v2"/>
      </svg>
      <span class="brand-text">
        <span class="brand-name">Lunora</span>
        <span class="brand-tagline">Laundry, Lebih Mudah</span>
      </span>
    </a>
    <ul class="nav-links">
      <li><a href="/" class="active">Beranda</a></li>
      <li><a href="#layanan">Layanan</a></li>
      <li><a href="#alur">Cara Kerja</a></li>
      <li><a href="#tentang">Tentang Kami</a></li>
      <li><a href="#testimoni">Testimoni</a></li>
    </ul>
    <div class="nav-cta">
      <a href="login" class="btn btn-outline-dark">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4.4 3.6-7 8-7s8 2.6 8 7"/></svg>
        Masuk
      </a>
      <a href="login?tab=daftar" class="btn btn-dark">
        Pesan Sekarang
        <span class="btn-icon-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
    </div>
  </div>
</nav>

<header class="hero">
  <div class="container hero-grid">
    <div class="hero-copy">
      <div class="hero-eyebrow">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.9 4.9l2.8 2.8M16.3 16.3l2.8 2.8M2 12h4M18 12h4M4.9 19.1l2.8-2.8M16.3 7.7l2.8-2.8"/></svg>
        Laundry Favorit Warga Sekitar
      </div>
      <h1>Cucian menumpuk, <em>waktu makin sempit?</em></h1>
      <p class="lead">Lunora laundry siap membantu kamu dengan layanan cuci, setrika, dan berbagai layanan laundry lainnya. Bersih, rapi, wangi, dan tepat waktu — karena waktu kamu lebih berharga untuk hal yang lebih penting.</p>
      <div class="hero-actions">
        <a href="login?tab=daftar" class="btn btn-dark">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
          Pesan Sekarang
        </a>
        <a href="#layanan" class="btn btn-outline-dark">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3h9l5 5v13a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/><path d="M9 13h6M9 17h6"/></svg>
          Lihat Daftar Harga
        </a>
      </div>
    </div>
    <div class="hero-art">
      <div class="hero-photo-frame">
        <svg viewBox="0 0 420 420" width="100%" height="100%" role="img" aria-label="Ilustrasi ruang laundry Lunora" preserveAspectRatio="xMidYMid slice">
          <defs>
            <linearGradient id="wallG" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0" stop-color="#FFFFFF"/><stop offset="1" stop-color="#EAF4EF"/>
            </linearGradient>
          </defs>
          <rect width="420" height="420" fill="url(#wallG)"/>
          <!-- shelf -->
          <rect x="0" y="60" width="420" height="10" fill="#DCEEE5"/>
          <rect x="30" y="30" width="26" height="30" rx="4" fill="#7FD4C4"/>
          <rect x="64" y="24" width="20" height="36" rx="4" fill="#F4A73E"/>
          <!-- washing machines row -->
          <g transform="translate(30,150)">
            <rect x="0" y="0" width="80" height="90" rx="10" fill="#FFFFFF" stroke="#DCEEE5" stroke-width="3"/>
            <circle cx="40" cy="50" r="26" fill="#EAF4EF" stroke="#1E9C8B" stroke-width="4"/>
            <circle cx="40" cy="50" r="14" fill="#CFEFE8"/>
            <rect x="10" y="10" width="16" height="6" rx="3" fill="#DCEEE5"/>
          </g>
          <g transform="translate(125,150)">
            <rect x="0" y="0" width="80" height="90" rx="10" fill="#FFFFFF" stroke="#DCEEE5" stroke-width="3"/>
            <circle cx="40" cy="50" r="26" fill="#EAF4EF" stroke="#0F6E63" stroke-width="4"/>
            <circle cx="40" cy="50" r="14" fill="#CFEFE8"/>
            <rect x="10" y="10" width="16" height="6" rx="3" fill="#DCEEE5"/>
          </g>
          <g transform="translate(220,150)">
            <rect x="0" y="0" width="80" height="90" rx="10" fill="#FFFFFF" stroke="#DCEEE5" stroke-width="3"/>
            <circle cx="40" cy="50" r="26" fill="#EAF4EF" stroke="#1E9C8B" stroke-width="4"/>
            <circle cx="40" cy="50" r="14" fill="#CFEFE8"/>
            <rect x="10" y="10" width="16" height="6" rx="3" fill="#DCEEE5"/>
          </g>
          <g transform="translate(315,150)">
            <rect x="0" y="0" width="80" height="90" rx="10" fill="#FFFFFF" stroke="#DCEEE5" stroke-width="3"/>
            <circle cx="40" cy="50" r="26" fill="#EAF4EF" stroke="#0F6E63" stroke-width="4"/>
            <circle cx="40" cy="50" r="14" fill="#CFEFE8"/>
            <rect x="10" y="10" width="16" height="6" rx="3" fill="#DCEEE5"/>
          </g>
          <!-- counter -->
          <rect x="0" y="260" width="420" height="20" fill="#E7DCC7"/>
          <rect x="0" y="280" width="420" height="140" fill="#F3E9D6"/>
          <!-- folded towels -->
          <g transform="translate(150,235)">
            <rect x="0" y="30" width="120" height="20" rx="6" fill="#FFFFFF" stroke="#DCEEE5" stroke-width="2"/>
            <rect x="6" y="14" width="108" height="20" rx="6" fill="#CFEFE8"/>
            <rect x="12" y="-2" width="96" height="20" rx="6" fill="#F4A73E"/>
          </g>
          <!-- basket -->
          <g transform="translate(300,260)">
            <path d="M0 10 L60 10 L54 55 L6 55 Z" fill="#FFFFFF" stroke="#DCEEE5" stroke-width="3"/>
            <path d="M4 10 L56 10" stroke="#DCEEE5" stroke-width="3"/>
            <rect x="10" y="-6" width="16" height="16" rx="4" fill="#1E9C8B"/>
          </g>
          <!-- plant -->
          <g transform="translate(40,230)">
            <rect x="6" y="34" width="24" height="24" rx="4" fill="#0F6E63"/>
            <circle cx="18" cy="20" r="14" fill="#7FD4C4"/>
          </g>
        </svg>
      </div>
      <div class="hero-sticky-note">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s-7.5-4.7-10-9.3C.4 8.2 2.3 4.8 5.7 4.2c2-.3 3.9.5 5 2.1a5.9 5.9 0 0 1 5-2.1c3.4.6 5.3 4 3.7 7.5C19.5 16.3 12 21 12 21Z"/></svg>
        Pakaian bersih,<br>hidup lebih baik
      </div>
    </div>
  </div>

  <div class="container stats-float-wrap">
    <div class="stats-float">
      <div class="stat-item">
        <span class="icon-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3l7 3v6c0 4.5-3 7.7-7 9-4-1.3-7-4.5-7-9V6l7-3Z"/><path d="M9 12l2 2 4-4"/></svg></span>
        <div><strong>3.200+</strong><span>Pesanan diselesaikan</span></div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <span class="icon-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg></span>
        <div><strong>6 jam</strong><span>Estimasi tercepat</span></div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <span class="icon-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 3 2.6 5.9 6.4.6-4.8 4.3 1.4 6.3L12 17l-5.6 3.1 1.4-6.3-4.8-4.3 6.4-.6L12 3Z"/></svg></span>
        <div><strong>4.9/5</strong><span>Rata-rata penilaian</span></div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <span class="icon-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="8" r="3.5"/><path d="M2 20c0-4 3-6 7-6s7 2 7 6M17 4c1.7.3 3 1.9 3 3.6S18.7 11 17 11.3M21 20c0-3-1.6-5-4-5.7"/></svg></span>
        <div><strong>1.500+</strong><span>Pelanggan setia</span></div>
      </div>
    </div>
  </div>
</header>

<section class="section" id="layanan">
  <div class="container">
    <div class="section-head-row">
      <h2>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3C7 8 4 12 4 15a8 8 0 0 0 16 0c0-3-3-7-8-12Z"/></svg>
        Layanan Kami
      </h2>
      <a href="#layanan" class="section-link">Lihat Semua Layanan
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
    <p style="margin-top:-1.6em;margin-bottom:2.2em;color:var(--muted);">Harga dihitung per kilogram, transparan tanpa biaya tersembunyi. Estimasi waktu pengerjaan tertera pada setiap layanan.</p>
    <div class="service-list" id="service-list"><!-- diisi via script.js --></div>
  </div>
</section>

<section class="section section-alt" id="alur">
  <div class="container">
    <div class="section-head">
      <div class="kicker">Cara Kerja</div>
      <h2>Empat langkah, cucian beres</h2>
    </div>
    <div class="steps">
      <div class="step-card">
        <span class="step-mark">1</span>
        <h4>Daftar &amp; masuk</h4>
        <p>Buat akun dalam waktu kurang dari satu menit.</p>
      </div>
      <div class="step-card">
        <span class="step-mark">2</span>
        <h4>Pilih layanan</h4>
        <p>Tentukan jenis cucian dan perkiraan berat pakaian.</p>
      </div>
      <div class="step-card">
        <span class="step-mark">3</span>
        <h4>Pantau status</h4>
        <p>Ikuti perkembangan cucianmu langsung dari dashboard.</p>
      </div>
      <div class="step-card">
        <span class="step-mark">4</span>
        <h4>Ambil &amp; bayar</h4>
        <p>Cucian wangi siap diambil, bayar tunai atau nontunai.</p>
      </div>
    </div>
  </div>
</section>

<section class="section" id="tentang">
  <div class="container">
    <div class="section-head-row">
      <h2>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M9.5 12.5l1.8 1.8L15 10.5"/></svg>
        Tentang Kami
      </h2>
    </div>
    <div class="steps">
      <div class="step-card"><h4>Berpengalaman</h4><p>Melayani ratusan pelanggan setia sejak 2022 dengan konsistensi kualitas.</p></div>
      <div class="step-card"><h4>Higienis</h4><p>Deterjen berkualitas dan proses pencucian yang terjaga kebersihannya.</p></div>
      <div class="step-card"><h4>Transparan</h4><p>Harga jelas per kilogram, tanpa biaya tersembunyi di akhir.</p></div>
      <div class="step-card"><h4>Tepat Waktu</h4><p>Estimasi selesai yang bisa kamu pantau langsung dari akun.</p></div>
    </div>
  </div>
</section>

<section class="section section-alt" id="testimoni">
  <div class="container">
    <div class="section-head">
      <div class="kicker">Kata Mereka</div>
      <h2>Dipercaya pelanggan sekitar</h2>
    </div>
    <div class="testi-wrap">
      <div class="testi">
        <p>Prosesnya cepat dan aku bisa lihat status cucian tanpa perlu chat admin terus-menerus.</p>
        <div class="who"><div class="avatar">DA</div><div><strong>Dewi Anjani</strong><span>Pelanggan sejak 2024</span></div></div>
      </div>
      <div class="testi">
        <p>Layanan Super Express benar-benar menyelamatkan waktu saya di hari sibuk.</p>
        <div class="who"><div class="avatar">RH</div><div><strong>Rian Hidayat</strong><span>Pelanggan rutin</span></div></div>
      </div>
      <div class="testi">
        <p>Hasil setrikanya rapi, wanginya tahan lama. Sudah jadi langganan tetap keluarga.</p>
        <div class="who"><div class="avatar">SN</div><div><strong>Siti Nuraini</strong><span>Pelanggan sejak 2023</span></div></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band">
      <div>
        <h2>Siap coba Lunora?</h2>
        <p>Daftar sekarang dan pesan penjemputan pertamamu hari ini.</p>
      </div>
      <a href="login?tab=daftar" class="btn btn-dark">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
        Daftar Gratis
      </a>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div>
      <a href="/" class="brand">
        <svg class="logo-mark" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M24 8v5"/>
          <path d="M14 20c0-5.5 4.5-10 10-10s10 4.5 10 10"/>
          <path d="M8 20h32l-3 5H11l-3-5Z"/>
          <path d="M10 25l4 12h20l4-12"/>
          <path d="M6 12l2 2M42 12l-2 2M24 4v2"/>
        </svg>
        <span class="brand-text">
          <span class="brand-name">Lunora</span>
          <span class="brand-tagline" style="color:rgba(255,255,255,.55);">Laundry, Lebih Mudah</span>
        </span>
      </a>
      <p style="max-width:26ch;margin-top:.8em;">Laundry kilat, hasil rapi — untukmu yang selalu punya urusan lebih penting.</p>
    </div>
    <div class="foot-cols">
      <div>
        <h5>Navigasi</h5>
        <ul><li><a href="#layanan">Layanan</a></li><li><a href="#alur">Cara Kerja</a></li><li><a href="#tentang">Tentang Kami</a></li><li><a href="#testimoni">Testimoni</a></li></ul>
      </div>
      <div>
        <h5>Akun</h5>
        <ul><li><a href="login">Masuk</a></li><li><a href="login?tab=daftar">Daftar</a></li></ul>
      </div>
    </div>
  </div>
  <div class="foot-bottom">© 2026 Lunora Laundry. Dibuat sebagai proyek tugas kuliah.</div>
</footer>

<button class="fab-chat" type="button" aria-label="Chat dengan kami">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5Z"/></svg>
</button>

<script src="{{ asset('js/script.js') }}"></script>
<script>
  const icons = {
    kilat: '<path d="M13 2 4 14h6l-1 8 9-12h-6l1-8Z"/>',
    setrika: '<path d="M3 16h13a5 5 0 0 0 5-5V9a2 2 0 0 0-2-2H9L3 12v4Z"/><path d="M7 20h10"/>',
    express: '<path d="M4 12h16M14 6l6 6-6 6"/>',
    dry: '<circle cx="12" cy="12" r="9"/><path d="M8 12h8M12 8v8"/>',
  };
  const iconKeys = Object.keys(icons);
  const list = document.getElementById("service-list");
  DB.getLayanan().forEach((l, i) => {
    const key = iconKeys[i % iconKeys.length];
    list.insertAdjacentHTML("beforeend", `
      <div class="service-row">
        <div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">${icons[key]}</svg></div>
        <div><h3>${l.nama}</h3></div>
        <p class="desc">${l.deskripsi} Estimasi ${l.estimasi} jam.</p>
        <div class="service-price">${fmtRupiah(l.harga)}<span>per kg</span></div>
      </div>
    `);
  });
</script>
</body>
</html>


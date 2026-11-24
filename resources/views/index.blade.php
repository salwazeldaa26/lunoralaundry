<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lunoralaundry — Laundry Kilat, Hasil Rapi</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
/* DAFTAR HARGA LUNORA */
#daftar-harga .section-head {
  text-align: center;
  margin-bottom: 2.5rem;
}

#daftar-harga .section-head .kicker {
  color: #13796d;
  font-weight: 600;
  margin-bottom: .5rem;
}

#daftar-harga .price-intro {
  max-width: 620px;
  margin: 0 auto;
  color: var(--muted, #607875);
  line-height: 1.8;
}

.price-list {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 1.2rem;
}

.price-card {
  display: flex;
  align-items: center;
  gap: 1rem;
  min-width: 0;
  padding: 1.4rem;
  background: #fff;
  border: 1px solid #dceee5;
  border-radius: 18px;
  box-shadow: 0 8px 24px rgba(15, 78, 69, .05);
  transition: transform .2s ease, box-shadow .2s ease;
}

.price-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 28px rgba(15, 78, 69, .1);
}

.price-card-icon {
  flex: 0 0 48px;
  width: 48px;
  height: 48px;
  display: grid;
  place-items: center;
  color: #0f6e63;
  background: #eaf4ef;
  border-radius: 14px;
}

.price-card-icon svg {
  width: 25px;
  height: 25px;
}

.price-card-content {
  flex: 1;
  min-width: 0;
}

.price-card-content h3 {
  margin: 0 0 .4rem;
  color: #103f40;
  font-size: 1.05rem;
}

.price-card-content p {
  margin: 0 0 .55rem;
  color: var(--muted, #607875);
  font-size: .9rem;
  line-height: 1.6;
}

.price-estimate {
  color: #13796d;
  font-size: .82rem;
}

.price-card-value {
  text-align: right;
  white-space: nowrap;
}

.price-card-value strong {
  display: block;
  color: #103f40;
  font-size: 1.1rem;
}

.price-card-value span {
  display: block;
  margin-top: .2rem;
  color: var(--muted, #607875);
  font-size: .8rem;
}

.price-empty {
  grid-column: 1 / -1;
  padding: 2rem;
  text-align: center;
  color: var(--muted, #607875);
  background: #fff;
  border: 1px solid #dceee5;
  border-radius: 18px;
}

@media (max-width: 700px) {
  .price-list {
    grid-template-columns: 1fr;
  }

  .price-card {
    padding: 1rem;
    gap: .75rem;
  }

  .price-card-icon {
    flex-basis: 42px;
    width: 42px;
    height: 42px;
  }

  .price-card-value strong {
    font-size: .95rem;
  }
}
</style>
<link rel="stylesheet" href="{{ asset('css/tema-cerah.css') }}">
</head>

<body>

<!-- NAVIGASI -->
<nav class="nav">
  <div class="container">

    <a href="{{ url('/') }}" class="brand">
      <svg class="logo-mark" viewBox="0 0 48 48" fill="none"
        stroke="currentColor" stroke-width="2.2"
        stroke-linecap="round" stroke-linejoin="round">
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
      <li><a href="{{ url('/') }}" class="active">Beranda</a></li>
      <li><a href="#layanan">Layanan</a></li>
      <li><a href="#daftar-harga">Daftar Harga</a></li>
      <li><a href="#alur">Cara Kerja</a></li>
      <li><a href="#tentang">Tentang Kami</a></li>
      <li><a href="#testimoni">Testimoni</a></li>
    </ul>

    <div class="nav-cta">
      <a href="{{ url('/login') }}" class="btn btn-outline-dark">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="8" r="4"/>
          <path d="M4 20c0-4.4 3.6-7 8-7s8 2.6 8 7"/>
        </svg>
        Masuk
      </a>

      <a href="{{ url('/login') }}?tab=daftar" class="btn btn-dark">
        Pesan Sekarang
        <span class="btn-icon-chip">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4">
            <path d="M5 12h14M13 6l6 6-6 6"/>
          </svg>
        </span>
      </a>
    </div>
  </div>
</nav>


<!-- BERANDA -->
<header class="hero">
  <div class="container hero-grid">

    <div class="hero-copy">
      <div class="hero-eyebrow">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2">
          <path d="M12 2v4M12 18v4M4.9 4.9l2.8 2.8M16.3 16.3l2.8 2.8M2 12h4M18 12h4M4.9 19.1l2.8-2.8M16.3 7.7l2.8-2.8"/>
        </svg>
        Laundry Favorit Warga Sekitar
      </div>

      <h1>Cucian menumpuk, <em>waktu makin sempit?</em></h1>

      <p class="lead">
        Lunora Laundry siap membantu kamu dengan layanan cuci,
        setrika, dan berbagai layanan laundry lainnya. Bersih,
        rapi, wangi, dan tepat waktu — karena waktu kamu lebih
        berharga untuk hal yang lebih penting.
      </p>

      <div class="hero-actions">
        <a href="https://wa.me/6289626943408?text=Halo%20Lunora%20Laundry%2C%20saya%20ingin%20memesan%20layanan%20cuci%20kering%20baju.%20Boleh%20minta%20info%20harga%20dan%20estimasi%20selesainya%3F%20Terima%20kasih."
           class="btn btn-dark"
           target="_blank"
           rel="noopener noreferrer">
          <svg viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2">
            <path d="M21 11.5a8.4 8.4 0 0 1-12.4 7.4L3 20l1.2-5.3A8.4 8.4 0 1 1 21 11.5Z"/>
            <path d="M9 9c.5 2 2 3.5 4 4l1.3-1.3 2 1c-.2 1.5-1 2-2.5 2-3.5-.5-6-3-6.5-6.5 0-1.5.5-2.3 2-2.5l1 2L9 9Z"/>
          </svg>
          Pesan via WhatsApp
        </a>

        <a href="#daftar-harga" class="btn btn-outline-dark">
          <svg viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2">
            <path d="M6 3h9l5 5v13a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/>
            <path d="M9 13h6M9 17h6"/>
          </svg>
          Lihat Daftar Harga
        </a>
      </div>
    </div>

    <div class="hero-art">
      <div class="hero-photo-frame">
        <img
          src="{{ asset('images/pict lunoralaundry.jpg.png') }}"
          alt="Tumpukan handuk bersih di ruang laundry profesional"
          loading="eager"
          style="display:block;width:100%;height:100%;object-fit:cover;border-radius:inherit;"
       >
      </div>

      <div class="hero-sticky-note">
        <svg viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 21s-7.5-4.7-10-9.3C.4 8.2 2.3 4.8 5.7 4.2c2-.3 3.9.5 5 2.1a5.9 5.9 0 0 1 5-2.1c3.4.6 5.3 4 3.7 7.5C19.5 16.3 12 21 12 21Z"/>
        </svg>
        Pakaian bersih,<br>hidup lebih baik
      </div>
    </div>

  </div>

  <!-- STATISTIK -->
  <div class="container stats-float-wrap">
    <div class="stats-float">

      <div class="stat-item">
        <span class="icon-chip">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 3l7 3v6c0 4.5-3 7.7-7 9-4-1.3-7-4.5-7-9V6l7-3Z"/>
            <path d="M9 12l2 2 4-4"/>
          </svg>
        </span>
        <div><strong>3.200+</strong><span>Pesanan diselesaikan</span></div>
      </div>

      <div class="stat-divider"></div>

      <div class="stat-item">
        <span class="icon-chip">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 7v5l3 3"/>
          </svg>
        </span>
        <div><strong>6 jam</strong><span>Estimasi tercepat</span></div>
      </div>

      <div class="stat-divider"></div>

      <div class="stat-item">
        <span class="icon-chip">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="m12 3 2.6 5.9 6.4.6-4.8 4.3 1.4 6.3L12 17l-5.6 3.1 1.4-6.3-4.8-4.3 6.4-.6L12 3Z"/>
          </svg>
        </span>
        <div><strong>4.9/5</strong><span>Rata-rata penilaian</span></div>
      </div>

      <div class="stat-divider"></div>

      <div class="stat-item">
        <span class="icon-chip">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="9" cy="8" r="3.5"/>
            <path d="M2 20c0-4 3-6 7-6s7 2 7 6M17 4c1.7.3 3 1.9 3 3.6S18.7 11 17 11.3M21 20c0-3-1.6-5-4-5.7"/>
          </svg>
        </span>
        <div><strong>1.500+</strong><span>Pelanggan setia</span></div>
      </div>

    </div>
  </div>
</header>

<!-- LAYANAN -->
<section class="section" id="layanan">
  <div class="container">
    <div class="section-head-row">
      <h2>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M12 3C7 8 4 12 4 15a8 8 0 0 0 16 0c0-3-3-7-8-12Z"/>
        </svg>
        Layanan Kami
      </h2>

      <a href="#daftar-harga" class="section-link">
        Lihat Daftar Harga
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M5 12h14M13 6l6 6-6 6"/>
        </svg>
      </a>
    </div>

    <p style="margin-top:-1.6em;margin-bottom:2.2em;color:var(--muted);">
      Harga dihitung per kilogram, transparan tanpa biaya tersembunyi.
      Estimasi waktu pengerjaan tertera pada setiap layanan.
    </p>

    <div class="service-list" id="service-list">
      <!-- Layanan diisi otomatis dari script.js -->
    </div>
  </div>
</section>

<!-- DAFTAR HARGA BARU -->
<section class="section section-alt" id="daftar-harga">
  <div class="container">

    <div class="section-head">
      <div class="kicker">DAFTAR HARGA</div>
      <h2>Pilih Layanan Sesuai Kebutuhanmu</h2>
      <p class="price-intro">
        Harga laundry yang transparan dan mudah dipahami.
        Pilih layanan yang sesuai, lalu nikmati pakaian bersih,
        rapi, dan wangi bersama Lunora.
      </p>
    </div>

    <div class="price-list" id="price-list">
      <p class="price-empty">Memuat daftar harga...</p>
    </div>

  </div>
</section>

<!-- CARA KERJA -->
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

<!-- TENTANG KAMI -->
<section class="section" id="tentang">
  <div class="container">
    <div class="section-head-row">
      <h2>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="12" r="9"/>
          <path d="M9.5 12.5l1.8 1.8L15 10.5"/>
        </svg>
        Tentang Kami
      </h2>
    </div>

    <div class="steps">
      <div class="step-card">
        <h4>Berpengalaman</h4>
        <p>Melayani pelanggan dengan konsistensi kualitas.</p>
      </div>

      <div class="step-card">
        <h4>Higienis</h4>
        <p>Deterjen berkualitas dan proses pencucian yang terjaga kebersihannya.</p>
      </div>

      <div class="step-card">
        <h4>Transparan</h4>
        <p>Harga jelas per kilogram, tanpa biaya tersembunyi di akhir.</p>
      </div>

      <div class="step-card">
        <h4>Tepat Waktu</h4>
        <p>Estimasi selesai yang bisa kamu pantau langsung dari akun.</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONI -->
<section class="section section-alt" id="testimoni">
  <div class="container">
    <div class="section-head">
      <div class="kicker">Testimoni</div>
      <h2>Dipercaya pelanggan sekitar</h2>
    </div>

    <div class="testi-wrap">
      <div class="testi">
        <p>Prosesnya cepat dan aku bisa lihat status cucian tanpa perlu chat admin terus-menerus.</p>
        <div class="who">
          <div class="avatar">DA</div>
          <div><strong>Dewi Anjani</strong><span>Pelanggan sejak 2024</span></div>
        </div>
      </div>

      <div class="testi">
        <p>Layanan Super Express benar-benar menyelamatkan waktu saya di hari sibuk.</p>
        <div class="who">
          <div class="avatar">RH</div>
          <div><strong>Rian Hidayat</strong><span>Pelanggan rutin</span></div>
        </div>
      </div>

      <div class="testi">
        <p>Hasil setrikanya rapi, wanginya tahan lama. Sudah jadi langganan tetap keluarga.</p>
        <div class="who">
          <div class="avatar">SN</div>
          <div><strong>Siti Nuraini</strong><span>Pelanggan sejak 2023</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AJAKAN DAFTAR -->
<section class="section">
  <div class="container">
    <div class="cta-band">
      <div>
        <h2>Siap coba Lunora?</h2>
        <p>Daftar sekarang dan pesan penjemputan pertamamu hari ini.</p>
      </div>

      <a href="{{ url('/login') }}?tab=daftar" class="btn btn-dark">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M12 5v14M5 12h14"/>
        </svg>
        Daftar Gratis
      </a>
    </div>
  </div>
</section>

<footer class="lunora-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- BRAND -->
      <div class="footer-brand">
        <a href="{{ url('/') }}" class="brand">
          <svg class="logo-mark" viewBox="0 0 48 48"
            fill="none" stroke="currentColor" stroke-width="2.2"
            stroke-linecap="round" stroke-linejoin="round">
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

        <p class="footer-description">
          Laundry lebih mudah, bersih, rapi, dan wangi.
          Serahkan urusan cucianmu kepada Lunora.
        </p>

        <div class="footer-socials">
          <a href="https://wa.me/6289626943408?text=Halo%20Lunora%20Laundry%2C%20saya%20ingin%20memesan%20layanan%20cuci%20kering%20baju.%20Boleh%20minta%20info%20harga%20dan%20estimasi%20selesainya%3F%20Terima%20kasih."
             target="_blank" rel="noopener noreferrer"
             aria-label="WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
          <a href="mailto:lunoralaundry@gmail.com"
             aria-label="Email">
            <i class="fa-solid fa-envelope"></i>
          </a>
        </div>
      </div>

      <!-- KONTAK -->
      <div class="footer-contact">
        <h3>Hubungi Kami</h3>

        <div class="contact-item">
          <span class="contact-icon">
            <i class="fa-regular fa-envelope"></i>
          </span>
          <div>
            <strong>Email</strong>
            <a href="mailto:lunoralaundry@gmail.com">
              lunoralaundry@gmail.com
            </a>
          </div>
        </div>

        <div class="contact-item">
          <span class="contact-icon">
            <i class="fa-solid fa-phone"></i>
          </span>
          <div>
            <strong>Telepon</strong>
            <a href="tel:+6289626943408">
              +62 896-2694-3408
            </a>
          </div>
        </div>

        <div class="contact-item">
          <span class="contact-icon">
            <i class="fa-solid fa-location-dot"></i>
          </span>
          <div>
            <strong>Alamat</strong>
            <p>Jl. Lunjuk Jaya 6, 24 Ilir, Palembang, Sumatera Selatan 30137</p>
          </div>
        </div>
      </div>

      <!-- LOKASI -->
      <div class="footer-location">
        <h3>Lokasi Kami</h3>

        <div class="footer-map">
          <iframe
            src="https://maps.google.com/maps?q=CM%20Laundry%20Jalan%20Lunjuk%20Jaya%206%2C%2024%20Ilir%2C%20Palembang&t=&z=17&ie=UTF8&iwloc=&output=embed"
            title="Peta lokasi Lunora Laundry"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen>
          </iframe>
          <div class="map-label"><strong>Lunora Laundry</strong><span>Jl. Lunjuk Jaya 6, 24 Ilir, Palembang</span></div>
        </div>

        <a class="map-button"
          href="https://www.google.com/maps/search/?api=1&query=CM+Laundry+Jalan+Lunjuk+Jaya+6%2C+24+Ilir%2C+Palembang"
          target="_blank" rel="noopener noreferrer">
          <i class="fa-solid fa-location-arrow"></i>
          Buka di Google Maps
          <span class="map-arrow">→</span>
        </a>

        <p class="map-note">
          Hubungi kami untuk informasi lokasi laundry.
        </p>
      </div>

      <!-- NAVIGASI -->
      <div class="footer-navigation">
        <h3>Jelajahi</h3>
        <ul>
          <li><a href="#layanan">Layanan <span>→</span></a></li>
          <li><a href="#daftar-harga">Daftar Harga <span>→</span></a></li>
          <li><a href="#alur">Cara Kerja <span>→</span></a></li>
          <li><a href="#tentang">Tentang Kami <span>→</span></a></li>
          <li><a href="#testimoni">Testimoni <span>→</span></a></li>
        </ul>
      </div>

      <!-- AKUN -->
      <div class="footer-account">
        <h3>Akun</h3>
        <ul>
          <li>
            <a href="{{ url('/login') }}">Masuk <span>→</span></a>
          </li>
          <li>
            <a href="{{ url('/login') }}?tab=daftar">
              Daftar <span>→</span>
            </a>
          </li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <p>© 2026 Lunora Laundry. Dibuat sebagai proyek tugas kuliah.</p>
      <span>Laundry, Lebih Mudah.</span>
    </div>
  </div>
</footer>

<style>
.lunora-footer {
  position: relative;
  overflow: hidden;
  margin-top: 0;
  padding: 65px 0 22px;
  color: #eaf7f4;
  background: linear-gradient(135deg, #123f40, #082f32);
}

.lunora-footer::before {
  content: "";
  position: absolute;
  width: 480px;
  height: 480px;
  top: -310px;
  left: -120px;
  border-radius: 50%;
  background: rgba(72, 181, 161, .12);
  pointer-events: none;
}

.lunora-footer .container {
  position: relative;
  z-index: 1;
}

.footer-grid {
  display: grid;
  grid-template-columns: 1.15fr 1.2fr 1.45fr .8fr .55fr;
  gap: 32px;
  align-items: start;
}

.lunora-footer .brand {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  color: #fff;
  text-decoration: none;
}

.lunora-footer .logo-mark {
  width: 43px;
  height: 43px;
  color: #49c6b0;
}

.lunora-footer .brand-name {
  display: block;
  color: #fff;
  font-size: 27px;
  font-weight: 800;
  line-height: 1.2;
}

.lunora-footer .brand-tagline {
  display: block;
  margin-top: 3px;
  color: #b5d3ce;
  font-size: 12px;
}

.footer-description {
  max-width: 270px;
  margin: 22px 0;
  color: #c2d9d5;
  line-height: 1.8;
}

.lunora-footer h3 {
  margin: 5px 0 24px;
  color: #fff;
  font-size: 17px;
  font-weight: 750;
}

.footer-heading-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-right: 8px;
  color: #61d4bd;
  font-size: 23px;
}

.footer-socials {
  display: flex;
  gap: 10px;
}

.footer-socials a {
  display: flex;
  width: 39px;
  height: 39px;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  color: #e9fffa;
  background: rgba(95, 208, 187, .15);
  text-decoration: none;
  font-size: 12px;
  font-weight: 700;
  transition: .2s ease;
}

.footer-socials a:hover {
  background: #218e80;
  transform: translateY(-3px);
}

.contact-item {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  margin-bottom: 21px;
}

.contact-icon {
  display: flex;
  flex: 0 0 40px;
  width: 40px;
  height: 40px;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  color: #dffff7;
  background: rgba(95, 208, 187, .17);
  font-size: 19px;
}

.contact-item strong {
  display: block;
  margin-bottom: 5px;
  color: #8fe3d2;
  font-size: 13px;
}

.contact-item a,
.contact-item p {
  margin: 0;
  color: #c5dcd8;
  font-size: 13px;
  line-height: 1.7;
  text-decoration: none;
  overflow-wrap: anywhere;
}

.contact-item a:hover {
  color: #fff;
}

.footer-map {
  height: 190px;
  overflow: hidden;
  border: 1px solid rgba(194, 232, 223, .35);
  border-radius: 13px;
  background: #dfece8;
}

.footer-map iframe {
  display: block;
  width: 100%;
  height: 100%;
  border: 0;
}

.map-button {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-top: 13px;
  padding: 12px 15px;
  border-radius: 30px;
  color: #fff;
  background: rgba(65, 177, 158, .23);
  text-decoration: none;
  font-size: 13px;
  font-weight: 650;
  transition: .2s ease;
}

.map-button:hover {
  background: #197e72;
}

.map-arrow {
  margin-left: auto;
  font-size: 19px;
}

.map-note {
  margin-top: 10px;
  color: #a9c9c3;
  font-size: 11px;
  line-height: 1.6;
}

.footer-navigation,
.footer-account {
  min-height: 250px;
  padding-left: 20px;
  border-left: 1px solid rgba(203, 235, 228, .2);
}

.footer-navigation ul,
.footer-account ul {
  display: grid;
  gap: 17px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.footer-navigation a,
.footer-account a {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 7px;
  color: #c6dcd8;
  font-size: 13px;
  text-decoration: none;
  transition: .2s ease;
}

.footer-navigation a:hover,
.footer-account a:hover {
  color: #73ddc8;
  transform: translateX(3px);
}

.footer-navigation a span,
.footer-account a span {
  color: #66d4c0;
}

.footer-bottom {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 15px;
  margin-top: 42px;
  padding-top: 20px;
  border-top: 1px solid rgba(203, 235, 228, .2);
}

.footer-bottom p,
.footer-bottom span {
  margin: 0;
  color: #a9c9c3;
  font-size: 12px;
  line-height: 1.7;
}

@media (max-width: 1100px) {
  .footer-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 35px 25px;
  }

  .footer-navigation,
  .footer-account {
    min-height: auto;
  }
}

@media (max-width: 700px) {
  .lunora-footer {
    padding-top: 45px;
  }

  .footer-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 30px 20px;
  }

  .footer-brand,
  .footer-location {
    grid-column: 1 / -1;
  }

  .footer-navigation,
  .footer-account {
    padding-left: 12px;
  }

  .footer-bottom {
    align-items: flex-start;
    flex-direction: column;
    margin-top: 30px;
  }
}

@media (max-width: 420px) {
  .footer-grid {
    grid-template-columns: 1fr;
  }

  .footer-brand,
  .footer-location {
    grid-column: auto;
  }

  .footer-navigation,
  .footer-account {
    min-height: auto;
  }
}
</style>
```
<!-- JAVASCRIPT -->
<script src="{{ asset('js/script.js') }}"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const icons = {
    kilat: '<path d="M13 2 4 14h6l-1 8 9-12h-6l1-8Z"/>',
    setrika: '<path d="M3 16h13a5 5 0 0 0 5-5V9a2 2 0 0 0-2-2H9L3 12v4Z"/><path d="M7 20h10"/>',
    express: '<path d="M4 12h16M14 6l6 6-6 6"/>',
    dry: '<circle cx="12" cy="12" r="9"/><path d="M8 12h8M12 8v8"/>'
  };

  const iconKeys = Object.keys(icons);
  const list = document.getElementById("service-list");
  const priceList = document.getElementById("price-list");

  /*
   * Daftar harga dan layanan memakai sumber data yang sama.
   * Harga tidak ditulis manual agar mengikuti data layanan Lunora.
   */
  try {
    if (typeof DB === "undefined" || typeof DB.getLayanan !== "function") {
      throw new Error("Data layanan belum tersedia.");
    }

    const layanan = DB.getLayanan() || [];

    if (list) {
      list.innerHTML = "";
    }

    if (priceList) {
      priceList.innerHTML = "";
    }

    if (layanan.length === 0) {
      if (list) {
        list.innerHTML = '<p class="price-empty">Layanan belum tersedia.</p>';
      }

      if (priceList) {
        priceList.innerHTML = '<p class="price-empty">Daftar harga belum tersedia.</p>';
      }

      return;
    }

    layanan.forEach(function (l, i) {
      const key = iconKeys[i % iconKeys.length];
      const nama = l.nama || "Layanan Laundry";
      const deskripsi = l.deskripsi || "Layanan laundry Lunora.";
      const estimasi = l.estimasi ?? "-";
      const harga = typeof fmtRupiah === "function"
        ? fmtRupiah(l.harga)
        : "Rp " + Number(l.harga || 0).toLocaleString("id-ID");

      // Kartu pada bagian Layanan Kami.
      if (list) {
        list.insertAdjacentHTML("beforeend", `
          <div class="service-row">
            <div class="service-icon">
              <svg viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.8">${icons[key]}</svg>
            </div>
            <div><h3>${nama}</h3></div>
            <p class="desc">${deskripsi} Estimasi ${estimasi} jam.</p>
            <div class="service-price">${harga}<span>per kg</span></div>
          </div>
        `);
      }

      // Kartu pada bagian Daftar Harga.
      if (priceList) {
        priceList.insertAdjacentHTML("beforeend", `
          <article class="price-card">
            <div class="price-card-icon">
              <svg viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.8">${icons[key]}</svg>
            </div>

            <div class="price-card-content">
              <h3>${nama}</h3>
              <p>${deskripsi}</p>
              <span class="price-estimate">Estimasi ${estimasi} jam</span>
            </div>

            <div class="price-card-value">
              <strong>${harga}</strong>
              <span>per kg</span>
            </div>
          </article>
        `);
      }
    });

  } catch (error) {
    console.error("Gagal menampilkan layanan Lunora:", error);

    if (list) {
      list.innerHTML = '<p class="price-empty">Layanan belum dapat dimuat. Silakan periksa koneksi data layanan.</p>';
    }

    if (priceList) {
      priceList.innerHTML = '<p class="price-empty">Daftar harga belum dapat dimuat. Silakan periksa koneksi data layanan.</p>';
    }
  }
});
</script>

</body>
</html>

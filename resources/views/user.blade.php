
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Pelanggan — Lunora</title>

<style>
:root {
    --green: #0b403b;
    --green-dark: #083b36;
    --green-light: #226a60;
    --mint: #78cbb8;
    --bg: #f4f8f6;
    --white: #ffffff;
    --text: #123f3a;
    --muted: #78918a;
    --line: #e4ede9;
    --gold: #b98237;
}
* { box-sizing: border-box; }

body {
    margin: 0;
    font-family: "Segoe UI", Arial, sans-serif;
    color: var(--text);
    background: var(--bg);
}
button, input, select, textarea { font: inherit; }
button { cursor: pointer; }

.app {
    display: flex;
    min-height: 100vh;
}

/* SIDEBAR */
.sidebar {
    width: 250px;
    flex-shrink: 0;
    min-height: 100vh;
    padding: 28px 17px 22px;
    background: var(--green);
    color: white;
    display: flex;
    flex-direction: column;
}

.brand {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 0 13px;
    margin-bottom: 52px;
    color: white;
    text-decoration: none;
    font-size: 25px;
    font-weight: 800;
    letter-spacing: -.5px;
}

.brand-logo {
    width: 32px;
    height: 32px;
    color: var(--mint);
    flex-shrink: 0;
}

.navigation {
    display: grid;
    gap: 8px;
}

.nav-btn {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 13px;
    padding: 14px 15px;
    border: none;
    border-radius: 11px;
    color: #d9ebe6;
    background: transparent;
    text-align: left;
    transition: .2s;
    font-size: 14px;
}

.nav-btn:hover,
.nav-btn.active {
    background: #22675e;
    color: white;
}

.nav-icon {
    width: 24px;
    text-align: center;
    font-size: 20px;
}

.sidebar-bottom {
    margin-top: auto;
    padding: 20px 9px 0;
    border-top: 1px solid #285c54;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 11px;
}

.avatar {
    width: 42px;
    height: 42px;
    display: grid;
    place-items: center;
    flex-shrink: 0;
    border-radius: 50%;
    background: #26796c;
    color: white;
    font-size: 20px;
}

.user-name {
    font-size: 13px;
    font-weight: 700;
    overflow-wrap: anywhere;
}

.user-role {
    color: #a9d4ca;
    font-size: 12px;
    margin-top: 5px;
}

.logout {
    margin-top: 22px;
    padding: 0;
    border: 0;
    background: transparent;
    color: #ffc477;
    font-weight: 700;
    font-size: 13px;
}

.logout:hover { color: white; }

/* MAIN */
.content {
    flex: 1;
    min-width: 0;
}

.topbar {
    height: 66px;
    padding: 0 35px;
    background: white;
    border-bottom: 1px solid var(--line);
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 13px;
    color: var(--muted);
}

.top-logo {
    color: var(--green-light);
    font-size: 20px;
}

.top-user {
    font-size: 13px;
    color: var(--text);
}

main {
    max-width: 1800px;
    margin: auto;
    padding: 30px 42px 40px;
}

.page { display: none; }
.page.active { display: block; }

.page-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 28px;
}

h1 {
    margin: 0 0 9px;
    font-size: 32px;
    letter-spacing: -.8px;
    color: var(--green);
}

.subtitle {
    margin: 0;
    color: var(--muted);
    font-size: 14px;
    line-height: 1.7;
}

.date {
    padding-top: 10px;
    color: var(--muted);
    font-size: 12px;
    white-space: nowrap;
}

/* STAT CARDS */
.stats {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 17px;
    margin-bottom: 23px;
}

.stat {
    padding: 22px;
    border: 1px solid var(--line);
    border-radius: 15px;
    background: white;
    box-shadow: 0 4px 15px #0b403b05;
    transition: transform .2s, box-shadow .2s;
}

.stat:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 24px #0b403b10;
}

.stat-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.stat-icon {
    width: 47px;
    height: 47px;
    display: grid;
    place-items: center;
    border-radius: 14px;
    font-size: 22px;
}

.icon-mint { background: #e0f5ee; color: #187765; }
.icon-blue { background: #e1edff; color: #2467b2; }
.icon-gold { background: #fff0d9; color: #b98237; }

.stat-arrow {
    color: #87a29a;
    font-size: 22px;
}

.stat-label {
    margin-top: 15px;
    font-size: 13px;
    font-weight: 600;
    color: #66837b;
}

.stat-value {
    margin-top: 7px;
    font-size: 31px;
    font-weight: 800;
    color: var(--green);
    overflow-wrap: anywhere;
}

.stat-value.gold {
    color: var(--gold);
    font-size: 25px;
}

.stat-note {
    margin-top: 8px;
    color: var(--muted);
    font-size: 11px;
}

/* PANELS */
.middle,
.bottom-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.9fr) minmax(270px, .9fr);
    gap: 17px;
}

.panel {
    min-width: 0;
    padding: 22px;
    background: white;
    border: 1px solid var(--line);
    border-radius: 15px;
    box-shadow: 0 4px 16px #0b403b05;
}

.panel-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 21px;
}

.heading-title {
    display: flex;
    align-items: center;
    gap: 12px;
}

.heading-icon {
    font-size: 23px;
    color: var(--green-light);
}

.panel h2 {
    margin: 0;
    font-size: 17px;
    color: var(--text);
}

.panel-sub {
    margin-top: 7px;
    color: var(--muted);
    font-size: 11px;
    line-height: 1.6;
}

.text-btn {
    padding: 10px 12px;
    border: 1px solid var(--line);
    border-radius: 9px;
    background: #f8fbf9;
    color: var(--text);
    font-size: 11px;
    white-space: nowrap;
}

.text-btn:hover { background: var(--mint); }

.table-wrap {
    width: 100%;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    font-size: 12px;
}

thead { background: #f3f8f6; }

th {
    padding: 14px 12px;
    color: #6b8980;
    font-size: 10px;
    text-align: left;
    white-space: nowrap;
    letter-spacing: .3px;
}

td {
    padding: 16px 12px;
    border-bottom: 1px solid #edf2ef;
    white-space: nowrap;
}

tbody tr:last-child td { border-bottom: none; }

.badge {
    display: inline-block;
    padding: 7px 11px;
    border-radius: 20px;
    font-size: 10px;
    font-weight: 600;
}

.badge.proses { background: #dfebff; color: #1764ad; }
.badge.selesai { background: #d9f4e9; color: #087c5d; }
.badge.menunggu { background: #fff0d7; color: #99621c; }

.empty {
    padding: 28px;
    color: var(--muted);
    text-align: center;
    white-space: normal;
    line-height: 1.7;
}

/* QUICK ACTIONS */
.quick-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

.quick-btn {
    min-height: 112px;
    padding: 15px 8px;
    border: 1px solid #e8f0ec;
    border-radius: 12px;
    background: #f6faf8;
    color: var(--text);
    text-align: center;
    transition: .2s;
}

.quick-btn:hover {
    background: #e5f5ef;
    transform: translateY(-2px);
}

.quick-icon {
    margin-bottom: 10px;
    color: var(--green-light);
    font-size: 24px;
}

.quick-title {
    font-size: 12px;
    font-weight: 700;
}

.quick-note {
    margin-top: 7px;
    color: var(--muted);
    font-size: 10px;
}

/* BOTTOM CARDS */
.bottom-grid { margin-top: 17px; }

.promo {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    padding: 24px;
    border: 1px solid #dcefe8;
    border-radius: 15px;
    background: linear-gradient(115deg, #e1f5ef, #f2faf7);
}

.promo-content {
    display: flex;
    align-items: center;
    gap: 18px;
}

.promo-art { font-size: 43px; }

.promo h2 {
    margin: 0 0 9px;
    font-size: 16px;
}

.promo p {
    margin: 0;
    color: #62827b;
    font-size: 12px;
    line-height: 1.8;
}

.btn {
    padding: 13px 17px;
    border: none;
    border-radius: 9px;
    background: var(--green);
    color: white;
    font-size: 12px;
    font-weight: 700;
    transition: .2s;
}

.btn:hover { background: var(--green-light); }

.promo .btn { flex-shrink: 0; }

.thanks {
    padding: 22px;
    border: 1px solid var(--line);
    border-radius: 15px;
    background: white;
}

.thanks h2 {
    margin: 0 0 12px;
    font-size: 16px;
}

.thanks p {
    margin: 0;
    color: var(--muted);
    font-size: 12px;
    line-height: 1.8;
}

/* FORMS */
.form-panel { max-width: 720px; }

.field {
    display: grid;
    gap: 8px;
    margin-bottom: 18px;
}

.field label {
    font-size: 13px;
    font-weight: 700;
}

.field input,
.field select,
.field textarea {
    width: 100%;
    padding: 13px;
    border: 1px solid #dce8e3;
    border-radius: 9px;
    outline: none;
    background: white;
    color: var(--text);
}

.field input:focus,
.field select:focus,
.field textarea:focus {
    border-color: var(--green-light);
    box-shadow: 0 0 0 3px #226a6012;
}

.field input[readonly],
.field textarea[readonly] {
    background: #f6faf8;
}

.summary {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    padding: 16px;
    margin-bottom: 18px;
    border-radius: 10px;
    background: #f0f7f4;
    font-size: 13px;
}

.summary strong { color: var(--gold); }

.notice {
    color: var(--muted);
    font-size: 12px;
    line-height: 1.7;
}

.profile-grid {
    display: grid;
    gap: 17px;
    max-width: 600px;
}

/* RESPONSIVE */
@media (max-width: 1250px) {
    main { padding: 26px 24px; }
    .stats { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .middle, .bottom-grid { grid-template-columns: 1fr; }
}

@media (max-width: 650px) {
    .app { display: block; }
    .sidebar {
        width: 100%;
        min-height: auto;
        padding: 18px;
    }
    .brand { margin: 0 0 22px; }
    .navigation { grid-template-columns: 1fr 1fr; }
    .nav-btn { padding: 12px 8px; font-size: 12px; }
    .sidebar-bottom { margin-top: 20px; }
    .topbar { height: 50px; padding: 0 18px; }
    main { padding: 23px 14px; }
    .page-header { display: block; }
    h1 { font-size: 26px; }
    .date { margin-top: 12px; }
    .stats { gap: 10px; }
    .stat { padding: 14px; }
    .stat-value { font-size: 25px; }
    .stat-value.gold { font-size: 19px; }
    .stat-label { font-size: 12px; }
    .panel { padding: 15px; }
    .promo { align-items: flex-start; flex-wrap: wrap; }
}
</style>
<link rel="stylesheet" href="{{ asset('css/tema-cerah.css') }}">
</head>

<body>
<div class="app">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <a href="{{ url('/') }}" class="brand">
            <svg class="brand-logo" viewBox="0 0 48 48"
                 fill="none" stroke="currentColor"
                 stroke-width="2.2" stroke-linecap="round"
                 stroke-linejoin="round" aria-label="Logo Lunora">
                <path d="M24 7v5"/>
                <path d="M14 20a10 10 0 0 1 20 0"/>
                <path d="M8 20h32l-3 5H11l-3-5Z"/>
                <path d="M10 25l4 12h20l4-12"/>
            </svg>
            <span>Lunora</span>
        </a>

       
<nav class="navigation">
    <button class="nav-btn active" data-page="ringkasan">
        <span class="nav-icon">▦</span> Ringkasan
    </button>

    <button class="nav-btn" data-page="pesanan">
        <span class="nav-icon">＋</span> Buat Pesanan
    </button>

    <button class="nav-btn" data-page="riwayat">
        <span class="nav-icon">◷</span> Status &amp; Riwayat
    </button>

    <button class="nav-btn" data-page="profil">
        <span class="nav-icon">
            <svg width="18" height="18" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="1.8"
                 stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="4"/>
                <path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7"/>
            </svg>
        </span>
        Profil
    </button>
</nav>

<div class="sidebar-bottom">
    <div class="user-info">

        <div class="avatar">
            <svg width="25" height="25" viewBox="0 0 24 24"
                 fill="none" stroke="white" stroke-width="1.8"
                 stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="4"/>
                <path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7"/>
            </svg>
        </div>

        <div>
            <div class="user-name">
                {{ auth()->user()->nama ?? 'Pelanggan' }}
            </div>
            <div class="user-role">Pelanggan</div>
        </div>

    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout">
            ⇥ &nbsp; Keluar
        </button>
    </form>
</div>
</aside>


    <!-- KONTEN UTAMA -->
    <div class="content">
        <div class="topbar">
            <svg class="brand-logo top-logo" viewBox="0 0 48 48"
                 fill="none" stroke="currentColor"
                 stroke-width="2.2" stroke-linecap="round"
                 stroke-linejoin="round" aria-label="Logo Lunora">
                <path d="M24 7v5"/>
                <path d="M14 20a10 10 0 0 1 20 0"/>
                <path d="M8 20h32l-3 5H11l-3-5Z"/>
                <path d="M10 25l4 12h20l4-12"/>
            </svg>
            <span>│</span>
            <span class="top-user">{{ auth()->user()->nama ?? 'Pelanggan' }}　⌄</span>
        </div>

        <main>

            <!-- RINGKASAN -->
            <section class="page active" id="page-ringkasan">
                <div class="page-header">
                    <div>
                        <h1>Ringkasan Pelanggan</h1>
                        <p class="subtitle">
                            Pantau pesanan laundry kamu di Lunoralaundry.
                        </p>
                    </div>
                    <div class="date">◷ &nbsp; Dashboard Pelanggan</div>
                </div>

                <div class="stats">
                    <div class="stat">
                        <div class="stat-top">
                            <div class="stat-icon icon-mint">♧</div>
                            <span class="stat-arrow">›</span>
                        </div>
                        <div class="stat-label">Total Pesanan</div>
                        <div class="stat-value" id="stat-total">0</div>
                        <div class="stat-note">Semua pesanan kamu</div>
                    </div>

                    <div class="stat">
                        <div class="stat-top">
                            <div class="stat-icon icon-blue">◷</div>
                            <span class="stat-arrow">›</span>
                        </div>
                        <div class="stat-label">Sedang Diproses</div>
                        <div class="stat-value" id="stat-proses">0</div>
                        <div class="stat-note">Pesanan dalam proses</div>
                    </div>

                    <div class="stat">
                        <div class="stat-top">
                            <div class="stat-icon icon-mint">✓</div>
                            <span class="stat-arrow">›</span>
                        </div>
                        <div class="stat-label">Selesai</div>
                        <div class="stat-value" id="stat-selesai">0</div>
                        <div class="stat-note">Pesanan telah selesai</div>
                    </div>

                    <div class="stat">
                        <div class="stat-top">
                            <div class="stat-icon icon-gold">▣</div>
                            <span class="stat-arrow">›</span>
                        </div>
                        <div class="stat-label">Total Pengeluaran</div>
                        <div class="stat-value gold" id="stat-pengeluaran">Rp0</div>
                        <div class="stat-note">Total biaya pesanan</div>
                    </div>
                </div>

                <div class="middle">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="heading-title">
                                <span class="heading-icon">◷</span>
                                <div>
                                    <h2>Pesanan Terbaru</h2>
                                    <div class="panel-sub">
                                        Daftar pesanan laundry kamu.
                                    </div>
                                </div>
                            </div>
                            <button class="text-btn" data-go="riwayat">
                                Lihat Semua　›
                            </button>
                        </div>

                        <div class="table-wrap">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID PESANAN</th>
                                        <th>LAYANAN</th>
                                        <th>BERAT</th>
                                        <th>TOTAL</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody id="latest-orders">
                                    <tr>
                                        <td colspan="5" class="empty">
                                            Data pesanan belum tersedia.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <div class="heading-title">
                                <span class="heading-icon">ϟ</span>
                                <h2>Aksi Cepat</h2>
                            </div>
                        </div>

                        <div class="quick-grid">
                            <button class="quick-btn" data-go="pesanan">
                                <div class="quick-icon">⊕</div>
                                <div class="quick-title">Buat Pesanan</div>
                                <div class="quick-note">Pesan laundry sekarang</div>
                            </button>

                            <button class="quick-btn" data-go="riwayat">
                                <div class="quick-icon">◷</div>
                                <div class="quick-title">Lihat Riwayat</div>
                                <div class="quick-note">Cek status pesanan</div>
                            </button>

                            <button class="quick-btn" data-go="profil">
                                <div class="quick-icon">♙</div>
                                <div class="quick-title">Profil Saya</div>
                                <div class="quick-note">Informasi akun</div>
                            </button>

                            <form action="{{ route('logout') }}" method="POST"
                                  class="quick-btn"
                                  style="display:grid;align-content:center;justify-items:center;">
                                @csrf
                                <button type="submit"
                                        style="border:0;background:transparent;color:inherit;width:100%;height:100%;">
                                    <div class="quick-icon">⇥</div>
                                    <div class="quick-title">Keluar</div>
                                    <div class="quick-note">Logout akun</div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="bottom-grid">
                    <div class="promo">
                        <div class="promo-content">
                            <div class="promo-art">🧺</div>
                            <div>
                                <h2>Laundry lebih mudah, hidup lebih ringan</h2>
                                <p>
                                    Nikmati layanan laundry yang praktis,
                                    bersih, dan terpercaya.
                                </p>
                            </div>
                        </div>
                        <button class="btn" data-go="pesanan">
                            Buat Pesanan　›
                        </button>
                    </div>

                    <div class="thanks">
                        <h2>❀　Terima Kasih</h2>
                        <p>
                            Terima kasih telah mempercayakan laundry kamu
                            kepada Lunoralaundry.
                        </p>
                    </div>
                </div>
            </section>

            <!-- BUAT PESANAN -->
            <section class="page" id="page-pesanan">
                <div class="page-header">
                    <div>
                        <h1>Buat Pesanan</h1>
                        <p class="subtitle">
                            Pilih layanan dan masukkan berat cucianmu.
                        </p>
                    </div>
                </div>

                <div class="panel form-panel">
                    <h2 style="margin-bottom:22px;">Detail Pesanan</h2>

                    <form id="order-form">
                        <div class="field">
                            <label for="layanan">Pilih Layanan</label>
                            <select id="layanan" required>
    <option value="">Pilih layanan</option>

    @foreach (\App\Models\Layanan::all() as $item)
        <option value="{{ $item->id_layanan }}"
                data-price="{{ $item->harga_per_kg }}">
            {{ $item->nama_layanan }}
        </option>
    @endforeach
</select>

                        <div class="field">
                            <label for="berat">Berat Cucian (kg)</label>
                            <input type="number" id="berat" min="0.5"
                                   step="0.5" placeholder="Contoh: 3" required>
                        </div>

                        <div class="summary">
                            <span>Estimasi Total</span>
                            <strong id="estimated-total">Rp0</strong>
                        </div>

                        <button type="submit" class="btn">
                            Periksa Pesanan
                        </button>

                        <p class="notice" id="order-message"></p>
                    </form>
                </div>
            </section>

            <!-- RIWAYAT -->
            <section class="page" id="page-riwayat">
                <div class="page-header">
                    <div>
                        <h1>Status &amp; Riwayat</h1>
                        <p class="subtitle">
                            Lacak perkembangan cucianmu di sini.
                        </p>
                    </div>
                </div>

                <div class="panel">
                    <div class="table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID PESANAN</th>
                                    <th>LAYANAN</th>
                                    <th>BERAT</th>
                                    <th>TOTAL</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody id="history-orders">
                                <tr>
                                    <td colspan="5" class="empty">
                                        Data pesanan belum dihubungkan ke database Laravel.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- PROFIL -->
            <section class="page" id="page-profil">
                <div class="page-header">
                    <div>
                        <h1>Profil Saya</h1>
                        <p class="subtitle">
                            Informasi akunmu di Lunoralaundry.
                        </p>
                    </div>
                </div>

                <div class="panel form-panel">
                    <div class="profile-grid">
                        <div class="field">
                            <label>Nama</label>
                            <input value="{{ auth()->user()->nama ?? '' }}" readonly>
                        </div>

                        <div class="field">
                            <label>Email</label>
                            <input value="{{ auth()->user()->email ?? '' }}" readonly>
                        </div>

                        <div class="field">
                            <label>No. HP</label>
                            <input value="{{ auth()->user()->no_hp ?? '' }}" readonly>
                        </div>

                        <div class="field">
                            <label>Alamat</label>
                            <textarea rows="3" readonly>{{ auth()->user()->alamat ?? '' }}</textarea>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>
</div>

<script>
const navButtons = document.querySelectorAll('[data-page]');
const pages = document.querySelectorAll('.page');

function showPage(name) {
    pages.forEach(page => {
        page.classList.toggle('active', page.id === 'page-' + name);
    });

    navButtons.forEach(button => {
        button.classList.toggle('active', button.dataset.page === name);
    });

    window.scrollTo({ top: 0, behavior: 'smooth' });
}

navButtons.forEach(button => {
    button.addEventListener('click', () => showPage(button.dataset.page));
});

document.querySelectorAll('[data-go]').forEach(button => {
    button.addEventListener('click', () => showPage(button.dataset.go));
});

const layanan = document.getElementById('layanan');
const berat = document.getElementById('berat');

function rupiah(value) {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        maximumFractionDigits: 0
    }).format(value);
}

function updateEstimatedTotal() {
    const option = layanan.options[layanan.selectedIndex];
    const price = Number(option?.dataset?.price || 0);
    const weight = Number(berat.value || 0);

    document.getElementById('estimated-total').textContent =
        rupiah(price * weight);
}

async function loadOrderHistory() {
    const tbody = document.getElementById('history-orders');

    tbody.innerHTML = `
        <tr>
            <td colspan="5" class="empty">
                Memuat riwayat pesanan...
            </td>
        </tr>
    `;

    try {
        const response = await fetch(
            @json(route('pesanan.history')),
            {
                method: 'GET',
                credentials: 'same-origin',
                headers: {
                    'Accept': 'application/json'
                }
            }
        );

        if (!response.ok) {
            throw new Error('Gagal mengambil riwayat pesanan.');
        }

        const pesanan = await response.json();

        if (pesanan.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="5" class="empty">
                        Belum ada pesanan laundry.
                    </td>
                </tr>
            `;
            return;
        }

        tbody.innerHTML = '';

        pesanan.forEach(item => {
            const row = document.createElement('tr');

            const values = [
                '#' + item.id_pesanan,
                item.layanan?.nama_layanan || '-',
                Number(item.berat_kg).toLocaleString('id-ID') + ' kg',
                rupiah(Number(item.total_harga)),
                item.status
            ];

            values.forEach(value => {
                const cell = document.createElement('td');
                cell.textContent = value;
                row.appendChild(cell);
            });

            tbody.appendChild(row);
        });

    } catch (error) {
        tbody.innerHTML = `
            <tr>
                <td colspan="5" class="empty">
                    ${error.message}
                </td>
            </tr>
        `;
    }
}

layanan.addEventListener('change', updateEstimatedTotal);
berat.addEventListener('input', updateEstimatedTotal);
loadOrderHistory();

document.getElementById('order-form').addEventListener('submit', async event => {
    event.preventDefault();

    const form = event.target;
    const button = form.querySelector('button[type="submit"]');
    const message = document.getElementById('order-message');

    const idLayanan = layanan.value;
    const beratKg = Number(berat.value);

    if (!idLayanan || beratKg < 0.5 || !Number.isFinite(beratKg)) {
        message.textContent = 'Silakan pilih layanan dan masukkan berat cucian yang valid.';
        return;
    }

    button.disabled = true;
    button.textContent = 'Menyimpan...';
    message.textContent = 'Sedang menyimpan pesananmu...';

    try {
        const response = await fetch(@json(route('pesanan.store')), {
            method: 'POST',
            credentials: 'same-origin',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': @json(csrf_token())
            },
            body: JSON.stringify({
                id_layanan: idLayanan,
                berat_kg: beratKg
            })
        });

        const result = await response.json();

        if (!response.ok) {
            if (response.status === 422 && result.errors) {
                const errors = Object.values(result.errors).flat();
                throw new Error(errors.join(' '));
            }

            throw new Error(
                result.message || 'Pesanan gagal disimpan.'
            );
        }

        message.textContent =
            result.message + ' Total pesanan: ' +
            rupiah(Number(result.data.total_harga));

        form.reset();
updateEstimatedTotal();
loadOrderHistory();

    } catch (error) {
        message.textContent = error.message ||
            'Terjadi kesalahan. Silakan coba kembali.';
    } finally {
        button.disabled = false;
        button.textContent = 'Periksa Pesanan';
    }
});

</script>
</body>
</html>

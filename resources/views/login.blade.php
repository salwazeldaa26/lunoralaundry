
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk — Lunoralaundry</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        :root {
            --deep: #103f40;
            --deep-light: #155c58;
            --teal: #087e75;
            --mint: #d0eee7;
            --mint-light: #eff8f5;
            --white: #ffffff;
            --text: #173e3e;
            --muted: #718784;
            --border: #dcebe6;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            color: var(--text);
            background: var(--mint-light);
        }

        a {
            text-decoration: none;
        }

        .auth-shell {
            display: grid;
            grid-template-columns: 0.92fr 1.08fr;
            min-height: 100vh;
            overflow: hidden;
        }

        /* PANEL KIRI */

        .auth-side {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 42px clamp(28px, 5vw, 76px);
            overflow: hidden;
            color: white;
            background: linear-gradient(
                150deg,
                #103f40 0%,
                #105b55 58%,
                #116c60 100%
            );
        }

        .auth-side::before {
            content: "";
            position: absolute;
            width: 440px;
            height: 440px;
            right: -190px;
            bottom: -150px;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 50%;
            box-shadow:
                0 0 0 45px rgba(255,255,255,.025),
                0 0 0 90px rgba(255,255,255,.025);
            pointer-events: none;
        }

        .auth-side::after {
            content: "";
            position: absolute;
            width: 200px;
            height: 200px;
            top: 25%;
            left: -130px;
            border-radius: 50%;
            background: rgba(121, 214, 192, .07);
            pointer-events: none;
        }

        .brand {
            position: relative;
            z-index: 1;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            width: fit-content;
            color: white;
        }

        .logo-mark {
            width: 43px;
            height: 43px;
            color: #63c8b5;
            flex-shrink: 0;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .brand-name {
            font-size: 25px;
            line-height: 1.1;
            font-weight: 800;
            letter-spacing: -.8px;
        }

        .brand-tagline {
            color: rgba(255,255,255,.68);
            font-size: 12px;
            letter-spacing: .2px;
        }

        .auth-quote {
            position: relative;
            z-index: 1;
            max-width: 470px;
            margin: 60px 0;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 22px;
            padding: 9px 13px;
            border: 1px solid rgba(168, 231, 215, .25);
            border-radius: 7px;
            color: #c1eee1;
            background: rgba(255,255,255,.06);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .eyebrow-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #76d7bf;
        }

        .auth-quote h1 {
            max-width: 440px;
            margin: 0 0 22px;
            color: white;
            font-size: clamp(36px, 4vw, 55px);
            font-weight: 750;
            line-height: 1.13;
            letter-spacing: -2px;
        }

        .auth-quote h1 span {
            color: #8bd9c7;
        }

        .auth-quote p {
            max-width: 380px;
            margin: 0;
            color: rgba(255,255,255,.74);
            font-size: 15px;
            line-height: 1.9;
        }

        .laundry-card {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 15px;
            max-width: 390px;
            padding: 19px;
            border: 1px solid rgba(255,255,255,.13);
            border-radius: 12px;
            background: rgba(255,255,255,.075);
        }

        .laundry-icon {
            display: grid;
            place-items: center;
            width: 47px;
            height: 47px;
            flex-shrink: 0;
            border-radius: 10px;
            color: #a3e4d4;
            background: rgba(135, 220, 198, .13);
        }

        .laundry-icon svg {
            width: 25px;
            height: 25px;
        }

        .laundry-card strong {
            display: block;
            margin-bottom: 5px;
            color: white;
            font-size: 13px;
        }

        .laundry-card p {
            margin: 0;
            color: rgba(255,255,255,.67);
            font-size: 11px;
            line-height: 1.6;
        }

        .side-footer {
            position: relative;
            z-index: 1;
            margin-top: 28px;
            color: rgba(255,255,255,.5);
            font-size: 11px;
        }

        /* PANEL KANAN */

        .auth-form-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 0;
            padding: 40px 28px;
            background: #f6faf8;
        }

        .auth-form {
            width: 100%;
            max-width: 420px;
            margin: auto;
        }

        .form-heading {
            margin-bottom: 27px;
        }

        .form-heading h2 {
            margin: 0 0 9px;
            color: var(--deep);
            font-size: 29px;
            font-weight: 750;
            letter-spacing: -.8px;
        }

        .form-heading p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
        }

        /* TAB MASUK / DAFTAR */

        .auth-tabs {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5px;
            margin-bottom: 27px;
            padding: 5px;
            border: 1px solid #e0eee8;
            border-radius: 9px;
            background: #e9f3ef;
        }

        .auth-tabs button {
            min-height: 43px;
            padding: 10px;
            border: none;
            border-radius: 6px;
            color: #53736d;
            background: transparent;
            font-family: inherit;
            font-size: 13px;
            font-weight: 650;
            cursor: pointer;
            transition: background .2s, color .2s, box-shadow .2s;
        }

        .auth-tabs button.active {
            color: var(--deep);
            background: white;
            box-shadow: 0 2px 7px rgba(20, 70, 58, .08);
        }

        .auth-tabs button:hover {
            color: var(--teal);
        }

        /* FORM */

        .auth-form form {
            width: 100%;
        }

        .hint-box {
            margin-bottom: 18px;
            padding: 12px 14px;
            border: 1px solid #d5ebe3;
            border-radius: 7px;
            color: #356a60;
            background: #eaf6f1;
            font-size: 12px;
            line-height: 1.7;
            overflow-wrap: anywhere;
        }

        .error-box {
            display: none;
            margin-bottom: 16px;
            padding: 12px 14px;
            border: 1px solid #f0d0cc;
            border-radius: 7px;
            color: #a33c34;
            background: #fff1ef;
            font-size: 12px;
            line-height: 1.6;
        }

        .error-box.show {
            display: block;
        }

        .role-toggle {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 23px;
        }

        .role-toggle label {
            position: relative;
            display: block;
            cursor: pointer;
        }

        .role-toggle input {
            position: absolute;
            width: 1px;
            height: 1px;
            opacity: 0;
        }

        .role-toggle span {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 10px;
            border: 1px solid var(--border);
            border-radius: 7px;
            color: #607c76;
            background: white;
            font-size: 12px;
            font-weight: 650;
            transition: all .2s;
        }

        .role-toggle input:checked + span {
            border-color: #52b7a3;
            color: #116a60;
            background: #e1f4ee;
            box-shadow: inset 0 0 0 1px rgba(82,183,163,.12);
        }

        .role-toggle input:focus-visible + span {
            outline: 2px solid var(--teal);
            outline-offset: 3px;
        }

        .field {
            margin-bottom: 18px;
        }

        .field label {
            display: block;
            margin-bottom: 8px;
            color: #244c48;
            font-size: 12px;
            font-weight: 700;
        }

        .field input {
            display: block;
            width: 100%;
            height: 48px;
            padding: 0 14px;
            border: 1px solid #dce9e4;
            border-radius: 7px;
            outline: none;
            color: #193f3b;
            background: white;
            font-family: inherit;
            font-size: 13px;
            transition: border-color .2s, box-shadow .2s;
        }

        .field input::placeholder {
            color: #a2b4ae;
        }

        .field input:focus {
            border-color: #43ad9a;
            box-shadow: 0 0 0 3px rgba(67,173,154,.12);
        }

        .btn.btn-dark.btn-block {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-height: 49px;
            margin-top: 6px;
            padding: 13px 18px;
            border: 1px solid var(--deep);
            border-radius: 7px;
            color: white;
            background: var(--deep);
            font-family: inherit;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: background .2s, transform .2s, box-shadow .2s;
        }

        .btn.btn-dark.btn-block:hover {
            transform: translateY(-1px);
            background: #155651;
            box-shadow: 0 5px 14px rgba(16,63,64,.13);
        }

        .btn.btn-dark.btn-block:active {
            transform: translateY(0);
        }

        .form-note {
            margin: 20px 0 0;
            color: #81928d;
            font-size: 12px;
            text-align: center;
        }

        .form-note a {
            color: #087d72;
            font-weight: 750;
        }

        .form-note a:hover {
            text-decoration: underline;
        }

        .form-divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 24px 0;
            color: #a1b1ac;
            font-size: 10px;
        }

        .form-divider::before,
        .form-divider::after {
            content: "";
            height: 1px;
            flex: 1;
            background: #e2ece7;
        }

        .register-form .field {
            margin-bottom: 13px;
        }

        .register-form .field input {
            height: 44px;
        }

        .auth-bottom {
            margin-top: 27px;
            color: #9aaba5;
            font-size: 10px;
            text-align: center;
        }

        /* RESPONSIVE */

        @media (max-width: 850px) {
            .auth-shell {
                grid-template-columns: .8fr 1.2fr;
            }

            .auth-side {
                padding: 32px 27px;
            }

            .auth-quote h1 {
                font-size: 37px;
                letter-spacing: -1.3px;
            }

            .auth-quote p {
                font-size: 13px;
            }

            .auth-form-wrap {
                padding: 32px 24px;
            }
        }

        @media (max-width: 620px) {
            .auth-shell {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            .auth-side {
                min-height: auto;
                padding: 25px 24px 29px;
            }

            .logo-mark {
                width: 36px;
                height: 36px;
            }

            .brand-name {
                font-size: 22px;
            }

            .auth-quote {
                margin: 34px 0 5px;
            }

            .eyebrow {
                margin-bottom: 14px;
                padding: 7px 10px;
                font-size: 9px;
            }

            .auth-quote h1 {
                max-width: 350px;
                margin-bottom: 12px;
                font-size: 33px;
            }

            .auth-quote p {
                max-width: 390px;
                font-size: 12px;
                line-height: 1.7;
            }

            .laundry-card,
            .side-footer {
                display: none;
            }

            .auth-form-wrap {
                flex: 1;
                align-items: flex-start;
                padding: 30px 23px 28px;
            }

            .auth-form {
                max-width: 430px;
            }

            .form-heading h2 {
                font-size: 25px;
            }

            .auth-tabs {
                margin-bottom: 23px;
            }

            .auth-bottom {
                margin-top: 22px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition: none !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/tema-cerah.css') }}">
</head>
<body>

<div class="auth-shell">

    <!-- PANEL KIRI -->
    <aside class="auth-side">

        <a href="{{ url('/') }}" class="brand">
            <svg class="logo-mark" viewBox="0 0 48 48"
                 fill="none" stroke="currentColor" stroke-width="2.2"
                 stroke-linecap="round" stroke-linejoin="round"
                 aria-hidden="true">
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

        <div class="auth-quote">
            <div class="eyebrow">
                <span class="eyebrow-dot"></span>
                LAUNDRY CARE SERVICE
            </div>

            <h1>
                Bersih lebih mudah,
                <span>hidup lebih ringan.</span>
            </h1>

            <p>
                Urusan cucian tidak harus menyita waktumu.
                Percayakan pakaianmu kepada Lunora dan nikmati
                hari yang lebih praktis, nyaman, dan produktif.
            </p>
        </div>

        <div>
            <div class="laundry-card">
                <div class="laundry-icon">
                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.7"
                         stroke-linecap="round" stroke-linejoin="round"
                         aria-hidden="true">
                        <path d="M3 8h18l-2 12H5L3 8Z"/>
                        <path d="M7 8V5a5 5 0 0 1 10 0v3"/>
                        <path d="M8 13h8"/>
                        <path d="M10 16h4"/>
                    </svg>
                </div>
                <div>
                    <strong>Perawatan pakaian yang lebih praktis</strong>
                    <p>
                        Pilih layanan, buat pesanan, dan pantau
                        status cucianmu dalam satu tempat.
                    </p>
                </div>
            </div>

            <div class="side-footer">
                © {{ date('Y') }} Lunora Laundry. Laundry, Lebih Mudah.
            </div>
        </div>

    </aside>

    <!-- PANEL KANAN -->
    <main class="auth-form-wrap">
        <div class="auth-form">

            <div class="form-heading">
                <h2 id="form-title">Selamat Datang Kembali</h2>
                <p id="form-description">
                    Masuk ke akunmu untuk melanjutkan.
                </p>
            </div>

            <div class="auth-tabs">
                <button type="button" id="tab-masuk" class="active">
                    Masuk
                </button>
                <button type="button" id="tab-daftar">
                    Daftar Akun
                </button>
            </div>

            <!-- PESAN ERROR -->
            <div class="error-box {{ $errors->any() ? 'show' : '' }}"
                 id="err-box" role="alert">
                @if ($errors->any())
                    {{ $errors->first() }}
                @endif
            </div>

            <!-- FORM MASUK -->
            <form id="form-masuk"
                  method="POST"
                  action="{{ route('login.process') }}">
                @csrf

                <div class="hint-box">
                    <strong>Contoh akun admin</strong><br>
                    Email: admin@lunoralaundry.id<br>
                    Kata sandi: admin123
                </div>

                <div class="role-toggle">
                    <label>
                        <input type="radio" name="role"
                               value="user" checked>
                        <span>Saya Pelanggan</span>
                    </label>

                    <label>
                        <input type="radio" name="role"
                               value="admin">
                        <span>Saya Admin</span>
                    </label>
                </div>

                <div class="field">
                    <label for="email-masuk">Alamat Email</label>
                    <input
                        type="email"
                        id="email-masuk"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="nama@email.com"
                        autocomplete="email"
                        required>
                </div>

                <div class="field">
                    <label for="pw-masuk">Kata Sandi</label>
                    <input
                        type="password"
                        id="pw-masuk"
                        name="password"
                        placeholder="Masukkan kata sandi"
                        autocomplete="current-password"
                        required>
                </div>

                @if (session('success'))
                    <div class="hint-box">
                        {{ session('success') }}
                    </div>
                @endif

                <button type="submit" class="btn btn-dark btn-block">
                    Masuk ke Akun
                    <span aria-hidden="true">&nbsp; →</span>
                </button>

                <p class="form-note">
                    Belum punya akun?
                    <a href="#" id="go-daftar">Daftar sekarang</a>
                </p>
            </form>

            <!-- FORM DAFTAR -->
            <form id="form-daftar"
                  class="register-form"
                  method="POST"
                  action="{{ route('register') }}"
                  style="display:none;">
                @csrf

                <div class="field">
                    <label for="nama-daftar">Nama Lengkap</label>
                    <input
                        type="text"
                        id="nama-daftar"
                        name="nama"
                        value="{{ old('nama') }}"
                        placeholder="Masukkan nama lengkap"
                        autocomplete="name"
                        required>
                </div>

                <div class="field">
                    <label for="email-daftar">Alamat Email</label>
                    <input
                        type="email"
                        id="email-daftar"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="nama@email.com"
                        autocomplete="email"
                        required>
                </div>

                <div class="field">
                    <label for="hp-daftar">Nomor HP</label>
                    <input
                        type="tel"
                        id="hp-daftar"
                        name="no_hp"
                        value="{{ old('no_hp') }}"
                        placeholder="08xxxxxxxxxx"
                        autocomplete="tel"
                        required>
                </div>

                <div class="field">
                    <label for="alamat-daftar">Alamat Penjemputan</label>
                    <input
                        type="text"
                        id="alamat-daftar"
                        name="alamat"
                        value="{{ old('alamat') }}"
                        placeholder="Nama jalan dan nomor rumah"
                        autocomplete="street-address"
                        required>
                </div>

                <div class="field">
                    <label for="pw-daftar">Buat Kata Sandi</label>
                    <input
                        type="password"
                        id="pw-daftar"
                        name="password"
                        placeholder="Minimal 6 karakter"
                        autocomplete="new-password"
                        minlength="6"
                        required>
                </div>

                <div class="field">
                    <label for="pw-konfirmasi">Konfirmasi Kata Sandi</label>
                    <input
                        type="password"
                        id="pw-konfirmasi"
                        name="password_confirmation"
                        placeholder="Ulangi kata sandi"
                        autocomplete="new-password"
                        minlength="6"
                        required>
                </div>

                <button type="submit" class="btn btn-dark btn-block">
                    Buat Akun Pelanggan
                    <span aria-hidden="true">&nbsp; →</span>
                </button>

                <p class="form-note">
                    Sudah punya akun?
                    <a href="#" id="go-masuk">Masuk di sini</a>
                </p>
            </form>

            <div class="auth-bottom">
                Aman, praktis, dan mudah digunakan.
            </div>

        </div>
    </main>

</div>

<script>
    const tabMasuk = document.getElementById("tab-masuk");
    const tabDaftar = document.getElementById("tab-daftar");
    const formMasuk = document.getElementById("form-masuk");
    const formDaftar = document.getElementById("form-daftar");
    const errBox = document.getElementById("err-box");
    const formTitle = document.getElementById("form-title");
    const formDescription = document.getElementById("form-description");

    function showTab(which) {
        const isMasuk = which === "masuk";

        tabMasuk.classList.toggle("active", isMasuk);
        tabDaftar.classList.toggle("active", !isMasuk);

        formMasuk.style.display = isMasuk ? "block" : "none";
        formDaftar.style.display = isMasuk ? "none" : "block";

        formTitle.textContent = isMasuk
            ? "Selamat Datang Kembali"
            : "Buat Akun Lunora";

        formDescription.textContent = isMasuk
            ? "Masuk ke akunmu untuk melanjutkan."
            : "Daftar sekarang dan nikmati layanan laundry yang praktis.";

        // Hanya sembunyikan kotak error jika memang kosong.
        if (!errBox.textContent.trim()) {
            errBox.classList.remove("show");
        }
    }

    tabMasuk.addEventListener("click", function () {
        showTab("masuk");
    });

    tabDaftar.addEventListener("click", function () {
        showTab("daftar");
    });

    document.getElementById("go-daftar").addEventListener("click", function (e) {
        e.preventDefault();
        showTab("daftar");
    });

    document.getElementById("go-masuk").addEventListener("click", function (e) {
        e.preventDefault();
        showTab("masuk");
    });

    // Buka tab daftar jika URL memiliki ?tab=daftar.
    const params = new URLSearchParams(window.location.search);

    if (params.get("tab") === "daftar") {
        showTab("daftar");
    }

    // Pertahankan form login jika Laravel mengirimkan error login.
    @if ($errors->any())
        showTab("masuk");
    @endif
</script>

</body>
</html>

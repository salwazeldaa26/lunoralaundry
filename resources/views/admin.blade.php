
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Admin — Lunoralaundry</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        :root {
            --lunora-green: #e3efff;
            --lunora-green-light: #ffffff;
            --lunora-gold: #f5a000;
            --lunora-bg: #f3f6ff;
            --lunora-white: #ffffff;
            --lunora-border: #dce7ff;
            --lunora-text: #24468f;
            --lunora-muted: #7185ad;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--lunora-bg);
            color: var(--lunora-text);
            font-family: "Segoe UI", Arial, sans-serif;
        }

        .dash {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            inset: 0 auto 0 0;
            z-index: 10;
            display: flex;
            flex-direction: column;
            width: 245px;
            height: 100vh;
            padding: 24px 18px;
            background: #e3efff;
            color: var(--lunora-blue-dark);
            border-right: 1px solid #d4e4ff;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 10px;
            color: var(--lunora-blue-dark);
            text-decoration: none;
        }

        .logo-mark {
            width: 30px;
            height: 30px;
            flex-shrink: 0;
            color: var(--lunora-blue);
        }

        .brand-text,
        .brand-name {
            color: var(--lunora-blue-dark);
            font-size: 22px !important;
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .side-nav {
            display: flex;
            flex-direction: column;
            gap: 7px;
            margin: 60px 0 20px;
            padding: 0;
            list-style: none;
        }

        .side-nav li {
            width: 100%;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 13px;
            width: 100%;
            min-height: 46px;
            padding: 12px 14px;
            border: 0;
            border-radius: 11px;
            background: transparent;
            color: #355b9d;
            font: inherit;
            font-size: 14px;
            text-align: left;
            cursor: pointer;
            transition: all .2s ease;
        }

        .nav-item svg {
            width: 19px;
            height: 19px;
            flex-shrink: 0;
        }

        .nav-item:hover,
        .nav-item.active {
            background: #ffffff;
            color: var(--lunora-blue);
            font-weight: 700;
            box-shadow: 0 4px 12px rgba(45, 91, 170, .09);
        }

        .side-user {
            margin-top: auto;
            padding: 22px 8px 0;
            border-top: 1px solid #cbdcff;
        }

        .side-user .name {
            margin-bottom: 7px;
            color: var(--lunora-blue-dark);
            font-size: 14px;
            font-weight: 700;
            overflow-wrap: anywhere;
        }

        .side-user .role {
            margin-bottom: 17px;
            color: var(--lunora-muted);
            font-size: 13px;
        }

        .logout-link {
            padding: 0;
            border: 0;
            background: transparent;
            color: var(--lunora-blue);
            font: inherit;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
        }

        .logout-link:hover {
            color: #17449e;
        }

        /* AREA UTAMA */
        .main {
            flex: 1;
            min-width: 0;
            margin-left: 245px;
            padding: 34px 44px;
            background: var(--lunora-bg);
        }

        .main-head {
            margin-bottom: 25px;
        }

        .main-head h1 {
            margin: 0 0 9px;
            color: var(--lunora-blue-dark);
            font-size: 32px;
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -.7px;
        }

        .main-head p {
            margin: 0;
            color: var(--lunora-muted);
            font-size: 14px;
            line-height: 1.6;
        }

        /* KARTU STATISTIK */
        .stat-row {
            display: grid !important;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            width: 100%;
            margin: 0 0 28px;
        }

        .stat-card {
            min-width: 0;
            padding: 25px 22px;
            overflow: hidden;
            border: 1px solid var(--lunora-border);
            border-top: 3px solid #2dbbff;
            border-radius: 15px;
            background: #e5f6ff;
            box-shadow: 0 5px 15px rgba(45, 91, 170, .07);
        }

        .stat-card:nth-child(2) {
            border-top-color: var(--lunora-purple);
            background: #eeeeff;
        }

        .stat-card:nth-child(3) {
            border-top-color: var(--lunora-mint);
            background: #e0faf5;
        }

        .stat-card:nth-child(4) {
            border-top-color: var(--lunora-gold);
            background: #fff5d9;
        }

        .stat-card .label {
            margin-bottom: 17px;
            color: #54739f;
            font-size: 13px;
            line-height: 1.5;
        }

        .stat-card .value {
            color: var(--lunora-blue);
            font-size: 32px;
            font-weight: 800;
            line-height: 1.25;
            overflow-wrap: anywhere;
        }

        .stat-card .value.gold {
            color: var(--lunora-gold);
            font-size: clamp(20px, 2vw, 32px);
        }

        /* PANEL DAN TABEL */
        .panel {
            min-width: 0;
            margin-bottom: 24px;
            padding: 24px;
            border: 1px solid var(--lunora-border);
            border-radius: 15px;
            background: var(--lunora-white);
            box-shadow: 0 4px 14px rgba(45, 91, 170, .045);
        }

        .panel-head {
            margin-bottom: 18px;
        }

        .panel-head h3 {
            margin: 0;
            color: var(--lunora-blue-dark);
            font-size: 17px;
            font-weight: 750;
        }

        .panel table {
            width: 100%;
            border-collapse: collapse;
        }

        .panel thead {
            background: #eaf2ff;
        }

        .panel th {
            padding: 15px 14px;
            color: #315a9d;
            font-size: 11px;
            font-weight: 800;
            text-align: left;
            text-transform: uppercase;
            letter-spacing: .5px;
            white-space: nowrap;
        }

        .panel td {
            padding: 17px 14px;
            border-bottom: 1px solid #e9effa;
            color: #35547f;
            font-size: 13px;
            vertical-align: middle;
        }

        .panel tbody tr:last-child td {
            border-bottom: 0;
        }

        .panel tbody tr:hover {
            background: #f7faff;
        }

        /* INPUT DAN FORM */
        .status-select {
            max-width: 140px;
            padding: 8px 10px;
            border: 1px solid var(--lunora-border);
            border-radius: 8px;
            background: white;
            color: var(--lunora-text);
        }

        .grid-2 {
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(0, .8fr);
            gap: 22px;
            align-items: start;
        }

        .field {
            margin-bottom: 17px;
        }

        .field label {
            display: block;
            margin-bottom: 8px;
            color: var(--lunora-blue-dark);
            font-size: 13px;
            font-weight: 650;
        }

        .field input,
        .field select {
            width: 100%;
            min-height: 43px;
            padding: 11px 12px;
            border: 1px solid #dce7fb;
            border-radius: 9px;
            outline: none;
            background: white;
            color: var(--lunora-text);
            font: inherit;
            font-size: 13px;
        }

        .field input:focus,
        .field select:focus {
            border-color: var(--lunora-blue);
            box-shadow: 0 0 0 3px rgba(40, 100, 245, .10);
        }

        /* TOMBOL */
        .btn {
            cursor: pointer;
        }

        .btn-dark {
            border: 0;
            border-radius: 9px;
            background: var(--lunora-blue);
            color: white;
            font-weight: 650;
            transition: background .2s ease;
        }

        .btn-dark:hover {
            background: var(--lunora-blue-dark);
        }

        .btn-block {
            width: 100%;
            padding: 13px 16px;
        }

        .btn-danger {
            border: 0;
            border-radius: 7px;
            background: #fff0f0;
            color: #dc5050;
            cursor: pointer;
        }

        .btn-danger:hover {
            background: #ffe1e1;
        }

        .empty-state {
            padding: 25px !important;
            color: var(--lunora-muted) !important;
            text-align: center;
        }

        /* RESPONSIVE */
        @media (max-width: 1150px) {
            .main {
                padding: 28px 25px;
            }

            .stat-row {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .grid-2 {
                grid-template-columns: minmax(0, 1fr);
            }
        }

        @media (max-width: 700px) {
            .sidebar {
                width: 185px;
                padding: 18px 10px;
            }

            .main {
                margin-left: 185px;
                padding: 22px 14px;
            }

            .main-head h1 {
                font-size: 25px;
            }

            .stat-row {
                grid-template-columns: minmax(0, 1fr);
                gap: 12px;
            }

            .panel {
                padding: 15px;
                overflow-x: auto;
            }

            .side-nav {
                margin-top: 35px;
            }

            .brand-text,
            .brand-name {
                font-size: 18px !important;
            }
        }
    </style>
</head>

<body>

<div class="dash">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <a href="{{ url('/') }}" class="brand">
            <svg class="logo-mark" viewBox="0 0 48 48" fill="none"
                 stroke="currentColor" stroke-width="2.2"
                 stroke-linecap="round" stroke-linejoin="round">
                <path d="M24 8v5"/>
                <path d="M14 20c0-5.5 4.5-10 10-10s10 4.5 10 10"/>
                <path d="M8 20h32l-3 5H11l-3-5Z"/>
                <path d="M10 25l4 12h20l4-12"/>
            </svg>

            <span class="brand-text">
                <span class="brand-name">Lunora</span>
            </span>
        </a>

        <ul class="side-nav">

            <li>
                <button class="nav-item active" data-view="ringkasan">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="9" rx="1.5"/>
                        <rect x="14" y="3" width="7" height="5" rx="1.5"/>
                        <rect x="14" y="12" width="7" height="9" rx="1.5"/>
                        <rect x="3" y="16" width="7" height="5" rx="1.5"/>
                    </svg>
                    Ringkasan
                </button>
            </li>

            <li>
                <button class="nav-item" data-view="pesanan">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16v5H4zM4 15h10v5H4z"/>
                    </svg>
                    Kelola Pesanan
                </button>
            </li>

            <li>
                <button class="nav-item" data-view="layanan">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 20l7-14 7 14M7 15h8"/>
                    </svg>
                    Kelola Layanan
                </button>
            </li>

            <li>
                <button class="nav-item" data-view="pengguna">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="8" r="3.5"/>
                        <path d="M2 20c0-4 3-6 7-6s7 2 7 6M17 4c1.7.3 3 1.9 3 3.6S18.7 11 17 11.3M21 20c0-3-1.6-5-4-5.7"/>
                    </svg>
                    Kelola Pengguna
                </button>
            </li>

        </ul>

        <div class="side-user">
            <div class="name" id="side-name">
                {{ auth()->user()->nama ?? 'Admin Lunoralaundry' }}
            </div>

            <div class="role">Administrator</div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-link">Keluar</button>
            </form>
        </div>

    </aside>

    <!-- AREA UTAMA -->
    <main class="main">

        <!-- RINGKASAN -->
        <section id="view-ringkasan">

            <div class="main-head">
                <h1>Ringkasan Operasional</h1>
                <p>Pantau performa Lunoralaundry hari ini.</p>
            </div>

            <div class="stat-row">

                <div class="stat-card">
                    <div class="label">Total Pesanan</div>
                    <div class="value" id="stat-total">0</div>
                </div>

                <div class="stat-card">
                    <div class="label">Menunggu Diproses</div>
                    <div class="value" id="stat-wait">0</div>
                </div>

                <div class="stat-card">
                    <div class="label">Sedang Dikerjakan</div>
                    <div class="value" id="stat-process">0</div>
                </div>

                <div class="stat-card">
                    <div class="label">Pendapatan Total</div>
                    <div class="value gold" id="stat-income">Rp0</div>
                </div>

            </div>

            <div class="panel">

                <div class="panel-head">
                    <h3>Pesanan Terbaru</h3>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Pelanggan</th>
                            <th>Layanan</th>
                            <th>Berat</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody id="recent-body"></tbody>
                </table>

            </div>

        </section>

        <!-- KELOLA PESANAN -->
        <section id="view-pesanan" style="display:none">

            <div class="main-head">
                <h1>Kelola Pesanan</h1>
                <p>Perbarui status setiap pesanan yang masuk.</p>
            </div>

            <div class="panel">

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pelanggan</th>
                            <th>Layanan</th>
                            <th>Berat</th>
                            <th>Total</th>
                            <th>Masuk</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody id="pesanan-body"></tbody>
                </table>

            </div>

        </section>

        <!-- KELOLA LAYANAN -->
        <section id="view-layanan" style="display:none">

            <div class="main-head">
                <h1>Kelola Layanan</h1>
                <p>Atur jenis layanan dan tarif per kilogram.</p>
            </div>

            <div class="grid-2">

                <div class="panel">

                    <div class="panel-head">
                        <h3>Daftar Layanan</h3>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Harga/kg</th>
                                <th>Estimasi</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody id="layanan-body"></tbody>
                    </table>

                </div>

                <div class="panel">

                    <div class="panel-head">
                        <h3>Tambah Layanan Baru</h3>
                    </div>

                    <form id="form-layanan">

                        <div class="field">
                            <label for="l-nama">Nama Layanan</label>
                            <input type="text" id="l-nama" required placeholder="Contoh: Cuci Selimut">
                        </div>

                        <div class="field">
                            <label for="l-harga">Harga per Kg (Rp)</label>
                            <input type="number" id="l-harga" required min="1000" placeholder="10000">
                        </div>

                        <div class="field">
                            <label for="l-estimasi">Estimasi (jam)</label>
                            <input type="number" id="l-estimasi" required min="1" placeholder="12">
                        </div>

                        <div class="field">
                            <label for="l-deskripsi">Deskripsi</label>
                            <input type="text" id="l-deskripsi" required placeholder="Deskripsi singkat">
                        </div>

                        <button type="submit" class="btn btn-dark btn-block">
                            Simpan Layanan
                        </button>

                    </form>

                </div>

            </div>

        </section>

        <!-- KELOLA PENGGUNA -->
        <section id="view-pengguna" style="display:none">

            <div class="main-head">
                <h1>Kelola Pengguna</h1>
                <p>Daftar akun yang terdaftar di sistem.</p>
            </div>

            <div class="panel">

                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Peran</th>
                        </tr>
                    </thead>

                    <tbody id="pengguna-body"></tbody>
                </table>

            </div>

        </section>

    </main>

</div>

<script src="{{ asset('js/script.js') }}"></script>

<script>
    // ==========================================
    // NAVIGASI DASHBOARD
    // ==========================================

    const navItems = document.querySelectorAll(".nav-item");

    navItems.forEach(button => {
        button.addEventListener("click", () => {

            navItems.forEach(item => item.classList.remove("active"));
            button.classList.add("active");

            document.querySelectorAll("main > section").forEach(section => {
                section.style.display = "none";
            });

            const target = document.getElementById(
                "view-" + button.dataset.view
            );

            if (target) {
                target.style.display = "block";
            }
        });
    });


    // ==========================================
    // KELOLA LAYANAN DARI DATABASE
    // ==========================================

    async function loadLayanan() {

        const tbody = document.getElementById("layanan-body");

        try {

            const response = await fetch("/admin/layanan", {
                headers: {
                    "Accept": "application/json"
                }
            });

            if (!response.ok) {
                throw new Error("Gagal mengambil data layanan.");
            }

            const layanan = await response.json();

            tbody.innerHTML = layanan.map(item => `
                <tr>
                    <td>${item.nama_layanan}</td>
                    <td>${fmtRupiah(item.harga_per_kg)}</td>
                    <td>${item.estimasi_jam} jam</td>
                    <td>
                        <button
                            class="btn btn-danger"
                            data-del="${item.id_layanan}"
                            style="padding:7px 12px">
                            Hapus
                        </button>
                    </td>
                </tr>
            `).join("") ||
            '<tr><td colspan="4" class="empty-state">Belum ada layanan.</td></tr>';

            tbody.querySelectorAll("[data-del]").forEach(button => {

                button.addEventListener("click", async () => {

                    if (!confirm("Yakin ingin menghapus layanan ini?")) {
                        return;
                    }

                    try {

                        const token = document.querySelector(
                            'meta[name="csrf-token"]'
                        ).content;

                        const result = await fetch(
                            `/admin/layanan/${button.dataset.del}`,
                            {
                                method: "DELETE",
                                headers: {
                                    "Accept": "application/json",
                                    "X-CSRF-TOKEN": token
                                }
                            }
                        );

                        if (!result.ok) {
                            throw new Error("Gagal menghapus layanan.");
                        }

                        showToast("Layanan berhasil dihapus.");

                        await loadLayanan();

                    } catch (error) {
                        alert(error.message);
                    }

                });

            });

        } catch (error) {

            console.error("Kesalahan layanan:", error);

            tbody.innerHTML =
                '<tr><td colspan="4" class="empty-state">Gagal memuat layanan.</td></tr>';

        }
    }


    // ==========================================
    // DASHBOARD PESANAN DARI DATABASE LARAVEL
    // ==========================================

    async function renderAll() {

        const recentBody = document.getElementById("recent-body");
        const pesananBody = document.getElementById("pesanan-body");

        try {

            const response = await fetch("/admin/pesanan", {
                headers: {
                    "Accept": "application/json"
                }
            });

            if (!response.ok) {
                throw new Error("Gagal mengambil data pesanan.");
            }

            const pesanan = await response.json();

            // Urutkan pesanan berdasarkan tanggal terbaru
            pesanan.sort((a, b) => {
                return new Date(b.tanggal_masuk) -
                       new Date(a.tanggal_masuk);
            });


            // ==================================
            // STATISTIK DASHBOARD
            // ==================================

            document.getElementById("stat-total").textContent =
                pesanan.length;

            document.getElementById("stat-wait").textContent =
                pesanan.filter(p => p.status === "menunggu").length;

            document.getElementById("stat-process").textContent =
                pesanan.filter(p => p.status === "diproses").length;

            document.getElementById("stat-income").textContent =
                fmtRupiah(
                    pesanan.reduce((total, p) => {
                        return total + Number(p.total_harga || 0);
                    }, 0)
                );


            // ==================================
            // TABEL PESANAN TERBARU
            // ==================================

            recentBody.innerHTML = pesanan.slice(0, 5).map(p => `
                <tr>
                    <td>${p.nama_pelanggan || "-"}</td>
                    <td>${p.nama_layanan || "-"}</td>
                    <td>${p.berat_kg} kg</td>
                    <td>${fmtRupiah(p.total_harga)}</td>
                    <td>${statusBadge(p.status)}</td>
                </tr>
            `).join("") ||
            '<tr><td colspan="5" class="empty-state">Belum ada pesanan.</td></tr>';


            // ==================================
            // TABEL KELOLA PESANAN
            // ==================================

            pesananBody.innerHTML = pesanan.map(p => `
                <tr>
                    <td>#${String(p.id_pesanan).padStart(3, "0")}</td>

                    <td>${p.nama_pelanggan || "-"}</td>

                    <td>${p.nama_layanan || "-"}</td>

                    <td>${p.berat_kg} kg</td>

                    <td>${fmtRupiah(p.total_harga)}</td>

                    <td>${fmtTanggal(p.tanggal_masuk)}</td>

                    <td>
                        <select
                            class="status-select"
                            data-id="${p.id_pesanan}">

                            ${["menunggu", "diproses", "selesai", "diambil"]
                                .map(status => `
                                    <option
                                        value="${status}"
                                        ${status === p.status ? "selected" : ""}>
                                        ${status.charAt(0).toUpperCase() + status.slice(1)}
                                    </option>
                                `).join("")}

                        </select>
                    </td>
                </tr>
            `).join("") ||
            '<tr><td colspan="7" class="empty-state">Belum ada pesanan.</td></tr>';


            // ==================================
            // UPDATE STATUS PESANAN KE DATABASE
            // ==================================

            document.querySelectorAll(".status-select").forEach(select => {

                select.addEventListener("change", async () => {

                    const token = document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content;

                    const statusSebelumnya = pesanan.find(
                        p => String(p.id_pesanan) === String(select.dataset.id)
                    )?.status;

                    try {

                        const update = await fetch(
                            `/admin/pesanan/${select.dataset.id}/status`,
                            {
                                method: "PUT",

                                headers: {
                                    "Content-Type": "application/json",
                                    "Accept": "application/json",
                                    "X-CSRF-TOKEN": token
                                },

                                body: JSON.stringify({
                                    status: select.value
                                })
                            }
                        );

                        const hasil = await update.json();

                        if (!update.ok) {
                            throw new Error(
                                hasil.message || "Gagal memperbarui status."
                            );
                        }

                        showToast("Status pesanan berhasil diperbarui!");

                        await renderAll();

                    } catch (error) {

                        alert(error.message);

                        if (statusSebelumnya) {
                            select.value = statusSebelumnya;
                        }

                    }

                });

            });


            // ==================================
            // MUAT DATA LAYANAN
            // ==================================

            await loadLayanan();


            // ==================================
            // DATA PENGGUNA
            // SEMENTARA MASIH DARI SCRIPT.JS
            // ==================================

            document.getElementById("pengguna-body").innerHTML =
                DB.getUsers().map(user => `
                    <tr>
                        <td>${user.nama}</td>
                        <td>${user.email}</td>
                        <td>${user.no_hp || "-"}</td>
                        <td style="text-transform:capitalize">
                            ${user.role}
                        </td>
                    </tr>
                `).join("") ||
                '<tr><td colspan="4" class="empty-state">Belum ada pengguna.</td></tr>';

        } catch (error) {

            console.error("Kesalahan dashboard:", error);

            recentBody.innerHTML =
                '<tr><td colspan="5" class="empty-state">Gagal memuat pesanan.</td></tr>';

            pesananBody.innerHTML =
                '<tr><td colspan="7" class="empty-state">Gagal memuat pesanan.</td></tr>';

        }
    }


    // ==========================================
    // TAMBAH LAYANAN BARU
    // ==========================================

    document.getElementById("form-layanan").addEventListener("submit", async event => {

        event.preventDefault();

        const token = document.querySelector(
            'meta[name="csrf-token"]'
        ).content;

        const data = {
            nama_layanan: document.getElementById("l-nama").value.trim(),
            harga_per_kg: Number(document.getElementById("l-harga").value),
            estimasi_jam: Number(document.getElementById("l-estimasi").value),
            deskripsi: document.getElementById("l-deskripsi").value.trim()
        };

        try {

            const response = await fetch("/admin/layanan", {

                method: "POST",

                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "X-CSRF-TOKEN": token
                },

                body: JSON.stringify(data)

            });

            const hasil = await response.json();

            if (!response.ok) {
                throw new Error(
                    hasil.message || "Layanan gagal ditambahkan."
                );
            }

            event.target.reset();

            showToast("Layanan berhasil ditambahkan.");

            await loadLayanan();

        } catch (error) {

            alert(error.message);

        }

    });


    // ==========================================
    // JALANKAN DASHBOARD
    // ==========================================

    renderAll();

</script>

</body>
</html>

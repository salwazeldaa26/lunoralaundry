
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PesananController;

// ==========================================
// HALAMAN UTAMA
// ==========================================

Route::get('/', function () {
    return view('index');
});


// ==========================================
// LOGIN DAN REGISTER
// ==========================================

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register');


// ==========================================
// LOGOUT
// ==========================================

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


// ==========================================
// DASHBOARD PELANGGAN
// ==========================================

Route::get('/user', function () {
    $layanans = \App\Models\Layanan::orderBy('nama_layanan')->get();

    return view('user', compact('layanans'));
})->middleware('auth');


// ==========================================
// PESANAN PELANGGAN
// ==========================================

Route::middleware('auth')->group(function () {

    // Menyimpan pesanan pelanggan
    Route::post('/pesanan', [PesananController::class, 'store'])
        ->name('pesanan.store');

    // Mengambil riwayat pesanan pelanggan
    Route::get('/riwayat-pesanan', [PesananController::class, 'history'])
        ->name('pesanan.history');

});


// ==========================================
// DASHBOARD ADMIN
// ==========================================

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');


// ==========================================
// KELOLA LAYANAN ADMIN
// ==========================================

Route::middleware('auth')
    ->prefix('admin/layanan')
    ->name('admin.layanan.')
    ->group(function () {

        // Menampilkan layanan
        Route::get('/', [LayananController::class, 'index'])
            ->name('index');

        // Menambahkan layanan
        Route::post('/', [LayananController::class, 'store'])
            ->name('store');

        // Melihat detail layanan
        Route::get('/{id}', [LayananController::class, 'show'])
            ->name('show');

        // Memperbarui layanan
        Route::put('/{id}', [LayananController::class, 'update'])
            ->name('update');

        // Menghapus layanan
        Route::delete('/{id}', [LayananController::class, 'destroy'])
            ->name('destroy');

    });


// ==========================================
// KELOLA PESANAN ADMIN
// ==========================================

Route::middleware('auth')->group(function () {

    // Mengambil semua pesanan dari database
    Route::get('/admin/pesanan', [PesananController::class, 'adminIndex'])
        ->name('admin.pesanan.index');

    // Memperbarui status pesanan
    Route::put('/admin/pesanan/{id}/status', [PesananController::class, 'updateStatus'])
        ->name('admin.pesanan.updateStatus');

});

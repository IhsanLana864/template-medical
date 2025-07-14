<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ManajerialController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda bisa mendaftarkan rute web untuk aplikasi Anda.
|
*/
// Halaman utama
Route::view('/', 'index')->name('beranda');

// Halaman lainnya
Route::view('/layanan', 'layanan')->name('layanan');
Route::view('/kegiatan', 'kegiatan')->name('kegiatan');
Route::view('/berita', 'berita')->name('berita');
Route::view('/e-survey', 'e-survey')->name('e-survey');

// Rute untuk Halaman Profil (dikelompokkan)
Route::prefix('profil')->name('profil.')->group(function () {
    Route::view('/tentang-kami', 'profil.tentang-kami')->name('tentang-kami');
    Route::view('/manajemen', 'profil.manajemen')->name('manajemen');
    Route::view('/dokter', 'profil.dokter')->name('dokter');
});

// Rute untuk Halaman Dashboard Pengguna yang sudah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute untuk mengelola profil pengguna yang sedang login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute untuk Panel Admin (dikelompokkan dan dilindungi middleware)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    // Rute yang bisa diakses oleh Admin & Super Admin
    Route::middleware('is_admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::resource('dokter', DokterController::class);
        Route::resource('manajerial', ManajerialController::class);
        Route::resource('layanan', LayananController::class);
        Route::resource('kegiatan', KegiatanController::class);
        Route::resource('facilitie', FasilitasController::class);
        Route::resource('partner', FasilitasController::class); // Pertimbangkan untuk controller terpisah
    });

    // Rute yang HANYA bisa diakses oleh Super Admin
    Route::middleware('super_admin')->group(function () {
        Route::resource('akun', SuperAdminController::class);
    });
});


// Memuat rute untuk otentikasi (login, register, dll.)
require __DIR__ . '/auth.php';

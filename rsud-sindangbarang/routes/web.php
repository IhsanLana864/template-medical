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


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ADMIN ROUTE
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('dokter', DokterController::class);
    Route::resource('manajerial', ManajerialController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('facilitie', FasilitasController::class);
    Route::resource('partner', FasilitasController::class);
});

Route::middleware(['auth', 'super_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('akun', SuperAdminController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/e-survey', function () {
//     return view('e-survey');
// });

// Route::get('/tes', function () {
//     return view('tes');
// });

// Route::get('/admin', function () {
//     return view('admin.index');
// });
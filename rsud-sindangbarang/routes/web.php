<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ManajerialController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\FasilitasController;

Route::get('/', function () {
    return view('index');
});

Route::get('/e-survey', function () {
    return view('e-survey');
});

Route::get('/tes', function () {
    return view('tes');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('dokter', DokterController::class);
    Route::resource('manajerial', ManajerialController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('fasilitas', FasilitasController::class);
});
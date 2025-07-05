<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;

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

// ADMIN
Route::resource('dokters', DokterController::class);
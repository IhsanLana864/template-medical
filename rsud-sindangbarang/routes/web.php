<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/e-survey', function () {
    return view('e-survey');
});

Route::get('/tes', function () {
    return view('tes');
});

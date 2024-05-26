<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('Home', ['title' => 'Laporan']);
});

Route::get('/link', function () {
    return view('peminjaman', ['title' => 'Peminjaman']);
});

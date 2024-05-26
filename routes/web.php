<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/daftarbuku');
});

Route::get('/daftarbuku', function () {
    return view('Home', ['title' => 'Laporan']);
});

Route::get('/peminjaman', function () {
    return view('peminjaman', ['title' => 'Peminjaman']);
});

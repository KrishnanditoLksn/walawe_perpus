<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PerpustakaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/daftarbuku');
});

Route::get('/peminjaman', function () {
    return view('peminjaman', ['title' => 'Peminjaman']);
});

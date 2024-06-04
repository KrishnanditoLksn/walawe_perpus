<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PerpustakaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/daftarbuku');
});


Route::get('/peminjaman', function () {
    return view('peminjaman', ['title' => 'PeminjamanKontroller']);
});
Route::post('/peminjaman', function () {
    return view('peminjaman', ['title' => 'PeminjamanKontroller']);
});


Route::post("tambah-buku",[BookController::class,'store']);
Route::get('/daftarbuku',[PerpustakaanController::class,'show']);

<?php

use App\Http\Controllers\CategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/daftarbuku');
});


Route::get('/peminjaman', function () {
    return view('peminjaman', ['title' => 'Peminjaman']);
});
Route::post('/peminjaman', function () {
    return view('peminjaman', ['title' => 'Peminjaman']);
})->name('log');

Route::get('/daftarbuku', [CategoriController::class, 'show']);
Route::post('/daftarbuku', [CategoriController::class, 'show']);

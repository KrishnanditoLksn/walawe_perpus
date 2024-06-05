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
<<<<<<< HEAD
})->name('log');
=======
});
Route::get('/login', function () {
    return view('login', ['title' => 'login ']);// login adalah nama file blade untuk halaman login, sesuaikan dengan nama file Anda
});
Route::post('/login', function () {
    return view('login', ['title' => 'login ']);// login adalah nama file blade untuk halaman login, sesuaikan dengan nama file Anda
});

>>>>>>> 94a118fa0bcc821340be2193dbe18f4a27ac61f5

Route::get('/daftarbuku', [CategoriController::class, 'show']);
Route::post('/daftarbuku', [CategoriController::class, 'show']);
//Route::get('/login', [CategoriController::class, 'show']);
//Route::post('/login', [CategoriController::class, 'show']);


<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\PeminjamanKontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/peminjaman', function () {
    $peminjamanController = new PeminjamanKontroller();
    $peminjamanData = $peminjamanController->show();

    // Ambil data dari PerpustakaanController
    $perpustakaanController = new PerpustakaanController();
    $perpustakaanData = $perpustakaanController->show();

    // Gabungkan data dari kedua controller
    $data = array_merge($peminjamanData, $perpustakaanData);

    // Kembalikan view dengan data gabungan
    return view('peminjaman', $data);
});
Route::get('/daftarbuku', function () {
    $perpustakaanController = new PerpustakaanController();
    $data = $perpustakaanController->show(); // Ambil data dari metode show di PerpustakaanController

    return view('Home', $data);
});
Route::post('/peminjaman', [PeminjamanKontroller::class, 'store'])->name('pinjam');
Route::get('/login', function () {
    return view('login', ['title' => 'login ']); // login adalah nama file blade untuk halaman login, sesuaikan dengan nama file Anda
});
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/register', function () {
    return view('register', ['title' => 'register']);
});
Route::post('/register', [AdminController::class, 'register'])->name('reg');
Route::get('/update', function () {
    return view('update', ['title' => 'update']);
});
Route::put('/update/{id}', [BookController::class, 'update'])->name('update'); // Perubahan di sini
Route::get('/delete/{id}', [BookController::class, 'delete'])->name('delete');
Route::post('/daftarbuku', [PerpustakaanController::class, 'show']);

Route::post('/daftarbuku', [BookController::class, 'store'])->name('log');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
Route::post('/register', [AdminController::class, 'register'])->name('reg');
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');

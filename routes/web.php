<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PerpustakaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/peminjaman', function () {
    return view('peminjaman', ['title' => 'Peminjaman']);
});
Route::post('/peminjaman', function () {
    return view('peminjaman', ['title' => 'Peminjaman']);
});
Route::get('/login', function () {
    return view('login', ['title' => 'login ']); // login adalah nama file blade untuk halaman login, sesuaikan dengan nama file Anda
});
Route::post('/login', function () {
    return view('login', ['title' => 'login ']); // login adalah nama file blade untuk halaman login, sesuaikan dengan nama file Anda
});
Route::get('/register', function () {
    return view('register', ['title' => 'register']);
});
Route::post('/register', function () {
    return view('register', ['title' => 'register']);
});
Route::get('/update', function () {
    return view('update', ['title' => 'update']);
});
Route::put('/update/{id}', [BookController::class, 'update'])->name('update'); // Perubahan di sini
Route::get('/delete/{id}', [BookController::class, 'delete'])->name('delete');
Route::get('/daftarbuku', [PerpustakaanController::class, 'show']);
Route::post('/daftarbuku', [PerpustakaanController::class, 'show']);

Route::post('/daftarbuku', [BookController::class, 'store'])->name('log');
Route::post('/logout', function () {
    return redirect('/login');
})->name('logout');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');

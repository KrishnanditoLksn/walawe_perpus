<?php

use App\Http\Controllers\AdminController;
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
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/register', function () {
    return view('register', ['title' => 'register']);
});
Route::post('/register', [AdminController::class, 'register'])->name('reg');
Route::get('/update', function () {
    return view('update', ['title' => 'update']);
});
Route::post('/update', [BookController::class, 'update'])->name('update');
Route::get('/delete/{id}', [BookController::class, 'delete'])->name('delete');
Route::get('/daftarbuku', [PerpustakaanController::class, 'show']);
Route::post('/daftarbuku', [PerpustakaanController::class, 'show']);

Route::post('/daftarbuku', [BookController::class, 'store'])->name('log');
Route::post('/logout', function () {
    return redirect('/login');
})->name('logout');
//
Route::post('/register', [AdminController::class, 'register'])->name('reg');
Route::post('/login', [AdminController::class, 'login'])->name('login');

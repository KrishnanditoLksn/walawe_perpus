<?php

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
})->name('log');
Route::get('/login', function () {
    return view('login', ['title' => 'login ']);// login adalah nama file blade untuk halaman login, sesuaikan dengan nama file Anda
});
Route::post('/login', function () {
    return view('login', ['title' => 'login ']);// login adalah nama file blade untuk halaman login, sesuaikan dengan nama file Anda
});
Route::get('/register',function(){
    return view('register',['title'=>'register']);
});
Route::post('/register',function(){
    return view('register',['title'=>'register']);
});
Route::get('/daftarbuku', [PerpustakaanController::class, 'show']);
Route::post('/daftarbuku', [PerpustakaanController::class, 'show']);

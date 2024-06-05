<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home' , ['title'=>'Home']);
});
Route::get('/peminjaman', function () {
    return view('peminjaman', ['title' => 'Peminjaman']);
});
Route::get('/daftarbuku' , function(){
    return view('Home' , ['title'=>'Daftar buku']);
});

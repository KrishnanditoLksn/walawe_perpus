<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoriController extends Controller
{

    public function show(): View
    {
        return view('Home', ['title' => 'Laporan', 'posts' => Kategori::all()]);
    }
}

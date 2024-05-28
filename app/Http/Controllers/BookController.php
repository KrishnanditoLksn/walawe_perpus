<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'nama_penulis' => 'required|max:255',
            'isbn' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'tahun_terbit' => 'required'
        ]);
        $datas = $request->all();
        $book = new Book;
        $book->judul = $datas['judul'];

        return redirect('');
    }

    public function update(Request $request, $id)
    {

    }

    public function delete(Request $request, $id)
    {

    }

    public function show(): View
    {
        return view('');
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PeminjamanKontroller extends Controller
{

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama-peminjam' => 'required',
            'no-telpon-peminjam' => 'required',
            'email' => 'required',
            'judul-buku' => 'required',
            'tanggal-peminjam' => 'required'
        ]);

        $peminjam = new Peminjaman;
        $datas = $request->all();

        $peminjam->nama_peminjam = $datas['nama-peminjam'];
        $peminjam->no_telp_peminjam = $datas['no-telpon-peminjam'];
        $peminjam->email_peminjam = $datas['email'];
        $peminjam->tanggal_dipinjam = $datas[''];
        $peminjam->tanggal_dikembalikan = Carbon::now()->addDays(30);
        return redirect('/');
    }

    public function show(): RedirectResponse
    {
        return redirect('');
    }

    public function delete()
    {

    }

    public function update()
    {

    }
}

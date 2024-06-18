<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function store(Request $request)
    {

    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $admin = Admin::find($id);
        if ($admin) {
            $admin->name = $request->input('name');
            $admin->save();
            return redirect('/admin')->with('status', 'Nama admin berhasil di ubah!');
        } else {
            return redirect('/admin')->with('error', 'Admin tidak ditemukan!');
        }
    }

    public function login()
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            
            return redirect()->intended('/admin/dashboard')->with('Status', 'Login berhasil!');
        } else {
            return redirect('/login')->with('Error', 'Login gagal, silakan periksa kembali username dan password Anda.');
        }

    }

    public function delete()
    {
        $admin = Admin::find($id);

        if ($admin) {
            $admin->delete();
            return redirect('/admin')->with('Status', 'Admin berhasil dihapus!');
        } else {
            return redirect('/admin')->with('Error', 'Admin tidak ditemukan!');
        }

    }

    public function destroy()
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('status', 'Logout berhasil!');

    }
}

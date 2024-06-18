<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:admins,username',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $admin = new Admin();
        $admin->username = $request->input('username');
        $admin->password = Hash::make($request->input('password'));
        $admin->save();

        return redirect('/admin')->with('status', 'Admin baru berhasil ditambahkan!');
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

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'username' => 'required|string|max:255',
                'password' => 'required|string|min:6',
            ]);

            $credentials = $request->only('username', 'password');

            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect('/admin')->with('status', 'Login berhasil!');
            } else {
                return redirect('/login')->with('error', 'Username atau password salah!');
            }
        }

        return view('auth.login');
    }

    public function delete(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'confirm' => 'required|in:yes'
        ]);

        $admin = Admin::find($id);
        if ($admin) {
            $admin->delete();
            return redirect('/admin')->with('status', 'Admin berhasil dihapus!');
        } else {
            return redirect('/admin')->with('error', 'Admin tidak ditemukan!');
        }
    }

    public function destroy(): RedirectResponse
    {
        Auth::logout(); // Logout admin
        return redirect('/login')->with('status', 'Anda telah logout!');
    }
}

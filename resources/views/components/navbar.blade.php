<!-- navbar.blade.php -->

<!-- Cek apakah pengguna sudah login menggunakan Auth::check() -->
@if (Auth::check())
    @php
        // Mengambil data pengguna yang sedang login
        $user = Auth::user();
    @endphp

    <!-- Offcanvas Navbar -->
    <div class="body d-flex flex-column align-items-center body-nav">
        <div class="profil-img">
            <!-- Menampilkan gambar profil pengguna atau gambar default jika tidak ada gambar profil -->
            <img src="{{ $user->profile_image ?? 'img/default_user.jpeg' }}" alt="" style="width: 50px; height: 50px; margin-top: 10px;" class="rounded-circle">
        </div>
        <div class="profil-status">
            <!-- Menampilkan nama pengguna yang login -->
            <h6 class="name fs-6 ">{{ $user->name }}</h6>
        </div>
        <ul class="navbar-nav mt-5">
            <li class="nav-item">
                <!-- Link ke halaman daftar buku -->
                <a class="nav-link active" aria-current="page" href="/daftarbuku">Daftar Buku</a>
            </li>
            <li class="nav-item">
                <!-- Link ke halaman peminjaman -->
                <a class="nav-link" href="/peminjaman">Peminjaman</a>
            </li>
        </ul>
    </div>
    <div class="mobile-nav">
        <!-- Tombol untuk membuka offcanvas menu -->
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="width: 1cm; height: 1cm; justify-content: center; display: flex; align-items: center; background-color: #6477DB; margin-top: -40px">
            <img src="../img/hamburger_menu.png" alt="" style="width: 60px; height: 60px;">
        </button>
        <!-- Offcanvas Menu -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 4cm">
            <div class="offcanvas-header">
                <!-- Tombol untuk menutup offcanvas menu -->
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="profil-img">
                    <!-- Menampilkan gambar profil pengguna atau gambar default jika tidak ada gambar profil -->
                    <img src="{{ $user->profile_image ?? 'img/default_user.jpeg' }}" alt="" style="width: 50px; height: 50px; margin-top: 10px;" class="rounded-circle">
                </div>
                <div class="profil-status">
                    <!-- Menampilkan nama pengguna yang login -->
                    <h6 class="name fs-6 ">{{ $user->name }}</h6>
                </div>
                <ul class="navbar-nav mt-5">
                    <li class="nav-item">
                        <!-- Link ke halaman daftar buku -->
                        <a class="nav-link active" aria-current="page" href="/daftarbuku">Daftar Buku</a>
                    </li>
                    <li class="nav-item">
                        <!-- Link ke halaman peminjaman -->
                        <a class="nav-link" href="/peminjaman">Peminjaman</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@else
    <!-- Menampilkan pesan jika pengguna belum login -->
    <p>Please <a href="{{ route('login') }}">login</a> to access this content.</p>
@endif

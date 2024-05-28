<x-layout>
    @push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @endpush
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="conten-main">
        <form action="" method="post">
            <div class="input">
                <div class="row g-3 justify-content-center">
                    <div class="col-lg-1 container-input">
                        <input type="text" class="form-control" placeholder="Nama" style="height: 37px;" name="nama-peminjam">
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" placeholder="Telpon" style="height: 37px;" name="no-telpon-peminjam">
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" placeholder="Email" style="height: 37px;" name="email">
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" placeholder="Judul Buku" style="height: 37px;" name="judul-buku">
                    </div>
                    <div class="col-lg-2">
                        <input type="date" class="form-control" id="date"  name="tanggal-peminjam">
                    </div>
                    <div class="col-lg-2">
                        <div class="sub">
                            <button type="submit" class="btn btn-primary" style="height: 37px; padding: 0 10px; font-size: 10px; line-height: 20px;" name="btn-submit">submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="table-responsive mt-5 ms-3 me-3">
            <table class="table">
                <thead class="border">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Id Peminjaman</th>
                      <th scope="col">Nama Perminjam</th>
                      <th scope="col">Telpon</th>
                      <th scope="col">Email</th>
                      <th scope="col">tanggal dipijam</th>
                      <th scope="col">Tanggal pengembalian</th>
                      <th scope="col">Judul Buku</th>
                    </tr>
                  </thead>
            </table>
        </div>
    </div>
</x-layout>
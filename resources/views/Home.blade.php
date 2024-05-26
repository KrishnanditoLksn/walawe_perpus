<x-layout>
    @push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @endpush
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="conten-main">
        @csrf
        <form action="" method="post">
            <div class="input">
                <div class="row g-3 justify-content-center">
                    <div class="col-lg-1 container-input">
                        <input type="text" class="form-control" placeholder="Judul" style="height: 37px;">
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" placeholder="ISBN" style="height: 37px;">
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" placeholder="Penulis" style="height: 37px;">
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control" placeholder="Tahun Terbit" style="height: 37px;">
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control" placeholder="Publisher" style="height: 37px;">
                    </div>
                    <div class="col-lg-2">
                        <select class="form-select" id="autoSizingSelect" style="height: 37px;">
                            <option selected >Kategori</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <div class="sub">
                            <button type="submit" class="btn btn-primary" style="height: 20px; padding: 0 10px; font-size: 10px; line-height: 20px;">Submit</button>
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
                      <th scope="col">Id Buku</th>
                      <th scope="col">Judul Buku</th>
                      <th scope="col">No ISBN</th>
                      <th scope="col">Penulis</th>
                      <th scope="col">Publisher</th>
                      <th scope="col">Tahun Terbit</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Edit</th>
                    </tr>
                  </thead>
            </table>
        </div>
    </div>
</x-layout>
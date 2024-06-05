<x-layout>
    @push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @endpush
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="conten-main">
        <form id="form-home" action="" method="post">
            @csrf
            <div class="input">
                <div class="row g-3 justify-content-center">
                    <div class="col-lg-1 container-input">
                        <input type="text" class="form-control" placeholder="Judul" style="height: 37px;" name="judul">
                    </div>
                    <div class="col-lg-1 container-input">
                        <input type="text" class="form-control" placeholder="ISBN" style="height: 37px;" name="isbn">
                    </div>
                    <div class="col-lg-1 container-input">
                        <input type="text" class="form-control" placeholder="Penulis" style="height: 37px;" name="penulis">
                    </div>
                    <div class="col-lg-2 container-input">
                        <input type="text" class="form-control" placeholder="Tahun Terbit" style="height: 37px;" name="tahunTerbit">
                    </div>
                    <div class="col-lg-2 container-input">
                        <input type="text" class="form-control" placeholder="Publisher" style="height: 37px;" name="publisher">
                    </div>
                    <div class="col-lg-2 container-input">
                        <select class="form-select" id="autoSizingSelect" style="height: 37px;" name="kategori">
                            <option value="kategori" selected >kategori</option>
                            @foreach ($posts as $item)
                            <option value = {{$item->id}}>{{$item->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2 container-input">
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
                  <tbody>
                    <div class="isi-table">
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                        </tr>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                        </tr>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                        </tr>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                        </tr>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                        </tr>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                        </tr>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                            <td>Data 1</td>
                            <td>Data 2</td>
                            <td>Data 3</td>
                        </tr>
                    </div>
                  </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
    @endpush
</x-layout>

<x-layout>
    @push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Add Font Awesome CSS -->
    @endpush
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="conten-main">
        <form id="form-home" action="{{ route('log') }}" method="post">
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
                            <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
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
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($books as $item)
                        @php
                            $no++;
                        @endphp
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->isbn }}</td>
                            <td>{{ $item->nama_penulis }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->tahun_terbit }}</td>
                            <td>{{ $item->nama_kategori }}</td>
                            <td>
                            <button class="btn btn-secondary" onclick="openEditModal({{ $item->id }}, '{{ addslashes($item->judul) }}', '{{ addslashes($item->isbn) }}', '{{ addslashes($item->nama_penulis) }}', '{{ addslashes($item->penerbit) }}', '{{ $item->tahun_terbit }}', '{{ isset($item->kategori_id) ? $item->kategori_id : '' }}')">
                            <i class="fas fa-edit"></i>
                            </button>
                                <form action="{{ route('delete', ['id' => $item->id]) }} method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="editModal" style="display:none;position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.4);">">
        <div style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 80%;">
            <span onclick="closeEditModal()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
            <form id="form-edit" action="{{ route('update', ['id' => $item->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" id="edit-id">
    <div class="mb-3">
        <label for="edit-judul" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="edit-judul" name="judul">
    </div>
    <div class="mb-3">
        <label for="edit-isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" id="edit-isbn" name="isbn">
    </div>
    <div class="mb-3">
        <label for="edit-penulis" class="form-label">Penulis</label>
        <input type="text" class="form-control" id="edit-penulis" name="penulis">
    </div>
    <div class="mb-3">
        <label for="edit-penerbit" class="form-label">Publisher</label>
        <input type="text" class="form-control" id="edit-penerbit" name="publisher">
    </div>
    <div class="mb-3">
        <label for="edit-tahunTerbit" class="form-label">Tahun Terbit</label>
        <input type="text" class="form-control" id="edit-tahunTerbit" name="tahunTerbit">
    </div>
    <div class="mb-3">
        <label for="edit-kategori" class="form-label">Kategori</label>
        <select class="form-select" id="edit-kategori" name="kategori">
            @foreach ($posts as $item)
                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save changes</button>
</form>

        </div>
    </div>

    <!-- Pada bagian bottom dari file blade -->
    @push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
    <script>
        function openEditModal(id, judul, isbn, penulis, penerbit, tahunTerbit, kategoriId) {
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-judul').value = judul;
            document.getElementById('edit-isbn').value = isbn;
            document.getElementById('edit-penulis').value = penulis;
            document.getElementById('edit-penerbit').value = penerbit;
            document.getElementById('edit-tahunTerbit').value = tahunTerbit;
            document.getElementById('edit-kategori').value = kategoriId;
            document.getElementById('editModal').style.display = 'block';
        }

        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none';
        }
    </script>
    @endpush
</x-layout>

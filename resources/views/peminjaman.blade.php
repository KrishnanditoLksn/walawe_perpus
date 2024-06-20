<x-layout>
    @push('styles')
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @endpush
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="conten-main">
        <form id="form-pinjam" action="{{ route('pinjam') }}" method="post">
            @csrf
            <div class="input">
                <div class="row g-3 justify-content-center">
                    <div class="col-lg-1 container-input">
                        <input type="text" class="form-control" placeholder="Nama" style="height: 37px;"
                            name="nama-peminjam">
                    </div>
                    <div class="col-lg-1 container-input">
                        <input type="text" class="form-control" placeholder="Telpon" style="height: 37px;"
                            name="no-telpon-peminjam">
                    </div>
                    <div class="col-lg-1 container-input">
                        <input type="email" class="form-control" placeholder="Email" style="height: 37px;"
                            name="email">
                    </div>
                    <div class="col-lg-2 container-input">
                        <select class="form-select" id="autoSizingSelect" style="height: 37px;" name="Judul">
                            <option value="kategori" selected>Judul</option>
                            @foreach ($books as $item)
                                <option value="{{ $item->id }}">{{ $item->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2 container-input">
                        <input type="date" class="form-control" id="date" name="tanggal-peminjam">
                    </div>
                    <div class="col-lg-2 container-input">
                        <div class="sub">
                            <button type="submit" class="btn btn-primary"
                                style="height: 37px; padding: 0 10px; font-size: 10px; line-height: 20px;"
                                name="btn-submit">submit</button>
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
                        <th scope="col">status</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($table as $item)
                        @php
                            $no++;
                        @endphp
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_peminjam }}</td>
                            <td>{{ $item->no_telp_peminjam }}</td>
                            <td>{{ $item->email_peminjam }}</td>
                            <td>{{ $item->tanggal_dipinjam }}</td>
                            <td>{{ $item->tanggal_dikembalikan }}</td>
                            <td>book</td>
                            <td>{{ $item->status_peminjaman }}<< /td>
                            <td>
                                <button class="btn btn-secondary"
                                    onclick="openEditModal({{ $item->id }}, '{{ addslashes($item->judul) }}', '{{ addslashes($item->isbn) }}', '{{ addslashes($item->nama_penulis) }}', '{{ addslashes($item->penerbit) }}', '{{ $item->tahun_terbit }}', '{{ isset($item->kategori_id) ? $item->kategori_id : '' }}')">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form action="{{ route('delete', ['id' => $item->id]) }} method="POST"
                                    style="display:inline;">
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
        @push('scripts')
            <script src="{{ asset('js/peminjaman.js') }}"></script>
        @endpush
</x-layout>

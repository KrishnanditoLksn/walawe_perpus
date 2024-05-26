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
                        <input type="text" class="form-control" placeholder="Nama" style="height: 37px;">
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" placeholder="Telpon" style="height: 37px;">
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" placeholder="Email" style="height: 37px;">
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control" placeholder="Tanggal dipinjam" style="height: 37px;">
                    </div>
                    <div class="col-lg-2">
                        <div class="sub">
                            <button type="submit" class="btn btn-primary" style="height: 20px; padding: 0 10px; font-size: 10px; line-height: 20px;">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>
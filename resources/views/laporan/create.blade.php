@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-9 col-lg-8">
        <div class="mb-4">
            <div class="page-kicker mb-2">Formulir laporan</div>
            <h1 class="h2 fw-bold mb-2">Laporkan kejadian banjir</h1>
            <p class="text-secondary mb-0">Isi informasi kejadian sesuai kondisi yang Anda lihat.</p>
        </div>

        <div class="card">
            <div class="card-body p-4 p-md-5">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>Periksa kembali data yang diisi.</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('laporan.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama_pelapor" class="form-label">Nama pelapor</label>
                        <input id="nama_pelapor" type="text" name="nama_pelapor" class="form-control" placeholder="Nama Anda" value="{{ old('nama_pelapor') }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="lokasi" class="form-label">Kecamatan</label>
                        <select id="lokasi" name="lokasi" class="form-select" required>
                            <option value="">Pilih kecamatan</option>
                            <option value="Dayeuhkolot" @selected(old('lokasi') === 'Dayeuhkolot')>Dayeuhkolot</option>
                            <option value="Baleendah" @selected(old('lokasi') === 'Baleendah')>Baleendah</option>
                            <option value="Bojongsoang" @selected(old('lokasi') === 'Bojongsoang')>Bojongsoang</option>
                            <option value="Rancaekek" @selected(old('lokasi') === 'Rancaekek')>Rancaekek</option>
                            <option value="Majalaya" @selected(old('lokasi') === 'Majalaya')>Majalaya</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label for="tinggi_genangan" class="form-label">Tinggi genangan</label>
                            <div class="input-group">
                                <input id="tinggi_genangan" type="number" name="tinggi_genangan" class="form-control" placeholder="Contoh: 50" value="{{ old('tinggi_genangan') }}" min="1" required>
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="tanggal_kejadian" class="form-label">Tanggal kejadian</label>
                            <input id="tanggal_kejadian" type="date" name="tanggal_kejadian" class="form-control" value="{{ old('tanggal_kejadian') }}" required>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-end gap-2 border-top pt-4" style="border-color: var(--line) !important">
                        <a href="{{ route('laporan.index') }}" class="btn btn-outline-secondary px-4">Lihat laporan</a>
                        <button type="submit" class="btn btn-primary px-4">Kirim laporan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

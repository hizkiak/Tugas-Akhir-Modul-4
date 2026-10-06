@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <x-alert />

        <div class="card shadow-sm">

            <div class="card-body p-4">

                <h2 class="fw-bold mb-2">
                    🌊 Laporkan Kejadian Banjir
                </h2>

                <p class="text-muted mb-4">
                    Silakan isi data kejadian banjir yang terjadi.
                </p>

                <form action="{{ route('laporan.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">
                            Nama Pelapor
                        </label>

                        <input type="text"
                               name="nama_pelapor"
                               class="form-control"
                               placeholder="Masukkan nama Anda"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Lokasi Kejadian
                        </label>

                        <select name="lokasi"
                                class="form-select"
                                required>

                            <option value="">-- Pilih Kecamatan --</option>

                            <option value="Dayeuhkolot">
                                Dayeuhkolot
                            </option>

                            <option value="Baleendah">
                                Baleendah
                            </option>

                            <option value="Bojongsoang">
                                Bojongsoang
                            </option>

                            <option value="Rancaekek">
                                Rancaekek
                            </option>

                            <option value="Majalaya">
                                Majalaya
                            </option>

                        </select>
                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Tinggi Genangan
                        </label>

                        <div class="input-group">

                            <input type="number"
                                   name="tinggi_genangan"
                                   class="form-control"
                                   placeholder="Contoh: 50"
                                   min="1"
                                   required>

                            <span class="input-group-text">
                                cm
                            </span>

                        </div>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Tanggal Kejadian
                        </label>

                        <input type="date"
                               name="tanggal_kejadian"
                               class="form-control"
                               required>

                    </div>

                    <button type="submit"
                            class="btn btn-primary w-100">

                        Kirim Laporan

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
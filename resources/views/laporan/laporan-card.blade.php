@php
    if ($laporan->tinggi_genangan < 50) {
        $status = 'Waspada';
        $warna = 'success';
    } elseif ($laporan->tinggi_genangan <= 100) {
        $status = 'Siaga';
        $warna = 'warning';
    } else {
        $status = 'Awas';
        $warna = 'danger';
    }
@endphp

<div class="col-md-6 col-lg-4 mb-4">

    <div class="card shadow-sm h-100">

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-start">

                <h5 class="fw-bold">
                    {{ $laporan->lokasi }}
                </h5>

                <span class="badge bg-{{ $warna }}">
                    {{ $status }}
                </span>

            </div>

            <hr>

            <p class="mb-2">
                👤 <strong>Pelapor:</strong>
                {{ $laporan->nama_pelapor }}
            </p>

            <p class="mb-2">
                📏 <strong>Tinggi:</strong>
                {{ $laporan->tinggi_genangan }} cm
            </p>

            <p class="mb-0 text-muted">
                📅
                {{ \Carbon\Carbon::parse($laporan->tanggal_kejadian)->format('d-m-Y') }}
            </p>

        </div>

    </div>

</div>
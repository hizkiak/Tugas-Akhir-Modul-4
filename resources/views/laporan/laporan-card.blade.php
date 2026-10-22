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

<div class="col-md-6 col-lg-4">
    <article class="card report-card level-{{ $warna }} h-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-start gap-2 mb-3">
                <div>
                    <div class="small text-secondary mb-1">Lokasi kejadian</div>
                    <h3 class="h5 fw-bold mb-0">{{ $laporan->lokasi }}</h3>
                </div>
                <span class="badge text-bg-{{ $warna }} rounded-1 px-2 py-2">{{ $status }}</span>
            </div>
            <div class="d-flex justify-content-between border-top py-2 small" style="border-color: var(--line) !important">
                <span class="text-secondary">Tinggi genangan</span>
                <strong>{{ $laporan->tinggi_genangan }} cm</strong>
            </div>
            <div class="d-flex justify-content-between border-top py-2 small" style="border-color: var(--line) !important">
                <span class="text-secondary">Tanggal kejadian</span>
                <strong>{{ \Carbon\Carbon::parse($laporan->tanggal_kejadian)->format('d M Y') }}</strong>
            </div>
            <div class="small text-secondary pt-2">Dilaporkan oleh {{ $laporan->nama_pelapor }}</div>
        </div>
    </article>
</div>

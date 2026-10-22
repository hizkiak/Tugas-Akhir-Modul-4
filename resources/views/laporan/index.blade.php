@extends('layouts.app')

@section('content')
@php
    $laporanAwas = $laporan->filter(fn ($item) => $item->tinggi_genangan > 100)->count();
    $jumlahKecamatan = $laporan->pluck('lokasi')->unique()->count();
@endphp

<section class="report-banner p-4 p-md-5 mb-4">
    <div class="row align-items-end position-relative" style="z-index: 1">
        <div class="col-lg-8">
            <div class="text-uppercase small fw-bold mb-3" style="color: #f0c36b; letter-spacing: .14em">Pusat informasi warga</div>
            <h1 class="display-6 fw-bold mb-2">Pantau laporan banjir</h1>
            <p class="mb-0 text-white-50">Informasi genangan yang masuk dari wilayah Kabupaten Bandung.</p>
        </div>
        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
            <a href="{{ route('laporan.create') }}" class="btn btn-light px-4">+ Buat laporan</a>
        </div>
    </div>
</section>

<div class="row g-3 mb-5">
    <div class="col-6 col-lg-4">
        <div class="stat-box">
            <span class="stat-number">{{ $laporan->count() }}</span>
            <span class="small text-secondary">Laporan tercatat</span>
        </div>
    </div>
    <div class="col-6 col-lg-4">
        <div class="stat-box" style="border-top-color: #c94b43">
            <span class="stat-number">{{ $laporanAwas }}</span>
            <span class="small text-secondary">Genangan di atas 100 cm</span>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="stat-box" style="border-top-color: var(--amber)">
            <span class="stat-number">{{ $jumlahKecamatan }}</span>
            <span class="small text-secondary">Kecamatan terlapor</span>
        </div>
    </div>
</div>

<div class="d-flex align-items-end justify-content-between mb-3">
    <div>
        <div class="page-kicker mb-1">Pembaruan lapangan</div>
        <h2 class="h4 fw-bold mb-0">Daftar laporan</h2>
    </div>
    <span class="small text-secondary">{{ $laporan->count() }} data</span>
</div>

@if($laporan->count() > 0)
    <div class="row g-3">
        @foreach($laporan as $data)
            @include('laporan.laporan-card', ['laporan' => $data])
        @endforeach
    </div>
@else
    <div class="card p-4 p-md-5">
        <div class="page-kicker mb-2">Belum ada pembaruan</div>
        <h3 class="h5 fw-bold">Belum ada laporan yang masuk</h3>
        <p class="text-secondary mb-3">Saat ada genangan, kirim informasi lokasi dan ketinggiannya di sini.</p>
        <a href="{{ route('laporan.create') }}" class="btn btn-primary align-self-start px-3">Laporkan kejadian</a>
    </div>
@endif
@endsection

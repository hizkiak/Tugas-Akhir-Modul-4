@extends('layouts.app')

@section('content')

<div class="hero mb-4">

    <h1 class="fw-bold">
        Laporan Banjir
    </h1>

    <p class="mb-0">
        Informasi laporan kejadian banjir
        di Kabupaten Bandung.
    </p>

</div>

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Daftar Laporan
        </h3>

        <p class="text-muted">
            Data tersimpan dari database MySQL.
        </p>
    </div>

    <a href="{{ route('laporan.create') }}"
       class="btn btn-primary">

        + Tambah Laporan

    </a>

</div>

@if($laporan->count() > 0)

    <div class="row">

        @foreach($laporan as $data)

            @include('laporan.laporan-card', [
                'laporan' => $data
            ])

        @endforeach

    </div>

@else

    <div class="alert alert-info">

        Belum ada laporan banjir.

    </div>

@endif

@endsection
@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
    <h1 class="h3 mb-4">Profil Petugas</h1>
    <dl class="row mb-0">
        <dt class="col-sm-3">Nama</dt><dd class="col-sm-9">{{ $user->name }}</dd>
        <dt class="col-sm-3">Email</dt><dd class="col-sm-9">{{ $user->email }}</dd>
        <dt class="col-sm-3">Akun dibuat</dt><dd class="col-sm-9">{{ $user->created_at?->format('d-m-Y H:i') ?? '—' }}</dd>
    </dl>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-sm p-4 p-md-5">
            <h1 class="h3 mb-3">Register Petugas</h1>
            @if ($errors->any())
                <div class="alert alert-danger"><ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
            @endif
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <div class="mb-3"><label for="name" class="form-label">Nama</label><input id="name" name="name" class="form-control" value="{{ old('name') }}" required autofocus></div>
                <div class="mb-3"><label for="email" class="form-label">Email</label><input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required></div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata sandi (minimal 8 karakter)</label>
                    <input id="password" name="password" type="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi kata sandi</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required>
                </div>
                <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
            </form>
        </div>
    </div>
</div>
@endsection

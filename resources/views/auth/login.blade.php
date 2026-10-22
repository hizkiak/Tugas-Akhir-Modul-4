@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-sm p-4 p-md-5">
            <h1 class="h3 mb-3">Login Petugas</h1>
            @if ($errors->any())
                <div class="alert alert-danger"><ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
            @endif
            <form method="POST" action="{{ route('login.store') }}">
                @csrf
                <div class="mb-3"><label for="email" class="form-label">Email</label><input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required autofocus></div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata sandi</label>
                    <input id="password" name="password" type="password" class="form-control" required>
                </div>
                <div class="form-check mb-3"><input id="remember" name="remember" type="checkbox" class="form-check-input"><label for="remember" class="form-check-label">Ingat saya</label></div>
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection

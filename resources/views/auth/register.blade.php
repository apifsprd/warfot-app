@extends('auth.layouts.main')

@section('content')
<div class="container p-5">
    <div id="auth-left">
        <div class="auth-logo">
            <h5 class="text-secondary"><b>WARFOT</b></h5>
        </div>
        <h1 class="auth-title text-warning">Daftar.</h1>
        <p class="auth-subtitle mb-4">Masukan data kamu agar bisa masuk ke aplikasi.</p>
    
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group position-relative has-icon-left mb-4">
                <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name" autofocus>
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input id="name" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Nama Pengguna" required autofocus>
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
            <button class="btn btn-warning btn-block btn-lg shadow-lg mt-3">Daftar</button>
        </form>
    </div>
</div>
@endsection
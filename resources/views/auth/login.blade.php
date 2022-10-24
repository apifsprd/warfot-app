@extends('auth.layouts.main')

@section('content')
<div class="container p-5">
    <div id="auth-left">
        <div class="auth-logo">
            <h5 class="text-secondary"><b>WARFOT</b></h5>
        </div>
        <h1 class="auth-title text-warning">Masuk.</h1>
        <p class="auth-subtitle mb-2">Masuk aplikasi dengan data yang telah kamu daftarkan.</p>
    
        <form method="POST" action="{{ route('login') }}">
            @csrf
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
            <div class="form-check form-check d-flex align-items-end">
                <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label text-gray-600" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button class="btn btn-warning btn-block btn-lg shadow-lg mt-5">Log in</button>
        </form>

        {{-- @if (Route::has('password.request'))
        <div class="text-center mt-5 text-sm">
            <p class="text-gray-600">Don't have an account? <a href="/register" class="font-bold text-warning">Sign
                    up</a></p>
            <p><a class="font-bold text-warning" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></p>
        </div>
        @endif --}}
    </div>
</div>
@endsection
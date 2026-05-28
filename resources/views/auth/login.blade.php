@extends('layouts.app')

@section('title', 'Login - FashionNova')

@section('content')
<div class="auth-wrap">
    <section class="auth-showcase">
        <div class="auth-copy">
            <span class="eyebrow">Member Area</span>
            <h1>Masuk untuk lanjut belanja lebih cepat.</h1>
            <p class="lead">Kelola profil, alamat pengiriman, dan wishlist favoritmu dalam satu tempat.</p>
        </div>
    </section>

    <section class="auth-form-section">
        <div class="auth-form-inner">
            <div class="page-header" style="padding: 0 0 28px;">
                <span class="eyebrow">Welcome Back</span>
                <h2>Login</h2>
                <p class="lead">Gunakan akun pelanggan FashionNova kamu.</p>
            </div>

            @if(session('error'))
                <div class="alert error">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert success">{{ session('success') }}</div>
            @endif

            <form class="form-grid" method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Masukkan password" required>
                </div>
                <button class="button" type="submit">
                    Login
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </button>
            </form>

            <p class="form-footer">Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
        </div>
    </section>
</div>
@endsection

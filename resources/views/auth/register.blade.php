@extends('layouts.app')

@section('title', 'Register - FashionNova')

@section('content')
<div class="auth-wrap">
    <section class="auth-showcase">
        <div class="auth-copy">
            <span class="eyebrow">New Collection</span>
            <h1>Buat akun dan simpan inspirasi outfit-mu.</h1>
            <p class="lead">Daftar sekali, lalu nikmati checkout, wishlist, dan alamat pengiriman yang tersimpan rapi.</p>
        </div>
    </section>

    <section class="auth-form-section">
        <div class="auth-form-inner">
            <div class="page-header" style="padding: 0 0 28px;">
                <span class="eyebrow">Create Account</span>
                <h2>Register</h2>
                <p class="lead">Isi data dasar untuk mulai menggunakan FashionNova.</p>
            </div>

            @if($errors->any())
                <div class="alert error">{{ $errors->first() }}</div>
            @endif

            <form class="form-grid" method="POST" action="{{ route('register.post') }}">
                @csrf
                <div class="field">
                    <label for="name">Nama</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Nama lengkap" required>
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Minimal 6 karakter" required>
                </div>
                <div class="field">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Ulangi password" required>
                </div>
                <button class="button" type="submit">
                    Register
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </button>
            </form>

            <p class="form-footer">Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
        </div>
    </section>
</div>
@endsection

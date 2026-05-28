@extends('layouts.app')

@section('title', 'Profil Saya - FashionNova')

@section('content')
<div class="container">
    <div class="page-header">
        <span class="eyebrow">My Account</span>
        <h1>Profil Saya</h1>
        <p class="lead">Perbarui identitas dan nomor kontak agar pesanan dan notifikasi tetap mudah dilacak.</p>
    </div>

    <div class="account-layout">
        <!-- Sidebar -->
        <aside class="account-sidebar">
            <div class="panel">
                <div class="panel-body">
                    <!-- Avatar -->
                    <div style="text-align: center; margin-bottom: 16px; padding: 16px 0;">
                        <div style="width: 72px; height: 72px; border-radius: 50%; background: var(--ink); color: #fff; display: grid; place-items: center; margin: 0 auto 12px; font-family: var(--font-display); font-size: 28px; font-weight: 700;">
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        </div>
                        <div style="font-weight: 700; font-size: 15px;">{{ $user->name }}</div>
                        <div style="font-size: 13px; color: var(--muted);">{{ $user->email }}</div>
                    </div>

                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ route('profile.index') }}" class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                                Profil
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('addresses.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                                Alamat
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('wishlist.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                                Wishlist
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="account-main">
            <div class="content-grid two" style="grid-template-columns: 1.2fr .8fr;">
                <div class="panel">
                    <div class="panel-body">
                        <h3 style="font-family: var(--font-display); font-size: 20px; margin-bottom: 4px;">Edit Profil</h3>
                        <p style="color: var(--muted); font-size: 13px; margin-bottom: 24px;">Perbarui informasi dasar akun kamu.</p>

                        @if(session('success'))
                            <div class="alert success">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert error">{{ $errors->first() }}</div>
                        @endif

                        <form class="form-grid" method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="field">
                                <label for="name">Nama</label>
                                <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required>
                            </div>

                            <div class="field">
                                <label for="phone">Nomor HP</label>
                                <input id="phone" type="text" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Contoh: 08123456789">
                            </div>

                            <button class="button" type="submit">
                                Update Profil
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="item-list">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                        </div>
                        <span class="stat-label">Email</span>
                        <span class="stat-value" style="font-size: 15px;">{{ $user->email }}</span>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                        </div>
                        <span class="stat-label">Status Akun</span>
                        <span class="stat-value" style="font-size: 15px;">{{ ucfirst($user->role ?? 'customer') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

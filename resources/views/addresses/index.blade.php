@extends('layouts.app')

@section('title', 'Alamat Saya - FashionNova')

@section('content')
<div class="container">
    <div class="page-header">
        <span class="eyebrow">Shipping</span>
        <h1>Alamat Saya</h1>
        <p class="lead">Simpan alamat pengiriman utama agar proses checkout lebih ringkas.</p>
    </div>

    @if(session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert error">{{ $errors->first() }}</div>
    @endif

    <div class="account-layout">
        <!-- Sidebar -->
        <aside class="account-sidebar">
            <div class="panel">
                <div class="panel-body">
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ route('profile.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                                Profil
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('addresses.index') }}" class="active">
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
            <div class="content-grid two">
                <!-- Add Address Form -->
                <div class="panel">
                    <div class="panel-body">
                        <h3 style="font-family: var(--font-display); font-size: 20px; margin-bottom: 4px;">Tambah Alamat Baru</h3>
                        <p style="color: var(--muted); font-size: 13px; margin-bottom: 24px;">Simpan alamat pengiriman untuk checkout yang lebih cepat.</p>

                        <form class="form-grid" method="POST" action="{{ route('addresses.store') }}">
                            @csrf
                            <div class="field">
                                <label for="recipient_name">Nama Penerima</label>
                                <input id="recipient_name" type="text" name="recipient_name" value="{{ old('recipient_name') }}" placeholder="Nama lengkap" required>
                            </div>
                            <div class="field">
                                <label for="phone">No HP</label>
                                <input id="phone" type="text" name="phone" value="{{ old('phone') }}" placeholder="08123456789" required>
                            </div>
                            <div class="field">
                                <label for="full_address">Alamat Lengkap</label>
                                <textarea id="full_address" name="full_address" placeholder="Nama jalan, nomor rumah, detail tambahan" required>{{ old('full_address') }}</textarea>
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px;">
                                <div class="field">
                                    <label for="city">Kota</label>
                                    <input id="city" type="text" name="city" value="{{ old('city') }}" placeholder="Jakarta" required>
                                </div>
                                <div class="field">
                                    <label for="postal_code">Kode Pos</label>
                                    <input id="postal_code" type="text" name="postal_code" value="{{ old('postal_code') }}" placeholder="10220" required>
                                </div>
                            </div>
                            <button class="button" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                                Simpan Alamat
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Address List -->
                <div class="item-list">
                    @forelse($addresses as $a)
                        <article class="item-card">
                            <div class="item-icon" style="background: var(--accent-light); color: var(--accent);">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                            </div>
                            <div class="item-body">
                                <span class="item-meta">{{ $a->city }} {{ $a->postal_code }}</span>
                                <strong>{{ $a->recipient_name }}</strong>
                                <p>{{ $a->phone }}</p>
                                <p>{{ $a->full_address }}</p>
                                @if($a->is_default)
                                    <span class="default-badge">Alamat utama</span>
                                @endif
                            </div>

                            <form method="POST" action="{{ route('addresses.destroy', $a->id) }}" style="flex-shrink: 0;">
                                @csrf
                                @method('DELETE')
                                <button class="button ghost" type="submit">Hapus</button>
                            </form>
                        </article>
                    @empty
                        <div class="empty-state">
                            <div class="empty-state-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                            </div>
                            <h3>Belum Ada Alamat</h3>
                            <p>Tambahkan alamat pertama untuk mempercepat checkout.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Wishlist - FashionNova')

@section('content')
<div class="container">
    <div class="page-header">
        <span class="eyebrow">Saved Items</span>
        <h1>Wishlist</h1>
        <p class="lead">Kumpulan produk favorit yang bisa kamu cek lagi sebelum checkout.</p>
    </div>

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
                            <a href="{{ route('addresses.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                                Alamat
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('wishlist.index') }}" class="active">
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
            @forelse($wishlists as $w)
                <div class="item-list" style="margin-bottom: 14px;">
                    <article class="item-card">
                        <div class="item-icon" style="background: var(--rose-light); color: var(--rose); width: 56px; height: 56px; border-radius: 14px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" style="width: 24px; height: 24px;"><path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"/></svg>
                        </div>
                        <div class="item-body">
                            <span class="item-meta">Produk #{{ $w->product_id }}</span>
                            <strong>{{ $w->product->name ?? 'Produk tidak tersedia' }}</strong>
                            <p>Item ini tersimpan di wishlist akunmu.</p>
                        </div>

                        <form method="POST" action="{{ route('wishlist.toggle') }}" style="flex-shrink: 0;">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $w->product_id }}">
                            <button class="button ghost" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/></svg>
                                Hapus
                            </button>
                        </form>
                    </article>
                </div>
            @empty
                <div class="empty-state">
                    <div class="empty-state-icon" style="background: var(--rose-light); color: var(--rose);">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </div>
                    <h3>Wishlist Masih Kosong</h3>
                    <p>Simpan produk favorit agar mudah ditemukan lagi nanti.</p>
                    <a class="button outline" href="{{ route('home') }}" style="margin-top: 16px; display: inline-flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        Mulai Belanja
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection

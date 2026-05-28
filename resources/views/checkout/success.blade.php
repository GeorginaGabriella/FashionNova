@extends('layouts.app')

@section('title', 'Checkout Berhasil - FashionNova')

@section('content')
<div class="container" style="text-align: center; padding: 80px 20px;">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width: 64px; height: 64px; color: var(--success, #10b981); margin-bottom: 24px;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
    <h1 style="font-family: var(--font-display);">Checkout Berhasil! 🎉</h1>
    <p class="lead" style="margin: 12px 0 24px;">Pesanan kamu sedang diproses. Silakan lakukan pembayaran.</p>
    
    <a href="{{ route('orders.index') }}" class="button">Lihat Riwayat Pesanan</a>
</div>
@endsection
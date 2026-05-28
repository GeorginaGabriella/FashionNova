@extends('layouts.app')

@section('title', 'Keranjang Belanja - FashionNova')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Keranjang Belanja</h1>
    </div>

    @if($cart->items->isEmpty())
        @include('cart.empty')
    @else

        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif

        @foreach($cart->items as $item)
            <div class="item-card" style="margin-bottom: 12px;">
                <div class="item-body" style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <strong>{{ $item->variant->product->name }}</strong>
                        <p class="item-meta">{{ $item->variant->size }} / {{ $item->variant->color }}</p>
                        <p style="margin-top: 8px;">Rp {{ number_format($item->price, 0, ',', '.') }} x {{ $item->quantity }}</p>
                    </div>
                    
                    <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="button ghost" type="submit">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach

        <div class="panel" style="margin-top: 24px;">
            <div class="panel-body">
                <form method="POST" action="{{ route('checkout') }}">
                    @csrf
                    <div class="field" style="margin-bottom: 16px;">
                        <label>Kode Kupon (Opsional)</label>
                        <input type="text" name="coupon_code" placeholder="Masukkan kode promo">
                    </div>
                    <button class="button" type="submit">
                        Checkout Sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </button>
                </form>
            </div>
        </div>

    @endif
</div>
@endsection
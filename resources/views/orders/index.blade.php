@extends('layouts.app')

@section('title', 'Riwayat Pesanan - FashionNova')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Riwayat Pesanan</h1>
    </div>

    @forelse($orders as $order)
        <div class="panel" style="margin-bottom: 16px;">
            <div class="panel-body">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                    <div>
                        <strong style="font-size: 16px;">Order #{{ $order->id }}</strong>
                        <span class="item-meta">{{ $order->created_at->format('d M Y, H:i') }}</span>
                    </div>
                    <div style="text-align: right;">
                        <strong style="font-size: 16px;">Rp {{ number_format($order->total_price, 0, ',', '.') }}</strong><br>
                        @if($order->status === 'pending')
                            <span style="background: #fef3c7; color: #92400e; padding: 4px 8px; border-radius: 6px; font-size: 12px; font-weight: 600;">⏳ Menunggu Pembayaran</span>
                        @elseif($order->status === 'paid')
                            <span style="background: #d1fae5; color: #065f46; padding: 4px 8px; border-radius: 6px; font-size: 12px; font-weight: 600;">✔ Sudah Dibayar</span>
                        @else
                            <span style="background: #fee2e2; color: #991b1b; padding: 4px 8px; border-radius: 6px; font-size: 12px; font-weight: 600;">✖ Dibatalkan</span>
                        @endif
                    </div>
                </div>

                <hr style="border: 0; border-top: 1px solid var(--border); margin: 12px 0;">

                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($order->items as $item)
                        <li style="display: flex; justify-content: space-between; margin-bottom: 6px; font-size: 14px; color: var(--muted);">
                            <span>{{ $item->variant->product->name ?? 'Produk' }} ({{ $item->variant->size ?? '-' }}/{{ $item->variant->color ?? '-' }}) x {{ $item->quantity }}</span>
                            <span>Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @empty
        <div class="empty-state">
            <div class="empty-state-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15a2.25 2.25 0 012.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/></svg>
            </div>
            <h3>Belum Ada Pesanan</h3>
            <p>Kamu belum pernah melakukan checkout.</p>
            <a href="{{ route('products.index') }}" class="button" style="margin-top: 16px;">Mulai Belanja</a>
        </div>
    @endforelse
</div>
@endsection
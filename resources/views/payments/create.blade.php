blade
@extends('layouts.app')

@section('title', 'Upload Pembayaran - FashionNova')

@section('content')
<div class="container">
    <div class="page-header">
        <span class="eyebrow">Payment Verification</span>
        <h1>Upload Bukti Pembayaran</h1>
    </div>

    <div class="panel" style="max-width: 600px; margin: 0 auto;">
        <div class="panel-body">
            <p>Pesanan <strong>#{{ $order->id }}</strong></p>
            <p>Total yang harus dibayar: <strong style="font-size: 18px; color: var(--accent);">Rp {{ number_format($order->total_price, 0, ',', '.') }}</strong></p>
            
            <hr style="margin: 16px 0; border: 0; border-top: 1px solid var(--border);">

            @if($errors->any())
                <div class="alert error">{{ $errors->first() }}</div>
            @endif

            <!-- PPT: CSRF Protection pada form POST -->
            <form method="POST" action="{{ route('payments.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="order_id" value="{{ $order->id }}">
                
                <div class="field">
                    <label>Upload Bukti Transfer (JPG/PNG, Maks 2MB)</label>
                    <input type="file" name="payment_proof" required accept="image/*">
                </div>

                <button class="button" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5"/></svg>
                    Upload & Kirim
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
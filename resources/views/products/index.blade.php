@extends('layouts.app')

@section('title', 'FashionNova — Product List')

@section('content')

<div class="container">

    <div class="page-header">
        <span class="eyebrow">Catalog</span>
        <h1>Product List</h1>
        <p class="lead">Temukan koleksi fashion terbaik kami</p>
    </div>

    @if(isset($products) && count($products) > 0)
        <div class="content-grid three">

            @foreach($products as $product)
                <article class="item-card">

                    <div class="item-body">

                        <h3 style="margin-bottom: 6px;">
                            {{ $product->name }}
                        </h3>

                        <p style="color: var(--muted); margin-bottom: 10px;">
                            Rp {{ number_format($product->base_price ?? $product->price, 0, ',', '.') }}
                        </p>

                        <div style="display:flex; justify-content: space-between; align-items:center;">

                            <a href="{{ route('products.show', $product->id) }}" class="button small">
                                Detail
                            </a>

                            @auth
                                <form method="POST" action="{{ route('wishlist.toggle') }}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                                    <button type="submit" class="button small outline">
                                        ♥ Wishlist
                                    </button>
                                </form>
                            @endauth

                        </div>

                    </div>
                </article>
            @endforeach

        </div>
    @else
        <p style="color: var(--muted);">Belum ada produk tersedia.</p>
    @endif

</div>

@endsection
<h2>Wishlist</h2>

@foreach($wishlists as $w)
<p>{{ $w->product->name ?? 'Produk tidak ada' }}</p>

<form method="POST" action="{{ route('wishlist.toggle') }}">
    @csrf
    <input type="hidden" name="product_id" value="{{ $w->product_id }}">
    <button type="submit">Hapus</button>
</form>
@endforeach

<h1>Product List</h1>

@foreach($products as $product)
    <p>
        {{ $product->name }} - Rp {{ $product->price }}
        <a href="{{ route('products.show', $product->id) }}">Detail</a>
    </p>
@endforeach
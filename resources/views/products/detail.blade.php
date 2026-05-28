<h1>{{ $product->name }}</h1>

<p>{{ $product->description }}</p>
<p>Harga: Rp {{ $product->price }}</p>

<h3>Category:</h3>
<p>{{ $product->category->name ?? '-' }}</p>

<h3>Variant:</h3>
@foreach($product->variants as $v)
    <p>{{ $v->size }} - {{ $v->color }} - Stock: {{ $v->stock }}</p>
@endforeach

<h3>Images:</h3>
@foreach($product->images as $image)
    <p>{{ $image->image_path }}</p>
@endforeach

<h3>Reviews:</h3>
@foreach($product->reviews as $review)
    <p>Rating: {{ $review->rating }} / 5</p>
    <p>{{ $review->comment }}</p>
@endforeach

@include('reviews.form')

<br>
<a href="{{ route('products.index') }}">Back to Products</a>
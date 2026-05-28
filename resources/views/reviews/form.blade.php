<form method="POST" action="{{ route('reviews.store') }}">
    @csrf

    <input type="hidden" name="product_id" value="{{ $product->id ?? '' }}">

    <label>Rating</label>
    <input type="number" name="rating" min="1" max="5" required>

    <label>Comment</label>
    <textarea name="comment"></textarea>

    <button type="submit">Kirim Review</button>
</form>
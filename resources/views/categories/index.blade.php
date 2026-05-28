<h1>Category List</h1>

@foreach($categories as $category)
    <p>{{ $category->name }}</p>
@endforeach

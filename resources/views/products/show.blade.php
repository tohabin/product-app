<h1>{{ $product->name }}</h1>
<p>ID: {{ $product->product_id }}</p>
<p>Description: {{ $product->description }}</p>
<p>Price: {{ $product->price }}</p>
<p>Stock: {{ $product->stock }}</p>
<a href="{{ route('products.edit', $product->id) }}">Edit</a>

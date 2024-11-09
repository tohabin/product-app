<h1>Edit Product</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="product_id" value="{{ $product->product_id }}">
    <input type="text" name="name" value="{{ $product->name }}">
    <textarea name="description">{{ $product->description }}</textarea>
    <input type="number" name="price" value="{{ $product->price }}">
    <input type="number" name="stock" value="{{ $product->stock }}">
    <button type="submit">Update</button>
</form>

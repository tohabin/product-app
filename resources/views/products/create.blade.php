<h1>Create Product</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="product_id" placeholder="Product ID">
    <input type="text" name="name" placeholder="Name">
    <textarea name="description" placeholder="Description"></textarea>
    <input type="number" name="price" placeholder="Price">
    <input type="number" name="stock" placeholder="Stock">
    <button type="submit">Save</button>
</form>

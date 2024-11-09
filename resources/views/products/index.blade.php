<h1>Products</h1>
<form action="{{ route('products.index') }}" method="GET">
    <input type="text" name="search" placeholder="Search by ID or description">
    <button type="submit">Search</button>
</form>

<a href="{{ route('products.create') }}">Add New Product</a>

<table>
    <thead>
        <tr>
            <th><a href="?sort_by=name&sort_direction={{ request('sort_direction') == 'asc' ? 'desc' : 'asc' }}">Name</a></th>
            <th><a href="?sort_by=price&sort_direction={{ request('sort_direction') == 'asc' ? 'desc' : 'asc' }}">Price</a></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}">View</a>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}

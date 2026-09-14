<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1 style="font-size: 20px; text-align: center;">Products</h1>
    <p style="font-weight: bold; text-align: center;">Welcome to the products page!</p>
    <button style="font-size: 20px; text-decoration: none; color: blue; margin-bottom: 20px;" onclick="window.location.href='{{ route('product.create') }}'">create product</button>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 8px;">ID</th>
                <th style="border: 1px solid black; padding: 8px;">Name</th>
                <th style="border: 1px solid black; padding: 8px;">Description</th>
                <th style="border: 1px solid black; padding: 8px;">Price</th>
                <th style="border: 1px solid black; padding: 8px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td style="border: 1px solid black; padding: 8px;">{{ $product->id }}</td>
                    <td style="border: 1px solid black; padding: 8px;">{{ $product->name }}</td>
                    <td style="border: 1px solid black; padding: 8px;">{{ $product->description }}</td>
                    <td style="border: 1px solid black; padding: 8px;">{{ $product->price }}</td>
                    <td style="border: 1px solid black; padding: 8px;">
                        <button onclick="window.location.href='{{ route('product.edit', $product->id) }}'" style="font-size: 16px; text-decoration: none; color: blue;">Edit</button>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="font-size: 16px; text-decoration: none; color: red;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

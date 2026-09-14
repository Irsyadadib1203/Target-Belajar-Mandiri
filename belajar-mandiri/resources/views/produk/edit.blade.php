<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <form action="{{ route('product.update', $product->id) }}" method="POST" style="width: 300px; margin: 0 auto;">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 10px;">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required style="width: 100%;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="description">Description:</label>
            <textarea id="description" name="description" required style="width: 100%;">{{ $product->description }}</textarea>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" required min="0" step="0.01" style="width: 100%;">
        </div>
        <button type="submit" style="font-size: 20px; text-decoration: none; color: blue;">Update Product</button>
    </form>
</body>
</html>
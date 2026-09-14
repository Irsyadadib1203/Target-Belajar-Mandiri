<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tamabah product</title>
</head>
<body>
    <h1 style="font-size: 20px; text-align: center;">Create Product</h1>
    <p style="font-weight: bold; text-align: center;">Fill in the form below to create a new product.</p>
    <form action="{{ route('product.store') }}" method="POST" style="width: 300px; margin: 0 auto;">
        @csrf
        <div style="margin-bottom: 10px;">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required style="width: 100%;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="description">Description:</label>
            <textarea id="description" name="description" required style="width: 100%;"></textarea>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required min="0" step="0.01" style="width: 100%;">
        </div>
        <button type="submit" style="font-size: 20px; text-decoration: none; color: blue;">Create Product</button>
    </form>
</body>
</html>
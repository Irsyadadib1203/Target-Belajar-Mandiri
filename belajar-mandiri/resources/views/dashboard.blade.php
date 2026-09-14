<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1 style="font-size: 20px; text-align: center;">Dashboard</h1>
    <p style="font-weight: bold; text-align: center;">Welcome to the dashboard!</p>
    <div style="text-align: center;">
        <a href="{{ route('profile.index') }}" style="font-size: 20px; text-decoration: none; color: blue;">Go to Profile</a>
        <a href="{{ route('product.index') }}" style="font-size: 20px; text-decoration: none; color: blue; margin-left: 20px;">Go to Products</a>
    </div>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 8px;">ID</th>
                <th style="border: 1px solid black; padding: 8px;">Name</th>
                <th style="border: 1px solid black; padding: 8px;">Description</th>
                <th style="border: 1px solid black; padding: 8px;">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                @if($product->name !== null && $product->description !== null && $product->price !== null)
                    <tr>
                        <td style="border: 1px solid black; padding: 8px;">{{ $product->id }}</td>
                        <td style="border: 1px solid black; padding: 8px;">{{ $product->name }}</td>
                        <td style="border: 1px solid black; padding: 8px;">{{ $product->description }}</td>
                    <td style="border: 1px solid black; padding: 8px;">{{ $product->price }}</td>
                </tr>
            @else
                <tr>
                    <td colspan="4" style="border: 1px solid black; padding: 8px; text-align: center;">No products available</td>
                </tr>
            @endif
            @endforeach
        </tbody>
</body>
</html>
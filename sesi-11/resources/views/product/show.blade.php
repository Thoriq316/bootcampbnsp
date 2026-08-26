<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
</head>
<body>

    <h1>Detail Produk</h1>

    <h2>{{ $product->name }}</h2>

    <p>{{ $product->description }}</p>

    <p>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>

    <p>Stok: {{ $product->stock }}</p>

    <a href="{{ route('products') }}">← Kembali ke Produk</a>

</body>
</html>
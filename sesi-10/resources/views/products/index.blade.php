<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Produk - ProdukKu</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">

        <a href="/" class="navbar-brand fw-bold">
            📦 ProdukKu
        </a>

        <a href="/cart" class="btn btn-outline-light">
            🛒 Keranjang
        </a>

    </div>
</nav>

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                🛍️ Daftar Produk
            </h2>

            <p class="text-secondary mb-0">
                Pilih produk favorit Anda.
            </p>
        </div>

    </div>

    <div class="row g-4">

        @forelse ($products as $product)

            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm h-100">

                    @if ($product->image)
                        <img
                            src="{{ asset('images/' . $product->image) }}"
                            class="card-img-top"
                            style="height:220px; object-fit:cover;"
                            alt="{{ $product->name }}"
                        >
                    @else

                        <div
                            class="bg-secondary-subtle d-flex align-items-center justify-content-center"
                            style="height:220px;"
                        >
                            <span class="fs-1">
                                📦
                            </span>
                        </div>

                    @endif

                    <div class="card-body">

                        <span class="badge bg-primary mb-2">
                            {{ $product->category }}
                        </span>

                        <h5 class="card-title fw-bold">
                            {{ $product->name }}
                        </h5>

                        <p class="card-text text-secondary">
                            {{ $product->description }}
                        </p>

                        <h5 class="text-primary fw-bold">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </h5>

                        <small class="text-secondary">
                            Stok: {{ $product->stock }}
                        </small>

                    </div>

                    <div class="card-footer bg-white border-0">

                        <form action="{{ route('cart.add') }}" method="POST">
    @csrf

    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="hidden" name="name" value="{{ $product->name }}">
    <input type="hidden" name="price" value="{{ $product->price }}">

    <button type="submit" class="btn btn-primary w-100">
        🛒 Tambah ke Keranjang
    </button>
</form>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">

                <div class="alert alert-info text-center">
                    Belum ada produk.
                </div>

            </div>

        @endforelse

    </div>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Keranjang - ProdukKu</title>

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

        <a href="/products" class="btn btn-outline-light">
            ← Kembali ke Produk
        </a>

    </div>
</nav>

<div class="container py-5">

    <h2 class="fw-bold mb-4">
        🛒 Keranjang Belanja
    </h2>

    {{-- NOTIFIKASI BERHASIL --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong>
            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
            </button>
        </div>
    @endif

    @if(count($cart) > 0)

        <div class="card shadow-sm border-0">

            <div class="card-body">

                @php
                    $total = 0;
                @endphp

                @foreach($cart as $item)

                    @php
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    @endphp

                    <div class="row align-items-center border-bottom py-3">

                        <div class="col-md-5">

                            <h5 class="fw-bold mb-1">
                                {{ $item['name'] }}
                            </h5>

                            <small class="text-secondary">
                                Rp {{ number_format($item['price'], 0, ',', '.') }}
                            </small>

                        </div>

                        <div class="col-md-2">

                            <span class="text-secondary">
                                Jumlah
                            </span>

                            <strong>
                                {{ $item['quantity'] }}
                            </strong>

                        </div>

                        <div class="col-md-3">

                            <strong class="text-primary">
                                Rp {{ number_format($subtotal, 0, ',', '.') }}
                            </strong>

                        </div>

                    </div>

                @endforeach

                <div class="text-end mt-4">

                    <h4 class="fw-bold">
                        Total:
                        Rp {{ number_format($total, 0, ',', '.') }}
                    </h4>

                    <a
                        href="/checkout"
                        class="btn btn-success mt-2"
                    >
                        Checkout
                    </a>

                </div>

            </div>

        </div>

    @else

        <div class="alert alert-info">
            🛒 Keranjang masih kosong.
        </div>

        <a href="/products" class="btn btn-primary">
            Lihat Produk
        </a>

    @endif

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
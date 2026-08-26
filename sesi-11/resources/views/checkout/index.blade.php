<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Checkout - ProdukKu</title>

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
            ← Kembali ke Keranjang
        </a>

    </div>

</nav>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <h2 class="fw-bold mb-4">
                        🧾 Checkout
                    </h2>

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <strong>Terjadi kesalahan:</strong>

                            <ul class="mb-0 mt-2">

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    @if (count($cart) > 0)

                        <div class="card bg-light border-0 mb-4">

                            <div class="card-body">

                                <h5 class="fw-bold mb-3">
                                    Ringkasan Pesanan
                                </h5>

                                @foreach ($cart as $item)

                                    <div class="d-flex justify-content-between mb-2">

                                        <span>
                                            {{ $item['name'] }}
                                            × {{ $item['quantity'] }}
                                        </span>

                                        <strong>
                                            Rp {{ number_format(
                                                $item['price'] * $item['quantity'],
                                                0,
                                                ',',
                                                '.'
                                            ) }}
                                        </strong>

                                    </div>

                                @endforeach

                                <hr>

                                <div class="d-flex justify-content-between">

                                    <strong>Total</strong>

                                    <strong class="text-primary">
                                        Rp {{ number_format($total, 0, ',', '.') }}
                                    </strong>

                                </div>

                            </div>

                        </div>

                        <form
                            action="{{ route('checkout.store') }}"
                            method="POST"
                        >

                            @csrf

                            <div class="mb-3">

                                <label class="form-label">
                                    Nama Lengkap
                                </label>

                                <input
                                    type="text"
                                    name="customer_name"
                                    class="form-control"
                                    placeholder="Masukkan nama Anda"
                                    value="{{ old('customer_name') }}"
                                >

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="customer_email"
                                    class="form-control"
                                    placeholder="nama@email.com"
                                    value="{{ old('customer_email') }}"
                                >

                            </div>

                            <div class="mb-4">

                                <label class="form-label">
                                    Alamat
                                </label>

                                <textarea
                                    name="customer_address"
                                    class="form-control"
                                    rows="4"
                                    placeholder="Masukkan alamat lengkap"
                                >{{ old('customer_address') }}</textarea>

                            </div>

                            <button
                                type="submit"
                                class="btn btn-success w-100"
                            >
                                🛍️ Pesan Sekarang
                            </button>

                        </form>

                    @else

                        <div class="alert alert-info">
                            🛒 Keranjang masih kosong.
                        </div>

                        <a
                            href="/products"
                            class="btn btn-primary"
                        >
                            Lihat Produk
                        </a>

                    @endif

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>
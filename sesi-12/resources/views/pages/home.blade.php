@extends('layouts.app')


@section('title', 'Home | MyStore')


@section('content')

<div class="container py-5">

    <div class="row align-items-center">

        <div class="col-lg-7">

            <span class="badge bg-primary mb-3 px-3 py-2">

                Laravel + Blade

            </span>

            <h1 class="display-4 fw-bold">

                Selamat Datang di

                <span class="text-primary">

                    MyStore

                </span>

            </h1>

            <p class="lead text-muted mt-3">

                Temukan berbagai produk pilihan
                dengan pengalaman belanja yang
                mudah dan nyaman.

            </p>

            <div class="mt-4">

                <a
                    href="{{ route('products.index') }}"
                    class="btn btn-primary btn-lg me-2">

                    <i class="bi bi-box-seam"></i>

                    Lihat Produk

                </a>

                <a
                    href="{{ route('cart.index') }}"
                    class="btn btn-outline-primary btn-lg">

                    <i class="bi bi-cart3"></i>

                    Keranjang

                </a>

            </div>

        </div>

        <div class="col-lg-5 mt-5 mt-lg-0">

            <div class="card border-0 shadow-lg">

                <div class="card-body p-5 text-center">

                    <i
                        class="bi bi-bag-check-fill text-primary"
                        style="font-size: 120px;">
                    </i>

                    <h3 class="mt-3 fw-bold">

                        Belanja Lebih Mudah

                    </h3>

                    <p class="text-muted">

                        Pilih produk favorit Anda
                        dan masukkan ke keranjang.

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


<div class="bg-white py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">

                Kenapa Memilih MyStore?

            </h2>

            <p class="text-muted">

                Simple, cepat, dan mudah digunakan.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div
                    class="card h-100
                    border-0
                    shadow-sm
                    text-center">

                    <div class="card-body p-4">

                        <i
                            class="bi bi-lightning-charge-fill
                            text-warning fs-1">
                        </i>

                        <h4 class="mt-3">

                            Cepat

                        </h4>

                        <p class="text-muted">

                            Proses belanja lebih mudah.

                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div
                    class="card h-100
                    border-0
                    shadow-sm
                    text-center">

                    <div class="card-body p-4">

                        <i
                            class="bi bi-shield-check
                            text-success fs-1">
                        </i>

                        <h4 class="mt-3">

                            Aman

                        </h4>

                        <p class="text-muted">

                            Dibangun menggunakan Laravel.

                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div
                    class="card h-100
                    border-0
                    shadow-sm
                    text-center">

                    <div class="card-body p-4">

                        <i
                            class="bi bi-heart-fill
                            text-danger fs-1">
                        </i>

                        <h4 class="mt-3">

                            Mudah

                        </h4>

                        <p class="text-muted">

                            Tampilan responsif
                            dan user friendly.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
@extends('layouts.app')


@section('title', 'Products | MyStore')


@section('content')

<div class="container py-5">

    <div
        class="d-flex
        justify-content-between
        align-items-center
        mb-4">

        <div>

            <h1 class="fw-bold">

                Daftar Produk

            </h1>

            <p class="text-muted">

                Pilih produk yang Anda inginkan.

            </p>

        </div>

        <a
            href="{{ route('cart.index') }}"
            class="btn btn-outline-primary">

            <i class="bi bi-cart3"></i>

            Lihat Keranjang

        </a>

    </div>


    <div class="row g-4">

        @forelse($products as $product)

            <div class="col-md-6 col-lg-4">

                <div
                    class="card
                    h-100
                    border-0
                    shadow-sm">

                    <div class="card-body">

                        <div class="text-center mb-3">

                            <i
                                class="bi bi-box-seam
                                text-primary"
                                style="font-size: 80px;">
                            </i>

                        </div>

                        <h5 class="fw-bold">

                            {{ $product->name }}

                        </h5>

                        <p class="text-muted">

                            {{ \Illuminate\Support\Str::limit($product->description, 80) }}

                        </p>

                        <h4 class="text-primary fw-bold">

                            Rp {{ number_format($product->price, 0, ',', '.') }}

                        </h4>

                    </div>

                    <div
                        class="card-footer
                        bg-white
                        border-0
                        pb-3">

                        <form
                            action="{{ route('cart.store') }}"
                            method="POST">

                            @csrf

                            <input
                                type="hidden"
                                name="product_id"
                                value="{{ $product->id }}">

                            <button
                                type="submit"
                                class="btn btn-primary w-100">

                                <i class="bi bi-cart-plus"></i>

                                Tambah ke Keranjang

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">

                <div
                    class="alert
                    alert-info
                    text-center">

                    Belum ada produk.

                </div>

            </div>

        @endforelse

    </div>

</div>

@endsection
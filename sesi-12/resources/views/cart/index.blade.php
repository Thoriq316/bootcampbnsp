@extends('layouts.app')


@section('title', 'Cart | MyStore')


@section('content')

<div class="container py-5">

    <div
        class="d-flex
        justify-content-between
        align-items-center
        mb-4">

        <div>

            <h1 class="fw-bold">

                Keranjang Belanja

            </h1>

            <p class="text-muted">

                Produk yang telah Anda pilih.

            </p>

        </div>

        <a
            href="{{ route('products.index') }}"
            class="btn btn-outline-primary">

            <i class="bi bi-arrow-left"></i>

            Lanjut Belanja

        </a>

    </div>


    @if(session('success'))

        <div
            class="alert
            alert-success
            alert-dismissible
            fade
            show">

            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    @if(count($cart) > 0)

        <div class="card border-0 shadow-sm">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table align-middle mb-0">

                        <thead class="table-light">

                            <tr>

                                <th class="ps-4">

                                    Produk

                                </th>

                                <th>

                                    Harga

                                </th>

                                <th>

                                    Jumlah

                                </th>

                                <th>

                                    Subtotal

                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            @php

                                $total = 0;

                            @endphp


                            @foreach($cart as $item)

                                @php

                                    $subtotal =
                                        $item['price']
                                        *
                                        $item['quantity'];

                                    $total += $subtotal;

                                @endphp


                                <tr>

                                    <td class="ps-4">

                                        <strong>

                                            {{ $item['name'] }}

                                        </strong>

                                    </td>

                                    <td>

                                        Rp {{ number_format($item['price'], 0, ',', '.') }}

                                    </td>

                                    <td>

                                        {{ $item['quantity'] }}

                                    </td>

                                    <td class="fw-bold">

                                        Rp {{ number_format($subtotal, 0, ',', '.') }}

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                        <tfoot class="table-light">

                            <tr>

                                <th
                                    colspan="3"
                                    class="text-end">

                                    Total

                                </th>

                                <th class="text-primary fs-5">

                                    Rp {{ number_format($total, 0, ',', '.') }}

                                </th>

                            </tr>

                        </tfoot>

                    </table>

                </div>

            </div>

        </div>

    @else

        <div class="card border-0 shadow-sm">

            <div class="card-body text-center py-5">

                <i
                    class="bi bi-cart-x
                    text-secondary"
                    style="font-size: 100px;">
                </i>

                <h3 class="mt-3">

                    Keranjang Masih Kosong

                </h3>

                <p class="text-muted">

                    Silakan pilih produk terlebih dahulu.

                </p>

                <a
                    href="{{ route('products.index') }}"
                    class="btn btn-primary">

                    Lihat Produk

                </a>

            </div>

        </div>

    @endif

</div>

@endsection
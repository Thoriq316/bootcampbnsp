<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">

    <div class="container">

        <a class="navbar-brand fw-bold"
            href="{{ route('home') }}">

            <i class="bi bi-bag-check-fill"></i>

            MyStore

        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div
            class="collapse navbar-collapse"
            id="navbarMenu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">

                    <a
                        class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}"
                        href="{{ route('home') }}">

                        <i class="bi bi-house"></i>

                        Home

                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link {{ request()->routeIs('products.*') ? 'active fw-bold' : '' }}"
                        href="{{ route('products.index') }}">

                        <i class="bi bi-box"></i>

                        Products

                    </a>

                </li>

                <li class="nav-item ms-lg-3">

                    <a
                        class="btn btn-light text-primary fw-semibold"
                        href="{{ route('cart.index') }}">

                        <i class="bi bi-cart3"></i>

                        Cart

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>
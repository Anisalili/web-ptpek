<section class="navbar-area navbar-nine">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('Business-1.0.0/assets/images/white-logo.svg') }}" alt="Logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
                        aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->routeIs('pricing') ? 'active' : '' }}" href="{{ route('pricing') }}">Harga</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontak</a>
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-btn d-none d-lg-inline-block">
                        <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

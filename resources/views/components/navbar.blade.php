<nav class="navbar navbar-expand-lg fixed-top custom-navbar">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo3.png') }}" alt="Logo" height="45">
            <!-- Or use text:
            <span class="logo-text">Amudha Decors</span>
            -->
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">

            <i class="fas fa-bars"></i>

        </button>

        <div class="collapse navbar-collapse" id="navbarContent">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About-us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg py-2" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item py-2 px-3 text-dark-emphasis fw-medium" href="{{ route('pufSandwich') }}">Puf / Sandwich Roofing</a></li>
                        <li><a class="dropdown-item py-2 px-3 text-dark-emphasis fw-medium" href="{{ route('metalRoofings') }}">Metal Roofings</a></li>
                        <li><a class="dropdown-item py-2 px-3 text-dark-emphasis fw-medium" href="{{ route('aluminiumAwnings') }}">Aluminium Awnings</a></li>
                        <li><a class="dropdown-item py-2 px-3 text-dark-emphasis fw-medium" href="{{ route('tensileRoofings') }}">Tensile Roofings</a></li>
                        <li><a class="dropdown-item py-2 px-3 text-dark-emphasis fw-medium" href="{{ route('polycarbonateRoofings') }}">Polycarbonate Roofings</a></li>
                        <li><a class="dropdown-item py-2 px-3 text-dark-emphasis fw-medium" href="{{ route('terraceRoofings') }}">Terrace Roofings</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Our Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact us</a>
                </li>

            </ul>

            <a href="#" class="btn btn-warning rounded-pill px-4">
                Get Quote
            </a>

        </div>

    </div>
</nav>

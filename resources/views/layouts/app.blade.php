<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Premium Agency')</title>
    <meta name="description" content="@yield('meta_description', 'Arasuvel Roofings is a leading name in premium PEB structures, turnkey industrial construction, and advanced architectural glazing across Chennai and Tamil Nadu.')">
    <meta name="keywords" content="@yield('meta_keywords', 'PEB Structures, Roofing Solutions, ACP Cladding, Toughened Glass, Pergolas, Industrial Construction, Chennai, Tamil Nadu')">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    {{-- Loader (Later) --}}
    <div id="loader"></div>

    {{-- Navbar --}}
    @include('components.navbar')

    <main>

        @yield('content')

    </main>

    {{-- Footer --}}
    @include('components.footer')

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

    <!-- ScrollTrigger -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>

    <script>
        gsap.registerPlugin(ScrollTrigger);

    </script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')

</body>

</html>

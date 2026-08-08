<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Arasuvel CMS')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">

    @stack('styles')

</head>

<body>

    <div class="wrapper">

        @include('admin.layouts.sidebar')

        <div class="main-wrapper">

            @include('admin.layouts.navbar')

            <main class="content">

                @yield('content')

            </main>

            @include('admin.layouts.footer')

        </div>

    </div>

</body>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/script.js') }}"></script>

@stack('scripts')

</body>

</html>

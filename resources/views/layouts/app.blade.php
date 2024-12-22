<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Charity Foundation')</title>
    <link rel="icon" href="{{ asset('favicon/favicon.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
     <!-- Include Navbar -->
    @include('components.navbar')

    <!-- Main Content -->
    <main class="container">
        @yield('jumbotoron')
        @yield('who-we-are')
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')
   
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
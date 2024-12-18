<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('donate') }}">Donate</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>

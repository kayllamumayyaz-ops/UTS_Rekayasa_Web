<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Direktori Musik Tradisional')</title>
    
    <!-- Assets dari npm dikompilasi oleh Vite (Bebas CDN) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Navbar Minimalis & Profesional -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('music.home') }}">
                🎵 <span class="text-warning">Nusantara</span> Harmony
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ request()->routeIs('music.home') ? 'active text-warning' : '' }}" href="{{ route('music.home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ request()->routeIs('music.index') ? 'active text-warning' : '' }}" href="{{ route('music.index') }}">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ request()->routeIs('music.about') ? 'active text-warning' : '' }}" href="{{ route('music.about') }}">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center text-muted py-4 border-top mt-auto">
        <div class="container">
            <small>&copy; 2026 Direktori Musik Tradisional - UTS Rekayasa Web Universitas Pamulang</small>
        </div>
    </footer>

</body>
</html>
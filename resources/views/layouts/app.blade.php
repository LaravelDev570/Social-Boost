<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'AccountForge - Premium Digital Services')</title>
    <meta name="description" content="@yield('meta_description', 'Professional digital service requests for TikTok, YouTube, and branding. Secure, reliable, and premium quality.')">
    <meta name="keywords" content="digital services, tiktok setup, youtube setup, branding, social media management">
    <meta name="author" content="AccountForge">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'AccountForge - Premium Digital Services')">
    <meta property="og:description" content="@yield('meta_description', 'Professional digital service requests for TikTok, YouTube, and branding.')">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'AccountForge - Premium Digital Services')">
    <meta property="twitter:description" content="@yield('meta_description', 'Professional digital service requests for TikTok, YouTube, and branding.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|outfit:500,600,700&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS (CDN for quick start) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
    @stack('styles')
</head>
<body class="bg-dark text-light">
    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-glass fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold font-outfit text-gradient" href="{{ url('/') }}">
                AccountForge
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 font-inter">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item ms-lg-3">
                                <a class="nav-link btn btn-outline-light rounded-pill px-4" href="{{ route('login') }}">Login</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                                <a class="nav-link btn btn-primary rounded-pill px-4" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="nav-link dropdown-toggle btn btn-outline-light rounded-pill px-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark bg-glass" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item text-danger" type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-5 mt-5 font-inter">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-darker text-center text-lg-start mt-5 py-4 border-top border-secondary">
        <div class="container text-muted">
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h5 class="text-light font-outfit">AccountForge</h5>
                    <p class="small mb-0">Premium digital services for modern brands.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a href="#" class="text-muted text-decoration-none me-3">Terms of Service</a>
                    <a href="#" class="text-muted text-decoration-none">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>

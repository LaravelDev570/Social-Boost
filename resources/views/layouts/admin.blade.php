<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard - AccountForge')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|outfit:500,600,700&display=swap" rel="stylesheet" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: var(--darker-bg);
            border-right: 1px solid rgba(255,255,255,0.05);
        }
        .sidebar-link {
            color: #94a3b8;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.3s;
            text-decoration: none;
            display: block;
            margin-bottom: 5px;
        }
        .sidebar-link:hover, .sidebar-link.active {
            background-color: var(--primary-color);
            color: #fff;
        }
        .main-content {
            background-color: var(--dark-bg);
            min-height: 100vh;
        }
        .topbar {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.05);
            z-index: 1000;
        }
    </style>
</head>
<body class="bg-dark text-light font-inter">

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar col-auto col-md-3 col-lg-2 px-sm-2 px-0 d-flex flex-column">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-4 text-white min-vh-100 w-100">
                <a href="{{ url('/') }}" class="d-flex align-items-center pb-3 mb-4 w-100 text-white text-decoration-none border-bottom border-secondary">
                    <span class="fs-4 fw-bold font-outfit text-gradient d-none d-sm-inline">AccountForge</span>
                    <i class="bi bi-shield-check fs-4 d-sm-none text-primary"></i>
                </a>
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100" id="menu">
                    <li class="nav-item w-100">
                        <a href="{{ route('admin.dashboard') }}" class="sidebar-link active">
                            <i class="bi bi-speedometer2 me-2"></i> <span class="d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-people me-2"></i> <span class="d-none d-sm-inline">Users</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="{{ route('admin.categories.index') }}" class="sidebar-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                            <i class="bi bi-tags me-2"></i> <span class="d-none d-sm-inline">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-box me-2"></i> <span class="d-none d-sm-inline">Services</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-globe me-2"></i> <span class="d-none d-sm-inline">Countries</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-card-checklist me-2"></i> <span class="d-none d-sm-inline">Requests</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-chat-dots me-2"></i> <span class="d-none d-sm-inline">Messages</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-gear me-2"></i> <span class="d-none d-sm-inline">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col d-flex flex-column main-content">
            <!-- Header/Topbar -->
            <header class="topbar p-3 d-flex justify-content-between align-items-center sticky-top">
                <div>
                    <h5 class="mb-0 fw-bold font-outfit">@yield('page_title', 'Admin Dashboard')</h5>
                </div>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=3b82f6&color=fff" alt="admin" width="35" height="35" class="rounded-circle me-2">
                        <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end bg-glass shadow" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="{{ url('/') }}">View Site</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-4 flex-grow-1">
                @yield('content')
            </main>
            
            <!-- Footer -->
            <footer class="p-3 text-center text-muted small border-top border-secondary mt-auto">
                &copy; {{ date('Y') }} AccountForge Admin Panel.
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

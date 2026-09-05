<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard - SocialBoost')</title>

    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|outfit:500,600,700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <style>
        :root { --sidebar-width: 220px; }
        body { background-color: var(--dark-bg, #0f172a); color: #e2e8f0; font-family: 'Inter', sans-serif; }

        .sidebar {
            position: fixed;
            top: 0; left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            overflow-y: auto;
            background-color: #0a1628;
            border-right: 1px solid rgba(255,255,255,0.06);
            z-index: 1040;
            scrollbar-width: thin;
            scrollbar-color: #334155 transparent;
        }
        .sidebar::-webkit-scrollbar { width: 4px; }
        .sidebar::-webkit-scrollbar-thumb { background: #334155; border-radius: 4px; }

        .sidebar-brand { padding: 1.25rem 1.25rem 1rem; border-bottom: 1px solid rgba(255,255,255,0.06); display: block; text-decoration: none; }
        .sidebar-nav { padding: 1rem 0.75rem; }
        .sidebar-section { font-size: 10px; text-transform: uppercase; letter-spacing: 1px; color: #475569; padding: 0.75rem 0.75rem 0.25rem; }

        .sidebar-link {
            display: flex; align-items: center; gap: 0.65rem;
            color: #94a3b8; padding: 0.6rem 0.85rem; border-radius: 8px;
            text-decoration: none; font-size: 0.875rem; font-weight: 500;
            transition: all 0.2s; margin-bottom: 2px;
        }
        .sidebar-link:hover { background: rgba(59,130,246,0.12); color: #93c5fd; }
        .sidebar-link.active { background: #3b82f6; color: #fff; box-shadow: 0 4px 12px rgba(59,130,246,0.35); }
        .sidebar-link i { font-size: 1rem; width: 18px; text-align: center; }

        .main-wrapper { margin-left: var(--sidebar-width); display: flex; flex-direction: column; min-height: 100vh; }

        .topbar {
            position: sticky; top: 0; z-index: 1030;
            background: rgba(10,22,40,0.9); backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255,255,255,0.06);
            padding: 0.75rem 1.5rem; display: flex; align-items: center; justify-content: space-between;
        }

        .topbar-icon {
            width: 38px; height: 38px; border-radius: 10px;
            display: inline-flex; align-items: center; justify-content: center;
            background: rgba(255,255,255,0.06); color: #94a3b8;
            border: 1px solid rgba(255,255,255,0.06); text-decoration: none;
            transition: all 0.2s; position: relative;
        }
        .topbar-icon:hover { background: #3b82f6; color: #fff; border-color: #3b82f6; }
        .topbar-icon .badge-dot { position: absolute; top: 5px; right: 5px; width: 8px; height: 8px; background: #ef4444; border-radius: 50%; border: 2px solid #0a1628; }

        .page-content { padding: 1.5rem; flex-grow: 1; }

        .dataTables_wrapper .dataTables_filter input,
        .dataTables_wrapper .dataTables_length select {
            background: #1e293b; border: 1px solid rgba(255,255,255,0.1); color: #e2e8f0;
            border-radius: 6px; padding: 4px 8px;
        }
        .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_filter label,
        .dataTables_wrapper .dataTables_length label { color: #94a3b8; font-size: 0.8rem; }
        .dataTables_wrapper .dataTables_paginate .paginate_button { color: #94a3b8 !important; border-radius: 6px !important; border: none !important; }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current { background: #3b82f6 !important; color: #fff !important; }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover { background: rgba(59,130,246,0.2) !important; color: #93c5fd !important; }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover { background: rgba(59,130,246,0.2) !important; color: #93c5fd !important; }
        .dataTables_wrapper { padding: 1.5rem !important; }

        /* Search Bar */
        .topbar-search {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 0.4rem 1rem;
            color: #e2e8f0;
            outline: none;
            width: 250px;
            transition: all 0.3s ease;
        }
        .topbar-search:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: #3b82f6;
        }

        /* WhatsApp float */
        .whatsapp-float { position: fixed; bottom: 24px; right: 24px; background: #25d366; color: #fff; width: 52px; height: 52px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; box-shadow: 0 4px 16px rgba(37,211,102,0.5); z-index: 9999; text-decoration: none; transition: transform 0.2s; }
        .whatsapp-float:hover { transform: scale(1.1); color: #fff; }
    </style>
</head>
<body>

<div class="sidebar">
    <a href="{{ route('user.dashboard') }}" class="sidebar-brand">
        <span class="fw-bold fs-5 font-outfit" style="background: linear-gradient(135deg,#60a5fa,#a78bfa); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">
            SocialBoost
        </span>
        <div class="text-secondary" style="font-size:11px;">Client Dashboard</div>
    </a>

    <nav class="sidebar-nav">
        <div class="sidebar-section">Overview</div>
        <a href="{{ route('user.dashboard') }}" class="sidebar-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid-1x2"></i> Dashboard
        </a>

        <div class="sidebar-section">Services</div>
        <a href="{{ route('user.requests.create') }}" class="sidebar-link {{ request()->routeIs('user.requests.create') ? 'active' : '' }}">
            <i class="bi bi-plus-circle"></i> New Request
        </a>
        <a href="{{ route('user.requests.index') }}" class="sidebar-link {{ request()->routeIs('user.requests.index') || request()->routeIs('user.requests.show') ? 'active' : '' }}">
            <i class="bi bi-list-task"></i> My Requests
        </a>

        <div class="sidebar-section">Communication</div>
        <a href="{{ route('user.messages.index') }}" class="sidebar-link {{ request()->routeIs('user.messages.*') ? 'active' : '' }}">
            <i class="bi bi-chat-dots"></i> Messages
        </a>
        <a href="{{ route('user.notifications.index') }}" class="sidebar-link {{ request()->routeIs('user.notifications.*') ? 'active' : '' }}">
            <i class="bi bi-bell"></i> Notifications
        </a>

        <div class="sidebar-section">Account</div>
        <a href="{{ route('user.profile.index') }}" class="sidebar-link {{ request()->routeIs('user.profile.*') ? 'active' : '' }}">
            <i class="bi bi-person-gear"></i> Profile
        </a>
    </nav>
</div>

<div class="main-wrapper">
    <header class="topbar">
        <div>
            <h6 class="mb-0 fw-bold font-outfit">@yield('page_title', 'Dashboard')</h6>
        </div>
        <div class="d-flex align-items-center gap-3">
            <div class="position-relative d-none d-md-block">
                <i class="bi bi-search position-absolute text-muted" style="left: 12px; top: 50%; transform: translateY(-50%);"></i>
                <input type="text" class="topbar-search ps-5" placeholder="Search...">
            </div>
            
            <!-- Notifications Dropdown -->
            <div class="dropdown hover-dropdown">
                <a href="{{ route('user.notifications.index') }}" class="topbar-icon" title="Notifications">
                    <i class="bi bi-bell fs-6"></i>
                    <span class="badge-dot"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end shadow border border-secondary mt-0" style="width:320px; max-width:90vw;">
                    <li class="px-3 py-2 border-bottom border-secondary">
                        <strong class="small">Latest Notifications</strong>
                    </li>
                    <li>
                        <a class="dropdown-item py-2" href="#">
                            <div class="d-flex gap-2">
                                <span class="text-success fs-5"><i class="bi bi-check-circle-fill"></i></span>
                                <div>
                                    <div class="small fw-bold">Request Completed</div>
                                    <div class="text-secondary" style="font-size:12px;">Your request has been marked as completed.</div>
                                    <div class="text-muted" style="font-size:11px;">2 hours ago</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item py-2" href="#">
                            <div class="d-flex gap-2">
                                <span class="text-warning fs-5"><i class="bi bi-arrow-repeat"></i></span>
                                <div>
                                    <div class="small fw-bold">Status Update: In Progress</div>
                                    <div class="text-secondary" style="font-size:12px;">Your request has been moved to In Progress.</div>
                                    <div class="text-muted" style="font-size:11px;">Yesterday</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="border-top border-secondary">
                        <a class="dropdown-item text-center small text-primary py-2" href="{{ route('user.notifications.index') }}">View All Notifications</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('user.messages.index') }}" class="topbar-icon" title="Messages">
                <i class="bi bi-chat-dots fs-6"></i>
            </a>
            <div class="dropdown ms-1">
                <a href="#" class="d-flex align-items-center gap-2 text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ Auth::user()->avatar ? Storage::url(Auth::user()->avatar) : 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name).'&background=60a5fa&color=fff' }}"
                         alt="user" width="34" height="34" class="rounded-circle" style="object-fit:cover;">
                    <span class="d-none d-md-inline small fw-bold">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end shadow border border-secondary mt-2">
                    <li><a class="dropdown-item small" href="{{ route('user.profile.index') }}"><i class="bi bi-person me-2"></i>My Profile</a></li>
                    <li><a class="dropdown-item small" href="{{ url('/') }}"><i class="bi bi-house me-2"></i>View Site</a></li>
                    <li><hr class="dropdown-divider border-secondary"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item small text-danger" type="submit"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="page-content">
        @yield('content')
    </main>

    <footer class="text-center text-muted small py-3 border-top border-secondary">
        &copy; {{ date('Y') }} SocialBoost. All rights reserved.
    </footer>
</div>

<!-- WhatsApp Float -->
<a href="https://wa.me/923704635765" target="_blank" class="whatsapp-float" title="Chat with us on WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        if ($('.dt-table').length) {
            $('.dt-table').DataTable({ responsive: true, order: [], language: { search: '', searchPlaceholder: 'Search...' } });
        }
    });
</script>
@stack('scripts')
</body>
</html>

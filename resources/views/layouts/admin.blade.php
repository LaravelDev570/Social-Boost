<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin - SocialBoost')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|outfit:500,600,700&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <style>
        :root { --sidebar-width: 220px; }
        body { background-color: var(--dark-bg, #0f172a); color: #e2e8f0; font-family: 'Inter', sans-serif; }

        /* Fixed Sidebar */
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

        .sidebar-brand {
            padding: 1.25rem 1.25rem 1rem;
            border-bottom: 1px solid rgba(255,255,255,0.06);
            display: block;
            text-decoration: none;
        }

        .sidebar-nav { padding: 1rem 0.75rem; }
        .sidebar-section { font-size: 10px; text-transform: uppercase; letter-spacing: 1px; color: #475569; padding: 0.75rem 0.75rem 0.25rem; }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 0.65rem;
            color: #94a3b8;
            padding: 0.6rem 0.85rem;
            border-radius: 8px;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.2s;
            margin-bottom: 2px;
        }
        .sidebar-link:hover { background: rgba(59,130,246,0.12); color: #93c5fd; }
        .sidebar-link.active { background: #3b82f6; color: #fff; box-shadow: 0 4px 12px rgba(59,130,246,0.35); }
        .sidebar-link i { font-size: 1rem; width: 18px; text-align: center; }

        /* Main wrapper */
        .main-wrapper {
            margin-left: var(--sidebar-width);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Topbar */
        .topbar {
            position: sticky;
            top: 0;
            z-index: 1030;
            background: rgba(10,22,40,0.9);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255,255,255,0.06);
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .topbar-icon {
            width: 38px; height: 38px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.06);
            color: #94a3b8;
            border: 1px solid rgba(255,255,255,0.06);
            text-decoration: none;
            transition: all 0.2s;
            position: relative;
        }
        .topbar-icon:hover { background: #3b82f6; color: #fff; border-color: #3b82f6; }
        .topbar-icon .badge-dot {
            position: absolute;
            top: 5px; right: 5px;
            width: 8px; height: 8px;
            background: #ef4444;
            border-radius: 50%;
            border: 2px solid #0a1628;
        }

        /* Page content */
        .page-content { padding: 1.5rem; flex-grow: 1; }

        /* DataTables dark theme fix */
        .dataTables_wrapper .dataTables_filter input,
        .dataTables_wrapper .dataTables_length select {
            background: #1e293b;
            border: 1px solid rgba(255,255,255,0.1);
            color: #e2e8f0;     
            border-radius: 6px;
            padding: 4px 8px;
        }
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_filter label,
        .dataTables_wrapper .dataTables_length label { color: #94a3b8; font-size: 0.8rem; }
        .dataTables_wrapper .dataTables_paginate .paginate_button { color: #94a3b8 !important; border-radius: 6px !important; border: none !important; }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current { background: #3b82f6 !important; color: #fff !important; }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover { background: rgba(59,130,246,0.2) !important; color: #93c5fd !important; }

        /* Fix DataTables overriding Bootstrap p-0 on card-body */
        .dataTables_wrapper { padding: 1rem !important; }
        .dataTables_wrapper table.dataTable { padding: 0 !important; margin-top: 0.75rem !important; }
        .dt-table thead th { white-space: nowrap; }
    </style>
</head>
<body>

<div class="sidebar">
    <a href="{{ route('admin.dashboard') }}" class="sidebar-brand text-decoration-none">
        <span class="fw-bold fs-5 font-outfit" style="background: linear-gradient(135deg,#60a5fa,#a78bfa); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">
            SocialBoost
        </span>
        <div class="text-secondary" style="font-size:11px;">Admin Panel</div>
    </a>

    <nav class="sidebar-nav">
        <div class="sidebar-section">Main</div>
        <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <div class="sidebar-section">Management</div>
        <a href="{{ route('admin.users.index') }}" class="sidebar-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
            <i class="bi bi-people"></i> Users
        </a>
        <a href="{{ route('admin.categories.index') }}" class="sidebar-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
            <i class="bi bi-tags"></i> Categories
        </a>
        <a href="{{ route('admin.services.index') }}" class="sidebar-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
            <i class="bi bi-box-seam"></i> Services
        </a>
        <a href="{{ route('admin.countries.index') }}" class="sidebar-link {{ request()->routeIs('admin.countries.*') ? 'active' : '' }}">
            <i class="bi bi-globe2"></i> Countries
        </a>
        <a href="{{ route('admin.requests.index') }}" class="sidebar-link {{ request()->routeIs('admin.requests.*') ? 'active' : '' }}">
            <i class="bi bi-card-checklist"></i> Requests
        </a>

        <div class="sidebar-section">Communication</div>
        <a href="{{ route('admin.messages.index') }}" class="sidebar-link {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
            <i class="bi bi-chat-dots"></i> Messages
            <span class="badge bg-primary ms-auto rounded-pill" style="font-size:10px;">5</span>
        </a>

        <div class="sidebar-section">System</div>
        <a href="{{ route('admin.settings.index') }}" class="sidebar-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
            <i class="bi bi-gear"></i> Settings
        </a>
    </nav>
</div>

<div class="main-wrapper">
    <!-- Topbar -->
    <header class="topbar">
        <div>
            <h6 class="mb-0 fw-bold font-outfit">@yield('page_title', 'Dashboard')</h6>
        </div>
        <div class="d-flex align-items-center gap-2">
            <!-- Notifications Dropdown -->
            <div class="dropdown hover-dropdown">
                <a href="#" class="topbar-icon" data-bs-toggle="dropdown" title="Notifications">
                    <i class="bi bi-bell fs-6"></i>
                    <span class="badge-dot"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end shadow border border-secondary mt-2" style="width:320px; max-width:90vw;">
                    <li class="px-3 py-2 border-bottom border-secondary">
                        <strong class="small">Latest Notifications</strong>
                    </li>
                    <li>
                        <a class="dropdown-item py-2" href="#">
                            <div class="d-flex gap-2">
                                <span class="text-success fs-5"><i class="bi bi-check-circle-fill"></i></span>
                                <div>
                                    <div class="small fw-bold">New Request Submitted</div>
                                    <div class="text-secondary" style="font-size:12px;">A user submitted a new service request.</div>
                                    <div class="text-muted" style="font-size:11px;">5 min ago</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item py-2" href="#">
                            <div class="d-flex gap-2">
                                <span class="text-primary fs-5"><i class="bi bi-person-plus-fill"></i></span>
                                <div>
                                    <div class="small fw-bold">New User Registered</div>
                                    <div class="text-secondary" style="font-size:12px;">A new client has created an account.</div>
                                    <div class="text-muted" style="font-size:11px;">1 hour ago</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item py-2" href="#">
                            <div class="d-flex gap-2">
                                <span class="text-warning fs-5"><i class="bi bi-chat-dots-fill"></i></span>
                                <div>
                                    <div class="small fw-bold">New Message</div>
                                    <div class="text-secondary" style="font-size:12px;">A client sent you a message.</div>
                                    <div class="text-muted" style="font-size:11px;">3 hours ago</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="border-top border-secondary">
                        <a class="dropdown-item text-center small text-primary py-2" href="#">View All Notifications</a>
                    </li>
                </ul>
            </div>

            <!-- Messages Icon -->
            <a href="{{ route('admin.messages.index') }}" class="topbar-icon" title="Messages">
                <i class="bi bi-chat-dots fs-6"></i>
                <span class="badge-dot"></span>
            </a>

            <!-- User Dropdown -->
            <div class="dropdown ms-1">
                <a href="#" class="d-flex align-items-center gap-2 text-white text-decoration-none dropdown-toggle" id="adminDropdown" data-bs-toggle="dropdown">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=3b82f6&color=fff"
                         alt="admin" width="34" height="34" class="rounded-circle">
                    <span class="d-none d-md-inline small fw-bold">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end shadow border border-secondary mt-2" aria-labelledby="adminDropdown">
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

    <!-- Page Content -->
    <main class="page-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center text-muted small py-3 border-top border-secondary">
        &copy; {{ date('Y') }} SocialBoost Admin Panel
    </footer>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        // Auto-initialize DataTables on any table with class .dt-table
        if ($('.dt-table').length) {
            $('.dt-table').DataTable({
                responsive: true,
                order: [],
                language: {
                    search: '',
                    searchPlaceholder: 'Search records...',
                }
            });
        }
    });
</script>
@stack('scripts')
</body>
</html>

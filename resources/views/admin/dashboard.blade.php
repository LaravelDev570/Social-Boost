@extends('layouts.admin')

@section('title', 'Overview - AccountForge Admin')
@section('page_title', 'Overview')

@section('content')
<div class="row g-4 mb-4 fade-in-up">
    <!-- Stat Card 1 -->
    <div class="col-sm-6 col-xl-3">
        <div class="card card-glass border-0">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="card-title mb-0 text-secondary">Total Users</h6>
                    <div class="bg-primary bg-opacity-10 text-primary p-2 rounded">
                        <i class="bi bi-people-fill fs-5"></i>
                    </div>
                </div>
                <h2 class="fw-bold mb-1">{{ $stats['total_users'] ?? 0 }}</h2>
                <span class="text-success small"><i class="bi bi-arrow-up-short"></i> Registered clients</span>
            </div>
        </div>
    </div>
    
    <!-- Stat Card 2 -->
    <div class="col-sm-6 col-xl-3">
        <div class="card card-glass border-0">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="card-title mb-0 text-secondary">Active Requests</h6>
                    <div class="bg-warning bg-opacity-10 text-warning p-2 rounded">
                        <i class="bi bi-activity fs-5"></i>
                    </div>
                </div>
                <h2 class="fw-bold mb-1">{{ $stats['active_requests'] ?? 0 }}</h2>
                <span class="text-warning small">In Progress / Pending</span>
            </div>
        </div>
    </div>
    
    <!-- Stat Card 3 -->
    <div class="col-sm-6 col-xl-3">
        <div class="card card-glass border-0">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="card-title mb-0 text-secondary">Completed Work</h6>
                    <div class="bg-success bg-opacity-10 text-success p-2 rounded">
                        <i class="bi bi-check-circle-fill fs-5"></i>
                    </div>
                </div>
                <h2 class="fw-bold mb-1">{{ $stats['completed_requests'] ?? 0 }}</h2>
                <span class="text-success small">Successfully delivered</span>
            </div>
        </div>
    </div>
    
    <!-- Stat Card 4 -->
    <div class="col-sm-6 col-xl-3">
        <div class="card card-glass border-0">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="card-title mb-0 text-secondary">New Messages</h6>
                    <div class="bg-info bg-opacity-10 text-info p-2 rounded">
                        <i class="bi bi-chat-dots-fill fs-5"></i>
                    </div>
                </div>
                <h2 class="fw-bold mb-1">{{ $stats['messages'] ?? 0 }}</h2>
                <span class="text-info small">Unread conversations</span>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 fade-in-up" style="animation-delay: 0.1s;">
    <!-- Recent Requests Table -->
    <div class="col-12 col-xl-8">
        <div class="card card-glass border-0 h-100">
            <div class="card-header bg-transparent border-secondary py-3 d-flex justify-content-between align-items-center">
                <h6 class="mb-0 fw-bold">Recent Requests</h6>
                <a href="{{ route('admin.requests.index') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">View All</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0 align-middle">
                        <thead class="text-secondary small">
                            <tr>
                                <th class="ps-4">Request ID</th>
                                <th>Client</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th class="pe-4 text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recent_requests as $req)
                            <tr>
                                <td class="ps-4 text-primary">{{ $req->uuid }}</td>
                                <td>{{ $req->user->name }}</td>
                                <td>{{ $req->service->name }}</td>
                                <td>
                                    @php
                                        $badgeClass = match($req->status) {
                                            'Pending' => 'bg-secondary',
                                            'In Progress' => 'bg-warning text-dark',
                                            'Waiting for User' => 'bg-info text-dark',
                                            'Completed' => 'bg-success',
                                            'Cancelled' => 'bg-danger',
                                            default => 'bg-secondary',
                                        };
                                    @endphp
                                    <span class="badge {{ $badgeClass }}">{{ $req->status }}</span>
                                </td>
                                <td class="pe-4 text-end">
                                    <a href="{{ route('admin.requests.show', $req) }}" class="btn btn-sm btn-primary rounded-pill px-3">Manage</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">
                                    No recent requests found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Actions / System Status -->
    <div class="col-12 col-xl-4">
        <div class="card card-glass border-0 h-100">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold">System Status</h6>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush bg-transparent">
                    <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between align-items-center border-secondary">
                        <div>
                            <i class="bi bi-globe text-primary me-2"></i> Website Public Access
                        </div>
                        <span class="badge bg-success rounded-pill">Active</span>
                    </li>
                    <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between align-items-center border-secondary">
                        <div>
                            <i class="bi bi-whatsapp text-success me-2"></i> WhatsApp Integration
                        </div>
                        <span class="badge bg-success rounded-pill">Connected</span>
                    </li>
                    <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between align-items-center border-secondary">
                        <div>
                            <i class="bi bi-envelope text-warning me-2"></i> Email Notifications
                        </div>
                        <span class="badge bg-secondary rounded-pill">Disabled</span>
                    </li>
                </ul>
                
                <div class="mt-4">
                    <h6 class="fw-bold mb-3">Quick Actions</h6>
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.services.create') }}" class="btn btn-outline-info text-start"><i class="bi bi-plus-circle me-2"></i> Add New Service</a>
                        <a href="{{ route('admin.settings.index') }}" class="btn btn-outline-light text-start"><i class="bi bi-sliders me-2"></i> Update Site Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

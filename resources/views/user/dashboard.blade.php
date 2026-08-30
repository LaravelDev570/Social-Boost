@extends('layouts.user')

@section('title', 'My Dashboard - AccountForge')
@section('page_title', 'Dashboard Overview')

@section('content')
<!-- Welcome Header -->
<div class="card card-glass border-0 mb-4 fade-in-up">
    <div class="card-body p-4 p-md-5 d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div>
            <h3 class="fw-bold mb-2">Welcome back, <span class="text-primary">{{ Auth::user()->name }}</span>!</h3>
            <p class="text-secondary mb-0">Ready to boost your brand? Start a new digital service request today.</p>
        </div>
        <a href="{{ route('user.requests.create') }}" class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm">
            <i class="bi bi-plus-lg me-2"></i> New Request
        </a>
    </div>
</div>

<div class="row g-4 mb-4 fade-in-up" style="animation-delay: 0.1s;">
    <!-- Stat Card 1 -->
    <div class="col-md-4">
        <div class="card card-glass border-0 h-100">
            <div class="card-body text-center p-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-circle mb-3" style="width: 60px; height: 60px;">
                    <i class="bi bi-card-list fs-3"></i>
                </div>
                <h3 class="fw-bold mb-1">{{ $stats['total_requests'] ?? 0 }}</h3>
                <p class="text-secondary mb-0">Total Requests</p>
            </div>
        </div>
    </div>
    
    <!-- Stat Card 2 -->
    <div class="col-md-4">
        <div class="card card-glass border-0 h-100">
            <div class="card-body text-center p-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-warning bg-opacity-10 text-warning rounded-circle mb-3" style="width: 60px; height: 60px;">
                    <i class="bi bi-hourglass-split fs-3"></i>
                </div>
                <h3 class="fw-bold mb-1">{{ $stats['active_requests'] ?? 0 }}</h3>
                <p class="text-secondary mb-0">Active Requests</p>
            </div>
        </div>
    </div>
    
    <!-- Stat Card 3 -->
    <div class="col-md-4">
        <div class="card card-glass border-0 h-100">
            <div class="card-body text-center p-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success rounded-circle mb-3" style="width: 60px; height: 60px;">
                    <i class="bi bi-check2-all fs-3"></i>
                </div>
                <h3 class="fw-bold mb-1">{{ $stats['completed_requests'] ?? 0 }}</h3>
                <p class="text-secondary mb-0">Completed</p>
            </div>
        </div>
    </div>
</div>

<!-- Active Requests -->
<div class="card card-glass border-0 fade-in-up" style="animation-delay: 0.2s;">
    <div class="card-header bg-transparent border-secondary py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold">My Recent Requests</h5>
        <a href="{{ route('user.requests.index') }}" class="text-primary text-decoration-none small">View all</a>
    </div>
    <div class="card-body p-0">
        @if($recent_requests->count() > 0)
        <div class="table-responsive">
            <table class="table table-dark table-hover mb-0 align-middle">
                <thead class="text-secondary small">
                    <tr>
                        <th class="ps-4">Request ID</th>
                        <th>Service</th>
                        <th>Status</th>
                        <th class="pe-4 text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recent_requests as $req)
                    <tr>
                        <td class="ps-4 fw-bold text-primary">{{ $req->uuid }}</td>
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
                            <a href="{{ route('user.requests.show', $req) }}" class="btn btn-sm btn-outline-light rounded-pill px-3">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="text-center py-5">
            <div class="mb-3">
                <i class="bi bi-inbox text-secondary" style="font-size: 3rem;"></i>
            </div>
            <h5 class="text-light">No requests found</h5>
            <p class="text-secondary mb-4">You haven't made any service requests yet.</p>
            <a href="{{ route('user.requests.create') }}" class="btn btn-outline-primary rounded-pill px-4">Start your first request</a>
        </div>
        @endif
    </div>
</div>
@endsection

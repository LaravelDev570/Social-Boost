@extends('layouts.admin')

@section('title', 'Dashboard - SocialBoost Admin')
@section('page_title', 'Dashboard Overview')

@section('content')
<!-- ─── Stats Row ─── -->
<div class="row g-3 mb-4 fade-in-up">
    <div class="col-sm-6 col-xl-3">
        <div class="card card-glass border-0">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-secondary small fw-semibold">Total Users</span>
                    <div class="bg-primary bg-opacity-10 text-primary p-2 rounded-3"><i class="bi bi-people-fill"></i></div>
                </div>
                <h3 class="fw-bold mb-0">{{ $stats['total_users'] ?? 0 }}</h3>
                <span class="text-secondary" style="font-size: 0.7rem;">Registered clients</span>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card card-glass border-0">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-secondary small fw-semibold">Active Requests</span>
                    <div class="bg-warning bg-opacity-10 text-warning p-2 rounded-3"><i class="bi bi-activity"></i></div>
                </div>
                <h3 class="fw-bold mb-0">{{ $stats['active_requests'] ?? 0 }}</h3>
                <span class="text-secondary" style="font-size: 0.7rem;">In Progress / Pending</span>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card card-glass border-0">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-secondary small fw-semibold">Completed</span>
                    <div class="bg-success bg-opacity-10 text-success p-2 rounded-3"><i class="bi bi-check-circle-fill"></i></div>
                </div>
                <h3 class="fw-bold mb-0">{{ $stats['completed_requests'] ?? 0 }}</h3>
                <span class="text-secondary" style="font-size: 0.7rem;">Delivered successfully</span>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card card-glass border-0">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-secondary small fw-semibold">New Leads</span>
                    <div class="bg-info bg-opacity-10 text-info p-2 rounded-3"><i class="bi bi-lightning-charge-fill"></i></div>
                </div>
                <h3 class="fw-bold mb-0">{{ $stats['new_leads'] ?? 0 }}</h3>
                <span class="text-secondary" style="font-size: 0.7rem;">From homepage form</span>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 fade-in-up" style="animation-delay: 0.1s;">
    <!-- ─── Recent Requests ─── -->
    <div class="col-12 col-xl-7">
        <div class="card card-glass border-0 h-100">
            <div class="card-header bg-transparent border-secondary py-3 d-flex justify-content-between align-items-center">
                <h6 class="mb-0 fw-bold text-white"><i class="bi bi-clock-history me-2 text-primary"></i>Recent Requests</h6>
                <a href="{{ route('admin.requests.index') }}" class="text-primary text-decoration-none" style="font-size: 0.78rem;">View All <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0 align-middle" style="font-size: 0.85rem;">
                        <thead>
                            <tr class="text-secondary" style="font-size: 0.73rem;">
                                <th class="ps-4 fw-semibold">ID</th>
                                <th class="fw-semibold">Client</th>
                                <th class="fw-semibold">Service</th>
                                <th class="fw-semibold">Status</th>
                                <th class="pe-4 text-end fw-semibold"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recent_requests as $req)
                            <tr>
                                <td class="ps-4 text-primary fw-bold">{{ $req->uuid }}</td>
                                <td class="text-light">{{ $req->user->name }}</td>
                                <td class="text-light">{{ $req->service->name }}</td>
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
                                    <span class="badge {{ $badgeClass }} rounded-pill px-2" style="font-size: 0.68rem;">{{ $req->status }}</span>
                                </td>
                                <td class="pe-4 text-end">
                                    <a href="{{ route('admin.requests.show', $req) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3" style="font-size: 0.73rem;">Manage</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted small">No requests yet.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ─── New Leads from Homepage ─── -->
    <div class="col-12 col-xl-5">
        <div class="card card-glass border-0 h-100">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold text-white"><i class="bi bi-lightning-charge-fill me-2 text-warning"></i>Homepage Leads</h6>
            </div>
            <div class="card-body p-3">
                @forelse($recent_leads as $lead)
                <div class="d-flex align-items-start gap-3 p-3 rounded-3 mb-2" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.04);">
                    <div class="d-flex align-items-center justify-content-center rounded-circle flex-shrink-0"
                         style="width: 38px; height: 38px; background: {{ $lead->status === 'new' ? 'rgba(59,130,246,0.15)' : 'rgba(16,185,129,0.15)' }};">
                        <i class="bi bi-person-fill {{ $lead->status === 'new' ? 'text-primary' : 'text-success' }}"></i>
                    </div>
                    <div class="flex-grow-1 min-width-0">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <span class="fw-bold text-white small">{{ $lead->name }}</span>
                                @if($lead->status === 'new')
                                    <span class="badge bg-primary rounded-pill ms-2" style="font-size: 9px;">NEW</span>
                                @endif
                            </div>
                            <span class="text-secondary" style="font-size: 10px;">{{ $lead->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="text-secondary" style="font-size: 0.75rem;">
                            <i class="bi bi-{{ $lead->platform === 'TikTok' ? 'tiktok' : ($lead->platform === 'YouTube' ? 'youtube' : 'phone') }} me-1"></i>
                            {{ $lead->platform }} • {{ $lead->target_country }}
                        </div>
                        @if($lead->phone)
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $lead->phone) }}" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3 mt-2" style="font-size: 0.7rem;">
                            <i class="bi bi-whatsapp me-1"></i>Contact on WhatsApp
                        </a>
                        @endif
                    </div>
                </div>
                @empty
                <div class="text-center py-4">
                    <i class="bi bi-inbox text-secondary" style="font-size: 2rem;"></i>
                    <p class="text-secondary small mt-2 mb-0">No leads yet. They will appear here when someone fills the homepage form.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

<!-- ─── System Status & Quick Actions ─── -->
<div class="row g-4 mt-1 fade-in-up" style="animation-delay: 0.2s;">
    <div class="col-md-6">
        <div class="card card-glass border-0">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold text-white"><i class="bi bi-grid-3x3-gap me-2 text-primary"></i>Quick Actions</h6>
            </div>
            <div class="card-body p-3 d-grid gap-2">
                <a href="{{ route('admin.services.create') }}" class="btn btn-outline-info text-start btn-sm rounded-pill px-4"><i class="bi bi-plus-circle me-2"></i>Add New Service</a>
                <a href="{{ route('admin.messages.index') }}" class="btn btn-outline-primary text-start btn-sm rounded-pill px-4"><i class="bi bi-chat-dots me-2"></i>View Messages</a>
                <a href="{{ route('admin.settings.index') }}" class="btn btn-outline-light text-start btn-sm rounded-pill px-4"><i class="bi bi-sliders me-2"></i>Site Settings</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-glass border-0">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold text-white"><i class="bi bi-shield-check me-2 text-success"></i>System Status</h6>
            </div>
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center py-2 border-bottom border-secondary">
                    <span class="small text-light"><i class="bi bi-globe text-primary me-2"></i>Website</span>
                    <span class="badge bg-success rounded-pill" style="font-size: 0.68rem;">Active</span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2 border-bottom border-secondary">
                    <span class="small text-light"><i class="bi bi-whatsapp text-success me-2"></i>WhatsApp</span>
                    <span class="badge bg-success rounded-pill" style="font-size: 0.68rem;">Connected</span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2">
                    <span class="small text-light"><i class="bi bi-database text-warning me-2"></i>Database</span>
                    <span class="badge bg-success rounded-pill" style="font-size: 0.68rem;">Healthy</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

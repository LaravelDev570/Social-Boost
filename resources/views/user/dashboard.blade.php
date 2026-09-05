@extends('layouts.user')

@section('title', 'Dashboard - SocialBoost')
@section('page_title', 'Dashboard')

@section('content')
<div class="row g-4">
    <!-- ─── Welcome Card (Compact) ─── -->
    <div class="col-12">
        <div class="card card-glass border-0" style="overflow: hidden;">
            <div class="card-body p-4 d-flex align-items-center justify-content-between flex-wrap gap-3 position-relative">
                <div class="d-flex align-items-center gap-3">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle shadow-sm"
                         style="width: 48px; height: 48px; background: linear-gradient(135deg, #3b82f6, #8b5cf6);">
                        <i class="bi bi-hand-wave text-white fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">Welcome back, <span class="text-primary">{{ Auth::user()->name }}</span></h6>
                        <span class="text-secondary small">{{ now()->format('l, F j, Y') }}</span>
                    </div>
                </div>
                <a href="{{ route('user.requests.create') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-bold shadow-sm" style="font-size: 0.85rem;">
                    <i class="bi bi-plus-lg me-1"></i>New Request
                </a>
            </div>
        </div>
    </div>

    <!-- ─── Stats Row ─── -->
    <div class="col-sm-6 col-lg-4">
        <div class="card card-glass border-0 h-100">
            <div class="card-body p-3 d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center rounded-3"
                     style="width: 50px; height: 50px; background: rgba(59,130,246,0.1); flex-shrink: 0;">
                    <i class="bi bi-card-list text-primary fs-4"></i>
                </div>
                <div>
                    <h4 class="fw-bold mb-0">{{ $stats['total_requests'] ?? 0 }}</h4>
                    <span class="text-secondary" style="font-size: 0.8rem;">Total Requests</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card card-glass border-0 h-100">
            <div class="card-body p-3 d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center rounded-3"
                     style="width: 50px; height: 50px; background: rgba(251,191,36,0.1); flex-shrink: 0;">
                    <i class="bi bi-hourglass-split text-warning fs-4"></i>
                </div>
                <div>
                    <h4 class="fw-bold mb-0">{{ $stats['active_requests'] ?? 0 }}</h4>
                    <span class="text-secondary" style="font-size: 0.8rem;">In Progress</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card card-glass border-0 h-100">
            <div class="card-body p-3 d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center rounded-3"
                     style="width: 50px; height: 50px; background: rgba(16,185,129,0.1); flex-shrink: 0;">
                    <i class="bi bi-check2-all text-success fs-4"></i>
                </div>
                <div>
                    <h4 class="fw-bold mb-0">{{ $stats['completed_requests'] ?? 0 }}</h4>
                    <span class="text-secondary" style="font-size: 0.8rem;">Completed</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ─── Quick Actions ─── -->
    <div class="col-lg-4">
        <div class="card card-glass border-0 h-100">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold text-white small"><i class="bi bi-grid-3x3-gap me-2 text-primary"></i>Quick Actions</h6>
            </div>
            <div class="card-body p-3">
                <a href="{{ route('user.requests.create') }}" class="d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none mb-2" style="background: rgba(255,255,255,0.03); transition: all 0.2s;" onmouseover="this.style.background='rgba(59,130,246,0.08)'" onmouseout="this.style.background='rgba(255,255,255,0.03)'">
                    <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 40px; height: 40px; background: rgba(59,130,246,0.15); flex-shrink: 0;">
                        <i class="bi bi-plus-circle text-primary"></i>
                    </div>
                    <div>
                        <div class="fw-bold text-white small">New Service Request</div>
                        <div class="text-secondary" style="font-size: 11px;">Submit a new order</div>
                    </div>
                    <i class="bi bi-chevron-right text-secondary ms-auto"></i>
                </a>

                <a href="{{ route('user.messages.index') }}" class="d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none mb-2" style="background: rgba(255,255,255,0.03); transition: all 0.2s;" onmouseover="this.style.background='rgba(59,130,246,0.08)'" onmouseout="this.style.background='rgba(255,255,255,0.03)'">
                    <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 40px; height: 40px; background: rgba(167,139,250,0.15); flex-shrink: 0;">
                        <i class="bi bi-chat-dots text-info"></i>
                    </div>
                    <div>
                        <div class="fw-bold text-white small">Chat with Support</div>
                        <div class="text-secondary" style="font-size: 11px;">Send a message</div>
                    </div>
                    <i class="bi bi-chevron-right text-secondary ms-auto"></i>
                </a>

                <a href="{{ route('user.profile.index') }}" class="d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none" style="background: rgba(255,255,255,0.03); transition: all 0.2s;" onmouseover="this.style.background='rgba(59,130,246,0.08)'" onmouseout="this.style.background='rgba(255,255,255,0.03)'">
                    <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 40px; height: 40px; background: rgba(16,185,129,0.15); flex-shrink: 0;">
                        <i class="bi bi-person-gear text-success"></i>
                    </div>
                    <div>
                        <div class="fw-bold text-white small">Edit Profile</div>
                        <div class="text-secondary" style="font-size: 11px;">Update your info</div>
                    </div>
                    <i class="bi bi-chevron-right text-secondary ms-auto"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- ─── Recent Requests ─── -->
    <div class="col-lg-8">
        <div class="card card-glass border-0 h-100">
            <div class="card-header bg-transparent border-secondary py-3 d-flex justify-content-between align-items-center">
                <h6 class="mb-0 fw-bold text-white small"><i class="bi bi-clock-history me-2 text-primary"></i>Recent Requests</h6>
                <a href="{{ route('user.requests.index') }}" class="text-primary text-decoration-none" style="font-size: 0.78rem;">View All <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="card-body p-0">
                @if($recent_requests->count() > 0)
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0 align-middle" style="font-size: 0.85rem;">
                        <thead>
                            <tr class="text-secondary" style="font-size: 0.75rem;">
                                <th class="ps-4 fw-semibold">ID</th>
                                <th class="fw-semibold">Service</th>
                                <th class="fw-semibold">Status</th>
                                <th class="pe-4 text-end fw-semibold">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_requests as $req)
                            <tr>
                                <td class="ps-4 fw-bold text-primary">{{ $req->uuid }}</td>
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
                                    <span class="badge {{ $badgeClass }} rounded-pill px-2" style="font-size: 0.7rem;">{{ $req->status }}</span>
                                </td>
                                <td class="pe-4 text-end">
                                    <a href="{{ route('user.requests.show', $req) }}" class="btn btn-sm btn-outline-light rounded-pill px-3" style="font-size: 0.75rem;">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="text-center py-5">
                    <i class="bi bi-inbox text-secondary" style="font-size: 2.5rem;"></i>
                    <h6 class="text-light mt-3 mb-1">No requests yet</h6>
                    <p class="text-secondary small mb-3">You haven't made any service requests yet.</p>
                    <a href="{{ route('user.requests.create') }}" class="btn btn-outline-primary rounded-pill px-4 btn-sm">Create Your First Request</a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- ─── Need Help Card ─── -->
    <div class="col-12">
        <div class="card border-0 text-center" style="background: linear-gradient(135deg, rgba(59,130,246,0.08), rgba(167,139,250,0.08)); border: 1px solid rgba(59,130,246,0.15) !important; border-radius: 16px;">
            <div class="card-body p-4">
                <h6 class="fw-bold text-white mb-1">Need Help? We're Here For You</h6>
                <p class="text-secondary small mb-3">Have questions about your order? Chat with us or reach out on WhatsApp.</p>
                <div class="d-flex justify-content-center gap-2">
                    <a href="{{ route('user.messages.index') }}" class="btn btn-primary btn-sm rounded-pill px-4">
                        <i class="bi bi-chat-dots me-1"></i>Chat
                    </a>
                    <a href="https://wa.me/923704635765" target="_blank" class="btn btn-success btn-sm rounded-pill px-4">
                        <i class="bi bi-whatsapp me-1"></i>WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.user')

@section('title', 'Request Details - AccountForge')
@section('page_title', 'Request Details: ' . $request->uuid)

@section('content')
<div class="row g-4 fade-in-up">
    <div class="col-lg-8">
        <div class="card card-glass border-0 mb-4">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold">Service Details</h6>
            </div>
            <div class="card-body p-4">
                <div class="row mb-4">
                    <div class="col-sm-4">
                        <p class="text-secondary small mb-1">Service Requested</p>
                        <h6 class="fw-bold">{{ $request->service->name }}</h6>
                    </div>
                    <div class="col-sm-4">
                        <p class="text-secondary small mb-1">Target Region</p>
                        <h6 class="fw-bold">{{ $request->country->name }}</h6>
                    </div>
                    <div class="col-sm-4">
                        <p class="text-secondary small mb-1">Date Submitted</p>
                        <h6 class="fw-bold">{{ $request->created_at->format('M d, Y H:i') }}</h6>
                    </div>
                </div>
                
                <div>
                    <p class="text-secondary small mb-2">Requirement Details Provided</p>
                    <div class="p-3 bg-dark border border-secondary rounded">
                        {!! nl2br(e($request->details)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card card-glass border-0">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold">Status Overview</h6>
            </div>
            <div class="card-body p-4 text-center">
                @php
                    $badgeClass = match($request->status) {
                        'Pending' => 'bg-secondary',
                        'In Progress' => 'bg-warning text-dark',
                        'Waiting for User' => 'bg-info text-dark',
                        'Completed' => 'bg-success',
                        'Cancelled' => 'bg-danger',
                        default => 'bg-secondary',
                    };
                @endphp
                
                <h1 class="display-1 text-primary mb-3"><i class="bi bi-clock-history"></i></h1>
                <h5 class="mb-2">Current Status</h5>
                <span class="badge {{ $badgeClass }} fs-6 px-3 py-2 rounded-pill">{{ $request->status }}</span>
                
                <hr class="border-secondary my-4">
                
                <p class="text-secondary small mb-3">Need to discuss this request? Contact our support via WhatsApp and quote your Request ID.</p>
                <a href="https://wa.me/1234567890?text=Hello,%20I%20have%20a%20question%20about%20my%20request:%20{{ $request->uuid }}" target="_blank" class="btn btn-success w-100 rounded-pill fw-bold">
                    <i class="bi bi-whatsapp me-2"></i> Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

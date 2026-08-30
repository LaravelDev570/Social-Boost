@extends('layouts.admin')

@section('title', 'Manage Request - AccountForge Admin')
@section('page_title', 'Manage Request: ' . $request->uuid)

@section('content')
<div class="row g-4 fade-in-up">
    <!-- Left Column: Details -->
    <div class="col-lg-8">
        <div class="card card-glass border-0 mb-4">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold text-white">Client Information & Requirements</h6>
            </div>
            <div class="card-body p-4">
                <div class="row mb-4">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <p class="text-secondary small mb-1">Client Name</p>
                        <h6 class="fw-bold text-white">{{ $request->user->name }} <span class="text-muted small">({{ $request->user->email }})</span></h6>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-secondary small mb-1">Date Submitted</p>
                        <h6 class="fw-bold text-white">{{ $request->created_at->format('M d, Y H:i:s') }}</h6>
                    </div>
                </div>
                
                <hr class="border-secondary mb-4">
                
                <div class="row mb-4">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <p class="text-secondary small mb-1">Service Requested</p>
                        <h6 class="fw-bold text-primary">{{ $request->service->name }}</h6>
                        <span class="badge bg-secondary">{{ $request->service->category->name }}</span>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-secondary small mb-1">Target Region</p>
                        <h6 class="fw-bold text-white">{{ $request->country->name }}</h6>
                    </div>
                </div>

                <div>
                    <p class="text-secondary small mb-2">Requirement Details</p>
                    <div class="p-3 bg-dark border border-secondary rounded text-white" style="line-height:1.7;">
                        {!! nl2br(e($request->details)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Right Column: Status Management -->
    <div class="col-lg-4">
        <div class="card card-glass border-0 mb-4">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold">Update Status</h6>
            </div>
            <div class="card-body p-4">
                @if(session('success'))
                    <div class="alert alert-success bg-success bg-opacity-25 text-light border-0 mb-3 rounded small">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('admin.requests.update_status', $request) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label text-light small fw-bold">Current Status</label>
                        <select name="status" class="form-select bg-dark text-light border-secondary focus-ring focus-ring-primary">
                            <option value="Pending" {{ $request->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="In Progress" {{ $request->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="Waiting for User" {{ $request->status == 'Waiting for User' ? 'selected' : '' }}>Waiting for User</option>
                            <option value="Completed" {{ $request->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                            <option value="Cancelled" {{ $request->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 rounded-pill fw-bold">Update Status</button>
                </form>
            </div>
        </div>
        
        <div class="card card-glass border-0">
            <div class="card-body p-4 text-center">
                <p class="text-secondary small mb-3">Communicate with the client using WhatsApp.</p>
                <a href="https://wa.me/?text=Hello%20{{ urlencode($request->user->name) }},%20regarding%20your%20Request%20ID:%20{{ $request->uuid }}" target="_blank" class="btn btn-outline-success w-100 rounded-pill">
                    <i class="bi bi-whatsapp me-2"></i> Message Client
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

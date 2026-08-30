@extends('layouts.user')

@section('title', 'My Requests - AccountForge')
@section('page_title', 'My Requests')

@section('content')
<div class="card card-glass border-0 fade-in-up">
    <div class="card-header bg-transparent border-secondary py-3 d-flex justify-content-between align-items-center">
        <h6 class="mb-0 fw-bold">Request History</h6>
        <a href="{{ route('user.requests.create') }}" class="btn btn-sm btn-primary rounded-pill px-3">
            <i class="bi bi-plus-lg me-1"></i> New Request
        </a>
    </div>
    
    <div class="card-body p-0">
        @if(session('success'))
            <div class="alert alert-success bg-success bg-opacity-25 text-light border-0 m-3 rounded">
                {{ session('success') }}
            </div>
        @endif
        
        <div class="table-responsive">
            <table class="table table-dark table-hover mb-0 align-middle">
                <thead class="text-secondary small">
                    <tr>
                        <th class="ps-4">Request ID</th>
                        <th>Service</th>
                        <th>Region</th>
                        <th>Date Submitted</th>
                        <th>Status</th>
                        <th class="pe-4 text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($requests as $request)
                    <tr>
                        <td class="ps-4 fw-bold text-primary">{{ $request->uuid }}</td>
                        <td>{{ $request->service->name }}</td>
                        <td>{{ $request->country->name }}</td>
                        <td class="text-secondary small">{{ $request->created_at->format('M d, Y') }}</td>
                        <td>
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
                            <span class="badge {{ $badgeClass }}">{{ $request->status }}</span>
                        </td>
                        <td class="pe-4 text-end">
                            <a href="{{ route('user.requests.show', $request) }}" class="btn btn-sm btn-outline-light rounded-pill px-3">View</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                            You have no requests. Click 'New Request' to get started.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($requests->hasPages())
    <div class="card-footer bg-transparent border-secondary py-3">
        {{ $requests->links() }}
    </div>
    @endif
</div>
@endsection

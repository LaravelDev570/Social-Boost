@extends('layouts.admin')

@section('title', 'Service Requests - AccountForge Admin')
@section('page_title', 'Manage Service Requests')

@section('content')
<div class="card card-glass border-0 fade-in-up">
    <div class="card-header bg-transparent border-secondary py-3">
        <h6 class="mb-0 fw-bold text-white">All Requests</h6>
    </div>
    
    <div class="card-body p-0">
        @if(session('success'))
            <div class="alert alert-success bg-success bg-opacity-25 text-light border-0 m-3 rounded">
                {{ session('success') }}
            </div>
        @endif
        
        <div class="table-responsive">
            <table class="table table-dark table-hover mb-0 align-middle dt-table">
                <thead class="text-secondary small">
                    <tr>
                        <th class="ps-4">Request ID</th>
                        <th>Client</th>
                        <th>Service</th>
                        <th>Region</th>
                        <th>Status</th>
                        <th class="pe-4 text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($requests as $request)
                    <tr>
                        <td class="ps-4 text-primary fw-bold">{{ $request->uuid }}</td>
                        <td>{{ $request->user->name }}</td>
                        <td>{{ $request->service->name }}</td>
                        <td>{{ $request->country->code ?? $request->country->name }}</td>
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
                            <a href="{{ route('admin.requests.show', $request) }}" class="btn btn-sm btn-outline-info rounded-pill px-3">Manage</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="bi bi-card-checklist fs-1 d-block mb-3"></i>
                            No service requests found.
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

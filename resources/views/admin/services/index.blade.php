@extends('layouts.admin')

@section('title', 'Services - AccountForge Admin')
@section('page_title', 'Manage Services')

@section('content')
<div class="card card-glass border-0 fade-in-up">
    <div class="card-header bg-transparent border-secondary py-3 d-flex justify-content-between align-items-center">
        <h6 class="mb-0 fw-bold">All Services</h6>
        <a href="{{ route('admin.services.create') }}" class="btn btn-sm btn-primary rounded-pill px-3">
            <i class="bi bi-plus-lg me-1"></i> Add Service
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
                        <th class="ps-4">ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th class="pe-4 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                    <tr>
                        <td class="ps-4 text-secondary">#{{ $service->id }}</td>
                        <td class="fw-bold">{{ $service->name }}</td>
                        <td>
                            <span class="badge bg-secondary">{{ $service->category->name }}</span>
                        </td>
                        <td>
                            @if($service->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td class="pe-4 text-end">
                            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-outline-info rounded-pill px-3">Edit</a>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">
                            <i class="bi bi-box fs-1 d-block mb-3"></i>
                            No services found. Click 'Add Service' to create one.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($services->hasPages())
    <div class="card-footer bg-transparent border-secondary py-3">
        {{ $services->links() }}
    </div>
    @endif
</div>
@endsection

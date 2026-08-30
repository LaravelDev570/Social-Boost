@extends('layouts.admin')

@section('title', 'Countries - AccountForge Admin')
@section('page_title', 'Manage Countries')

@section('content')
<div class="card card-glass border-0 fade-in-up">
    <div class="card-header bg-transparent border-secondary py-3 d-flex justify-content-between align-items-center">
        <h6 class="mb-0 fw-bold text-white">All Countries</h6>
        <a href="{{ route('admin.countries.create') }}" class="btn btn-sm btn-primary rounded-pill px-3">
            <i class="bi bi-plus-lg me-1"></i> Add Country
        </a>
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
                        <th class="ps-4">ID</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Status</th>
                        <th class="pe-4 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($countries as $country)
                    <tr>
                        <td class="ps-4 text-secondary">#{{ $country->id }}</td>
                        <td class="fw-bold">{{ $country->name }}</td>
                        <td>
                            <span class="badge bg-secondary">{{ $country->code ?? 'N/A' }}</span>
                        </td>
                        <td>
                            @if($country->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td class="pe-4 text-end">
                            <a href="{{ route('admin.countries.edit', $country) }}" class="btn btn-sm btn-outline-info rounded-pill px-3">Edit</a>
                            <form action="{{ route('admin.countries.destroy', $country) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this country?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">
                            <i class="bi bi-globe fs-1 d-block mb-3"></i>
                            No countries found. Click 'Add Country' to create one.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($countries->hasPages())
    <div class="card-footer bg-transparent border-secondary py-3">
        {{ $countries->links() }}
    </div>
    @endif
</div>
@endsection

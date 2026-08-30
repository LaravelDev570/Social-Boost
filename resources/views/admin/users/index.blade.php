@extends('layouts.admin')

@section('title', 'Users - AccountForge Admin')
@section('page_title', 'Manage Users')

@section('content')
<div class="card card-glass border-0 fade-in-up">
    <div class="card-header bg-transparent border-secondary py-3">
        <h6 class="mb-0 fw-bold text-white">All Registered Users</h6>
    </div>
    
    <div class="card-body p-0">
        @if(session('success'))
            <div class="alert alert-success bg-success bg-opacity-25 text-light border-0 m-3 rounded">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger bg-danger bg-opacity-25 text-light border-0 m-3 rounded">
                {{ session('error') }}
            </div>
        @endif
        
        <div class="table-responsive">
            <table class="table table-dark table-hover mb-0 align-middle dt-table">
                <thead class="text-secondary small">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th class="pe-4 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td class="ps-4 text-secondary">#{{ $user->id }}</td>
                        <td class="fw-bold">{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('admin.users.update_role', $user) }}" method="POST" class="d-inline">
                                @csrf @method('PUT')
                                <button type="submit" class="btn btn-sm btn-link text-decoration-none p-0">
                                    <span class="badge {{ $user->role === 'admin' ? 'bg-primary' : 'bg-secondary' }}">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('admin.users.edit', $user) }}" method="GET" class="d-inline">
                                <button type="submit" class="btn btn-sm btn-link text-decoration-none p-0">
                                    @if($user->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Suspended</span>
                                    @endif
                                </button>
                            </form>
                        </td>
                        <td class="pe-4 text-end">
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3" {{ $user->id === auth()->id() ? 'disabled' : '' }}>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            No users found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($users->hasPages())
    <div class="card-footer bg-transparent border-secondary py-3">
        {{ $users->links() }}
    </div>
    @endif
</div>
@endsection

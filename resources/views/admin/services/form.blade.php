@extends('layouts.admin')

@section('title', (isset($service) ? 'Edit Service' : 'Add Service') . ' - AccountForge Admin')
@section('page_title', isset($service) ? 'Edit Service' : 'Add New Service')

@section('content')
<div class="card card-glass border-0 fade-in-up" style="max-width: 800px; margin: 0 auto;">
    <div class="card-header bg-transparent border-secondary py-3">
        <h6 class="mb-0 fw-bold">{{ isset($service) ? 'Edit Service Details' : 'Enter Service Details' }}</h6>
    </div>
    
    <div class="card-body p-4">
        <form action="{{ isset($service) ? route('admin.services.update', $service) : route('admin.services.store') }}" method="POST">
            @csrf
            @if(isset($service))
                @method('PUT')
            @endif
            
            <div class="mb-3">
                <label for="category_id" class="form-label text-light small fw-bold">Category <span class="text-danger">*</span></label>
                <select class="form-select bg-dark text-light border-secondary focus-ring focus-ring-primary" id="category_id" name="category_id" required>
                    <option value="" disabled selected>Select a Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ (old('category_id', $service->category_id ?? '') == $category->id) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label text-light small fw-bold">Service Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control bg-dark text-light border-secondary focus-ring focus-ring-primary" id="name" name="name" value="{{ old('name', $service->name ?? '') }}" required>
                @error('name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            
            <div class="mb-4">
                <label for="description" class="form-label text-light small fw-bold">Description (Optional)</label>
                <textarea class="form-control bg-dark text-light border-secondary focus-ring focus-ring-primary" id="description" name="description" rows="3">{{ old('description', $service->description ?? '') }}</textarea>
                @error('description')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            
            <div class="mb-4 form-check form-switch">
                <input class="form-check-input bg-secondary border-secondary" type="checkbox" role="switch" id="status" name="status" value="1" {{ old('status', $service->status ?? true) ? 'checked' : '' }}>
                <label class="form-check-label text-light small" for="status">Active Status</label>
            </div>
            
            <hr class="border-secondary mb-4">
            
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.services.index') }}" class="btn btn-outline-light rounded-pill px-4">Cancel</a>
                <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold">
                    {{ isset($service) ? 'Update Service' : 'Save Service' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

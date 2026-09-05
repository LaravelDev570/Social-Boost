@extends('layouts.admin')

@section('title', (isset($category) ? 'Edit Category' : 'Add Category') . ' - AccountForge Admin')
@section('page_title', isset($category) ? 'Edit Category' : 'Add New Category')

@section('content')
<div class="card card-glass border-0 fade-in-up" style="max-width: 800px; margin: 0 auto;">
    <div class="card-header bg-transparent border-secondary py-3">
        <h6 class="mb-0 fw-bold">{{ isset($category) ? 'Edit Category Details' : 'Enter Category Details' }}</h6>
    </div>
    
    <div class="card-body p-4">
        <form action="{{ isset($category) ? route('admin.categories.update', $category) : route('admin.categories.store') }}" method="POST">
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif
            
            <div class="row g-3 mb-4">
                <div class="col-md-8">
                    <label for="name" class="form-label text-light small fw-bold"><i class="bi bi-tag me-1"></i> Category Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm bg-dark text-light border-secondary focus-ring focus-ring-primary" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" placeholder="e.g. YouTube Services" required>
                    @error('name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
            
            <div class="mb-4">
                <label for="description" class="form-label text-light small fw-bold">Description (Optional)</label>
                <textarea class="form-control bg-dark text-light border-secondary focus-ring focus-ring-primary" id="description" name="description" rows="3">{{ old('description', $category->description ?? '') }}</textarea>
                @error('description')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            
            <div class="mb-4 form-check form-switch">
                <input class="form-check-input bg-secondary border-secondary" type="checkbox" role="switch" id="status" name="status" value="1" {{ old('status', $category->status ?? true) ? 'checked' : '' }}>
                <label class="form-check-label text-light small" for="status">Active Status</label>
            </div>
            
            <hr class="border-secondary mb-4">
            
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-light rounded-pill px-4">Cancel</a>
                <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold">
                    {{ isset($category) ? 'Update Category' : 'Save Category' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

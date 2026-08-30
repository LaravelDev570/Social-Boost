@extends('layouts.admin')

@section('title', (isset($country) ? 'Edit Country' : 'Add Country') . ' - AccountForge Admin')
@section('page_title', isset($country) ? 'Edit Country' : 'Add New Country')

@section('content')
<div class="card card-glass border-0 fade-in-up" style="max-width: 800px; margin: 0 auto;">
    <div class="card-header bg-transparent border-secondary py-3">
        <h6 class="mb-0 fw-bold">{{ isset($country) ? 'Edit Country Details' : 'Enter Country Details' }}</h6>
    </div>
    
    <div class="card-body p-4">
        <form action="{{ isset($country) ? route('admin.countries.update', $country) : route('admin.countries.store') }}" method="POST">
            @csrf
            @if(isset($country))
                @method('PUT')
            @endif
            
            <div class="mb-3">
                <label for="name" class="form-label text-light small fw-bold">Country Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control bg-dark text-light border-secondary focus-ring focus-ring-primary" id="name" name="name" value="{{ old('name', $country->name ?? '') }}" required>
                @error('name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            
            <div class="mb-4">
                <label for="code" class="form-label text-light small fw-bold">Country Code (e.g. US, UK, CA)</label>
                <input type="text" class="form-control bg-dark text-light border-secondary focus-ring focus-ring-primary" id="code" name="code" value="{{ old('code', $country->code ?? '') }}">
                @error('code')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            
            <div class="mb-4 form-check form-switch">
                <input class="form-check-input bg-secondary border-secondary" type="checkbox" role="switch" id="status" name="status" value="1" {{ old('status', $country->status ?? true) ? 'checked' : '' }}>
                <label class="form-check-label text-light small" for="status">Active Status</label>
            </div>
            
            <hr class="border-secondary mb-4">
            
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.countries.index') }}" class="btn btn-outline-light rounded-pill px-4">Cancel</a>
                <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold">
                    {{ isset($country) ? 'Update Country' : 'Save Country' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@extends('layouts.user')

@section('title', 'New Request - AccountForge')
@section('page_title', 'Create New Service Request')

@section('content')
<div class="card card-glass border-0 fade-in-up" style="max-width: 800px; margin: 0 auto;">
    <div class="card-header bg-transparent border-secondary py-3">
        <h6 class="mb-0 fw-bold">Request Details</h6>
    </div>
    
    <div class="card-body p-4">
        <form action="{{ route('user.requests.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="service_id" class="form-label text-light small fw-bold">Select Service <span class="text-danger">*</span></label>
                <select class="form-select bg-dark text-light border-secondary focus-ring focus-ring-primary" id="service_id" name="service_id" required>
                    <option value="" disabled selected>Choose a service...</option>
                    @foreach($services as $service)
                        <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                            {{ $service->name }} ({{ $service->category->name }})
                        </option>
                    @endforeach
                </select>
                @error('service_id')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label for="country_id" class="form-label text-light small fw-bold">Select Region <span class="text-danger">*</span></label>
                <select class="form-select bg-dark text-light border-secondary focus-ring focus-ring-primary" id="country_id" name="country_id" required>
                    <option value="" disabled selected>Choose a region...</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>
                            {{ $country->name }} {{ $country->code ? '('.$country->code.')' : '' }}
                        </option>
                    @endforeach
                </select>
                @error('country_id')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            
            <div class="mb-4">
                <label for="details" class="form-label text-light small fw-bold">Requirement Details <span class="text-danger">*</span></label>
                <textarea class="form-control bg-dark text-light border-secondary focus-ring focus-ring-primary" id="details" name="details" rows="5" placeholder="Please provide your account handles, target audience, brand colors, and any specific instructions..." required>{{ old('details') }}</textarea>
                <div class="form-text text-secondary">Do not include sensitive passwords. We will communicate securely for access.</div>
                @error('details')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            
            <hr class="border-secondary mb-4">
            
            <div class="d-flex justify-content-between">
                <a href="{{ route('user.dashboard') }}" class="btn btn-outline-light rounded-pill px-4">Cancel</a>
                <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold">
                    Submit Request
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

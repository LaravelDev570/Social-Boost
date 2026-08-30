@extends('layouts.admin')

@section('title', 'Settings - SocialBoost Admin')
@section('page_title', 'Platform Settings')

@section('content')

@if(session('success'))
    <div class="alert bg-success bg-opacity-25 text-light border-0 rounded mb-4 py-2 small">
        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
    </div>
@endif

<div class="row g-4 fade-in-up">

    <!-- Site General Settings -->
    <div class="col-lg-8">
        <div class="card card-glass border-0 mb-4">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold text-white"><i class="bi bi-globe me-2 text-primary"></i>General Site Settings</h6>
            </div>
            <div class="card-body p-4">
                <form action="#" method="POST">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label text-light small fw-bold">Site Name</label>
                            <input type="text" class="form-control bg-dark text-light border-secondary"
                                   name="site_name" value="SocialBoost">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-light small fw-bold">Contact Email</label>
                            <input type="email" class="form-control bg-dark text-light border-secondary"
                                   name="contact_email" value="support@socialboost.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-light small fw-bold">WhatsApp Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary text-success">
                                    <i class="bi bi-whatsapp"></i>
                                </span>
                                <input type="text" class="form-control bg-dark text-light border-secondary"
                                       name="whatsapp_number" value="+923704635765">
                            </div>
                            <div class="form-text text-muted">Include country code (e.g. +923704635765)</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-light small fw-bold">Support Hours</label>
                            <input type="text" class="form-control bg-dark text-light border-secondary"
                                   name="support_hours" value="Mon–Fri, 9am–6pm (PKT)">
                        </div>
                        <div class="col-12">
                            <label class="form-label text-light small fw-bold">Site Tagline</label>
                            <input type="text" class="form-control bg-dark text-light border-secondary"
                                   name="tagline" value="Professional Social Media Growth Services">
                        </div>
                        <div class="col-12">
                            <label class="form-label text-light small fw-bold">Homepage About Text</label>
                            <textarea class="form-control bg-dark text-light border-secondary" name="about_text" rows="3">We professionally set up, optimize, and grow your TikTok, YouTube, and Instagram accounts using authorized strategies. No fakes. No shortcuts.</textarea>
                        </div>
                    </div>

                    <hr class="border-secondary my-4">
                    <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold">
                        <i class="bi bi-save me-2"></i>Save Settings
                    </button>
                </form>
            </div>
        </div>

        <!-- SEO Settings -->
        <div class="card card-glass border-0">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold"><i class="bi bi-search me-2 text-info"></i>SEO Settings</h6>
            </div>
            <div class="card-body p-4">
                <form action="#" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label text-light small fw-bold">Meta Title</label>
                            <input type="text" class="form-control bg-dark text-light border-secondary"
                                   name="meta_title" value="SocialBoost — Professional TikTok & YouTube Growth Services">
                        </div>
                        <div class="col-12">
                            <label class="form-label text-light small fw-bold">Meta Description</label>
                            <textarea class="form-control bg-dark text-light border-secondary" name="meta_description" rows="2">Professional social media setup and growth services for TikTok, YouTube, and Instagram. Serving US, UK, Canada, Australia.</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-light small fw-bold">Meta Keywords</label>
                            <input type="text" class="form-control bg-dark text-light border-secondary"
                                   name="meta_keywords" value="TikTok growth, YouTube SEO, Instagram branding, social media services">
                        </div>
                    </div>
                    <hr class="border-secondary my-4">
                    <button type="submit" class="btn btn-info rounded-pill px-5 fw-bold text-dark">
                        <i class="bi bi-save me-2"></i>Save SEO Settings
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Right Column -->
    <div class="col-lg-4">
        <!-- Admin Account Info -->
        <div class="card card-glass border-0 mb-4 text-center">
            <div class="card-body p-4">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=3b82f6&color=fff&size=128"
                     alt="Admin Avatar" class="rounded-circle mb-3" style="width:80px;height:80px;">
                <h5 class="fw-bold mb-0">{{ Auth::user()->name }}</h5>
                <p class="text-secondary small mb-1">{{ Auth::user()->email }}</p>
                <span class="badge bg-primary mb-3">Administrator</span>
                <div class="text-muted small">Member since {{ Auth::user()->created_at->format('F Y') }}</div>
            </div>
        </div>

        <!-- System Status -->
        <div class="card card-glass border-0 mb-4">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold"><i class="bi bi-activity me-2 text-success"></i>System Status</h6>
            </div>
            <div class="card-body p-3">
                <ul class="list-group list-group-flush bg-transparent">
                    <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between border-secondary py-2">
                        <span><i class="bi bi-circle-fill text-success me-2" style="font-size:8px;"></i>Website</span>
                        <span class="badge bg-success">Online</span>
                    </li>
                    <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between border-secondary py-2">
                        <span><i class="bi bi-circle-fill text-success me-2" style="font-size:8px;"></i>Database</span>
                        <span class="badge bg-success">Connected</span>
                    </li>
                    <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between border-secondary py-2">
                        <span><i class="bi bi-circle-fill text-warning me-2" style="font-size:8px;"></i>Email</span>
                        <span class="badge bg-secondary">Disabled</span>
                    </li>
                    <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between border-secondary py-2">
                        <span><i class="bi bi-circle-fill text-success me-2" style="font-size:8px;"></i>WhatsApp</span>
                        <span class="badge bg-success">Configured</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Danger Zone -->
        <div class="card border border-danger border-opacity-25 bg-transparent">
            <div class="card-header bg-transparent border-danger border-opacity-25 py-3">
                <h6 class="mb-0 fw-bold text-danger"><i class="bi bi-exclamation-triangle me-2"></i>Danger Zone</h6>
            </div>
            <div class="card-body p-3">
                <p class="text-secondary small mb-3">These actions are irreversible. Be very careful.</p>
                <button class="btn btn-outline-danger btn-sm w-100 mb-2" onclick="return confirm('Clear all cache? This action cannot be undone.')">
                    <i class="bi bi-trash me-2"></i>Clear Cache
                </button>
                <button class="btn btn-outline-secondary btn-sm w-100">
                    <i class="bi bi-download me-2"></i>Export Database
                </button>
            </div>
        </div>
    </div>

</div>
@endsection

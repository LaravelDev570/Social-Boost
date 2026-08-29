@extends('layouts.app')

@section('title', 'AccountForge - Premium Digital Services')
@section('meta_description', 'Boost your brand with professional TikTok, YouTube, and digital service setups. Fast, reliable, and premium quality.')

@section('content')
<!-- Hero Section -->
<section class="py-5 text-center fade-in-up" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="container">
        <h1 class="display-4 fw-bold font-outfit mb-4">
            Elevate Your Brand with <br>
            <span class="text-gradient">Premium Digital Services</span>
        </h1>
        <p class="lead text-secondary mb-5 mx-auto" style="max-width: 700px;">
            Expert TikTok configuration, YouTube channel setup, and custom branding solutions. 
            We provide legitimate, high-quality setups using your authorized accounts.
        </p>
        <div>
            <a href="#services" class="btn btn-primary btn-lg rounded-pill px-5 py-3 me-3 fw-bold shadow">
                Get Started
            </a>
            <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold">
                Contact Us
            </a>
        </div>
    </div>
</section>

<!-- Live Statistics Section -->
<section class="py-5 bg-darker border-top border-bottom border-secondary">
    <div class="container text-center">
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="p-3">
                    <h2 class="display-5 fw-bold text-primary mb-0">12</h2>
                    <p class="text-muted text-uppercase small letter-spacing-1">Live Users</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3">
                    <h2 class="display-5 fw-bold text-success mb-0">1.2k+</h2>
                    <p class="text-muted text-uppercase small letter-spacing-1">Total Customers</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3">
                    <h2 class="display-5 fw-bold text-info mb-0">850+</h2>
                    <p class="text-muted text-uppercase small letter-spacing-1">Completed Work</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3">
                    <h2 class="display-5 fw-bold text-warning mb-0">4.9/5</h2>
                    <p class="text-muted text-uppercase small letter-spacing-1">Average Rating</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5 fade-in-up">
            <h2 class="fw-bold font-outfit mb-3">Our Digital Services</h2>
            <p class="text-secondary">Select a service to begin your tailored digital journey.</p>
        </div>
        
        <div class="row g-4">
            <!-- Service Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-glass h-100 p-4 border-0 text-center">
                    <div class="mb-4">
                        <!-- TikTok Icon Placeholder (Using a generic SVG for now) -->
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
                        </svg>
                    </div>
                    <h3 class="h4 fw-bold mb-3 font-outfit">TikTok Configuration</h3>
                    <p class="text-secondary mb-4 text-sm">Professional setup, optimization, and strategy for your TikTok presence.</p>
                    <a href="{{ url('/register') }}" class="btn btn-outline-primary rounded-pill w-100 mt-auto">Request Service</a>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-glass h-100 p-4 border-0 text-center">
                    <div class="mb-4">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#f43f5e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                            <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                        </svg>
                    </div>
                    <h3 class="h4 fw-bold mb-3 font-outfit">YouTube Setup</h3>
                    <p class="text-secondary mb-4 text-sm">Channel creation, branding assets, and initial SEO configuration for growth.</p>
                    <a href="{{ url('/register') }}" class="btn btn-outline-primary rounded-pill w-100 mt-auto">Request Service</a>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-glass h-100 p-4 border-0 text-center">
                    <div class="mb-4">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3 class="h4 fw-bold mb-3 font-outfit">Brand Identity</h3>
                    <p class="text-secondary mb-4 text-sm">Comprehensive digital branding, logos, and cross-platform consistency.</p>
                    <a href="{{ url('/register') }}" class="btn btn-outline-primary rounded-pill w-100 mt-auto">Request Service</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Regions Section -->
<section class="py-5 bg-darker">
    <div class="container text-center">
        <h2 class="fw-bold font-outfit mb-4">Available Worldwide</h2>
        <p class="text-secondary mb-5">We configure services across multiple regions safely and securely.</p>
        <div class="d-flex justify-content-center gap-4 flex-wrap">
            <span class="badge bg-secondary p-3 fs-6 rounded-pill text-light bg-opacity-25 border border-secondary">🇬🇧 United Kingdom</span>
            <span class="badge bg-secondary p-3 fs-6 rounded-pill text-light bg-opacity-25 border border-secondary">🇺🇸 United States</span>
            <span class="badge bg-secondary p-3 fs-6 rounded-pill text-light bg-opacity-25 border border-secondary">🇨🇦 Canada</span>
            <span class="badge bg-secondary p-3 fs-6 rounded-pill text-light bg-opacity-25 border border-secondary">🇦🇺 Australia</span>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section id="reviews" class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold font-outfit mb-3">Client Success Stories</h2>
            <p class="text-secondary">Read what our verified clients have to say about our setups.</p>
        </div>
        
        <div class="row g-4">
            <!-- Review 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-glass h-100 p-4 border-0">
                    <div class="d-flex align-items-center mb-3">
                        <div class="text-warning me-2">
                            ★★★★★
                        </div>
                        <span class="text-muted small">1 week ago</span>
                    </div>
                    <p class="text-light mb-4">"Absolutely phenomenal service! The TikTok configuration was smooth, legitimate, and handled highly professionally. They guided me every step of the way."</p>
                    <div class="mt-auto d-flex align-items-center">
                        <div class="bg-secondary rounded-circle me-3" style="width: 40px; height: 40px; display:flex; align-items:center; justify-content:center;">JD</div>
                        <div>
                            <h6 class="mb-0 fw-bold">John Doe</h6>
                            <small class="text-muted">UK TikTok Setup</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Review 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-glass h-100 p-4 border-0">
                    <div class="d-flex align-items-center mb-3">
                        <div class="text-warning me-2">
                            ★★★★★
                        </div>
                        <span class="text-muted small">2 weeks ago</span>
                    </div>
                    <p class="text-light mb-4">"Great communication through WhatsApp. They didn't use any fake info and kept my accounts 100% secure. Highly recommended for YouTube setup."</p>
                    <div class="mt-auto d-flex align-items-center">
                        <div class="bg-secondary rounded-circle me-3" style="width: 40px; height: 40px; display:flex; align-items:center; justify-content:center;">SM</div>
                        <div>
                            <h6 class="mb-0 fw-bold">Sarah M.</h6>
                            <small class="text-muted">US YouTube Channel</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Review 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-glass h-100 p-4 border-0">
                    <div class="d-flex align-items-center mb-3">
                        <div class="text-warning me-2">
                            ★★★★★
                        </div>
                        <span class="text-muted small">1 month ago</span>
                    </div>
                    <p class="text-light mb-4">"AccountForge is the real deal. No scams, no automated bots. Just pure, professional manual work that aligned perfectly with my brand guidelines."</p>
                    <div class="mt-auto d-flex align-items-center">
                        <div class="bg-secondary rounded-circle me-3" style="width: 40px; height: 40px; display:flex; align-items:center; justify-content:center;">RK</div>
                        <div>
                            <h6 class="mb-0 fw-bold">Ryan K.</h6>
                            <small class="text-muted">Brand Identity</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/1234567890" target="_blank" class="whatsapp-float" aria-label="Contact us on WhatsApp">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
    </svg>
</a>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialBoost — Professional TikTok & YouTube Growth Services</title>
    <meta name="description" content="SocialBoost is a professional digital service agency specializing in TikTok configuration, YouTube channel setup, Instagram branding and social media growth — serving clients in the US, UK, Canada, and Australia.">
    <meta name="keywords" content="TikTok growth service, YouTube channel setup, Instagram branding, social media management, TikTok configuration, digital agency">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph (Facebook/WhatsApp preview) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="SocialBoost — Professional Social Media Growth Services">
    <meta property="og:description" content="Get your TikTok, YouTube, and Instagram professionally configured and optimized by a dedicated team. Submit a request, track progress, and grow.">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SocialBoost — Professional Social Media Growth Services">
    <meta name="twitter:description" content="TikTok setup, YouTube SEO, Instagram branding — handled by professionals. Serving US, UK, CA, AU.">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "SocialBoost",
        "description": "Professional TikTok, YouTube, and Instagram growth and configuration services",
        "url": "{{ url('/') }}",
        "areaServed": ["United States", "United Kingdom", "Canada", "Australia"],
        "serviceType": ["Social Media Management", "TikTok Setup", "YouTube Channel Optimization", "Instagram Branding"],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "142"
        }
    }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #1d4ed8;
            --accent: #a78bfa;
            --dark: #060e1d;
            --dark-2: #0d1f3c;
            --dark-3: #1e293b;
            --text: #e2e8f0;
            --muted: #94a3b8;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { background: var(--dark); color: var(--text); font-family: 'Inter', sans-serif; overflow-x: hidden; }

        .grad { background: linear-gradient(135deg, #60a5fa, #a78bfa); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .grad-green { background: linear-gradient(135deg, #34d399, #3b82f6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

        .navbar-custom { background: rgba(6,14,29,0.85); backdrop-filter: blur(14px); border-bottom: 1px solid rgba(255,255,255,0.06); padding: 1rem 0; }
        .nav-link-custom { color: var(--muted); font-size: 0.9rem; font-weight: 500; padding: 0.4rem 1rem; transition: color 0.2s; text-decoration: none; }
        .nav-link-custom:hover { color: #fff; }
        .btn-get-started { background: linear-gradient(135deg, var(--primary), var(--accent)); border: none; color: #fff; padding: 0.5rem 1.5rem; border-radius: 50px; font-weight: 600; font-size: 0.875rem; transition: all 0.3s; box-shadow: 0 4px 20px rgba(59,130,246,0.4); text-decoration: none; }
        .btn-get-started:hover { transform: translateY(-2px); box-shadow: 0 6px 28px rgba(59,130,246,0.6); color: #fff; }

        .hero { min-height: 100vh; display: flex; align-items: center; position: relative; overflow: hidden; padding: 120px 0 80px; }
        .hero-bg { position: absolute; inset: 0; background: radial-gradient(ellipse 80% 60% at 50% -10%, rgba(59,130,246,0.18) 0%, transparent 70%), radial-gradient(ellipse 50% 40% at 80% 80%, rgba(167,139,250,0.12) 0%, transparent 60%); }
        .hero-badge { display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(59,130,246,0.1); border: 1px solid rgba(59,130,246,0.25); padding: 0.35rem 1rem; border-radius: 50px; font-size: 0.8rem; color: #93c5fd; margin-bottom: 1.5rem; }
        .hero h1 { font-family: 'Outfit', sans-serif; font-size: clamp(2.5rem, 6vw, 4.5rem); font-weight: 800; line-height: 1.1; margin-bottom: 1.5rem; }
        .hero p.lead { font-size: 1.15rem; color: var(--muted); line-height: 1.7; max-width: 520px; margin-bottom: 2.5rem; }

        .btn-hero-primary { background: linear-gradient(135deg, var(--primary), #6366f1); border: none; color: #fff; padding: 0.85rem 2.5rem; border-radius: 50px; font-weight: 700; font-size: 1rem; transition: all 0.3s; box-shadow: 0 6px 30px rgba(59,130,246,0.45); text-decoration: none; display: inline-block; }
        .btn-hero-primary:hover { transform: translateY(-3px); box-shadow: 0 10px 40px rgba(59,130,246,0.6); color: #fff; }
        .btn-hero-outline { background: transparent; border: 1px solid rgba(255,255,255,0.2); color: var(--text); padding: 0.85rem 2rem; border-radius: 50px; font-weight: 600; transition: all 0.3s; text-decoration: none; display: inline-block; }
        .btn-hero-outline:hover { background: rgba(255,255,255,0.08); color: #fff; border-color: rgba(255,255,255,0.4); }

        .stats-bar { background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.07); border-radius: 16px; padding: 1.25rem 2rem; margin-top: 3rem; display: flex; gap: 2.5rem; flex-wrap: wrap; }
        .stat-item { text-align: center; }
        .stat-item .num { font-family: 'Outfit', sans-serif; font-size: 1.75rem; font-weight: 800; }
        .stat-item .label { font-size: 0.75rem; color: var(--muted); margin-top: 2px; }

        .hero-visual { position: relative; }
        .floating-card { background: rgba(13,31,60,0.95); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 1.25rem 1.5rem; animation: floatCard 4s ease-in-out infinite; backdrop-filter: blur(10px); }
        .floating-card.delay { animation-delay: 2s; }
        @keyframes floatCard { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-12px); } }

        .section { padding: 90px 0; }
        .section-label { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: var(--primary); font-weight: 600; margin-bottom: 0.75rem; }
        .section-title { font-family: 'Outfit', sans-serif; font-size: clamp(1.75rem, 4vw, 2.75rem); font-weight: 800; }

        .service-card { background: var(--dark-2); border: 1px solid rgba(255,255,255,0.06); border-radius: 20px; padding: 2rem; height: 100%; transition: all 0.35s; cursor: pointer; }
        .service-card:hover { transform: translateY(-6px); border-color: var(--primary); box-shadow: 0 20px 50px rgba(59,130,246,0.18); }
        .service-icon { width: 56px; height: 56px; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem; }

        .step-circle { width: 64px; height: 64px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: 'Outfit', sans-serif; font-size: 1.5rem; font-weight: 800; margin: 0 auto 1.25rem; position: relative; }
        .country-chip { background: var(--dark-3); border: 1px solid rgba(255,255,255,0.07); border-radius: 12px; padding: 1rem 1.5rem; text-align: center; transition: all 0.25s; }
        .country-chip:hover { border-color: var(--primary); background: rgba(59,130,246,0.08); }
        .review-card { background: var(--dark-2); border: 1px solid rgba(255,255,255,0.06); border-radius: 20px; padding: 2rem; height: 100%; }

        .faq-item { background: var(--dark-2); border: 1px solid rgba(255,255,255,0.06); border-radius: 14px; margin-bottom: 1rem; }
        .faq-item .accordion-button { background: transparent; color: var(--text); font-weight: 600; border-radius: 14px; box-shadow: none; }
        .faq-item .accordion-button::after { filter: invert(1) brightness(0.6); }
        .faq-item .accordion-button:not(.collapsed) { color: #60a5fa; background: rgba(59,130,246,0.06); }
        .faq-item .accordion-body { color: var(--muted); background: transparent; }

        .whatsapp-float { position: fixed; bottom: 24px; right: 24px; background: #25d366; color: #fff; width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; box-shadow: 0 6px 24px rgba(37,211,102,0.6); z-index: 9999; text-decoration: none; transition: transform 0.2s; }
        .whatsapp-float:hover { transform: scale(1.1); color: #fff; }

        footer { background: #060e1d; border-top: 1px solid rgba(255,255,255,0.06); padding: 3rem 0 1.5rem; }
        footer a { color: var(--muted); text-decoration: none; font-size: 0.9rem; transition: color 0.2s; }
        footer a:hover { color: #fff; }
        .glow-line { height: 1px; background: linear-gradient(90deg, transparent, rgba(59,130,246,0.6), transparent); margin: 4rem auto; max-width: 400px; }
    </style>
</head>
<body>

<nav class="navbar navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 font-outfit" href="/" style="font-family:'Outfit',sans-serif;">
            <span class="grad">Social</span><span class="text-white">Boost</span>
        </a>
        <div class="d-none d-md-flex align-items-center gap-1">
            <a href="#services" class="nav-link-custom">Services</a>
            <a href="#countries" class="nav-link-custom">Regions</a>
            <a href="#how-it-works" class="nav-link-custom">How it Works</a>
            <a href="#faq" class="nav-link-custom">FAQ</a>
        </div>
        <div class="d-flex align-items-center gap-2">
            @auth
                <a href="{{ route('dashboard') }}" class="btn-get-started">Go to Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="nav-link-custom d-none d-sm-block">Login</a>
                <a href="{{ route('register') }}" class="btn-get-started">Get Started</a>
            @endauth
        </div>
    </div>
</nav>

<section class="hero" id="home">
    <div class="hero-bg"></div>
    <div class="container position-relative">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-badge">
                    <i class="bi bi-lightning-charge-fill text-warning"></i>
                    <span>Professional Digital Growth Agency</span>
                </div>
                <h1>Grow Your <span class="grad">Social Media</span><br>the Right Way</h1>
                <p class="lead">We professionally set up, optimize, and grow your TikTok, YouTube, and Instagram accounts — using your own authorized accounts and real strategies.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('register') }}" class="btn-hero-primary"><i class="bi bi-rocket-takeoff me-2"></i>Start a Request</a>
                    <a href="#how-it-works" class="btn-hero-outline"><i class="bi bi-play-circle me-2"></i>How it Works</a>
                </div>

                <div class="stats-bar">
                    <div class="stat-item"><div class="num grad">{{ \App\Models\User::count() ?? 10 }}+</div><div class="label">Happy Clients</div></div>
                    <div class="stat-item"><div class="num grad-green">{{ \App\Models\ServiceRequest::where('status','Completed')->count() ?? 50 }}+</div><div class="label">Completed Orders</div></div>
                    <div class="stat-item"><div class="num" style="color:#fbbf24">4.9★</div><div class="label">Average Rating</div></div>
                    <div class="stat-item"><div class="num" style="color:#34d399">{{ \App\Models\ServiceRequest::whereIn('status',['Pending','In Progress'])->count() ?? 5 }}</div><div class="label">Active Now</div></div>
                </div>
            </div>

            <div class="col-lg-6 hero-visual">
                <div class="position-relative" style="min-height:420px;">
                    <div class="floating-card position-absolute" style="top:30px; right:0; width:280px;">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div style="width:40px;height:40px;background:linear-gradient(135deg,#3b82f6,#6366f1);border-radius:10px;display:flex;align-items:center;justify-content:center;">
                                <i class="bi bi-tiktok text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold small">TikTok Setup Complete</div>
                                <div class="text-success" style="font-size:12px;"><i class="bi bi-check-circle-fill me-1"></i>Delivered</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between small">
                            <span class="text-secondary">Followers Growth</span>
                            <span class="text-success fw-bold">+2,400</span>
                        </div>
                        <div class="progress mt-2" style="height:6px; background:rgba(255,255,255,0.1); border-radius:10px;">
                            <div class="progress-bar" style="width:78%; background:linear-gradient(90deg,#3b82f6,#a78bfa);"></div>
                        </div>
                    </div>

                    <div class="floating-card delay position-absolute" style="bottom:30px; left:0; width:260px;">
                        <div class="d-flex gap-3 align-items-start">
                            <div style="width:38px;height:38px;background:linear-gradient(135deg,#ef4444,#f97316);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <i class="bi bi-youtube text-white"></i>
                            </div>
                            <div>
                                <div class="fw-bold small">YouTube SEO</div>
                                <div class="text-warning" style="font-size:12px;"><i class="bi bi-arrow-clockwise me-1"></i>In Progress</div>
                                <div class="text-secondary mt-1" style="font-size:11px;">Optimizing channel metadata...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="services">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-label">What We Do</div>
            <h2 class="section-title mb-3">Platform <span class="grad">Services</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon" style="background: rgba(59,130,246,0.15); color: #3b82f6;">📱</div>
                    <h5 class="fw-bold mb-2">TikTok Configuration</h5>
                    <p class="text-secondary small mb-3">Full account setup, bio optimization, and content strategy.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon" style="background: rgba(239,68,68,0.15); color: #ef4444;">▶️</div>
                    <h5 class="fw-bold mb-2">YouTube Channel SEO</h5>
                    <p class="text-secondary small mb-3">Professional channel setup and metadata optimization.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon" style="background: rgba(167,139,250,0.15); color: #a78bfa;">📸</div>
                    <h5 class="fw-bold mb-2">Instagram Branding</h5>
                    <p class="text-secondary small mb-3">Cohesive bio, highlights, and profile optimization.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="how-it-works">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-label">Simple Process</div>
            <h2 class="section-title mb-3">How <span class="grad">It Works</span></h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="text-center px-3">
                    <div class="step-circle mb-3" style="background: rgba(59,130,246,0.12); border: 2px solid #3b82f6; color: #3b82f6;">01</div>
                    <h5 class="fw-bold mb-2">Submit Request</h5>
                    <p class="text-secondary small">Create an account and tell us what you need.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center px-3">
                    <div class="step-circle mb-3" style="background: rgba(167,139,250,0.12); border: 2px solid #a78bfa; color: #a78bfa;">02</div>
                    <h5 class="fw-bold mb-2">Discuss</h5>
                    <p class="text-secondary small">We discuss your goals over chat or WhatsApp.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center px-3">
                    <div class="step-circle mb-3" style="background: rgba(52,211,153,0.12); border: 2px solid #34d399; color: #34d399;">03</div>
                    <h5 class="fw-bold mb-2">Deliver</h5>
                    <p class="text-secondary small">Work begins and you track progress in real time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="faq">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-label">FAQ</div>
            <h2 class="section-title mb-2">Frequently Asked <span class="grad">Questions</span></h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="faq-item">
                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq0">Is payment done online?</button>
                            </h2>
                            <div id="faq0" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">No. Payment is handled manually through WhatsApp.</div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="accordion-item bg-transparent border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">Do you use bots?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Absolutely not. We only use authorized strategies.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container text-center text-secondary small">
        <p>&copy; {{ date('Y') }} SocialBoost. All rights reserved.</p>
    </div>
</footer>

<a href="https://wa.me/923704635765" target="_blank" class="whatsapp-float" title="Chat with us on WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

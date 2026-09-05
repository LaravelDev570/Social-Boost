<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialBoost — Premium TikTok & YouTube Accounts for UK, Canada, Australia</title>
    <meta name="description" content="Get professionally configured TikTok & YouTube accounts optimized for UK, Canada, Australia, New Zealand & UAE markets.">
    <link rel="canonical" href="{{ url('/') }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            background: #0a0a0f;
            color: #c8cdd5;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            font-size: 15px;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 { font-family: 'Plus Jakarta Sans', sans-serif; color: #fff; }

        /* ═══════════════ NAVBAR ═══════════════ */
        .site-nav {
            position: fixed; top: 0; left: 0; right: 0; z-index: 999;
            padding: 16px 0;
            background: rgba(10, 10, 15, 0.6);
            backdrop-filter: blur(24px) saturate(150%);
            border-bottom: 1px solid rgba(255,255,255,0.04);
            transition: background 0.3s;
        }
        .nav-inner { display: flex; align-items: center; justify-content: space-between; }
        .logo { font-family: 'Plus Jakarta Sans'; font-weight: 800; font-size: 1.4rem; text-decoration: none; }
        .logo-s { color: #6366f1; }
        .logo-b { color: #fff; }

        .nav-links { display: flex; align-items: center; gap: 8px; }
        .nav-links a {
            color: #8b8fa3; font-size: 13px; font-weight: 500;
            text-decoration: none; padding: 8px 14px; border-radius: 8px;
            transition: all 0.2s;
        }
        .nav-links a:hover { color: #fff; background: rgba(255,255,255,0.05); }

        .nav-btns { display: flex; align-items: center; gap: 10px; }
        .btn-login {
            color: #c8cdd5; font-size: 13px; font-weight: 600;
            text-decoration: none; padding: 8px 18px; border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.2s;
        }
        .btn-login:hover { color: #fff; border-color: rgba(255,255,255,0.25); background: rgba(255,255,255,0.04); }
        .btn-signup {
            background: #6366f1; color: #fff; font-size: 13px; font-weight: 600;
            text-decoration: none; padding: 8px 20px; border-radius: 8px;
            border: none; transition: all 0.2s;
            box-shadow: 0 2px 12px rgba(99,102,241,0.35);
        }
        .btn-signup:hover { background: #5558e6; transform: translateY(-1px); box-shadow: 0 4px 20px rgba(99,102,241,0.45); color: #fff; }

        /* ═══════════════ HERO ═══════════════ */
        .hero {
            padding: 140px 0 70px;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(99,102,241,0.12) 0%, transparent 70%);
            top: -80px; right: 5%;
            border-radius: 50%;
        }
        .hero::after {
            content: '';
            position: absolute;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(236,72,153,0.08) 0%, transparent 70%);
            bottom: 0; left: 5%;
            border-radius: 50%;
        }

        .hero-tag {
            display: inline-flex; align-items: center; gap: 6px;
            background: rgba(99,102,241,0.1); border: 1px solid rgba(99,102,241,0.2);
            padding: 5px 14px; border-radius: 20px;
            font-size: 12px; color: #a5b4fc; font-weight: 500;
            margin-bottom: 20px;
        }
        .hero-tag .dot { width: 6px; height: 6px; border-radius: 50%; background: #22c55e; animation: blink 1.5s infinite; }
        @keyframes blink { 0%,100% { opacity: 1; } 50% { opacity: 0.3; } }

        .hero h1 {
            font-size: clamp(2rem, 4.5vw, 3.2rem);
            font-weight: 800; line-height: 1.15;
            margin-bottom: 18px;
            letter-spacing: -0.5px;
        }
        .hero h1 .hl-purple { color: #818cf8; }
        .hero h1 .hl-pink { color: #f472b6; }

        .hero-desc {
            font-size: 15px; color: #8b8fa3; max-width: 440px;
            line-height: 1.7; margin-bottom: 28px;
        }

        .hero-actions { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 36px; }
        .btn-main {
            background: #6366f1; color: #fff; font-size: 14px; font-weight: 600;
            padding: 12px 28px; border-radius: 10px; text-decoration: none;
            border: none; transition: all 0.25s; display: inline-flex; align-items: center; gap: 8px;
            box-shadow: 0 4px 16px rgba(99,102,241,0.3);
        }
        .btn-main:hover { background: #5558e6; transform: translateY(-2px); box-shadow: 0 6px 24px rgba(99,102,241,0.4); color: #fff; }
        .btn-wa {
            background: rgba(37,211,102,0.1); color: #4ade80; font-size: 14px; font-weight: 600;
            padding: 12px 28px; border-radius: 10px; text-decoration: none;
            border: 1px solid rgba(37,211,102,0.2); transition: all 0.25s;
            display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-wa:hover { background: rgba(37,211,102,0.15); border-color: rgba(37,211,102,0.35); color: #4ade80; transform: translateY(-2px); }

        .hero-proof { display: flex; align-items: center; gap: 14px; }
        .avatar-stack { display: flex; }
        .avatar-stack img { width: 32px; height: 32px; border-radius: 50%; border: 2px solid #0a0a0f; margin-left: -10px; }
        .avatar-stack img:first-child { margin-left: 0; }
        .proof-text { font-size: 13px; color: #8b8fa3; }
        .proof-text strong { color: #fff; }

        /* ─── FORM ─── */
        .lead-form {
            background: #12121a;
            border: 1px solid rgba(255,255,255,0.06);
            border-radius: 16px;
            padding: 28px;
            position: relative;
        }
        .lead-form::before {
            content: '';
            position: absolute; top: 0; left: 24px; right: 24px;
            height: 2px;
            background: linear-gradient(90deg, #6366f1, #ec4899, #f59e0b);
            border-radius: 2px;
        }
        .form-head { font-size: 17px; font-weight: 700; color: #fff; margin-bottom: 4px; }
        .form-sub { font-size: 13px; color: #6b7280; margin-bottom: 20px; }

        .lead-form label {
            font-size: 12px; font-weight: 600; color: #6b7280;
            text-transform: uppercase; letter-spacing: 0.4px;
            margin-bottom: 5px; display: block;
        }
        .lead-form .form-control, .lead-form .form-select {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            color: #e5e7eb; border-radius: 8px;
            padding: 9px 12px; font-size: 14px;
            transition: border-color 0.2s;
        }
        .lead-form .form-control:focus, .lead-form .form-select:focus {
            border-color: #6366f1; background: rgba(255,255,255,0.06);
            box-shadow: 0 0 0 3px rgba(99,102,241,0.1); color: #fff;
        }
        .lead-form .form-control::placeholder { color: #4b5563; }
        .lead-form .form-select option { background: #1a1a2e; color: #e5e7eb; }

        .btn-form {
            width: 100%; background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: #fff; font-size: 14px; font-weight: 700;
            padding: 12px; border-radius: 10px; border: none;
            transition: all 0.25s; cursor: pointer;
            box-shadow: 0 4px 16px rgba(99,102,241,0.25);
        }
        .btn-form:hover { transform: translateY(-1px); box-shadow: 0 6px 24px rgba(99,102,241,0.4); }

        .or-wa { font-size: 12px; color: #6b7280; text-align: center; margin-top: 14px; }
        .or-wa a { color: #4ade80; font-weight: 600; text-decoration: none; }
        .or-wa a:hover { text-decoration: underline; }

        .alert-success-custom {
            background: rgba(34,197,94,0.1); border: 1px solid rgba(34,197,94,0.25);
            color: #86efac; border-radius: 10px; padding: 12px 16px;
            font-size: 13px; margin-bottom: 16px;
        }

        /* ═══════════════ SECTIONS ═══════════════ */
        .sec { padding: 60px 0; }
        .sec-head { margin-bottom: 40px; }
        .sec-tag {
            font-size: 11px; text-transform: uppercase; letter-spacing: 2px;
            font-weight: 700; margin-bottom: 8px; display: block;
        }
        .sec-title { font-size: clamp(1.4rem, 3vw, 2rem); font-weight: 800; line-height: 1.2; }

        .divider { height: 1px; background: rgba(255,255,255,0.04); }

        /* ═══════════════ PLATFORMS ═══════════════ */
        .p-card {
            background: #12121a;
            border: 1px solid rgba(255,255,255,0.05);
            border-radius: 14px; padding: 32px 24px;
            text-align: center; transition: all 0.3s;
            height: 100%;
        }
        .p-card:hover { border-color: rgba(255,255,255,0.12); transform: translateY(-4px); }
        .p-icon {
            width: 60px; height: 60px; border-radius: 14px;
            display: inline-flex; align-items: center; justify-content: center;
            font-size: 26px; margin-bottom: 16px;
        }
        .p-card h5 { font-size: 16px; font-weight: 700; margin-bottom: 8px; }
        .p-card p { font-size: 13px; color: #6b7280; margin-bottom: 14px; line-height: 1.6; }
        .p-tags { display: flex; flex-wrap: wrap; justify-content: center; gap: 6px; }
        .p-tags span {
            font-size: 11px; font-weight: 600; padding: 4px 10px;
            border-radius: 6px; background: rgba(255,255,255,0.04);
            color: #9ca3af; border: 1px solid rgba(255,255,255,0.06);
        }

        /* ═══════════════ COUNTRIES ═══════════════ */
        .c-grid { display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; }
        .c-item {
            display: flex; align-items: center; gap: 12px;
            background: #12121a; border: 1px solid rgba(255,255,255,0.05);
            border-radius: 12px; padding: 14px 20px;
            transition: all 0.2s; min-width: 170px;
        }
        .c-item:hover { border-color: rgba(99,102,241,0.3); background: rgba(99,102,241,0.04); }
        .c-flag { font-size: 28px; line-height: 1; }
        .c-name { font-size: 14px; font-weight: 700; color: #fff; }
        .c-sub { font-size: 11px; color: #6b7280; }

        /* ═══════════════ STEPS ═══════════════ */
        .step-row { counter-reset: steps; }
        .step-item { counter-increment: steps; text-align: center; padding: 0 16px; }
        .step-num {
            width: 48px; height: 48px; border-radius: 12px;
            display: inline-flex; align-items: center; justify-content: center;
            font-family: 'Plus Jakarta Sans'; font-weight: 800; font-size: 16px;
            margin-bottom: 14px;
        }
        .step-item h6 { font-size: 14px; font-weight: 700; margin-bottom: 6px; }
        .step-item p { font-size: 13px; color: #6b7280; line-height: 1.5; }

        /* ═══════════════ REVIEWS ═══════════════ */
        .r-card {
            background: #12121a;
            border: 1px solid rgba(255,255,255,0.05);
            border-radius: 14px; padding: 24px;
            height: 100%; transition: all 0.3s;
        }
        .r-card:hover { border-color: rgba(255,255,255,0.1); }
        .r-stars { color: #f59e0b; font-size: 13px; margin-bottom: 12px; }
        .r-text { font-size: 14px; color: #9ca3af; line-height: 1.65; margin-bottom: 16px; font-style: italic; }
        .r-author { display: flex; align-items: center; gap: 10px; }
        .r-author img { width: 36px; height: 36px; border-radius: 50%; }
        .r-author-name { font-size: 13px; font-weight: 700; color: #fff; }
        .r-author-role { font-size: 11px; color: #6b7280; }

        /* ═══════════════ FOOTER ═══════════════ */
        .site-footer {
            border-top: 1px solid rgba(255,255,255,0.04);
            padding: 40px 0 20px;
        }

        /* ═══════════════ WA FLOAT ═══════════════ */
        .wa-btn {
            position: fixed; bottom: 24px; right: 24px; z-index: 999;
            width: 52px; height: 52px; border-radius: 50%;
            background: #25d366; color: #fff;
            display: flex; align-items: center; justify-content: center;
            font-size: 24px; text-decoration: none;
            box-shadow: 0 4px 20px rgba(37,211,102,0.4);
            transition: transform 0.2s;
        }
        .wa-btn:hover { transform: scale(1.08); color: #fff; }

        /* ═══════════════ RESPONSIVE ═══════════════ */
        @media (max-width: 991px) {
            .nav-links { display: none; }
            .hero { padding: 110px 0 50px; }
        }
        @media (max-width: 576px) {
            .lead-form { padding: 20px; }
            .hero-actions { flex-direction: column; }
            .hero-proof { flex-direction: column; align-items: flex-start; gap: 8px; }
        }
    </style>
</head>
<body>

<!-- ═══════════════ NAV ═══════════════ -->
<nav class="site-nav">
    <div class="container nav-inner">
        <a href="/" class="logo"><span class="logo-s">Social</span><span class="logo-b">Boost</span></a>

        <div class="nav-links">
            <a href="#platforms">Platforms</a>
            <a href="#regions">Regions</a>
            <a href="#process">How It Works</a>
            <a href="#reviews">Reviews</a>
        </div>

        <div class="nav-btns">
            @auth
                <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}" class="btn-signup">
                    <i class="bi bi-grid-1x2 me-1"></i>Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="btn-login">Log In</a>
                <a href="{{ route('register') }}" class="btn-signup">Sign Up Free</a>
            @endauth
        </div>
    </div>
</nav>

<!-- ═══════════════ HERO ═══════════════ -->
<section class="hero">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-tag">
                    <span class="dot"></span>
                    1,200+ accounts delivered this year
                </div>

                <h1>
                    Get Ready-to-Use<br>
                    <span class="hl-purple">TikTok</span> &
                    <span class="hl-pink">YouTube</span><br>
                    Accounts
                </h1>

                <p class="hero-desc">
                    We manually create, configure, and optimize social media accounts
                    for <strong style="color:#fff">UK, Canada, Australia, New Zealand</strong> and <strong style="color:#fff">UAE</strong> markets. Region-verified. Monetization-ready.
                </p>

                <div class="hero-actions">
                    <a href="#order" class="btn-main">
                        <i class="bi bi-lightning-charge-fill"></i> Order Now
                    </a>
                    <a href="https://wa.me/923704635765" target="_blank" class="btn-wa">
                        <i class="bi bi-whatsapp"></i> WhatsApp Us
                    </a>
                </div>

                <div class="hero-proof">
                    <div class="avatar-stack">
                        <img src="https://ui-avatars.com/api/?name=J+W&background=6366f1&color=fff&size=64" alt="">
                        <img src="https://ui-avatars.com/api/?name=S+A&background=ec4899&color=fff&size=64" alt="">
                        <img src="https://ui-avatars.com/api/?name=A+R&background=f59e0b&color=fff&size=64" alt="">
                        <img src="https://ui-avatars.com/api/?name=M+K&background=22c55e&color=fff&size=64" alt="">
                    </div>
                    <div class="proof-text">
                        <strong>4.9★</strong> from 142 reviews — <strong>Trusted</strong> by creators worldwide
                    </div>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1" id="order">
                <div class="lead-form">
                    <div class="form-head"><i class="bi bi-send-fill me-2" style="color: #818cf8;"></i>Request Your Account</div>
                    <div class="form-sub">We'll reach out within 1 hour via WhatsApp.</div>

                    @if(session('lead_success'))
                        <div class="alert-success-custom">
                            <i class="bi bi-check-circle-fill me-1"></i> {{ session('lead_success') }}
                        </div>
                    @endif

                    <form action="{{ route('leads.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Ahmed Khan" required value="{{ old('name') }}">
                            @error('name') <small class="text-danger" style="font-size:11px;">{{ $message }}</small> @enderror
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <label>Platform</label>
                                <select name="platform" class="form-select" required>
                                    <option value="">Choose...</option>
                                    <option value="TikTok" {{ old('platform')=='TikTok'?'selected':'' }}>TikTok</option>
                                    <option value="YouTube" {{ old('platform')=='YouTube'?'selected':'' }}>YouTube</option>
                                    <option value="Both" {{ old('platform')=='Both'?'selected':'' }}>Both</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label>Target Region</label>
                                <select name="target_country" class="form-select" required>
                                    <option value="">Choose...</option>
                                    <option value="UK" {{ old('target_country')=='UK'?'selected':'' }}>🇬🇧 UK</option>
                                    <option value="Canada" {{ old('target_country')=='Canada'?'selected':'' }}>🇨🇦 Canada</option>
                                    <option value="Australia" {{ old('target_country')=='Australia'?'selected':'' }}>🇦🇺 Australia</option>
                                    <option value="New Zealand" {{ old('target_country')=='New Zealand'?'selected':'' }}>🇳🇿 New Zealand</option>
                                    <option value="UAE" {{ old('target_country')=='UAE'?'selected':'' }}>🇦🇪 UAE</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>WhatsApp / Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="+92 3XX XXXXXXX" value="{{ old('phone') }}">
                        </div>
                        <div class="mb-3">
                            <label>Email <span style="color:#4b5563">(optional)</span></label>
                            <input type="email" name="email" class="form-control" placeholder="you@email.com" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label>Details <span style="color:#4b5563">(optional)</span></label>
                            <textarea name="message" class="form-control" rows="2" placeholder="Any specific requirements...">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="btn-form">
                            <i class="bi bi-arrow-right-circle-fill me-1"></i> Submit Request
                        </button>
                        <div class="or-wa">
                            or chat us on <a href="https://wa.me/923704635765" target="_blank"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider"></div>

<!-- ═══════════════ PLATFORMS ═══════════════ -->
<section class="sec" id="platforms">
    <div class="container">
        <div class="sec-head text-center">
            <span class="sec-tag" style="color: #818cf8;">WHAT WE OFFER</span>
            <h2 class="sec-title">Accounts We Specialize In</h2>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-5">
                <div class="p-card">
                    <div class="p-icon" style="background: rgba(255,255,255,0.06); color: #fff;">
                        <i class="bi bi-tiktok"></i>
                    </div>
                    <h5>TikTok Accounts</h5>
                    <p>Region-verified TikTok accounts with SIM activation, optimized for the For You Page algorithm in your target market.</p>
                    <div class="p-tags">
                        <span>Region Verified</span>
                        <span>FYP Ready</span>
                        <span>Monetization</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="p-card">
                    <div class="p-icon" style="background: rgba(239,68,68,0.08); color: #ef4444;">
                        <i class="bi bi-youtube"></i>
                    </div>
                    <h5>YouTube Channels</h5>
                    <p>Fully branded channels with SEO metadata, custom art setup, and audience targeting for your desired region.</p>
                    <div class="p-tags">
                        <span>SEO Optimized</span>
                        <span>Brand Ready</span>
                        <span>Region Targeted</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider"></div>

<!-- ═══════════════ COUNTRIES ═══════════════ -->
<section class="sec" id="regions">
    <div class="container">
        <div class="sec-head text-center">
            <span class="sec-tag" style="color: #f472b6;">TARGET MARKETS</span>
            <h2 class="sec-title">Premium Region Coverage</h2>
        </div>

        <div class="c-grid">
            <div class="c-item">
                <span class="c-flag">🇬🇧</span>
                <div>
                    <div class="c-name">United Kingdom</div>
                    <div class="c-sub">Highest CPM · Tier 1</div>
                </div>
            </div>
            <div class="c-item">
                <span class="c-flag">🇨🇦</span>
                <div>
                    <div class="c-name">Canada</div>
                    <div class="c-sub">Premium Market</div>
                </div>
            </div>
            <div class="c-item">
                <span class="c-flag">🇦🇺</span>
                <div>
                    <div class="c-name">Australia</div>
                    <div class="c-sub">High-Value Audience</div>
                </div>
            </div>
            <div class="c-item">
                <span class="c-flag">🇳🇿</span>
                <div>
                    <div class="c-name">New Zealand</div>
                    <div class="c-sub">Emerging Market</div>
                </div>
            </div>
            <div class="c-item">
                <span class="c-flag">🇦🇪</span>
                <div>
                    <div class="c-name">UAE</div>
                    <div class="c-sub">Luxury Audience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider"></div>

<!-- ═══════════════ HOW IT WORKS ═══════════════ -->
<section class="sec" id="process">
    <div class="container">
        <div class="sec-head text-center">
            <span class="sec-tag" style="color: #f59e0b;">PROCESS</span>
            <h2 class="sec-title">How It Works</h2>
        </div>

        <div class="row g-4 step-row">
            <div class="col-6 col-md-3">
                <div class="step-item">
                    <div class="step-num" style="background: rgba(99,102,241,0.1); border: 1.5px solid rgba(99,102,241,0.25); color: #818cf8;">01</div>
                    <h6>Submit Request</h6>
                    <p>Fill the form or message us on WhatsApp.</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="step-item">
                    <div class="step-num" style="background: rgba(236,72,153,0.1); border: 1.5px solid rgba(236,72,153,0.25); color: #f472b6;">02</div>
                    <h6>Confirm Details</h6>
                    <p>We discuss requirements & pricing via chat.</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="step-item">
                    <div class="step-num" style="background: rgba(245,158,11,0.1); border: 1.5px solid rgba(245,158,11,0.25); color: #fbbf24;">03</div>
                    <h6>Account Ready</h6>
                    <p>Your optimized account is delivered in 24h.</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="step-item">
                    <div class="step-num" style="background: rgba(34,197,94,0.1); border: 1.5px solid rgba(34,197,94,0.25); color: #4ade80;">04</div>
                    <h6>Start Growing</h6>
                    <p>Create content & watch your audience grow.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider"></div>

<!-- ═══════════════ REVIEWS ═══════════════ -->
<section class="sec" id="reviews">
    <div class="container">
        <div class="sec-head text-center">
            <span class="sec-tag" style="color: #22c55e;">TESTIMONIALS</span>
            <h2 class="sec-title">What Our Clients Say</h2>
            <div class="d-flex justify-content-center align-items-center gap-2 mt-2">
                <span style="color: #f59e0b; font-size: 13px;"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                <span style="font-size: 13px; color: #fff; font-weight: 700;">4.9/5</span>
                <span style="font-size: 12px; color: #6b7280;">· 142 reviews</span>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="r-card">
                    <div class="r-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <p class="r-text">"Got a UK TikTok account in under 12 hours. Already getting views on my first video. The FYP optimization is legit — highly recommended!"</p>
                    <div class="r-author">
                        <img src="https://ui-avatars.com/api/?name=J+W&background=6366f1&color=fff&size=72" alt="">
                        <div>
                            <div class="r-author-name">James Wilson</div>
                            <div class="r-author-role">🇬🇧 UK TikTok · Verified</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="r-card">
                    <div class="r-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <p class="r-text">"Needed a Canadian YouTube channel for my niche. Everything was set up — branding, SEO, description. Very professional and quick delivery."</p>
                    <div class="r-author">
                        <img src="https://ui-avatars.com/api/?name=S+A&background=ec4899&color=fff&size=72" alt="">
                        <div>
                            <div class="r-author-name">Sarah Ahmed</div>
                            <div class="r-author-role">🇨🇦 YouTube · Verified</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="r-card">
                    <div class="r-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <p class="r-text">"Been buying UAE accounts for months. Consistent quality every single time. WhatsApp support is always available and super responsive."</p>
                    <div class="r-author">
                        <img src="https://ui-avatars.com/api/?name=A+R&background=22c55e&color=fff&size=72" alt="">
                        <div>
                            <div class="r-author-name">Ali Raza</div>
                            <div class="r-author-role">🇦🇪 UAE TikTok · Repeat</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ FOOTER ═══════════════ -->
<footer class="site-footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                <a href="/" class="logo"><span class="logo-s">Social</span><span class="logo-b">Boost</span></a>
            </div>
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <div style="font-size: 12px; color: #4b5563;">
                    &copy; {{ date('Y') }} SocialBoost. All rights reserved.
                </div>
            </div>
            <div class="col-md-4 text-center text-md-end">
                <a href="#platforms" class="text-decoration-none me-3" style="font-size: 12px; color: #6b7280;">Platforms</a>
                <a href="#regions" class="text-decoration-none me-3" style="font-size: 12px; color: #6b7280;">Regions</a>
                <a href="https://wa.me/923704635765" target="_blank" class="text-decoration-none" style="font-size: 12px; color: #4ade80;">
                    <i class="bi bi-whatsapp"></i> Contact
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- WhatsApp Float -->
<a href="https://wa.me/923704635765" target="_blank" class="wa-btn" title="Chat on WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

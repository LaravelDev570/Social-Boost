<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialBoost — YouTube & TikTok Monetized Accounts (USA, UK, Canada, Australia)</title>
    <meta name="description" content="100% Original YouTube & TikTok Monetized Accounts for USA, UK, Canada, Australia. TikTok Creativity Program Beta & YouTube Partner Program ready. Manual verification via JazzCash & Easypaisa. Delivered in 2 hours.">
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5.3 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Local Main Stylesheet (Extracted & Clean) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Instant Theme Init Script (Prevents flash of wrong theme) -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('socialboost_theme') || 
                (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            document.documentElement.setAttribute('data-theme', savedTheme);
        })();
    </script>
</head>
<body>

<!-- ═══════════════ NAVIGATION HEADER ═══════════════ -->
<nav class="site-nav">
    <div class="container nav-inner">
        <a href="/" class="logo-box">
            <div class="logo-icon">SB</div>
            <span class="logo-text">Social<span>Boost</span></span>
            <div class="logo-live-badge">
                <span class="live-dot"></span> 1518+ LIVE
            </div>
        </a>

        <div class="nav-links">
            <a href="#services">Services</a>
            <a href="#why-us">Growth</a>
            <a href="#reviews">Reviews</a>
            <a href="#faqs">FAQs</a>
            <a href="#free-audit">Free Audit</a>
        </div>

        <div class="nav-search d-none d-lg-block">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search services..." id="navSearchInput">
        </div>

        <div class="nav-actions">
            <!-- Theme Toggle Button (Light/Dark) -->
            <button class="theme-toggle-btn" id="themeToggleBtn" type="button" aria-label="Toggle theme" title="Switch Theme">
                <i class="bi bi-moon-stars" id="themeIcon"></i>
            </button>

            @auth
                <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}" class="btn-register-main">
                    <i class="bi bi-grid-1x2-fill"></i> Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="btn-login-link">Login</a>
                <a href="{{ route('register') }}" class="btn-register-main">Register</a>
            @endauth
        </div>
    </div>
</nav>

<!-- ═══════════════ HERO SECTION ═══════════════ -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-4">
            <!-- Hero Left Content -->
            <div class="col-lg-6">
                <div class="hero-trust-badge">
                    <span class="badge-dot"></span> TRUSTED BY 1518+ CREATORS WORLDWIDE
                </div>

                <h1 class="hero-title">
                    YouTube & TikTok <span class="highlight-blue">Monetized</span> Accounts — USA, UK, CA, AU
                </h1>

                <p class="hero-subtitle">
                    100% original accounts. TikTok Creativity Program Beta + YouTube Partner Program ready. USA/UK/Canada/Australia high RPM. Manual verification via JazzCash / Easypaisa. Delivered in 2 hours.
                </p>

                <div class="hero-cta-group">
                    <a href="#services" class="btn-hero-primary">
                        View Services <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="#reviews" class="btn-hero-secondary">
                        <i class="bi bi-award-fill text-warning"></i> See Reviews 4.9/5
                    </a>
                </div>

                <div class="hero-check-pills">
                    <span class="check-pill"><i class="bi bi-check-circle-fill"></i> Original Accounts</span>
                    <span class="check-pill"><i class="bi bi-check-circle-fill"></i> Instant Delivery 47m</span>
                    <span class="check-pill"><i class="bi bi-check-circle-fill"></i> 24/7 WhatsApp</span>
                    <span class="check-pill"><i class="bi bi-check-circle-fill"></i> USA • UK • CA • AU</span>
                </div>

                <div class="hero-social-proof">
                    <div class="country-stack-circle">
                        <span class="c-badge-pill badge-country-us">US</span>
                        <span class="c-badge-pill badge-country-uk">UK</span>
                        <span class="c-badge-pill badge-country-ca">CA</span>
                        <span class="c-badge-pill badge-country-au">AU</span>
                    </div>
                    <div class="proof-info-text">
                        <strong>1518+ creators</strong> • 4.9/5 rating • 99.2% success
                    </div>
                </div>
            </div>

            <!-- Hero Right Interactive Widget -->
            <div class="col-lg-6">
                <!-- Top WhatsApp Community Group Invite Banner -->
                <div class="hero-wa-group-top mb-3">
                    <a href="https://chat.whatsapp.com/CrinvvpCZymAhKYjhzEsRL?s=sh&p=a&mlu=4&ilr=4" target="_blank" rel="noopener noreferrer" class="btn-wa-group-pill">
                        <span class="wa-icon-bubble">
                            <i class="bi bi-whatsapp"></i>
                        </span>
                        <div class="wa-text-col">
                            <span class="wa-group-label">OFFICIAL WHATSAPP GROUP</span>
                            <span class="wa-group-action">Join Community & Instant Updates <i class="bi bi-arrow-right-short"></i></span>
                        </div>
                        <span class="wa-live-badge"><span class="wa-live-dot"></span> LIVE</span>
                    </a>
                </div>

                <div class="hero-widget-card">
                    <div class="widget-browser-header">
                        <div class="browser-dots">
                            <span class="browser-dot dot-red"></span>
                            <span class="browser-dot dot-yellow"></span>
                            <span class="browser-dot dot-green"></span>
                        </div>
                        <div class="browser-url-bar">
                            <i class="bi bi-shield-lock-fill text-success"></i> accounts.socialboost.com
                        </div>
                    </div>

                    <div class="widget-body">
                        <!-- Widget Item 1 (TikTok & Automation Course) -->
                        <a href="https://chat.whatsapp.com/CrinvvpCZymAhKYjhzEsRL?s=sh&p=a&mlu=4&ilr=4" target="_blank" rel="noopener noreferrer" class="widget-item-card text-decoration-none">
                            <div class="widget-item-left">
                                <div class="widget-item-icon icon-tiktok">
                                    <i class="bi bi-mortarboard-fill"></i>
                                </div>
                                <div>
                                    <div class="widget-item-title">
                                        🎓 TikTok & Automation Course <span class="badge-status-green">Enroll Now</span>
                                    </div>
                                    <div class="widget-item-sub">Complete TikTok Monetization & Automation Course • 1-on-1 Guidance</div>
                                </div>
                            </div>
                            <div class="widget-item-price">
                                <div class="price-val" style="color:#10b981;">Buy Course</div>
                                <div class="price-time">Via WhatsApp <i class="bi bi-arrow-right-short"></i></div>
                            </div>
                        </a>

                        <!-- Widget Item 2 -->
                        <div class="widget-item-card">
                            <div class="widget-item-left">
                                <div class="widget-item-icon icon-youtube">
                                    <i class="bi bi-youtube"></i>
                                </div>
                                <div>
                                    <div class="widget-item-title">
                                        🇺🇸 YouTube USA <span class="badge-status-green">Monetized</span>
                                    </div>
                                    <div class="widget-item-sub">1000 Subs + 4000H • Aged 2018</div>
                                </div>
                            </div>
                            <div class="widget-item-price">
                                <div class="price-val">$149</div>
                                <div class="price-time">2h delivery</div>
                            </div>
                        </div>

                        <!-- Widget Item 3 -->
                        <div class="widget-item-card">
                            <div class="widget-item-left">
                                <div class="widget-item-icon icon-tiktok">
                                    <i class="bi bi-tiktok"></i>
                                </div>
                                <div>
                                    <div class="widget-item-title">
                                        🇦🇺 TikTok AU / CA <span class="badge-status-green">New • Eligible</span>
                                    </div>
                                    <div class="widget-item-sub">CA/AU IP • Original Email • Instant</div>
                                </div>
                            </div>
                            <div class="widget-item-price">
                                <div class="price-val">$70</div>
                                <div class="price-time">Instant delivery</div>
                            </div>
                        </div>
                    </div>

                    <!-- Widget Stats Bar -->
                    <div class="widget-stats-bar">
                        <div>
                            <div class="stat-box-title">SUCCESS</div>
                            <div class="stat-box-num">99.2%</div>
                        </div>
                        <div>
                            <div class="stat-box-title">AVG DELIVERY</div>
                            <div class="stat-box-num">47 min</div>
                        </div>
                        <div>
                            <div class="stat-box-title">CLIENTS</div>
                            <div class="stat-box-num">1518+</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ PRODUCT CATALOG / SERVICES ═══════════════ -->
<section class="catalog-section" id="services">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">🏷 YOUTUBE & TIKTOK ACCOUNTS</span>
            <h2 class="section-title">YouTube & TikTok Accounts We Provide</h2>
            <p class="section-desc">
                Original accounts for USA, UK, Canada, Australia & 100+ countries — No bots, manual verified, original email included.
            </p>
        </div>

        <div id="noSearchAlert" class="alert alert-warning text-center d-none rounded-3 my-3">
            <i class="bi bi-exclamation-triangle me-1"></i> No accounts found matching your search. Try searching "YouTube", "TikTok", "USA", or "UK".
        </div>

        <div class="row g-4" id="catalogCardsContainer">
            <!-- Row 1: YouTube Monetized -->
            <div class="col-md-4 catalog-item-card" data-keywords="youtube usa monetized partner program ypp america high cpm">
                <div class="product-card">
                    <div>
                        <div class="product-card-header">
                            <span class="card-flag-badge">🇺🇸 USA</span>
                            <span class="badge bg-warning text-dark fw-bold rounded-pill px-3 py-1" style="font-size:10.5px;">Most Popular</span>
                        </div>
                        <h3 class="product-title">YouTube USA Monetized</h3>
                        <p class="product-subtitle">Original YouTube Partner Program account with high CPM.</p>
                        <ul class="product-specs-list">
                            <li><i class="bi bi-check-circle-fill"></i> Monetization Enabled (YPP Ready)</li>
                            <li><i class="bi bi-check-circle-fill"></i> USA IP • Original Email + Recovery</li>
                            <li><i class="bi bi-check-circle-fill"></i> Instant Delivery within 2 Hours</li>
                            <li><i class="bi bi-check-circle-fill"></i> Clean Record & No Strikes</li>
                        </ul>
                    </div>
                    <div>
                        <div class="product-card-footer">
                            <div class="product-price">FROM $149 <span>/ account</span></div>
                            <button class="btn-order-card" onclick="openOrderModal('YouTube', 'USA', 'YouTube USA Monetized')">
                                <i class="bi bi-telephone-fill me-1"></i> Get Account
                            </button>
                        </div>
                        <div class="card-micro-info">
                            <span><i class="bi bi-clock-history"></i> 2h delivery</span>
                            <span>• Original email</span>
                            <span>• Manual verified</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 catalog-item-card" data-keywords="youtube uk monetized united kingdom britain europe high rpm">
                <div class="product-card">
                    <div>
                        <div class="product-card-header">
                            <span class="card-flag-badge">🇬🇧 UK</span>
                            <span class="badge bg-primary text-white fw-bold rounded-pill px-3 py-1" style="font-size:10.5px;">High RPM</span>
                        </div>
                        <h3 class="product-title">YouTube UK Monetized</h3>
                        <p class="product-subtitle">UK Location channel with premium Tier-1 European CPM.</p>
                        <ul class="product-specs-list">
                            <li><i class="bi bi-check-circle-fill"></i> UK Location • Original Access</li>
                            <li><i class="bi bi-check-circle-fill"></i> Full Email + Recovery Credentials</li>
                            <li><i class="bi bi-check-circle-fill"></i> Aged Channel with Video History</li>
                            <li><i class="bi bi-check-circle-fill"></i> 24/7 WhatsApp Support Included</li>
                        </ul>
                    </div>
                    <div>
                        <div class="product-card-footer">
                            <div class="product-price">FROM $139 <span>/ account</span></div>
                            <button class="btn-order-card" onclick="openOrderModal('YouTube', 'UK', 'YouTube UK Monetized')">
                                <i class="bi bi-telephone-fill me-1"></i> Get Account
                            </button>
                        </div>
                        <div class="card-micro-info">
                            <span><i class="bi bi-clock-history"></i> 2h delivery</span>
                            <span>• Original email</span>
                            <span>• Manual verified</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 catalog-item-card" data-keywords="youtube canada monetized ca tier1 aged account">
                <div class="product-card">
                    <div>
                        <div class="product-card-header">
                            <span class="card-flag-badge">🇨🇦 Canada</span>
                            <span class="badge bg-success text-white fw-bold rounded-pill px-3 py-1" style="font-size:10.5px;">Verified</span>
                        </div>
                        <h3 class="product-title">YouTube Canada Monetized</h3>
                        <p class="product-subtitle">Canadian region YouTube account with high monetization stability.</p>
                        <ul class="product-specs-list">
                            <li><i class="bi bi-check-circle-fill"></i> CA Location • Clean History</li>
                            <li><i class="bi bi-check-circle-fill"></i> Aged Account (2019-2022)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Manual Verification Screenshots</li>
                            <li><i class="bi bi-check-circle-fill"></i> 7-Day Replacement Guarantee</li>
                        </ul>
                    </div>
                    <div>
                        <div class="product-card-footer">
                            <div class="product-price">FROM $129 <span>/ account</span></div>
                            <button class="btn-order-card" onclick="openOrderModal('YouTube', 'Canada', 'YouTube Canada Monetized')">
                                <i class="bi bi-telephone-fill me-1"></i> Get Account
                            </button>
                        </div>
                        <div class="card-micro-info">
                            <span><i class="bi bi-clock-history"></i> 2h delivery</span>
                            <span>• Original email</span>
                            <span>• Manual verified</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: TikTok Accounts -->
            <div class="col-md-4 catalog-item-card" data-keywords="tiktok usa beta creativity program 1000 followers rpm america">
                <div class="product-card">
                    <div>
                        <div class="product-card-header">
                            <span class="card-flag-badge">🇺🇸 USA</span>
                            <span class="badge bg-warning text-dark fw-bold rounded-pill px-3 py-1" style="font-size:10.5px;">Most Popular</span>
                        </div>
                        <h3 class="product-title">TikTok USA Creativity Beta</h3>
                        <p class="product-subtitle">1000 Followers • $1.20+ RPM • Creativity Program Eligible.</p>
                        <ul class="product-specs-list">
                            <li><i class="bi bi-check-circle-fill"></i> Creativity Program Beta Eligible</li>
                            <li><i class="bi bi-check-circle-fill"></i> USA IP • Manual Verified • Original</li>
                            <li><i class="bi bi-check-circle-fill"></i> High RPM Target ($1.20+ average)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Instant Delivery 47 mins</li>
                        </ul>
                    </div>
                    <div>
                        <div class="product-card-footer">
                            <div class="product-price">FROM $85 <span>/ account</span></div>
                            <button class="btn-order-card" onclick="openOrderModal('TikTok', 'USA', 'TikTok USA Creativity Beta')">
                                <i class="bi bi-telephone-fill me-1"></i> Get Account
                            </button>
                        </div>
                        <div class="card-micro-info">
                            <span><i class="bi bi-clock-history"></i> 47m delivery</span>
                            <span>• US SIM Verified</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 catalog-item-card" data-keywords="tiktok uk creator fund rewards britain united kingdom european">
                <div class="product-card">
                    <div>
                        <div class="product-card-header">
                            <span class="card-flag-badge">🇬🇧 UK</span>
                            <span class="badge bg-primary text-white fw-bold rounded-pill px-3 py-1" style="font-size:10.5px;">High RPM</span>
                        </div>
                        <h3 class="product-title">TikTok UK Creator Fund</h3>
                        <p class="product-subtitle">UK IP TikTok account ready for Creator Fund & Rewards.</p>
                        <ul class="product-specs-list">
                            <li><i class="bi bi-check-circle-fill"></i> Creator Rewards / Fund Eligible</li>
                            <li><i class="bi bi-check-circle-fill"></i> UK SIM Activated & Verified</li>
                            <li><i class="bi bi-check-circle-fill"></i> High RPM European Traffic</li>
                            <li><i class="bi bi-check-circle-fill"></i> Original Outlook / Gmail included</li>
                        </ul>
                    </div>
                    <div>
                        <div class="product-card-footer">
                            <div class="product-price">FROM $75 <span>/ account</span></div>
                            <button class="btn-order-card" onclick="openOrderModal('TikTok', 'UK', 'TikTok UK Creator Fund')">
                                <i class="bi bi-telephone-fill me-1"></i> Get Account
                            </button>
                        </div>
                        <div class="card-micro-info">
                            <span><i class="bi bi-clock-history"></i> 2h delivery</span>
                            <span>• UK IP Original</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 catalog-item-card" data-keywords="tiktok australia canada au ca ip eligible new">
                <div class="product-card">
                    <div>
                        <div class="product-card-header">
                            <span class="card-flag-badge">🇦🇺 Australia / CA</span>
                            <span class="badge bg-info text-dark fw-bold rounded-pill px-3 py-1" style="font-size:10.5px;">New</span>
                        </div>
                        <h3 class="product-title">TikTok Canada / Australia</h3>
                        <p class="product-subtitle">CA & AU Ready • Beta Eligible • High Audience Retention.</p>
                        <ul class="product-specs-list">
                            <li><i class="bi bi-check-circle-fill"></i> CA/AU IP • Original Creation</li>
                            <li><i class="bi bi-check-circle-fill"></i> Beta Program Ready & Configured</li>
                            <li><i class="bi bi-check-circle-fill"></i> High Engagement FYP Algorithm</li>
                            <li><i class="bi bi-check-circle-fill"></i> Manual Verification Guarantee</li>
                        </ul>
                    </div>
                    <div>
                        <div class="product-card-footer">
                            <div class="product-price">FROM $70 <span>/ account</span></div>
                            <button class="btn-order-card" onclick="openOrderModal('TikTok', 'Australia', 'TikTok Canada / Australia')">
                                <i class="bi bi-telephone-fill me-1"></i> Get Account
                            </button>
                        </div>
                        <div class="card-micro-info">
                            <span><i class="bi bi-clock-history"></i> Instant delivery</span>
                            <span>• Original Email</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ WHY CHOOSE US & DASHBOARD ═══════════════ -->
<section class="features-section" id="why-us">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Why 1518+ Creators Choose SocialBoost for Growth</h2>
            <p class="section-desc">
                We don't sell fake accounts. We provide original, aged, monetization-ready YouTube and TikTok accounts from USA, UK, Canada, Australia to help you scale your revenue ethically. Manual verification, no paid API, 99.2% success rate.
            </p>
        </div>

        <div class="row g-4 align-items-start">
            <!-- Left: 2x2 grid of feature cards matching image -->
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="feature-box h-100">
                            <div class="feature-icon-box"><i class="bi bi-shield-check"></i></div>
                            <h3 class="feature-title">Original Accounts</h3>
                            <p class="feature-desc">100% original creation, no bots. Original email + recovery, manual screenshots, IP logs included.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-box h-100">
                            <div class="feature-icon-box"><i class="bi bi-lightning-charge-fill"></i></div>
                            <h3 class="feature-title">Instant Delivery — 47 min avg</h3>
                            <p class="feature-desc">Manual verification via JazzCash / Easypaisa / Bank. Delivered in 2 hours max, 47 min average.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-box h-100">
                            <div class="feature-icon-box"><i class="bi bi-graph-up-arrow"></i></div>
                            <h3 class="feature-title">High RPM — 3-5x More</h3>
                            <p class="feature-desc">USA/UK/Canada traffic delivers 3-5x higher CPM. TikTok $1.20+ RPM vs $0.20 <em>generic</em> regions.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-box h-100">
                            <div class="feature-icon-box"><i class="bi bi-headset"></i></div>
                            <h3 class="feature-title">7-Day Guarantee + 24/7 Support</h3>
                            <p class="feature-desc">7-day replacement guarantee, 99.2% success rate. WhatsApp support 24/7, avg reply 3 minutes.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-3 pt-3 border-top">
                    <div class="fw-bold text-secondary" style="font-size:11.5px; text-transform:uppercase; letter-spacing:0.8px;">AVERAGE CLIENT RESULTS:</div>
                    <div class="d-flex gap-3 mt-2">
                        <span style="font-size:13px; font-weight:700; color:var(--sb-emerald);">↗ +254% Revenue</span>
                        <span style="font-size:13px; font-weight:700; color:var(--sb-primary);">↗ +189% Views</span>
                        <span style="font-size:13px; font-weight:700; color:var(--sb-amber);">↗ +320% Growth</span>
                    </div>
                </div>
            </div>

            <!-- Right Interactive Growth Dashboard -->
            <div class="col-lg-6">
                <div class="dashboard-preview-card">
                    <div class="dashboard-header">
                        <div>
                            <h4 class="m-0 fw-bold fs-6">Channel Growth Dashboard</h4>
                            <small class="text-muted" style="font-size:11.5px;">Real-time verified client performance</small>
                        </div>
                        <span class="badge bg-emerald-100 text-emerald-800 fw-bold px-3 py-1 rounded-pill" style="font-size:10.5px; background:#dcfce7; color:#166534;">
                            <span class="live-dot me-1"></span> Live Data
                        </span>
                    </div>

                    <div class="dash-stat-grid">
                        <div class="dash-stat-item">
                            <div class="dash-stat-val text-primary">$3,240</div>
                            <div class="dash-stat-label">REVENUE ↗ +32%</div>
                        </div>
                        <div class="dash-stat-item">
                            <div class="dash-stat-val text-success">184k</div>
                            <div class="dash-stat-label">VIEWS ↗ +18%</div>
                        </div>
                        <div class="dash-stat-item">
                            <div class="dash-stat-val text-dark">12</div>
                            <div class="dash-stat-label">ACTIVE ACCOUNTS</div>
                        </div>
                    </div>

                    <h5 class="fw-bold fs-6 mb-2">Recent Account Verifications</h5>
                    <div class="sales-activity-list">
                        <div class="sales-activity-item">
                            <span class="fw-bold">🇺🇸 TikTok USA - Beta</span>
                            <span class="text-muted">Monetized • Original • $1.20 RPM</span>
                            <span class="fw-bold text-success">$420</span>
                        </div>
                        <div class="sales-activity-item">
                            <span class="fw-bold">🇺🇸 YouTube USA - Aged</span>
                            <span class="text-muted">Partner • Original • $10 CPM</span>
                            <span class="fw-bold text-success">$890</span>
                        </div>
                        <div class="sales-activity-item">
                            <span class="fw-bold">🇬🇧 TikTok UK - Creator</span>
                            <span class="text-muted">Eligible • Original • $0.90 RPM</span>
                            <span class="fw-bold text-success">$310</span>
                        </div>
                    </div>

                    <div class="p-2 bg-light rounded-3 text-center border" style="font-size:11.5px; color:#475569;">
                        🛡 Manual verified • Original email • No paid API • 99.2% success rate
                    </div>
                </div>

                <!-- WhatsApp Consultation & Community Card -->
                <div class="whatsapp-banner-card">
                    <div>
                        <h4 class="fw-bold fs-6 text-white mb-1">Join Our Official WhatsApp Group</h4>
                        <p class="m-0 text-white-50" style="font-size:12.5px;">Get instant stock updates, creator tips & direct community support.</p>
                    </div>
                    <a href="https://chat.whatsapp.com/CrinvvpCZymAhKYjhzEsRL?s=sh&p=a&mlu=4&ilr=4" target="_blank" rel="noopener noreferrer" class="btn-wa-banner">
                        <i class="bi bi-whatsapp fs-6"></i> Join WhatsApp Group
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ CUSTOMER REVIEWS ═══════════════ -->
<section class="reviews-section" id="reviews">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">★★★★★ TRUSTED BY CREATORS</span>
            <h2 class="section-title">Trusted by 1518+ Creators Worldwide</h2>
            <p class="section-desc">
                4.9/5 average rating • 99.2% success rate • 12,500+ accounts delivered
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="review-card">
                    <div>
                        <div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="review-text">"Original account, delivered in 45 mins, monetization working perfectly. Manual verification via JazzCash was smooth. Highly recommended!"</p>
                    </div>
                    <div>
                        <div class="review-user-info">
                            <div class="user-avatar-circle">AR</div>
                            <div>
                                <div class="user-name">Ali R. (Karachi, PK)</div>
                                <div class="user-meta">✓ YouTube Monetized • Manual Verified</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="review-card">
                    <div>
                        <div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="review-text">"UK IP is genuine, Creator Fund approved in 2 days. RPM $0.94 so far. Support team replied in 2 minutes on WhatsApp."</p>
                    </div>
                    <div>
                        <div class="review-user-info">
                            <div class="user-avatar-circle bg-success">EL</div>
                            <div>
                                <div class="user-name">Emma L. (Sydney, AU)</div>
                                <div class="user-meta">✓ TikTok UK Creator • Verified</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="review-card">
                    <div>
                        <div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="review-text">"Best USA TikTok account I've bought. Creativity Program Beta earning $1.24 RPM. Original, aged, US IP verified. 5 stars!"</p>
                    </div>
                    <div>
                        <div class="review-user-info">
                            <div class="user-avatar-circle bg-warning text-dark">DP</div>
                            <div>
                                <div class="user-name">David P. (New York, US)</div>
                                <div class="user-meta">✓ TikTok USA Beta • Verified</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ FAQS SECTION ═══════════════ -->
<section class="faqs-section" id="faqs">
    <div class="container">
        <h2 class="faq-main-title">Frequently Asked Questions</h2>

        <div class="faq-grid">
            <!-- Column 1 -->
            <div>
                <div class="faq-item">
                    <div class="faq-item-header" onclick="toggleFaq(this)">
                        <span class="faq-item-question">How are YouTube & TikTok accounts delivered to me?</span>
                        <span class="faq-toggle-icon">+</span>
                    </div>
                    <div class="faq-item-answer">
                        Accounts are delivered directly to your WhatsApp or Email within 2 hours max (47 min average). You receive full login credentials, original email address with recovery password, creation IP logs, and manual verification screenshots.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item-header" onclick="toggleFaq(this)">
                        <span class="faq-item-question">Do you provide accounts for countries other than USA & UK?</span>
                        <span class="faq-toggle-icon">+</span>
                    </div>
                    <div class="faq-item-answer">
                        Yes, we deliver accounts for 100+ countries. Our most popular regions are USA, UK, Canada, and Australia due to their premium CPM/RPM. We can also provide accounts for UAE, New Zealand, and European countries upon request.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item-header" onclick="toggleFaq(this)">
                        <span class="faq-item-question">Why should I choose USA or UK accounts over Asian regions?</span>
                        <span class="faq-toggle-icon">+</span>
                    </div>
                    <div class="faq-item-answer">
                        USA, UK, Canada, and Australia traffic commands 3x–5x higher advertiser CPM/RPM. TikTok Creativity Program Beta in the USA averages $1.00–$1.50 RPM per 1,000 views, compared to less than $0.15 in generic Asian regions.
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div>
                <div class="faq-item">
                    <div class="faq-item-header" onclick="toggleFaq(this)">
                        <span class="faq-item-question">Are these accounts 100% original with no bots used?</span>
                        <span class="faq-toggle-icon">+</span>
                    </div>
                    <div class="faq-item-answer">
                        Yes, 100% original. We manually create and verify all accounts with real residential IP proxies and SIM activation for USA, UK, Canada, and Australia. We do not use bot software, preventing shadowbans or instant suspensions.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item-header" onclick="toggleFaq(this)">
                        <span class="faq-item-question">What payment methods do you accept in Pakistan and globally?</span>
                        <span class="faq-toggle-icon">+</span>
                    </div>
                    <div class="faq-item-answer">
                        We support manual payments via JazzCash, Easypaisa, and HBL Bank for Pakistan, as well as international payments through Binance (USDT/Crypto) and PayPal.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item-header" onclick="toggleFaq(this)">
                        <span class="faq-item-question">What is your replacement and warranty policy?</span>
                        <span class="faq-toggle-icon">+</span>
                    </div>
                    <div class="faq-item-answer">
                        Every account comes with a 7-day replacement guarantee. If there is any verification error or technical credential issue on delivery, our support team replaces the account free of charge.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ AUDIT & FORM SECTION (MATCHING IMAGE 1) ═══════════════ -->
<section class="audit-section" id="free-audit">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Left Info (Exact text & layout from Image 1) -->
            <div class="col-lg-6">
                <h2 class="hero-title fs-1 mb-3">Get Your Free Channel Audit Today</h2>
                <p class="section-desc text-start mb-4">
                    No commitment, no credit card. Just fill out the form and we'll deliver a complete audit of your channel monetization eligibility within 48 hours — including country recommendation.
                </p>

                <div class="d-flex flex-column gap-2 mb-4">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                        <span class="fw-semibold" style="font-size:13.5px;">Full analysis across 100+ countries (USA/UK/CA/AU priority)</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                        <span class="fw-semibold" style="font-size:13.5px;">Competitor benchmarking + RPM comparison</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                        <span class="fw-semibold" style="font-size:13.5px;">Original accounts guarantee check</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                        <span class="fw-semibold" style="font-size:13.5px;">Delivered in 2 hours via WhatsApp & Email</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                        <span class="fw-semibold" style="font-size:13.5px;">No strings attached • Free forever</span>
                    </div>
                </div>

                <!-- Testimonial Quote Box matching Image 1 -->
                <div class="audit-quote-box">
                    "We had no idea we were missing USA + UK. After SocialBoost, we fixed our presence and saw 34% increase in revenue within 6 weeks. Original accounts work."
                    <div class="fw-bold text-dark mt-2 not-italic" style="font-size:12.5px; font-style:normal;">
                        — Marcus T., <span class="text-muted fw-normal">Elite Channel, Chicago • YouTube USA</span>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 mt-4 pt-2">
                    <div class="country-stack-circle">
                        <span class="c-badge-pill badge-country-us">US</span>
                        <span class="c-badge-pill badge-country-uk">UK</span>
                        <span class="c-badge-pill badge-country-ca">CA</span>
                        <span class="c-badge-pill badge-country-au">AU</span>
                    </div>
                    <div style="font-size:12.5px; color:#475569;">
                        <strong>Trusted by 1518+ creators</strong> • 4.9/5 rating • 99.2% success rate • Manual verified
                    </div>
                </div>
            </div>

            <!-- Right Form Card (Exact 2-column layout matching Image 1) -->
            <div class="col-lg-6">
                <div class="audit-form-card" id="leadFormCard">
                    <span class="form-top-badge">No Credit Card</span>
                    <h3 class="fw-bold fs-4 mb-1">Request Your Free Audit</h3>
                    <p class="text-muted mb-4" style="font-size:12.5px;">Fill the form and get audit in 48 hours • <em>Original accounts check + country RPM analysis included</em></p>

                    @if(session('lead_success'))
                        <div class="alert alert-success border-0 bg-success bg-opacity-10 text-success rounded-3 p-3 mb-3 font-semibold" style="font-size:13px;">
                            <i class="bi bi-check-circle-fill me-1"></i> {{ session('lead_success') }}
                        </div>
                    @endif

                    <form action="{{ route('leads.store') }}" method="POST">
                        @csrf
                        <!-- Row 1: Channel Name & YouTube URL -->
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <label class="form-label-custom">Channel / Account Name *</label>
                                <input type="text" name="name" id="form_name" class="form-control-custom" placeholder="Elite Movers Channel" required value="{{ old('name') }}">
                                @error('name') <small class="text-danger" style="font-size:10.5px;">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label-custom">YouTube / TikTok URL</label>
                                <input type="text" name="message" id="form_message" class="form-control-custom" placeholder="youtube.com/@yourchannel" value="{{ old('message') }}">
                            </div>
                        </div>

                        <!-- Row 2: Owner Name & Phone Number -->
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <label class="form-label-custom">Owner Name</label>
                                <input type="text" class="form-control-custom" placeholder="John Doe">
                            </div>
                            <div class="col-6">
                                <label class="form-label-custom">Phone / WhatsApp Number</label>
                                <input type="text" name="phone" class="form-control-custom" placeholder="+92 300 1234567" value="{{ old('phone') }}">
                            </div>
                        </div>

                        <!-- Row 3: Email Address (Full Width) -->
                        <div class="mb-3">
                            <label class="form-label-custom">Email Address *</label>
                            <input type="email" name="email" class="form-control-custom" placeholder="you@company.com" required value="{{ old('email') }}">
                            @error('email') <small class="text-danger" style="font-size:10.5px;">{{ $message }}</small> @enderror
                        </div>

                        <!-- Row 4: Platform & Target Region -->
                        <div class="row g-2 mb-4">
                            <div class="col-6">
                                <label class="form-label-custom">Platform *</label>
                                <select name="platform" id="form_platform" class="form-select-custom" required>
                                    <option value="">Choose Platform</option>
                                    <option value="TikTok" {{ old('platform')=='TikTok'?'selected':'' }}>TikTok</option>
                                    <option value="YouTube" {{ old('platform')=='YouTube'?'selected':'' }}>YouTube</option>
                                    <option value="Both" {{ old('platform')=='Both'?'selected':'' }}>Both</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label-custom">Target Region *</label>
                                <select name="target_country" id="form_country" class="form-select-custom" required>
                                    <option value="">Choose Region</option>
                                    <option value="USA" {{ old('target_country')=='USA'?'selected':'' }}>🇺🇸 USA</option>
                                    <option value="UK" {{ old('target_country')=='UK'?'selected':'' }}>🇬🇧 UK</option>
                                    <option value="Canada" {{ old('target_country')=='Canada'?'selected':'' }}>🇨🇦 Canada</option>
                                    <option value="Australia" {{ old('target_country')=='Australia'?'selected':'' }}>🇦🇺 Australia</option>
                                    <option value="New Zealand" {{ old('target_country')=='New Zealand'?'selected':'' }}>🇳🇿 New Zealand</option>
                                    <option value="UAE" {{ old('target_country')=='UAE'?'selected':'' }}>🇦🇪 UAE</option>
                                </select>
                            </div>
                        </div>

                        <!-- Big Amber Submit Button matching Image 1 -->
                        <button type="submit" class="btn-gold-submit">
                            Get Free Audit <i class="bi bi-arrow-right"></i>
                        </button>

                        <div class="audit-info-light-box">
                            We never share your data. Audit delivered via WhatsApp & Email in 48h. Includes USA/UK/CA/AU recommendation + RPM estimate.
                        </div>

                        <div class="audit-pills-row">
                            <span class="audit-pill-item"><i class="bi bi-shield-check me-1"></i> Original guarantee</span>
                            <span class="audit-pill-item"><i class="bi bi-lightning-charge me-1"></i> 47 min avg delivery</span>
                            <span class="audit-pill-item"><i class="bi bi-graph-up me-1"></i> 99.2% success</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ FOOTER (UNIFIED DARK NAVY #0b1329) ═══════════════ -->
<footer class="site-footer">
    <div class="container">
        <div class="row g-4">
            <!-- Brand & Newsletter Column -->
            <div class="col-lg-4">
                <a href="/" class="logo-box" style="margin-bottom: 12px; display: inline-flex;">
                    <div class="logo-icon" style="width: 32px; height: 32px; font-size: 0.9rem;">SB</div>
                    <span class="logo-text" style="color: #fff;">Social<span style="color: #3b82f6;">Boost</span></span>
                </a>
                <p class="mt-2 text-slate-400" style="font-size:12.5px; line-height:1.6;">
                    100% original YouTube & TikTok monetization-ready accounts for USA, UK, Canada, Australia & 100+ countries. Manual verification, no bots, transparent reporting.
                </p>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="c-badge-circle badge-country-us">US</span>
                    <span class="c-badge-circle badge-country-uk">UK</span>
                    <span class="c-badge-circle badge-country-ca">CA</span>
                    <span class="c-badge-circle badge-country-au">AU</span>
                </div>
                <div class="fw-bold text-white mt-3 mb-1" style="font-size:12px;">Get Updates & Offers</div>
                <form id="newsletterForm" class="newsletter-input-box" onsubmit="handleNewsletterSubmit(event)">
                    <input type="email" id="newsletterEmail" placeholder="Enter email for updates..." required>
                    <button type="submit">Subscribe</button>
                </form>
                <div id="newsletterAlert" class="text-success small mt-2 d-none">
                    <i class="bi bi-check-circle-fill"></i> Thank you! You've subscribed for updates.
                </div>
            </div>

            <!-- Column 2: Navigation Links -->
            <div class="col-lg-2 col-6">
                <h5 class="footer-heading">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('blog') }}">Blog & Guides</a></li>
                    <li><a href="#services">Services</a></li>
                </ul>
            </div>

            <!-- Column 3: Legal & Security -->
            <div class="col-lg-2 col-6">
                <h5 class="footer-heading">Our Terms</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('payment-security') }}">Payment Security</a></li>
                    <li><a href="{{ route('refund-policy') }}">Refund Policy</a></li>
                    <li><a href="#faqs">FAQs</a></li>
                </ul>
            </div>

            <!-- Column 4: Country Badges, Contact & Payment -->
            <div class="col-lg-4">
                <h5 class="footer-heading">Contact Us</h5>
                <div class="text-[10px] font-bold tracking-[0.12em] uppercase text-[#64748B]">WhatsApp 24/7</div>
                <p class="m-0 mb-1" style="font-size:12.5px;">
                    <a href="https://wa.me/923704635765" target="_blank" class="text-success text-decoration-none fw-bold">
                        <i class="bi bi-whatsapp"></i> +92 370 4635765
                    </a>
                </p>
                <div class="text-[10px] font-bold tracking-[0.12em] uppercase text-[#64748B]">Email Support</div>
                <p class="m-0 mb-3" style="font-size:12.5px;">
                    <a href="mailto:mzobair102@gmail.com" class="text-white text-decoration-none">
                        <i class="bi bi-envelope"></i> mzobair102@gmail.com
                    </a>
                </p>

                <div>
                    <div class="fw-semibold text-white mb-2" style="font-size:11px; text-transform:uppercase;">Payment Security • Manual Verification</div>
                    <span class="payment-badge">JazzCash</span>
                    <span class="payment-badge">Easypaisa</span>
                    <span class="payment-badge">HBL Bank</span>
                    <span class="payment-badge">Binance</span>
                    <span class="payment-badge">PayPal</span>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div>
                © {{ date('Y') }} SocialBoost • Original Accounts Marketplace • EST 2020 • 1518+ Creators • 99.2% Success Rate • Manual Verified • No Bots
            </div>
            <div>
                <span class="badge bg-emerald-900 text-emerald-300 rounded-pill px-3 py-1" style="background:#064e3b; color:#6ee7b7; font-size:11px;">
                    🟢 All systems operational • 100+ Countries
                </span>
            </div>
        </div>
    </div>
</footer>

<!-- ═══════════════ FLOATING WHATSAPP BUTTON (GROUP INVITE) ═══════════════ -->
<a href="https://chat.whatsapp.com/CrinvvpCZymAhKYjhzEsRL?s=sh&p=a&mlu=4&ilr=4" target="_blank" rel="noopener noreferrer" class="wa-float-btn" title="Join WhatsApp Group">
    <i class="bi bi-whatsapp"></i>
</a>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });

    // Functional Search Input Filter for Catalog Cards
    const searchInput = document.getElementById('navSearchInput');
    const catalogCards = document.querySelectorAll('.catalog-item-card');
    const noSearchAlert = document.getElementById('noSearchAlert');

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const query = this.value.toLowerCase().trim();
            let hasMatch = false;

            if (query.length > 0) {
                const catalogSec = document.getElementById('services');
                if (catalogSec) catalogSec.scrollIntoView({ behavior: 'smooth' });
            }

            catalogCards.forEach(card => {
                const keywords = card.getAttribute('data-keywords') || '';
                const textContent = card.textContent.toLowerCase();

                if (keywords.includes(query) || textContent.includes(query)) {
                    card.style.display = 'block';
                    hasMatch = true;
                } else {
                    card.style.display = 'none';
                }
            });

            if (!hasMatch && query.length > 0) {
                noSearchAlert.classList.remove('d-none');
            } else {
                noSearchAlert.classList.add('d-none');
            }
        });
    }

    // Prefill Order / Audit Form
    function openOrderModal(platform, country, title) {
        const platformSelect = document.getElementById('form_platform');
        const countrySelect = document.getElementById('form_country');
        const messageInput = document.getElementById('form_message');
        const formCard = document.getElementById('leadFormCard');

        if (platformSelect) platformSelect.value = platform;
        if (countrySelect) countrySelect.value = country;
        if (messageInput) messageInput.value = 'Interested in: ' + title;

        if (formCard) {
            formCard.scrollIntoView({ behavior: 'smooth' });
            formCard.style.boxShadow = '0 0 0 4px rgba(37, 99, 235, 0.3)';
            setTimeout(() => {
                formCard.style.boxShadow = '0 16px 36px -10px rgba(0,0,0,0.08)';
            }, 1500);
        }
    }

    // Handle Newsletter Form Subscription
    function handleNewsletterSubmit(e) {
        e.preventDefault();
        const emailInput = document.getElementById('newsletterEmail');
        const alertBox = document.getElementById('newsletterAlert');
        if (emailInput && emailInput.value) {
            if (alertBox) {
                alertBox.classList.remove('d-none');
                setTimeout(() => { alertBox.classList.add('d-none'); }, 4000);
            }
            emailInput.value = '';
        }
    }

    // 2-column FAQ toggle with +/- icon
    function toggleFaq(header) {
        const answer = header.nextElementSibling;
        const icon = header.querySelector('.faq-toggle-icon');
        const isOpen = answer.classList.contains('open');

        // Close all open items first
        document.querySelectorAll('.faq-item-answer.open').forEach(a => {
            a.classList.remove('open');
            const sibIcon = a.previousElementSibling.querySelector('.faq-toggle-icon');
            if (sibIcon) { sibIcon.textContent = '+'; sibIcon.classList.remove('open'); }
        });

        // Open clicked if it was closed
        if (!isOpen) {
            answer.classList.add('open');
            icon.textContent = '−';
            icon.classList.add('open');
        }
    }

    // Theme Toggle Functionality (Clean Light & Modern Dark)
    (function initThemeToggle() {
        const toggleBtn = document.getElementById('themeToggleBtn');
        const themeIcon = document.getElementById('themeIcon');
        
        function updateIcon(theme) {
            if (!themeIcon) return;
            if (theme === 'dark') {
                themeIcon.className = 'bi bi-sun-fill text-warning';
                if (toggleBtn) toggleBtn.setAttribute('title', 'Switch to Clean Light Theme');
            } else {
                themeIcon.className = 'bi bi-moon-stars';
                if (toggleBtn) toggleBtn.setAttribute('title', 'Switch to Modern Dark Theme');
            }
        }

        const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
        updateIcon(currentTheme);

        if (toggleBtn) {
            toggleBtn.addEventListener('click', function() {
                const activeTheme = document.documentElement.getAttribute('data-theme') || 'light';
                const newTheme = activeTheme === 'dark' ? 'light' : 'dark';
                document.documentElement.setAttribute('data-theme', newTheme);
                localStorage.setItem('socialboost_theme', newTheme);
                updateIcon(newTheme);
            });
        }
    })();
</script>

</body>
</html>

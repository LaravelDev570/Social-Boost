<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us — SocialBoost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --sb-primary: #2563eb;
            --sb-dark: #0b1329;
            --sb-slate-800: #1e293b;
            --sb-slate-600: #475569;
            --sb-slate-50: #f8fafc;
        }
        body { font-family: 'Inter', sans-serif; background-color: var(--sb-slate-50); color: var(--sb-slate-800); line-height: 1.7; font-size: 15px; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Plus Jakarta Sans', sans-serif; color: var(--sb-dark); font-weight: 800; letter-spacing: -0.02em; }
        
        .page-header { background: #fff; padding: 15px 0; border-bottom: 1px solid #e2e8f0; }
        .logo-box { display: inline-flex; align-items: center; gap: 10px; text-decoration: none; }
        .logo-icon { width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #1a56db 0%, #3b82f6 50%, #06b6d4 100%); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 0.9rem; font-family: 'Plus Jakarta Sans', sans-serif; }
        .logo-text { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 900; font-size: 1.25rem; color: var(--sb-dark); letter-spacing: -0.03em; }
        .logo-text span { color: var(--sb-primary); }
        .btn-back { font-size: 13.5px; font-weight: 700; color: var(--sb-slate-600); text-decoration: none; display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 8px; transition: all 0.2s; background: #f1f5f9; }
        .btn-back:hover { background: #e2e8f0; color: var(--sb-dark); }
        
        .hero-banner { background: linear-gradient(135deg, #0b1329 0%, #1e293b 100%); padding: 80px 0; text-align: center; color: #fff; position: relative; overflow: hidden; }
        .hero-title { font-size: 2.8rem; font-weight: 900; margin-bottom: 16px; color: #fff; }
        .hero-subtitle { font-size: 1.1rem; color: #94a3b8; max-width: 600px; margin: 0 auto; line-height: 1.6; }
        
        .content-container { max-width: 800px; margin: -40px auto 60px; background: #fff; border-radius: 16px; box-shadow: 0 10px 40px -10px rgba(0,0,0,0.08); padding: 50px; position: relative; z-index: 10; border: 1px solid #e2e8f0; }
        
        .content-section { margin-bottom: 40px; }
        .content-section:last-child { margin-bottom: 0; }
        .content-section h3 { font-size: 1.5rem; margin-bottom: 20px; color: var(--sb-primary); display: flex; align-items: center; gap: 10px; }
        .content-section h3 i { background: #eff6ff; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }
        .content-section p { color: var(--sb-slate-600); font-size: 15.5px; margin-bottom: 16px; }
        
        .stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0; }
        .stat-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; text-align: center; }
        .stat-value { font-size: 2rem; font-weight: 900; color: var(--sb-dark); font-family: 'Plus Jakarta Sans', sans-serif; }
        .stat-label { font-size: 13px; font-weight: 600; color: var(--sb-slate-600); text-transform: uppercase; letter-spacing: 0.5px; margin-top: 5px; }

        .footer-simple { text-align: center; padding: 40px 0; color: var(--sb-slate-600); font-size: 13.5px; border-top: 1px solid #e2e8f0; margin-top: 40px; }
    </style>
</head>
<body>
    <header class="page-header">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="/" class="logo-box">
                <div class="logo-icon">SB</div>
                <span class="logo-text">Social<span>Boost</span></span>
            </a>
            <a href="/" class="btn-back"><i class="bi bi-arrow-left"></i> Back to Home</a>
        </div>
    </header>

    <div class="hero-banner">
        <div class="container">
            <h1 class="hero-title">About SocialBoost</h1>
            <p class="hero-subtitle">Empowering creators worldwide with premium, monetization-ready social media assets.</p>
        </div>
    </div>

    <div class="container">
        <div class="content-container">
            <div class="content-section">
                <h3><i class="bi bi-rocket-takeoff"></i> Our Mission</h3>
                <p>At SocialBoost, we believe that geographical boundaries shouldn't limit a creator's earning potential. We saw talented creators struggling to monetize their content simply because they lived outside of eligible regions like the USA, UK, Canada, or Australia.</p>
                <p>Our mission is to bridge this gap. We provide 100% original, aged, and manually verified YouTube and TikTok accounts that are primed for monetization programs, allowing creators to earn what they truly deserve.</p>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-value">1,500+</div>
                    <div class="stat-label">Active Creators</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">100+</div>
                    <div class="stat-label">Countries Served</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">99.2%</div>
                    <div class="stat-label">Success Rate</div>
                </div>
            </div>

            <div class="content-section">
                <h3><i class="bi bi-shield-check"></i> The SocialBoost Standard</h3>
                <p>Unlike automated services or bot-farms, we pride ourselves on a completely manual process. Every single account delivered by SocialBoost is created on real devices using residential IPs from the target country. We never use paid APIs or risky automation software.</p>
                <p>We provide full transparency: our clients receive the original email address, recovery details, and creation logs to ensure full ownership and long-term security.</p>
            </div>

            <div class="content-section">
                <h3><i class="bi bi-people"></i> Meet the Team</h3>
                <p>SocialBoost is run by a dedicated team of digital marketing experts, social media strategists, and account security specialists. Founded in 2020, we have grown from a small local agency into a trusted global marketplace, thanks to our unwavering commitment to quality and 24/7 customer support.</p>
            </div>
        </div>
    </div>

    <footer class="footer-simple">
        <div class="container">
            &copy; {{ date('Y') }} SocialBoost. All rights reserved. <br>
            100% Original YouTube & TikTok Monetization Accounts.
        </div>
    </footer>
</body>
</html>

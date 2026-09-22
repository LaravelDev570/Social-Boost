<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog & Insights — SocialBoost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root { --sb-primary: #2563eb; --sb-dark: #0b1329; --sb-slate-800: #1e293b; --sb-slate-600: #475569; --sb-slate-50: #f8fafc; }
        body { font-family: 'Inter', sans-serif; background-color: var(--sb-slate-50); color: var(--sb-slate-800); line-height: 1.7; font-size: 15px; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Plus Jakarta Sans', sans-serif; color: var(--sb-dark); font-weight: 800; letter-spacing: -0.02em; }
        
        .page-header { background: #fff; padding: 15px 0; border-bottom: 1px solid #e2e8f0; }
        .logo-box { display: inline-flex; align-items: center; gap: 10px; text-decoration: none; }
        .logo-icon { width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #1a56db 0%, #3b82f6 50%, #06b6d4 100%); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 0.9rem; font-family: 'Plus Jakarta Sans', sans-serif; }
        .logo-text { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 900; font-size: 1.25rem; color: var(--sb-dark); letter-spacing: -0.03em; }
        .logo-text span { color: var(--sb-primary); }
        .btn-back { font-size: 13.5px; font-weight: 700; color: var(--sb-slate-600); text-decoration: none; display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 8px; transition: all 0.2s; background: #f1f5f9; }
        .btn-back:hover { background: #e2e8f0; color: var(--sb-dark); }
        
        .hero-banner { background: linear-gradient(135deg, #0b1329 0%, #1e293b 100%); padding: 80px 0 100px; text-align: center; color: #fff; position: relative; overflow: hidden; }
        .hero-title { font-size: 2.8rem; font-weight: 900; margin-bottom: 16px; color: #fff; }
        .hero-subtitle { font-size: 1.1rem; color: #94a3b8; max-width: 600px; margin: 0 auto; line-height: 1.6; }
        
        .blog-container { margin-top: -60px; position: relative; z-index: 10; padding-bottom: 60px; }
        
        .blog-card { background: #fff; border-radius: 16px; box-shadow: 0 10px 40px -10px rgba(0,0,0,0.08); transition: transform 0.2s; height: 100%; display: flex; flex-direction: column; border: 1px solid #e2e8f0; overflow: hidden; }
        .blog-card:hover { transform: translateY(-5px); box-shadow: 0 15px 45px -10px rgba(0,0,0,0.12); }
        .blog-img { height: 220px; background: #e2e8f0; display: flex; align-items: center; justify-content: center; color: #94a3b8; font-size: 50px; }
        .blog-content { padding: 30px; flex-grow: 1; display: flex; flex-direction: column; }
        .blog-meta { font-size: 13px; color: #64748b; margin-bottom: 15px; display: flex; justify-content: space-between; align-items: center; }
        .blog-title { font-size: 1.35rem; margin-bottom: 12px; line-height: 1.4; }
        .blog-excerpt { color: #475569; font-size: 14.5px; margin-bottom: 25px; flex-grow: 1; line-height: 1.6; }
        .read-more { font-weight: 700; color: var(--sb-primary); text-decoration: none; display: inline-flex; align-items: center; gap: 6px; mt-auto; font-size: 14px; }
        .read-more:hover { color: #1d4ed8; }
        
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
            <h1 class="hero-title">Blog & Insights</h1>
            <p class="hero-subtitle">Expert strategies for YouTube and TikTok monetization.</p>
        </div>
    </div>

    <div class="container blog-container">
        <div class="row g-4">
            <!-- Article 1 -->
            <div class="col-md-4">
                <div class="blog-card">
                    <div class="blog-img" style="background: linear-gradient(135deg, #fee2e2, #fca5a5); color: #ef4444;"><i class="bi bi-tiktok"></i></div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="badge bg-danger">TikTok Strategy</span>
                            <span>Sep 12, 2026</span>
                        </div>
                        <h4 class="blog-title">Maximizing TikTok Creativity Program Beta RPM in USA</h4>
                        <p class="blog-excerpt">Learn how audience geography and video duration impact your RPM. We break down why USA verified accounts consistently achieve $1.00+ RPM compared to other regions.</p>
                        <a href="#" class="read-more">Read Article <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="col-md-4">
                <div class="blog-card">
                    <div class="blog-img" style="background: linear-gradient(135deg, #ffedd5, #fdba74); color: #f97316;"><i class="bi bi-youtube"></i></div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="badge bg-warning text-dark">YouTube YPP</span>
                            <span>Sep 05, 2026</span>
                        </div>
                        <h4 class="blog-title">YouTube Partner Program 2026: Avoiding Demonetization</h4>
                        <p class="blog-excerpt">A comprehensive guide on maintaining your YPP status. We discuss reused content policies, copyright strikes, and best practices for aged channel management.</p>
                        <a href="#" class="read-more">Read Article <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="col-md-4">
                <div class="blog-card">
                    <div class="blog-img" style="background: linear-gradient(135deg, #dcfce7, #86efac); color: #22c55e;"><i class="bi bi-globe"></i></div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="badge bg-success">Growth Hacks</span>
                            <span>Aug 28, 2026</span>
                        </div>
                        <h4 class="blog-title">UK vs USA Accounts: Which is Better for Your Niche?</h4>
                        <p class="blog-excerpt">Comparing CPM rates and advertiser demands between the United Kingdom and the United States. Find out which region aligns best with your content strategy.</p>
                        <a href="#" class="read-more">Read Article <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
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

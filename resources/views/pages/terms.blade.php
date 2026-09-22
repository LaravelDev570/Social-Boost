<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions — SocialBoost</title>
    <meta name="description" content="Read SocialBoost's Terms & Conditions before using our social media account services.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --primary-light: #3b82f6;
            --primary-dark: #1d4ed8;
            --accent: #06b6d4;
            --dark: #0b1329;
            --slate-900: #0f172a;
            --slate-800: #1e293b;
            --slate-700: #334155;
            --slate-600: #475569;
            --slate-400: #94a3b8;
            --slate-200: #e2e8f0;
            --slate-100: #f1f5f9;
            --slate-50: #f8fafc;
            --white: #ffffff;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--slate-50);
            color: var(--slate-800);
            line-height: 1.7;
            font-size: 15px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        /* ── NAVBAR ── */
        .top-nav {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--slate-200);
            padding: 14px 0;
        }
        .logo-box { display: inline-flex; align-items: center; gap: 10px; text-decoration: none; }
        .logo-icon {
            width: 38px; height: 38px; border-radius: 10px;
            background: linear-gradient(135deg, #1a56db 0%, #3b82f6 50%, #06b6d4 100%);
            color: #fff; display: flex; align-items: center; justify-content: center;
            font-weight: 900; font-size: 0.9rem; font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .logo-text { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 900; font-size: 1.2rem; color: var(--dark); letter-spacing: -0.03em; }
        .logo-text span { color: var(--primary); }
        .btn-home {
            display: inline-flex; align-items: center; gap: 7px;
            font-size: 13.5px; font-weight: 600; color: var(--slate-600);
            text-decoration: none; padding: 8px 18px; border-radius: 8px;
            background: var(--slate-100); border: 1px solid var(--slate-200);
            transition: all 0.2s;
        }
        .btn-home:hover { background: var(--slate-200); color: var(--dark); transform: translateX(-2px); }

        /* ── HERO ── */
        .hero {
            background: linear-gradient(135deg, #0b1329 0%, #1e2d4d 50%, #0f2460 100%);
            padding: 80px 0 100px;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute; inset: 0;
            background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(37,99,235,0.3) 0%, transparent 70%);
        }
        .hero::after {
            content: '';
            position: absolute; bottom: -1px; left: 0; right: 0; height: 60px;
            background: var(--slate-50);
            clip-path: ellipse(55% 100% at 50% 100%);
        }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(37,99,235,0.2); border: 1px solid rgba(59,130,246,0.4);
            color: #93c5fd; font-size: 12px; font-weight: 700; letter-spacing: 0.08em;
            text-transform: uppercase; padding: 6px 16px; border-radius: 100px;
            margin-bottom: 24px;
        }
        .hero-title {
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 900; color: #fff; margin-bottom: 16px;
        }
        .hero-title span {
            background: linear-gradient(90deg, #60a5fa, #06b6d4);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .hero-subtitle { font-size: 1.05rem; color: var(--slate-400); max-width: 560px; margin: 0 auto 32px; }
        .hero-meta {
            display: inline-flex; align-items: center; gap: 6px;
            background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12);
            color: var(--slate-400); font-size: 13px; padding: 8px 18px; border-radius: 8px;
        }
        .hero-orb {
            position: absolute; border-radius: 50%;
            background: radial-gradient(circle, rgba(37,99,235,0.15), transparent 70%);
            pointer-events: none;
        }
        .orb-1 { width: 500px; height: 500px; top: -200px; right: -100px; }
        .orb-2 { width: 300px; height: 300px; bottom: -100px; left: -50px; }

        /* ── LAYOUT ── */
        .page-layout {
            max-width: 1100px;
            margin: 0 auto;
            padding: 60px 24px 80px;
            display: grid;
            grid-template-columns: 260px 1fr;
            gap: 40px;
            align-items: start;
        }

        /* ── SIDEBAR ── */
        .sidebar { position: sticky; top: 90px; }
        .sidebar-card {
            background: var(--white);
            border: 1px solid var(--slate-200);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }
        .sidebar-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 11px; font-weight: 700; text-transform: uppercase;
            letter-spacing: 0.1em; color: var(--slate-400); margin-bottom: 16px;
        }
        .toc-list { list-style: none; }
        .toc-list li { margin-bottom: 4px; }
        .toc-list a {
            display: flex; align-items: center; gap: 10px;
            font-size: 13.5px; font-weight: 500; color: var(--slate-600);
            text-decoration: none; padding: 8px 12px; border-radius: 8px;
            transition: all 0.2s;
        }
        .toc-list a:hover, .toc-list a.active {
            background: #eff6ff; color: var(--primary); font-weight: 600;
        }
        .toc-list a .toc-num {
            width: 22px; height: 22px; border-radius: 6px;
            background: var(--slate-100); color: var(--slate-500);
            font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center;
            flex-shrink: 0; transition: all 0.2s;
        }
        .toc-list a:hover .toc-num, .toc-list a.active .toc-num {
            background: var(--primary); color: #fff;
        }

        .sidebar-info {
            margin-top: 20px;
            background: linear-gradient(135deg, #eff6ff, #f0f9ff);
            border: 1px solid #bfdbfe;
            border-radius: 12px;
            padding: 18px;
        }
        .sidebar-info p { font-size: 12.5px; color: var(--slate-600); line-height: 1.6; margin: 0; }
        .sidebar-info strong { color: var(--primary); }

        /* ── MAIN CONTENT ── */
        .main-content {}
        .content-header {
            background: var(--white);
            border: 1px solid var(--slate-200);
            border-radius: 16px;
            padding: 32px 36px;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        }
        .content-header-icon {
            width: 56px; height: 56px; border-radius: 14px;
            background: linear-gradient(135deg, #2563eb, #06b6d4);
            display: flex; align-items: center; justify-content: center;
            font-size: 24px; color: white; flex-shrink: 0;
        }
        .content-header h2 { font-size: 1.5rem; color: var(--dark); margin-bottom: 4px; }
        .content-header p { font-size: 14px; color: var(--slate-500); margin: 0; }

        .section-card {
            background: var(--white);
            border: 1px solid var(--slate-200);
            border-radius: 16px;
            padding: 32px 36px;
            margin-bottom: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
            transition: box-shadow 0.2s, border-color 0.2s;
        }
        .section-card:hover {
            box-shadow: 0 8px 32px rgba(37,99,235,0.08);
            border-color: #bfdbfe;
        }
        .section-num {
            display: inline-flex; align-items: center; justify-content: center;
            width: 32px; height: 32px; border-radius: 8px;
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            color: var(--primary); font-size: 13px; font-weight: 800;
            font-family: 'Plus Jakarta Sans', sans-serif;
            margin-right: 12px; flex-shrink: 0;
        }
        .section-heading {
            display: flex; align-items: center;
            font-size: 1.1rem; font-weight: 800; color: var(--dark);
            margin-bottom: 16px;
        }
        .section-body { color: var(--slate-600); font-size: 15px; line-height: 1.8; }
        .section-body p { margin-bottom: 12px; }
        .section-body p:last-child { margin-bottom: 0; }
        .section-body ul, .section-body ol { padding-left: 20px; margin-bottom: 12px; }
        .section-body li { margin-bottom: 8px; }

        /* ── FOOTER ── */
        .page-footer {
            background: var(--dark);
            padding: 48px 0 32px;
            color: var(--slate-400);
        }
        .footer-links { display: flex; flex-wrap: wrap; gap: 8px; justify-content: center; margin-bottom: 24px; }
        .footer-links a {
            font-size: 13px; color: var(--slate-400); text-decoration: none;
            padding: 6px 14px; border-radius: 6px; border: 1px solid rgba(255,255,255,0.08);
            transition: all 0.2s;
        }
        .footer-links a:hover { color: #fff; border-color: rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); }
        .footer-links a.active-page { color: var(--primary-light); border-color: rgba(59,130,246,0.3); }
        .footer-copy { text-align: center; font-size: 13px; color: var(--slate-600); }

        @media (max-width: 768px) {
            .page-layout { grid-template-columns: 1fr; }
            .sidebar { position: static; }
            .section-card { padding: 24px 20px; }
            .content-header { padding: 24px 20px; }
            .hero { padding: 60px 0 80px; }
        }
    </style>
</head>
<body>

    <!-- NAV -->
    <nav class="top-nav">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="/" class="logo-box">
                <div class="logo-icon">SB</div>
                <span class="logo-text">Social<span>Boost</span></span>
            </a>
            <a href="/" class="btn-home"><i class="bi bi-arrow-left"></i> Back to Home</a>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero text-center">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="container position-relative">
            <div class="hero-badge">
                <i class="bi bi-file-text-fill"></i> Legal Document
            </div>
            <h1 class="hero-title">Terms & <span>Conditions</span></h1>
            <p class="hero-subtitle">Please read these terms carefully before purchasing or using any of our services.</p>
            <div class="hero-meta"><i class="bi bi-clock"></i> Last updated: September 2026 &nbsp;·&nbsp; <i class="bi bi-shield-check"></i> 5 sections</div>
        </div>
    </section>

    <!-- LAYOUT -->
    <div class="page-layout">

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card">
                <div class="sidebar-title">On this page</div>
                <ul class="toc-list">
                    <li><a href="#s1"><span class="toc-num">1</span> Acceptance of Terms</a></li>
                    <li><a href="#s2"><span class="toc-num">2</span> Service Description</a></li>
                    <li><a href="#s3"><span class="toc-num">3</span> Ownership Transfer</a></li>
                    <li><a href="#s4"><span class="toc-num">4</span> User Responsibilities</a></li>
                    <li><a href="#s5"><span class="toc-num">5</span> Limitation of Liability</a></li>
                </ul>
            </div>
            <div class="sidebar-info">
                <p><i class="bi bi-info-circle-fill" style="color:var(--primary)"></i> &nbsp;Questions? Contact us on <strong>WhatsApp</strong> or email <strong>support@socialboost.com</strong></p>
            </div>
        </aside>

        <!-- MAIN -->
        <main class="main-content">
            <div class="content-header">
                <div class="content-header-icon"><i class="bi bi-file-earmark-text"></i></div>
                <div>
                    <h2>Terms & Conditions</h2>
                    <p>Governing the purchase and use of SocialBoost services</p>
                </div>
            </div>

            <div class="section-card" id="s1">
                <div class="section-heading"><span class="section-num">1</span> Acceptance of Terms</div>
                <div class="section-body">
                    <p>By accessing or using the services provided by SocialBoost ("we," "us," or "our"), you agree to be bound by these Terms & Conditions. If you do not agree to all the terms, you may not access or use our services.</p>
                    <p>These terms apply to all buyers purchasing YouTube, TikTok, or other social media accounts from our platform.</p>
                </div>
            </div>

            <div class="section-card" id="s2">
                <div class="section-heading"><span class="section-num">2</span> Service Description</div>
                <div class="section-body">
                    <p>SocialBoost acts as a digital marketplace providing pre-created, aged, and region-specific (e.g., USA, UK, Canada) social media accounts. These accounts are intended to help creators access specific monetization programs (like the TikTok Creativity Program Beta or YouTube Partner Program).</p>
                    <p>We guarantee the initial state of the account upon delivery but make no guarantees regarding future earnings or algorithmic success.</p>
                </div>
            </div>

            <div class="section-card" id="s3">
                <div class="section-heading"><span class="section-num">3</span> Account Transfer and Ownership</div>
                <div class="section-body">
                    <p>Upon successful payment and delivery of account credentials (including the original email access), full ownership and responsibility of the account are transferred to the buyer.</p>
                    <p>It is the buyer's strict responsibility to immediately secure the account by changing passwords and enabling Two-Factor Authentication (2FA).</p>
                </div>
            </div>

            <div class="section-card" id="s4">
                <div class="section-heading"><span class="section-num">4</span> User Responsibilities</div>
                <div class="section-body">
                    <p>Buyers agree to use the purchased accounts in compliance with the respective platform's Terms of Service (e.g., YouTube's Community Guidelines, TikTok's Terms of Service).</p>
                    <p>SocialBoost is not liable for account bans, demonetization, or penalties resulting from the buyer's actions, including but not limited to:</p>
                    <ul>
                        <li>Uploading copyrighted material</li>
                        <li>Using engagement bots</li>
                        <li>Violating community standards</li>
                    </ul>
                </div>
            </div>

            <div class="section-card" id="s5">
                <div class="section-heading"><span class="section-num">5</span> Limitation of Liability</div>
                <div class="section-body">
                    <p>In no event shall SocialBoost be liable for any indirect, incidental, special, consequential, or punitive damages, including loss of profits, data, or use, arising out of or related to your use of the accounts purchased from us.</p>
                    <p>Our maximum liability shall not exceed the amount you paid for the specific account in question.</p>
                </div>
            </div>
        </main>
    </div>

    <!-- FOOTER -->
    <footer class="page-footer">
        <div class="container">
            <div class="footer-links">
                <a href="/terms" class="active-page">Terms & Conditions</a>
                <a href="/privacy">Privacy Policy</a>
                <a href="/payment-security">Payment Security</a>
                <a href="/refund-policy">Refund Policy</a>
                <a href="/contact">Contact Us</a>
            </div>
            <div class="footer-copy">&copy; {{ date('Y') }} SocialBoost. All rights reserved. &nbsp;·&nbsp; 100% Original YouTube & TikTok Monetization Accounts.</div>
        </div>
    </footer>

    <script>
        // Active TOC on scroll
        const sections = document.querySelectorAll('[id^="s"]');
        const tocLinks = document.querySelectorAll('.toc-list a');
        window.addEventListener('scroll', () => {
            let cur = '';
            sections.forEach(s => { if (window.scrollY >= s.offsetTop - 120) cur = s.id; });
            tocLinks.forEach(a => {
                a.classList.remove('active');
                if (a.getAttribute('href') === '#' + cur) a.classList.add('active');
            });
        });
    </script>
</body>
</html>

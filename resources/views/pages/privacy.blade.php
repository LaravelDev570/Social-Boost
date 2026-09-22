<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy — SocialBoost</title>
    <meta name="description" content="SocialBoost's Privacy Policy — how we collect, use, and protect your personal data.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #7c3aed;
            --primary-light: #a78bfa;
            --primary-dark: #6d28d9;
            --accent: #ec4899;
            --dark: #0b1329;
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
        body { font-family: 'Inter', sans-serif; background-color: var(--slate-50); color: var(--slate-800); line-height: 1.7; font-size: 15px; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; letter-spacing: -0.02em; }

        /* NAVBAR */
        .top-nav { position: sticky; top: 0; z-index: 1000; background: rgba(255,255,255,0.95); backdrop-filter: blur(12px); border-bottom: 1px solid var(--slate-200); padding: 14px 0; }
        .logo-box { display: inline-flex; align-items: center; gap: 10px; text-decoration: none; }
        .logo-icon { width: 38px; height: 38px; border-radius: 10px; background: linear-gradient(135deg, #1a56db 0%, #3b82f6 50%, #06b6d4 100%); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 0.9rem; font-family: 'Plus Jakarta Sans', sans-serif; }
        .logo-text { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 900; font-size: 1.2rem; color: var(--dark); letter-spacing: -0.03em; }
        .logo-text span { color: #2563eb; }
        .btn-home { display: inline-flex; align-items: center; gap: 7px; font-size: 13.5px; font-weight: 600; color: var(--slate-600); text-decoration: none; padding: 8px 18px; border-radius: 8px; background: var(--slate-100); border: 1px solid var(--slate-200); transition: all 0.2s; }
        .btn-home:hover { background: var(--slate-200); color: var(--dark); transform: translateX(-2px); }

        /* HERO */
        .hero { background: linear-gradient(135deg, #1a0533 0%, #2e1065 50%, #1a0533 100%); padding: 80px 0 100px; position: relative; overflow: hidden; }
        .hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(124,58,237,0.35) 0%, transparent 70%); }
        .hero::after { content: ''; position: absolute; bottom: -1px; left: 0; right: 0; height: 60px; background: var(--slate-50); clip-path: ellipse(55% 100% at 50% 100%); }
        .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(124,58,237,0.2); border: 1px solid rgba(167,139,250,0.4); color: #c4b5fd; font-size: 12px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 6px 16px; border-radius: 100px; margin-bottom: 24px; }
        .hero-title { font-size: clamp(2rem, 5vw, 3.2rem); font-weight: 900; color: #fff; margin-bottom: 16px; }
        .hero-title span { background: linear-gradient(90deg, #c4b5fd, #f0abfc); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .hero-subtitle { font-size: 1.05rem; color: var(--slate-400); max-width: 560px; margin: 0 auto 32px; }
        .hero-meta { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12); color: var(--slate-400); font-size: 13px; padding: 8px 18px; border-radius: 8px; }
        .hero-orb { position: absolute; border-radius: 50%; background: radial-gradient(circle, rgba(124,58,237,0.15), transparent 70%); pointer-events: none; }
        .orb-1 { width: 500px; height: 500px; top: -200px; right: -100px; }
        .orb-2 { width: 300px; height: 300px; bottom: -100px; left: -50px; }

        /* LAYOUT */
        .page-layout { max-width: 1100px; margin: 0 auto; padding: 60px 24px 80px; display: grid; grid-template-columns: 260px 1fr; gap: 40px; align-items: start; }

        /* SIDEBAR */
        .sidebar { position: sticky; top: 90px; }
        .sidebar-card { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
        .sidebar-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--slate-400); margin-bottom: 16px; }
        .toc-list { list-style: none; }
        .toc-list li { margin-bottom: 4px; }
        .toc-list a { display: flex; align-items: center; gap: 10px; font-size: 13.5px; font-weight: 500; color: var(--slate-600); text-decoration: none; padding: 8px 12px; border-radius: 8px; transition: all 0.2s; }
        .toc-list a:hover, .toc-list a.active { background: #f5f3ff; color: var(--primary); font-weight: 600; }
        .toc-list a .toc-num { width: 22px; height: 22px; border-radius: 6px; background: var(--slate-100); color: var(--slate-500); font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s; }
        .toc-list a:hover .toc-num, .toc-list a.active .toc-num { background: var(--primary); color: #fff; }
        .sidebar-info { margin-top: 20px; background: linear-gradient(135deg, #f5f3ff, #fdf4ff); border: 1px solid #e9d5ff; border-radius: 12px; padding: 18px; }
        .sidebar-info p { font-size: 12.5px; color: var(--slate-600); line-height: 1.6; margin: 0; }
        .sidebar-info strong { color: var(--primary); }

        /* MAIN */
        .content-header { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 32px 36px; margin-bottom: 24px; display: flex; align-items: center; gap: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); }
        .content-header-icon { width: 56px; height: 56px; border-radius: 14px; background: linear-gradient(135deg, #7c3aed, #ec4899); display: flex; align-items: center; justify-content: center; font-size: 24px; color: white; flex-shrink: 0; }
        .content-header h2 { font-size: 1.5rem; color: var(--dark); margin-bottom: 4px; }
        .content-header p { font-size: 14px; color: var(--slate-500); margin: 0; }
        .section-card { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 32px 36px; margin-bottom: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); transition: box-shadow 0.2s, border-color 0.2s; }
        .section-card:hover { box-shadow: 0 8px 32px rgba(124,58,237,0.08); border-color: #ddd6fe; }
        .section-num { display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; border-radius: 8px; background: linear-gradient(135deg, #f5f3ff, #ede9fe); color: var(--primary); font-size: 13px; font-weight: 800; font-family: 'Plus Jakarta Sans', sans-serif; margin-right: 12px; flex-shrink: 0; }
        .section-heading { display: flex; align-items: center; font-size: 1.1rem; font-weight: 800; color: var(--dark); margin-bottom: 16px; }
        .section-body { color: var(--slate-600); font-size: 15px; line-height: 1.8; }
        .section-body p { margin-bottom: 12px; }
        .section-body p:last-child { margin-bottom: 0; }
        .section-body ul, .section-body ol { padding-left: 20px; margin-bottom: 12px; }
        .section-body li { margin-bottom: 8px; }
        .highlight-box { background: linear-gradient(135deg, #f5f3ff, #fdf4ff); border: 1px solid #ddd6fe; border-radius: 10px; padding: 14px 18px; margin-top: 14px; font-size: 13.5px; color: var(--slate-700); }
        .highlight-box i { color: var(--primary); margin-right: 6px; }

        /* FOOTER */
        .page-footer { background: var(--dark); padding: 48px 0 32px; color: var(--slate-400); }
        .footer-links { display: flex; flex-wrap: wrap; gap: 8px; justify-content: center; margin-bottom: 24px; }
        .footer-links a { font-size: 13px; color: var(--slate-400); text-decoration: none; padding: 6px 14px; border-radius: 6px; border: 1px solid rgba(255,255,255,0.08); transition: all 0.2s; }
        .footer-links a:hover { color: #fff; border-color: rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); }
        .footer-links a.active-page { color: #a78bfa; border-color: rgba(124,58,237,0.4); }
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
    <nav class="top-nav">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="/" class="logo-box">
                <div class="logo-icon">SB</div>
                <span class="logo-text">Social<span>Boost</span></span>
            </a>
            <a href="/" class="btn-home"><i class="bi bi-arrow-left"></i> Back to Home</a>
        </div>
    </nav>

    <section class="hero text-center">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="container position-relative">
            <div class="hero-badge"><i class="bi bi-shield-lock-fill"></i> Legal Document</div>
            <h1 class="hero-title">Privacy <span>Policy</span></h1>
            <p class="hero-subtitle">Your privacy and data protection are our top priorities. Here's exactly what we collect and why.</p>
            <div class="hero-meta"><i class="bi bi-clock"></i> Last updated: September 2026 &nbsp;·&nbsp; <i class="bi bi-shield-check"></i> 5 sections</div>
        </div>
    </section>

    <div class="page-layout">
        <aside class="sidebar">
            <div class="sidebar-card">
                <div class="sidebar-title">On this page</div>
                <ul class="toc-list">
                    <li><a href="#s1"><span class="toc-num">1</span> Information We Collect</a></li>
                    <li><a href="#s2"><span class="toc-num">2</span> How We Use It</a></li>
                    <li><a href="#s3"><span class="toc-num">3</span> Data Sharing</a></li>
                    <li><a href="#s4"><span class="toc-num">4</span> Data Security</a></li>
                    <li><a href="#s5"><span class="toc-num">5</span> Policy Changes</a></li>
                </ul>
            </div>
            <div class="sidebar-info">
                <p><i class="bi bi-shield-fill-check" style="color:var(--primary)"></i> &nbsp;We <strong>never sell</strong> your personal data to third parties. Your information is safe with us.</p>
            </div>
        </aside>

        <main class="main-content">
            <div class="content-header">
                <div class="content-header-icon"><i class="bi bi-shield-lock"></i></div>
                <div>
                    <h2>Privacy Policy</h2>
                    <p>How SocialBoost collects, uses, and protects your personal information</p>
                </div>
            </div>

            <div class="section-card" id="s1">
                <div class="section-heading"><span class="section-num">1</span> Information We Collect</div>
                <div class="section-body">
                    <p>At SocialBoost, we collect minimal personal information necessary to fulfill your orders and provide customer support. This may include:</p>
                    <ul>
                        <li><strong>Contact Information:</strong> Your name, email address, and WhatsApp/phone number.</li>
                        <li><strong>Order Details:</strong> Information regarding the type of account purchased and target region.</li>
                        <li><strong>Usage Data:</strong> Basic analytics on how you interact with our website to help us improve user experience.</li>
                    </ul>
                    <div class="highlight-box"><i class="bi bi-lock-fill"></i> We do <strong>not</strong> store sensitive payment information on our servers. All transactions are processed securely through trusted third-party providers (JazzCash, Binance, PayPal).</div>
                </div>
            </div>

            <div class="section-card" id="s2">
                <div class="section-heading"><span class="section-num">2</span> How We Use Your Information</div>
                <div class="section-body">
                    <p>The information we collect is used strictly for the following purposes:</p>
                    <ul>
                        <li>To process and deliver your purchased social media accounts securely.</li>
                        <li>To provide customer support and respond to your inquiries via email or WhatsApp.</li>
                        <li>To send important updates regarding your order status or changes to our policies.</li>
                        <li>To provide requested free channel audits and recommendations.</li>
                    </ul>
                </div>
            </div>

            <div class="section-card" id="s3">
                <div class="section-heading"><span class="section-num">3</span> Data Sharing and Disclosure</div>
                <div class="section-body">
                    <p>We respect your privacy unconditionally. <strong>We do not sell, rent, or share your personal information with third parties for marketing purposes.</strong></p>
                    <p>Your data may only be disclosed if required by law or to protect the rights and safety of SocialBoost and our users.</p>
                </div>
            </div>

            <div class="section-card" id="s4">
                <div class="section-heading"><span class="section-num">4</span> Data Security</div>
                <div class="section-body">
                    <p>We implement industry-standard security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
                    <p>However, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.</p>
                </div>
            </div>

            <div class="section-card" id="s5">
                <div class="section-heading"><span class="section-num">5</span> Changes to This Policy</div>
                <div class="section-body">
                    <p>We may update our Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date.</p>
                    <p>We encourage you to review this policy periodically to stay informed about how we protect your information.</p>
                </div>
            </div>
        </main>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="footer-links">
                <a href="/terms">Terms & Conditions</a>
                <a href="/privacy" class="active-page">Privacy Policy</a>
                <a href="/payment-security">Payment Security</a>
                <a href="/refund-policy">Refund Policy</a>
                <a href="/contact">Contact Us</a>
            </div>
            <div class="footer-copy">&copy; {{ date('Y') }} SocialBoost. All rights reserved. &nbsp;·&nbsp; 100% Original YouTube & TikTok Monetization Accounts.</div>
        </div>
    </footer>

    <script>
        const sections = document.querySelectorAll('[id^="s"]');
        const tocLinks = document.querySelectorAll('.toc-list a');
        window.addEventListener('scroll', () => {
            let cur = '';
            sections.forEach(s => { if (window.scrollY >= s.offsetTop - 120) cur = s.id; });
            tocLinks.forEach(a => { a.classList.remove('active'); if (a.getAttribute('href') === '#' + cur) a.classList.add('active'); });
        });
    </script>
</body>
</html>

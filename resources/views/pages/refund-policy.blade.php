<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refund Policy — SocialBoost</title>
    <meta name="description" content="SocialBoost's 7-Day Replacement Guarantee and Refund Policy — your peace of mind is our priority.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #d97706;
            --primary-light: #fbbf24;
            --primary-dark: #b45309;
            --accent: #ef4444;
            --dark: #0b1329;
            --slate-800: #1e293b;
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
        .hero { background: linear-gradient(135deg, #1c0f00 0%, #431407 50%, #1c0f00 100%); padding: 80px 0 100px; position: relative; overflow: hidden; }
        .hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(217,119,6,0.4) 0%, transparent 70%); }
        .hero::after { content: ''; position: absolute; bottom: -1px; left: 0; right: 0; height: 60px; background: var(--slate-50); clip-path: ellipse(55% 100% at 50% 100%); }
        .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(217,119,6,0.2); border: 1px solid rgba(251,191,36,0.4); color: #fde68a; font-size: 12px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 6px 16px; border-radius: 100px; margin-bottom: 24px; }
        .hero-title { font-size: clamp(2rem, 5vw, 3.2rem); font-weight: 900; color: #fff; margin-bottom: 16px; }
        .hero-title span { background: linear-gradient(90deg, #fcd34d, #fca5a5); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .hero-subtitle { font-size: 1.05rem; color: var(--slate-400); max-width: 560px; margin: 0 auto 32px; }
        .hero-meta { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12); color: var(--slate-400); font-size: 13px; padding: 8px 18px; border-radius: 8px; }
        .hero-orb { position: absolute; border-radius: 50%; pointer-events: none; }
        .orb-1 { width: 500px; height: 500px; top: -200px; right: -100px; background: radial-gradient(circle, rgba(217,119,6,0.15), transparent 70%); }
        .orb-2 { width: 300px; height: 300px; bottom: -100px; left: -50px; background: radial-gradient(circle, rgba(239,68,68,0.1), transparent 70%); }

        /* GUARANTEE BANNER */
        .guarantee-banner {
            max-width: 1100px; margin: 60px auto 0; padding: 0 24px;
        }
        .guarantee-box {
            background: linear-gradient(135deg, #fffbeb, #fef3c7);
            border: 1px solid #fde68a;
            border-radius: 16px; padding: 28px 36px;
            display: flex; align-items: center; gap: 20px;
            box-shadow: 0 4px 20px rgba(217,119,6,0.12);
        }
        .guarantee-icon { width: 60px; height: 60px; border-radius: 16px; background: linear-gradient(135deg, #d97706, #f59e0b); display: flex; align-items: center; justify-content: center; font-size: 26px; color: white; flex-shrink: 0; }
        .guarantee-text h3 { font-size: 1.2rem; color: #92400e; margin-bottom: 4px; }
        .guarantee-text p { font-size: 14px; color: #78350f; margin: 0; }

        /* LAYOUT */
        .page-layout { max-width: 1100px; margin: 0 auto; padding: 32px 24px 80px; display: grid; grid-template-columns: 260px 1fr; gap: 40px; align-items: start; }

        /* SIDEBAR */
        .sidebar { position: sticky; top: 90px; }
        .sidebar-card { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
        .sidebar-title { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--slate-400); margin-bottom: 16px; }
        .toc-list { list-style: none; }
        .toc-list li { margin-bottom: 4px; }
        .toc-list a { display: flex; align-items: center; gap: 10px; font-size: 13.5px; font-weight: 500; color: var(--slate-600); text-decoration: none; padding: 8px 12px; border-radius: 8px; transition: all 0.2s; }
        .toc-list a:hover, .toc-list a.active { background: #fffbeb; color: var(--primary); font-weight: 600; }
        .toc-list a .toc-num { width: 22px; height: 22px; border-radius: 6px; background: var(--slate-100); color: var(--slate-500); font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s; }
        .toc-list a:hover .toc-num, .toc-list a.active .toc-num { background: var(--primary); color: #fff; }
        .sidebar-info { margin-top: 20px; background: linear-gradient(135deg, #fffbeb, #fef9c3); border: 1px solid #fde68a; border-radius: 12px; padding: 18px; }
        .sidebar-info p { font-size: 12.5px; color: var(--slate-600); line-height: 1.6; margin: 0; }
        .sidebar-info strong { color: var(--primary); }

        /* CONTENT */
        .content-header { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 32px 36px; margin-bottom: 24px; display: flex; align-items: center; gap: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); }
        .content-header-icon { width: 56px; height: 56px; border-radius: 14px; background: linear-gradient(135deg, #d97706, #ef4444); display: flex; align-items: center; justify-content: center; font-size: 24px; color: white; flex-shrink: 0; }
        .content-header h2 { font-size: 1.5rem; color: var(--dark); margin-bottom: 4px; }
        .content-header p { font-size: 14px; color: var(--slate-500); margin: 0; }
        .section-card { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 32px 36px; margin-bottom: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); transition: box-shadow 0.2s, border-color 0.2s; }
        .section-card:hover { box-shadow: 0 8px 32px rgba(217,119,6,0.1); border-color: #fde68a; }
        .section-num { display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; border-radius: 8px; background: linear-gradient(135deg, #fffbeb, #fef3c7); color: var(--primary); font-size: 13px; font-weight: 800; font-family: 'Plus Jakarta Sans', sans-serif; margin-right: 12px; flex-shrink: 0; }
        .section-heading { display: flex; align-items: center; font-size: 1.1rem; font-weight: 800; color: var(--dark); margin-bottom: 16px; }
        .section-body { color: var(--slate-600); font-size: 15px; line-height: 1.8; }
        .section-body p { margin-bottom: 12px; }
        .section-body p:last-child { margin-bottom: 0; }
        .section-body ul { padding-left: 0; margin-bottom: 12px; list-style: none; }
        .section-body ul li { margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px; }
        .section-body ul li::before { content: ''; width: 8px; height: 8px; border-radius: 50%; margin-top: 8px; flex-shrink: 0; }
        .list-green li::before { background: #22c55e; }
        .list-red li::before { background: #ef4444; }

        /* ALERT BOXES */
        .alert-green { background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 10px; padding: 16px 20px; margin-top: 4px; display: flex; gap: 12px; align-items: flex-start; }
        .alert-green i { color: #16a34a; font-size: 18px; flex-shrink: 0; margin-top: 2px; }
        .alert-green p { font-size: 14px; color: #15803d; margin: 0; }
        .alert-red { background: #fff1f2; border: 1px solid #fecdd3; border-radius: 10px; padding: 16px 20px; margin-top: 4px; display: flex; gap: 12px; align-items: flex-start; }
        .alert-red i { color: #dc2626; font-size: 18px; flex-shrink: 0; margin-top: 2px; }
        .alert-red p { font-size: 14px; color: #b91c1c; margin: 0; }

        /* CONTACT CARD */
        .contact-card { background: linear-gradient(135deg, #0b1329 0%, #1e2d4d 100%); border-radius: 14px; padding: 28px 32px; display: flex; align-items: center; justify-content: space-between; gap: 24px; flex-wrap: wrap; margin-top: 4px; }
        .contact-card h4 { color: #fff; font-size: 1rem; margin-bottom: 6px; }
        .contact-card p { color: var(--slate-400); font-size: 13.5px; margin: 0; }
        .contact-btns { display: flex; gap: 10px; flex-shrink: 0; }
        .contact-btn { display: inline-flex; align-items: center; gap: 7px; padding: 10px 20px; border-radius: 8px; font-size: 13.5px; font-weight: 700; text-decoration: none; transition: all 0.2s; }
        .contact-btn.whatsapp { background: #25d366; color: white; }
        .contact-btn.whatsapp:hover { background: #1da851; }
        .contact-btn.email { background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2); }
        .contact-btn.email:hover { background: rgba(255,255,255,0.15); }

        /* FOOTER */
        .page-footer { background: var(--dark); padding: 48px 0 32px; color: var(--slate-400); }
        .footer-links { display: flex; flex-wrap: wrap; gap: 8px; justify-content: center; margin-bottom: 24px; }
        .footer-links a { font-size: 13px; color: var(--slate-400); text-decoration: none; padding: 6px 14px; border-radius: 6px; border: 1px solid rgba(255,255,255,0.08); transition: all 0.2s; }
        .footer-links a:hover { color: #fff; border-color: rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); }
        .footer-links a.active-page { color: #fbbf24; border-color: rgba(217,119,6,0.4); }
        .footer-copy { text-align: center; font-size: 13px; color: var(--slate-600); }

        @media (max-width: 768px) {
            .page-layout { grid-template-columns: 1fr; }
            .sidebar { position: static; }
            .section-card { padding: 24px 20px; }
            .content-header { padding: 24px 20px; }
            .guarantee-box { flex-direction: column; text-align: center; }
            .contact-card { flex-direction: column; text-align: center; }
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
            <div class="hero-badge"><i class="bi bi-patch-check-fill"></i> Buyer Protection</div>
            <h1 class="hero-title">Refund & <span>Replacement Policy</span></h1>
            <p class="hero-subtitle">Our 7-Day Guarantee gives you complete peace of mind with every purchase.</p>
            <div class="hero-meta"><i class="bi bi-calendar-check"></i> 7-Day Guarantee &nbsp;·&nbsp; <i class="bi bi-lightning-charge-fill"></i> Instant Replacement</div>
        </div>
    </section>

    <!-- GUARANTEE BANNER -->
    <div class="guarantee-banner">
        <div class="guarantee-box">
            <div class="guarantee-icon"><i class="bi bi-patch-check-fill"></i></div>
            <div class="guarantee-text">
                <h3>🛡️ 7-Day Replacement Guarantee — No Questions Asked</h3>
                <p>If the account you receive doesn't match specifications or credentials are non-functional at delivery, we replace it immediately within 7 days of purchase.</p>
            </div>
        </div>
    </div>

    <div class="page-layout">
        <aside class="sidebar">
            <div class="sidebar-card">
                <div class="sidebar-title">On this page</div>
                <ul class="toc-list">
                    <li><a href="#s1"><span class="toc-num">1</span> 7-Day Guarantee</a></li>
                    <li><a href="#s2"><span class="toc-num">2</span> Refund Eligibility</a></li>
                    <li><a href="#s3"><span class="toc-num">3</span> Non-Refundable</a></li>
                    <li><a href="#s4"><span class="toc-num">4</span> How to Request</a></li>
                </ul>
            </div>
            <div class="sidebar-info">
                <p><i class="bi bi-clock-history" style="color:var(--primary)"></i> &nbsp;Our support team responds in <strong>3–5 minutes</strong> on WhatsApp.</p>
            </div>
        </aside>

        <main>
            <div class="content-header">
                <div class="content-header-icon"><i class="bi bi-arrow-counterclockwise"></i></div>
                <div>
                    <h2>Refund & Replacement Policy</h2>
                    <p>Fair, transparent, and buyer-first protection on every order</p>
                </div>
            </div>

            <div class="section-card" id="s1">
                <div class="section-heading"><span class="section-num">1</span> The 7-Day Replacement Guarantee</div>
                <div class="section-body">
                    <p>At SocialBoost, we pride ourselves on the quality of our manually verified accounts. If you receive an account that does not meet the specified region requirements, monetization status, or if the provided credentials are non-functional at the time of delivery, we offer an <strong>immediate replacement within 7 days of purchase</strong>. No questions asked.</p>
                    <div class="alert-green">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>This guarantee covers region mismatch, failed credentials, non-functional monetization status at time of delivery — all fully covered.</p>
                    </div>
                </div>
            </div>

            <div class="section-card" id="s2">
                <div class="section-heading"><span class="section-num">2</span> Eligibility for Refunds</div>
                <div class="section-body">
                    <p>Refunds are issued under the following circumstances:</p>
                    <ul class="list-green">
                        <li>We are unable to deliver the specified account type within the promised timeframe (usually 2–24 hours).</li>
                        <li>A suitable replacement account is not available in our inventory.</li>
                        <li>The account delivered was banned or suspended prior to your first login (proof required).</li>
                    </ul>
                </div>
            </div>

            <div class="section-card" id="s3">
                <div class="section-heading"><span class="section-num">3</span> Non-Refundable Situations</div>
                <div class="section-body">
                    <p>To prevent abuse of our services, we cannot offer refunds or replacements in the following scenarios:</p>
                    <ul class="list-red">
                        <li>The account is banned or shadowbanned due to your actions after successful login (e.g., uploading copyright-infringing content, using bots, or violating platform guidelines).</li>
                        <li>You change your mind after the account credentials have been securely delivered.</li>
                        <li>Failure to secure the account (e.g., not changing the password or adding 2FA) leading to unauthorized access post-delivery.</li>
                    </ul>
                    <div class="alert-red">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        <p>Immediately secure your account after delivery by changing the password and enabling 2FA. Failure to do so voids replacement eligibility.</p>
                    </div>
                </div>
            </div>

            <div class="section-card" id="s4">
                <div class="section-heading"><span class="section-num">4</span> How to Request a Replacement or Refund</div>
                <div class="section-body">
                    <p>If you encounter an issue, please contact our support team immediately. Provide your order details and any relevant screenshots of the issue. Our team typically responds within <strong>3–5 minutes</strong> and will resolve the matter promptly.</p>
                    <div class="contact-card">
                        <div>
                            <h4>Need help? We're here for you.</h4>
                            <p>+92 370 4635765 &nbsp;·&nbsp; support@socialboost.com</p>
                        </div>
                        <div class="contact-btns">
                            <a href="https://wa.me/923704635765" class="contact-btn whatsapp"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                            <a href="mailto:support@socialboost.com" class="contact-btn email"><i class="bi bi-envelope"></i> Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="footer-links">
                <a href="/terms">Terms & Conditions</a>
                <a href="/privacy">Privacy Policy</a>
                <a href="/payment-security">Payment Security</a>
                <a href="/refund-policy" class="active-page">Refund Policy</a>
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

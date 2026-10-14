<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us — SocialBoost</title>
    <meta name="description" content="Contact SocialBoost 24/7 Support for YouTube and TikTok Monetized Accounts, TikTok Automation Courses, order verifications, and custom requests.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --primary-light: #60a5fa;
            --primary-dark: #1d4ed8;
            --accent: #10b981;
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
        .hero { background: linear-gradient(135deg, #0b1329 0%, #172554 50%, #0b1329 100%); padding: 80px 0 100px; position: relative; overflow: hidden; }
        .hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(37,99,235,0.35) 0%, transparent 70%); }
        .hero::after { content: ''; position: absolute; bottom: -1px; left: 0; right: 0; height: 60px; background: var(--slate-50); clip-path: ellipse(55% 100% at 50% 100%); }
        .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(37,99,235,0.2); border: 1px solid rgba(96,165,250,0.4); color: #bfdbfe; font-size: 12px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 6px 16px; border-radius: 100px; margin-bottom: 24px; }
        .hero-title { font-size: clamp(2rem, 5vw, 3.2rem); font-weight: 900; color: #fff; margin-bottom: 16px; }
        .hero-title span { background: linear-gradient(90deg, #60a5fa, #34d399); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .hero-subtitle { font-size: 1.05rem; color: var(--slate-400); max-width: 580px; margin: 0 auto 32px; }
        .hero-meta { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12); color: var(--slate-400); font-size: 13px; padding: 8px 18px; border-radius: 8px; }
        .hero-orb { position: absolute; border-radius: 50%; pointer-events: none; }
        .orb-1 { width: 500px; height: 500px; top: -200px; right: -100px; background: radial-gradient(circle, rgba(37,99,235,0.2), transparent 70%); }
        .orb-2 { width: 300px; height: 300px; bottom: -100px; left: -50px; background: radial-gradient(circle, rgba(16,185,129,0.15), transparent 70%); }

        /* HIGHLIGHT BANNER */
        .guarantee-banner { max-width: 1100px; margin: 60px auto 0; padding: 0 24px; }
        .guarantee-box {
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            border: 1px solid #bfdbfe;
            border-radius: 16px; padding: 28px 36px;
            display: flex; align-items: center; gap: 20px;
            box-shadow: 0 4px 20px rgba(37,99,235,0.12);
        }
        .guarantee-icon { width: 60px; height: 60px; border-radius: 16px; background: linear-gradient(135deg, #2563eb, #3b82f6); display: flex; align-items: center; justify-content: center; font-size: 26px; color: white; flex-shrink: 0; }
        .guarantee-text h3 { font-size: 1.2rem; color: #1e3a8a; margin-bottom: 4px; }
        .guarantee-text p { font-size: 14px; color: #1d4ed8; margin: 0; }

        /* LAYOUT */
        .page-layout { max-width: 1100px; margin: 0 auto; padding: 32px 24px 80px; display: grid; grid-template-columns: 260px 1fr; gap: 40px; align-items: start; }

        /* SIDEBAR */
        .sidebar { position: sticky; top: 90px; }
        .sidebar-card { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
        .sidebar-title { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--slate-400); margin-bottom: 16px; }
        .toc-list { list-style: none; }
        .toc-list li { margin-bottom: 4px; }
        .toc-list a { display: flex; align-items: center; gap: 10px; font-size: 13.5px; font-weight: 500; color: var(--slate-600); text-decoration: none; padding: 8px 12px; border-radius: 8px; transition: all 0.2s; }
        .toc-list a:hover, .toc-list a.active { background: #eff6ff; color: var(--primary); font-weight: 600; }
        .toc-list a .toc-num { width: 22px; height: 22px; border-radius: 6px; background: var(--slate-100); color: var(--slate-500); font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s; }
        .toc-list a:hover .toc-num, .toc-list a.active .toc-num { background: var(--primary); color: #fff; }
        .sidebar-info { margin-top: 20px; background: linear-gradient(135deg, #eff6ff, #f0fdf4); border: 1px solid #bfdbfe; border-radius: 12px; padding: 18px; }
        .sidebar-info p { font-size: 12.5px; color: var(--slate-600); line-height: 1.6; margin: 0; }
        .sidebar-info strong { color: var(--primary); }

        /* CONTENT */
        .content-header { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 32px 36px; margin-bottom: 24px; display: flex; align-items: center; gap: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); }
        .content-header-icon { width: 56px; height: 56px; border-radius: 14px; background: linear-gradient(135deg, #2563eb, #10b981); display: flex; align-items: center; justify-content: center; font-size: 24px; color: white; flex-shrink: 0; }
        .content-header h2 { font-size: 1.5rem; color: var(--dark); margin-bottom: 4px; }
        .content-header p { font-size: 14px; color: var(--slate-500); margin: 0; }
        .section-card { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 32px 36px; margin-bottom: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); transition: box-shadow 0.2s, border-color 0.2s; }
        .section-card:hover { box-shadow: 0 8px 32px rgba(37,99,235,0.1); border-color: #bfdbfe; }
        .section-num { display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; border-radius: 8px; background: linear-gradient(135deg, #eff6ff, #dbeafe); color: var(--primary); font-size: 13px; font-weight: 800; font-family: 'Plus Jakarta Sans', sans-serif; margin-right: 12px; flex-shrink: 0; }
        .section-heading { display: flex; align-items: center; font-size: 1.1rem; font-weight: 800; color: var(--dark); margin-bottom: 16px; }
        .section-body { color: var(--slate-600); font-size: 15px; line-height: 1.8; }
        .section-body p { margin-bottom: 12px; }
        .section-body p:last-child { margin-bottom: 0; }
        .section-body ul { padding-left: 0; margin-bottom: 12px; list-style: none; }
        .section-body ul li { margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px; }
        .section-body ul li::before { content: ''; width: 8px; height: 8px; border-radius: 50%; margin-top: 8px; flex-shrink: 0; }
        .list-green li::before { background: #22c55e; }
        .list-blue li::before { background: #2563eb; }

        /* CONTACT METHOD CARDS */
        .method-box {
            display: flex; align-items: center; justify-content: space-between;
            padding: 20px 24px; border: 1px solid var(--slate-200); border-radius: 12px;
            background: #f8fafc; margin-top: 14px; gap: 16px; flex-wrap: wrap;
            transition: all 0.2s ease;
        }
        .method-box:hover { border-color: #bfdbfe; background: #eff6ff; transform: translateY(-2px); }
        .method-box-left { display: flex; align-items: center; gap: 14px; }
        .method-icon { width: 46px; height: 46px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #fff; flex-shrink: 0; }
        .method-icon.wa { background: #25d366; }
        .method-icon.email { background: var(--primary); }
        .method-icon.group { background: linear-gradient(135deg, #10b981, #059669); }
        .method-info h5 { font-size: 14.5px; font-weight: 700; color: var(--dark); margin-bottom: 2px; }
        .method-info p { font-size: 12.5px; color: var(--slate-600); margin: 0; }
        .btn-method {
            padding: 9px 20px; border-radius: 8px; font-size: 13.5px; font-weight: 700;
            text-decoration: none; display: inline-flex; align-items: center; gap: 7px;
            transition: all 0.2s;
        }
        .btn-method.wa { background: #25d366; color: #fff; }
        .btn-method.wa:hover { background: #1fa851; color: #fff; }
        .btn-method.email { background: var(--primary); color: #fff; }
        .btn-method.email:hover { background: var(--primary-dark); color: #fff; }
        .btn-method.group { background: #059669; color: #fff; }
        .btn-method.group:hover { background: #047857; color: #fff; }

        /* ALERT BOXES */
        .alert-green { background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 10px; padding: 16px 20px; margin-top: 4px; display: flex; gap: 12px; align-items: flex-start; }
        .alert-green i { color: #16a34a; font-size: 18px; flex-shrink: 0; margin-top: 2px; }
        .alert-green p { font-size: 14px; color: #15803d; margin: 0; }

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
        .footer-links a.active-page { color: #60a5fa; border-color: rgba(37,99,235,0.4); }
        .footer-copy { text-align: center; font-size: 13px; color: var(--slate-600); }

        @media (max-width: 768px) {
            .page-layout { grid-template-columns: 1fr; }
            .sidebar { position: static; }
            .section-card { padding: 24px 20px; }
            .content-header { padding: 24px 20px; }
            .guarantee-box { flex-direction: column; text-align: center; }
            .contact-card { flex-direction: column; text-align: center; }
            .method-box { flex-direction: column; align-items: flex-start; }
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
            <div class="hero-badge"><i class="bi bi-headset"></i> 24/7 Creator Support</div>
            <h1 class="hero-title">Contact & <span>Support Center</span></h1>
            <p class="hero-subtitle">We're here to assist with TikTok & YouTube Monetized Accounts, TikTok Automation Courses, custom regions, and fast verifications.</p>
            <div class="hero-meta"><i class="bi bi-clock-history"></i> 3–5 Min Response &nbsp;·&nbsp; <i class="bi bi-shield-check"></i> 100% Manual Verification</div>
        </div>
    </section>

    <!-- HIGHLIGHT BANNER -->
    <div class="guarantee-banner">
        <div class="guarantee-box">
            <div class="guarantee-icon"><i class="bi bi-chat-dots-fill"></i></div>
            <div class="guarantee-text">
                <h3>⚡ Fast Assistance — We're Here For You 24/7</h3>
                <p>Need help choosing a region, checking RPM rates, verifying JazzCash / Easypaisa payments, or enrolling in our Automation Course? Reach out anytime.</p>
            </div>
        </div>
    </div>

    <div class="page-layout">
        <aside class="sidebar">
            <div class="sidebar-card">
                <div class="sidebar-title">On this page</div>
                <ul class="toc-list">
                    <li><a href="#s1"><span class="toc-num">1</span> WhatsApp Support</a></li>
                    <li><a href="#s2"><span class="toc-num">2</span> Community Group</a></li>
                    <li><a href="#s3"><span class="toc-num">3</span> Email Support</a></li>
                    <li><a href="#s4"><span class="toc-num">4</span> Operating Hours</a></li>
                </ul>
            </div>
            <div class="sidebar-info">
                <p><i class="bi bi-lightning-charge-fill" style="color:var(--primary)"></i> &nbsp;Average response time on WhatsApp is <strong>3–5 minutes</strong>.</p>
            </div>
        </aside>

        <main>
            <div class="content-header">
                <div class="content-header-icon"><i class="bi bi-headset"></i></div>
                <div>
                    <h2>Get in Touch with SocialBoost</h2>
                    <p>Dedicated assistance for creators across USA, UK, Canada, and Australia</p>
                </div>
            </div>

            <!-- SECTION 1: WhatsApp Support -->
            <div class="section-card" id="s1">
                <div class="section-heading"><span class="section-num">1</span> WhatsApp Direct Support (Fastest)</div>
                <div class="section-body">
                    <p>WhatsApp is our primary and fastest channel for client support, immediate payment confirmations via JazzCash & Easypaisa, and quick account credentials delivery.</p>
                    
                    <div class="method-box">
                        <div class="method-box-left">
                            <div class="method-icon wa"><i class="bi bi-whatsapp"></i></div>
                            <div class="method-info">
                                <h5>Direct WhatsApp Chat</h5>
                                <p>Instant help, account queries & payment verification (+92 370 4635765)</p>
                            </div>
                        </div>
                        <a href="https://wa.me/923704635765" target="_blank" rel="noopener noreferrer" class="btn-method wa">
                            <i class="bi bi-whatsapp"></i> Message on WhatsApp
                        </a>
                    </div>

                    <div class="alert-green mt-3">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Our team is available 24/7. When messaging, please mention your target country (USA/UK/CA/AU) or inquiry for rapid delivery.</p>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: Official WhatsApp Community Group -->
            <div class="section-card" id="s2">
                <div class="section-heading"><span class="section-num">2</span> Official WhatsApp Community Group</div>
                <div class="section-body">
                    <p>Join our official creator community group to get early notifications of new account drops, live stock availability, high RPM strategies, and exclusive discount packages on TikTok & Automation courses.</p>
                    
                    <div class="method-box">
                        <div class="method-box-left">
                            <div class="method-icon group"><i class="bi bi-people-fill"></i></div>
                            <div class="method-info">
                                <h5>SocialBoost Creator Community</h5>
                                <p>Join creators worldwide for instant updates & course resources</p>
                            </div>
                        </div>
                        <a href="https://chat.whatsapp.com/CrinvvpCZymAhKYjhzEsRL?s=sh&p=a&mlu=4&ilr=4" target="_blank" rel="noopener noreferrer" class="btn-method group">
                            <i class="bi bi-whatsapp"></i> Join WhatsApp Group
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECTION 3: Email Support -->
            <div class="section-card" id="s3">
                <div class="section-heading"><span class="section-num">3</span> Email & Business Inquiries</div>
                <div class="section-body">
                    <p>For custom volume orders, institutional requests, receipts, or technical documentation, contact our support desk via email. We typically respond within <strong>2–4 hours</strong>.</p>
                    
                    <div class="method-box">
                        <div class="method-box-left">
                            <div class="method-icon email"><i class="bi bi-envelope-fill"></i></div>
                            <div class="method-info">
                                <h5>Email Support Desk</h5>
                                <p>mzobair102@gmail.com — General inquiries & partnerships</p>
                            </div>
                        </div>
                        <a href="mailto:mzobair102@gmail.com" class="btn-method email">
                            <i class="bi bi-envelope"></i> Send Email
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECTION 4: Operating Hours & Global Coverage -->
            <div class="section-card" id="s4">
                <div class="section-heading"><span class="section-num">4</span> Operating Hours & Service Coverage</div>
                <div class="section-body">
                    <p>We serve creators globally with a focus on tier-1 high RPM monetization regions:</p>
                    <ul class="list-green">
                        <li><strong>🇺🇸 United States (USA):</strong> TikTok Creativity Program Beta & YouTube Partner Program ready accounts.</li>
                        <li><strong>🇬🇧 United Kingdom (UK):</strong> High RPM TikTok Creator Rewards accounts with original UK setup.</li>
                        <li><strong>🇨🇦 Canada & 🇦🇺 Australia:</strong> Beta monetization ready accounts with manual verification.</li>
                        <li><strong>24/7 Round-the-Clock Shifts:</strong> Operating uninterrupted across all global time zones.</li>
                    </ul>

                    <div class="contact-card mt-4">
                        <div>
                            <h4>Need help? We're here for you.</h4>
                            <p>+92 370 4635765 &nbsp;·&nbsp; mzobair102@gmail.com</p>
                        </div>
                        <div class="contact-btns">
                            <a href="https://wa.me/923704635765" target="_blank" rel="noopener noreferrer" class="contact-btn whatsapp"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                            <a href="mailto:mzobair102@gmail.com" class="contact-btn email"><i class="bi bi-envelope"></i> Email</a>
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
                <a href="/refund-policy">Refund Policy</a>
                <a href="/contact" class="active-page">Contact Us</a>
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

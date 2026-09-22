<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Security — SocialBoost</title>
    <meta name="description" content="SocialBoost's secure payment methods — JazzCash, Easypaisa, Binance, PayPal, and Bank Transfers.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #059669;
            --primary-light: #34d399;
            --primary-dark: #047857;
            --accent: #0ea5e9;
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
        .hero { background: linear-gradient(135deg, #022c22 0%, #064e3b 50%, #022c22 100%); padding: 80px 0 100px; position: relative; overflow: hidden; }
        .hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(5,150,105,0.4) 0%, transparent 70%); }
        .hero::after { content: ''; position: absolute; bottom: -1px; left: 0; right: 0; height: 60px; background: var(--slate-50); clip-path: ellipse(55% 100% at 50% 100%); }
        .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(5,150,105,0.2); border: 1px solid rgba(52,211,153,0.4); color: #6ee7b7; font-size: 12px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 6px 16px; border-radius: 100px; margin-bottom: 24px; }
        .hero-title { font-size: clamp(2rem, 5vw, 3.2rem); font-weight: 900; color: #fff; margin-bottom: 16px; }
        .hero-title span { background: linear-gradient(90deg, #6ee7b7, #67e8f9); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .hero-subtitle { font-size: 1.05rem; color: var(--slate-400); max-width: 560px; margin: 0 auto 32px; }
        .hero-meta { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12); color: var(--slate-400); font-size: 13px; padding: 8px 18px; border-radius: 8px; }
        .hero-orb { position: absolute; border-radius: 50%; pointer-events: none; }
        .orb-1 { width: 500px; height: 500px; top: -200px; right: -100px; background: radial-gradient(circle, rgba(5,150,105,0.15), transparent 70%); }
        .orb-2 { width: 300px; height: 300px; bottom: -100px; left: -50px; background: radial-gradient(circle, rgba(14,165,233,0.1), transparent 70%); }

        /* LAYOUT */
        .page-layout { max-width: 1100px; margin: 0 auto; padding: 60px 24px 80px; display: grid; grid-template-columns: 260px 1fr; gap: 40px; align-items: start; }

        /* SIDEBAR */
        .sidebar { position: sticky; top: 90px; }
        .sidebar-card { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
        .sidebar-title { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--slate-400); margin-bottom: 16px; }
        .toc-list { list-style: none; }
        .toc-list li { margin-bottom: 4px; }
        .toc-list a { display: flex; align-items: center; gap: 10px; font-size: 13.5px; font-weight: 500; color: var(--slate-600); text-decoration: none; padding: 8px 12px; border-radius: 8px; transition: all 0.2s; }
        .toc-list a:hover, .toc-list a.active { background: #f0fdf4; color: var(--primary); font-weight: 600; }
        .toc-list a .toc-num { width: 22px; height: 22px; border-radius: 6px; background: var(--slate-100); color: var(--slate-500); font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s; }
        .toc-list a:hover .toc-num, .toc-list a.active .toc-num { background: var(--primary); color: #fff; }
        .sidebar-info { margin-top: 20px; background: linear-gradient(135deg, #f0fdf4, #ecfdf5); border: 1px solid #bbf7d0; border-radius: 12px; padding: 18px; }
        .sidebar-info p { font-size: 12.5px; color: var(--slate-600); line-height: 1.6; margin: 0; }
        .sidebar-info strong { color: var(--primary); }

        /* CONTENT */
        .content-header { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 32px 36px; margin-bottom: 24px; display: flex; align-items: center; gap: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); }
        .content-header-icon { width: 56px; height: 56px; border-radius: 14px; background: linear-gradient(135deg, #059669, #0ea5e9); display: flex; align-items: center; justify-content: center; font-size: 24px; color: white; flex-shrink: 0; }
        .content-header h2 { font-size: 1.5rem; color: var(--dark); margin-bottom: 4px; }
        .content-header p { font-size: 14px; color: var(--slate-500); margin: 0; }
        .section-card { background: var(--white); border: 1px solid var(--slate-200); border-radius: 16px; padding: 32px 36px; margin-bottom: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); transition: box-shadow 0.2s, border-color 0.2s; }
        .section-card:hover { box-shadow: 0 8px 32px rgba(5,150,105,0.08); border-color: #bbf7d0; }
        .section-num { display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; border-radius: 8px; background: linear-gradient(135deg, #f0fdf4, #dcfce7); color: var(--primary); font-size: 13px; font-weight: 800; font-family: 'Plus Jakarta Sans', sans-serif; margin-right: 12px; flex-shrink: 0; }
        .section-heading { display: flex; align-items: center; font-size: 1.1rem; font-weight: 800; color: var(--dark); margin-bottom: 16px; }
        .section-body { color: var(--slate-600); font-size: 15px; line-height: 1.8; }
        .section-body p { margin-bottom: 12px; }
        .section-body p:last-child { margin-bottom: 0; }
        .section-body ol { padding-left: 20px; margin-bottom: 12px; }
        .section-body li { margin-bottom: 10px; }

        /* PAYMENT METHOD CARDS */
        .payment-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-top: 20px; }
        .pay-card {
            display: flex; align-items: center; gap: 14px;
            padding: 18px 20px; border-radius: 12px;
            border: 1px solid var(--slate-200); background: #f8fafc;
            transition: all 0.25s ease;
        }
        .pay-card:hover { border-color: #bbf7d0; background: #f0fdf4; box-shadow: 0 4px 16px rgba(5,150,105,0.1); transform: translateY(-2px); }
        .pay-icon { width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0; }
        .pay-icon.green { background: linear-gradient(135deg, #dcfce7, #bbf7d0); color: #059669; }
        .pay-icon.blue { background: linear-gradient(135deg, #dbeafe, #bfdbfe); color: #2563eb; }
        .pay-icon.orange { background: linear-gradient(135deg, #ffedd5, #fed7aa); color: #ea580c; }
        .pay-icon.cyan { background: linear-gradient(135deg, #cffafe, #a5f3fc); color: #0891b2; }
        .pay-name { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 14px; color: var(--dark); margin-bottom: 2px; }
        .pay-desc { font-size: 12.5px; color: var(--slate-500); }

        /* STEPS */
        .steps-list { list-style: none; counter-reset: step; }
        .steps-list li { counter-increment: step; display: flex; align-items: flex-start; gap: 14px; margin-bottom: 16px; padding: 16px 20px; border-radius: 10px; background: var(--slate-50); border: 1px solid var(--slate-200); }
        .steps-list li::before { content: counter(step); min-width: 28px; height: 28px; border-radius: 7px; background: var(--primary); color: #fff; font-size: 13px; font-weight: 800; font-family: 'Plus Jakarta Sans', sans-serif; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }

        /* FOOTER */
        .page-footer { background: var(--dark); padding: 48px 0 32px; color: var(--slate-400); }
        .footer-links { display: flex; flex-wrap: wrap; gap: 8px; justify-content: center; margin-bottom: 24px; }
        .footer-links a { font-size: 13px; color: var(--slate-400); text-decoration: none; padding: 6px 14px; border-radius: 6px; border: 1px solid rgba(255,255,255,0.08); transition: all 0.2s; }
        .footer-links a:hover { color: #fff; border-color: rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); }
        .footer-links a.active-page { color: #6ee7b7; border-color: rgba(5,150,105,0.4); }
        .footer-copy { text-align: center; font-size: 13px; color: var(--slate-600); }

        @media (max-width: 768px) {
            .page-layout { grid-template-columns: 1fr; }
            .sidebar { position: static; }
            .section-card { padding: 24px 20px; }
            .content-header { padding: 24px 20px; }
            .payment-grid { grid-template-columns: 1fr; }
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
            <div class="hero-badge"><i class="bi bi-lock-fill"></i> Secure Transactions</div>
            <h1 class="hero-title">Payment <span>Security</span></h1>
            <p class="hero-subtitle">Safe, verified, and transparent transaction methods. Every payment is manually confirmed before delivery.</p>
            <div class="hero-meta"><i class="bi bi-shield-fill-check"></i> 100% Secure &nbsp;·&nbsp; <i class="bi bi-person-check"></i> Human Verified</div>
        </div>
    </section>

    <div class="page-layout">
        <aside class="sidebar">
            <div class="sidebar-card">
                <div class="sidebar-title">On this page</div>
                <ul class="toc-list">
                    <li><a href="#s1"><span class="toc-num">1</span> Security Guarantee</a></li>
                    <li><a href="#s2"><span class="toc-num">2</span> Payment Methods</a></li>
                    <li><a href="#s3"><span class="toc-num">3</span> Verification Process</a></li>
                    <li><a href="#s4"><span class="toc-num">4</span> Why Manual?</a></li>
                </ul>
            </div>
            <div class="sidebar-info">
                <p><i class="bi bi-whatsapp" style="color:#25d366"></i> &nbsp;Send payment proof on <strong>WhatsApp</strong> for instant verification — usually under 5 minutes.</p>
            </div>
        </aside>

        <main>
            <div class="content-header">
                <div class="content-header-icon"><i class="bi bi-shield-lock"></i></div>
                <div>
                    <h2>Payment Security</h2>
                    <p>Transparent, manual, and fully verified payment process</p>
                </div>
            </div>

            <div class="section-card" id="s1">
                <div class="section-heading"><span class="section-num">1</span> 100% Secure Payment Guarantee</div>
                <div class="section-body">
                    <p>At SocialBoost, we prioritize the security of your transactions. We do not process payments through automated, unverified gateways. Instead, we rely on <strong>trusted manual payment methods</strong> that offer transparency and immediate verification.</p>
                    <p>Every transaction is reviewed by a real human before any account credentials are dispatched — eliminating fraud and ensuring you always get exactly what you paid for.</p>
                </div>
            </div>

            <div class="section-card" id="s2">
                <div class="section-heading"><span class="section-num">2</span> Accepted Payment Methods</div>
                <div class="section-body">
                    <p>We support the following trusted platforms for local and international transactions:</p>
                    <div class="payment-grid">
                        <div class="pay-card">
                            <div class="pay-icon green"><i class="bi bi-phone-fill"></i></div>
                            <div>
                                <div class="pay-name">Mobile Wallets</div>
                                <div class="pay-desc">JazzCash &amp; Easypaisa (Pakistan)</div>
                            </div>
                        </div>
                        <div class="pay-card">
                            <div class="pay-icon blue"><i class="bi bi-bank2"></i></div>
                            <div>
                                <div class="pay-name">Bank Transfer</div>
                                <div class="pay-desc">HBL &amp; Local Bank Transfers</div>
                            </div>
                        </div>
                        <div class="pay-card">
                            <div class="pay-icon orange"><i class="bi bi-currency-bitcoin"></i></div>
                            <div>
                                <div class="pay-name">Cryptocurrency</div>
                                <div class="pay-desc">Binance (USDT / Crypto)</div>
                            </div>
                        </div>
                        <div class="pay-card">
                            <div class="pay-icon cyan"><i class="bi bi-paypal"></i></div>
                            <div>
                                <div class="pay-name">International</div>
                                <div class="pay-desc">PayPal (Selected regions)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-card" id="s3">
                <div class="section-heading"><span class="section-num">3</span> The Verification Process</div>
                <div class="section-body">
                    <p>To ensure a smooth and secure transaction, we follow these steps:</p>
                    <ol class="steps-list">
                        <li>You initiate an order request via our website or WhatsApp.</li>
                        <li>Our team provides you with the exact payment details for your chosen method.</li>
                        <li>You complete the transfer and send a screenshot of the receipt via WhatsApp.</li>
                        <li>Our finance team manually verifies the payment — usually under 5 minutes.</li>
                        <li>Upon confirmation, your account credentials are securely delivered within the promised timeframe.</li>
                    </ol>
                </div>
            </div>

            <div class="section-card" id="s4">
                <div class="section-heading"><span class="section-num">4</span> Why Manual Verification?</div>
                <div class="section-body">
                    <p>Manual verification prevents fraud, ensures that you are speaking with a real human support agent, and guarantees that you receive exact confirmation before we dispatch high-value digital assets.</p>
                    <p>It adds a layer of <strong>accountability that automated systems lack</strong> — giving both parties full confidence in every transaction.</p>
                </div>
            </div>
        </main>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="footer-links">
                <a href="/terms">Terms & Conditions</a>
                <a href="/privacy">Privacy Policy</a>
                <a href="/payment-security" class="active-page">Payment Security</a>
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

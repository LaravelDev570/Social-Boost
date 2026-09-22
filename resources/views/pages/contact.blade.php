<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us — SocialBoost</title>
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
        
        .hero-banner { background: linear-gradient(135deg, #0b1329 0%, #1e293b 100%); padding: 80px 0; text-align: center; color: #fff; position: relative; overflow: hidden; }
        .hero-title { font-size: 2.8rem; font-weight: 900; margin-bottom: 16px; color: #fff; }
        .hero-subtitle { font-size: 1.1rem; color: #94a3b8; max-width: 600px; margin: 0 auto; line-height: 1.6; }
        
        .content-container { max-width: 800px; margin: -40px auto 60px; background: #fff; border-radius: 16px; box-shadow: 0 10px 40px -10px rgba(0,0,0,0.08); padding: 50px; position: relative; z-index: 10; border: 1px solid #e2e8f0; }
        
        .contact-method { display: flex; align-items: center; gap: 20px; margin-bottom: 25px; padding: 25px; border: 1px solid #e2e8f0; border-radius: 12px; background: #f8fafc; transition: all 0.2s ease; }
        .contact-method:hover { border-color: #cbd5e1; box-shadow: 0 4px 12px rgba(0,0,0,0.03); transform: translateY(-2px); }
        .contact-icon { width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #fff; flex-shrink: 0; }
        .icon-wa { background: #25d366; }
        .icon-email { background: var(--sb-primary); }
        
        .contact-details h4 { font-size: 1.25rem; margin-bottom: 4px; color: var(--sb-dark); }
        .contact-details p { color: var(--sb-slate-600); margin-bottom: 8px; font-size: 14.5px; }
        .contact-link { font-weight: 700; color: var(--sb-primary); text-decoration: none; display: inline-flex; align-items: center; gap: 6px; }
        .contact-link.wa { color: #16a34a; }
        .contact-link:hover { text-decoration: underline; }
        
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
            <h1 class="hero-title">Contact Support</h1>
            <p class="hero-subtitle">We're here to help. Reach out for sales, support, or account audits.</p>
        </div>
    </div>

    <div class="container">
        <div class="content-container">
            <h3 class="mb-4 text-center">How can we help you today?</h3>
            <p class="text-center text-muted mb-5">Our support team is available 24/7 to assist with account deliveries, custom region requests, and payment verification.</p>

            <div class="contact-method">
                <div class="contact-icon icon-wa">
                    <i class="bi bi-whatsapp"></i>
                </div>
                <div class="contact-details">
                    <h4>WhatsApp Support (Fastest)</h4>
                    <p>Average response time: 3-5 minutes. Best for urgent queries and payment verifications.</p>
                    <a href="https://wa.me/923704635765" class="contact-link wa">Message +92 370 4635765 <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="contact-method">
                <div class="contact-icon icon-email">
                    <i class="bi bi-envelope"></i>
                </div>
                <div class="contact-details">
                    <h4>Email Support</h4>
                    <p>Average response time: 2-4 hours. Best for general inquiries and partnerships.</p>
                    <a href="mailto:support@socialboost.com" class="contact-link">Email support@socialboost.com <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="mt-5 text-center p-4 bg-light rounded-4 border">
                <h5 class="fw-bold mb-3">Operating Hours</h5>
                <p class="mb-0 text-muted">Our core team operates 24/7 in shifts to ensure global coverage for our creators in the USA, UK, Canada, and Australia.</p>
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

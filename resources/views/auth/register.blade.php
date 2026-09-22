<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account — SocialBoost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #0f172a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.08);
            max-width: 460px;
            width: 100%;
        }
        .brand-logo-box {
            display: inline-flex; align-items: center; gap: 8px; text-decoration: none; margin-bottom: 24px;
        }
        .logo-icon-sm {
            width: 32px; height: 32px; border-radius: 8px; background: #2563eb; color: #fff;
            display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1rem;
        }
        .btn-primary-custom {
            background: #2563eb; color: #fff; font-weight: 700; border-radius: 10px; padding: 12px;
            border: none; width: 100%; transition: all 0.2s;
        }
        .btn-primary-custom:hover { background: #1d4ed8; color: #fff; transform: translateY(-1px); }
        .form-control-custom {
            background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 10px; padding: 10px 14px; font-size: 14px;
        }
        .form-control-custom:focus {
            border-color: #2563eb; background: #fff; box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 d-flex flex-column align-items-center">
                <a href="/" class="brand-logo-box">
                    <div class="logo-icon-sm">@</div>
                    <span class="fw-bold font-jakarta text-dark fs-4">SocialBoost</span>
                </a>
                <div class="register-card">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold fs-4 mb-1">Create Account</h2>
                        <p class="text-muted small">Join 1,518+ creators on SocialBoost</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger py-2 small rounded-3 mb-3">
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary">Full Name</label>
                            <input type="text" name="name" class="form-control form-control-custom" value="{{ old('name') }}" required autofocus placeholder="Ahmed Khan">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary">Email Address</label>
                            <input type="email" name="email" class="form-control form-control-custom" value="{{ old('email') }}" required placeholder="you@email.com">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary">Password</label>
                            <input type="password" name="password" class="form-control form-control-custom" required placeholder="••••••••">
                        </div>

                        <div class="mb-4">
                            <label class="form-label small fw-bold text-secondary">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control form-control-custom" required placeholder="••••••••">
                        </div>

                        <button type="submit" class="btn-primary-custom mb-3">
                            Register Account Free
                        </button>

                        <div class="text-center">
                            <span class="text-muted small">Already have an account? </span>
                            <a href="{{ route('login') }}" class="text-primary text-decoration-none small fw-bold">Log In</a>
                        </div>
                    </form>
                </div>
                <div class="mt-4 text-center">
                    <a href="/" class="text-secondary small text-decoration-none">← Back to SocialBoost Homepage</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

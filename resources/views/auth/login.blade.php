<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        :root {
            --brand-1: #4f46e5;
            --brand-2: #7c3aed;
        }

        * {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--brand-1) 0%, var(--brand-2) 100%);
            position: relative;
            overflow: hidden;
        }

        body::before,
        body::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
        }

        body::before {
            width: 500px;
            height: 500px;
            top: -150px;
            left: -150px;
        }

        body::after {
            width: 400px;
            height: 400px;
            bottom: -120px;
            right: -120px;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            background: rgba(255, 255, 255, 0.97);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
            padding: 2.5rem;
            position: relative;
            z-index: 1;
        }

        .login-icon {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--brand-1), var(--brand-2));
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.25rem;
            box-shadow: 0 10px 25px rgba(79, 70, 229, 0.35);
        }

        .login-icon i {
            color: #fff;
            font-size: 1.75rem;
        }

        .form-control {
            padding: 0.75rem 1rem;
            border-radius: 10px;
            border: 1.5px solid #e5e7eb;
        }

        .form-control:focus {
            border-color: var(--brand-1);
            box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.15);
        }

        .input-group .btn-toggle {
            border: 1.5px solid #e5e7eb;
            border-left: none;
            background: #fff;
            border-radius: 0 10px 10px 0;
        }

        .btn-brand {
            background: linear-gradient(135deg, var(--brand-1), var(--brand-2));
            border: none;
            padding: 0.75rem;
            border-radius: 10px;
            font-weight: 600;
            letter-spacing: 0.02em;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .btn-brand:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
            color: #fff;
        }

        .divider {
            display: flex;
            align-items: center;
            color: #9ca3af;
            font-size: 0.85rem;
            margin: 1.5rem 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #e5e7eb;
        }

        .divider::before {
            margin-right: 0.75rem;
        }

        .divider::after {
            margin-left: 0.75rem;
        }

        .link-brand {
            color: var(--brand-1);
            font-weight: 500;
            text-decoration: none;
        }

        .link-brand:hover {
            text-decoration: underline;
            color: var(--brand-2);
        }

    </style>
</head>
<body>

    <div class="login-card">
        <div class="text-center">
            <div class="login-icon">
                <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h3 class="fw-bold mb-1">Welcome back</h3>
            <p class="text-muted mb-4">Sign in to continue to your account</p>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger py-2">
            <ul class="mb-0 ps-3 small">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('status'))
        <div class="alert alert-success py-2 small">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('logincheck') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label small fw-semibold">Email address</label>
                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="you@example.com" required autofocus>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label small fw-semibold">Password</label>
                <div class="input-group">
                    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="••••••••" required>
                    <button class="btn btn-toggle" type="button" id="togglePassword" tabindex="-1">
                        <i class="bi bi-eye" id="toggleIcon"></i>
                    </button>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label small" for="remember">Remember me</label>
                </div>
                @if (Route::has('password.request'))
                <a href="#" class="link-brand small">Forgot password?</a>
                @endif
            </div>

            <button type="submit" class="btn btn-brand w-100 text-white">
                Sign In
            </button>

            @if (Route::has('register'))
            <div class="divider">or</div>
            <p class="text-center small mb-0">
                Don't have an account?
                <a href="#" class="link-brand">Create one</a>
            </p>
            @endif
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggleBtn = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        toggleBtn.addEventListener('click', function() {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            toggleIcon.classList.toggle('bi-eye');
            toggleIcon.classList.toggle('bi-eye-slash');
        });

    </script>
</body>
</html>

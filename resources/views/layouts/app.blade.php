<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root { --brand: #3559e0; --brand-dark: #2748bd; --ink: #172033; --muted: #69748a; --line: #e8edf5; }
        body { min-height: 100vh; margin: 0; font-family: "DM Sans", sans-serif; color: var(--ink); background: linear-gradient(135deg, #f7f9ff 0%, #f4f8fc 50%, #edf3ff 100%); }
        h1, h2, h3, .navbar-brand { font-family: "Manrope", sans-serif; }
        .portal-navbar { min-height: 74px; background: rgba(255,255,255,.94); border-bottom: 1px solid rgba(226,232,240,.9); backdrop-filter: blur(14px); }
        .brand-mark { width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0; border-radius: 12px; color: white; background: linear-gradient(135deg, #5574f2, #263eae); box-shadow: 0 8px 18px rgba(53,89,224,.2); }
        .navbar-brand { color: var(--ink) !important; letter-spacing: -.4px; }
        .portal-navbar .nav-link { margin-left: 3px; padding: 9px 12px !important; border-radius: 10px; color: var(--muted) !important; font-weight: 700; }
        .portal-navbar .nav-link:hover, .portal-navbar .nav-link.active { color: var(--brand) !important; background: #eef2ff; }
        .main-content { min-height: calc(100vh - 74px); padding-top: 44px; padding-bottom: 44px; }
        .portal-card, .soft-card { border: 1px solid var(--line); background: rgba(255,255,255,.96); box-shadow: 0 18px 45px rgba(30,45,80,.08); }
        .portal-card { border-radius: 24px; }
        .soft-card { border-radius: 16px; }
        .page-kicker { color: var(--brand); font-size: .78rem; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; }
        .form-control { min-height: 50px; border-radius: 12px; border-color: #dfe5ef; }
        .form-control:focus { border-color: #8298ed; box-shadow: 0 0 0 .25rem rgba(53,89,224,.1); }
        .btn { border-radius: 11px; font-weight: 700; }
        .btn-primary { border-color: var(--brand); background: var(--brand); box-shadow: 0 8px 18px rgba(53,89,224,.16); }
        .btn-primary:hover { border-color: var(--brand-dark); background: var(--brand-dark); }
        .text-brand { color: var(--brand) !important; }
        .table thead th { padding-block: 14px; border-bottom-width: 1px; background: #f8faff; color: #69748a; font-size: .78rem; text-transform: uppercase; letter-spacing: .04em; }
        .table tbody td { padding-block: 16px; border-color: #eef1f6; }
        @media (max-width: 991px) { .portal-navbar .nav-link { margin: 3px 0; } .main-content { padding-top: 28px; } }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg portal-navbar sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <span class="brand-mark"><i class="bi bi-mortarboard-fill"></i></span>
            <span>Student Portal</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#portalNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="portalNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('student') ? 'active' : '' }}" href="{{ route('student') }}">Student Information</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('developer') ? 'active' : '' }}" href="{{ route('developer') }}">About Developer</a></li>
                @if(session('user_id'))
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a></li>
                @else
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<main class="container main-content">
    @yield('content')
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

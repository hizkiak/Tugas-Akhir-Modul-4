<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir — BPBD Kabupaten Bandung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --ink: #172d3b; --muted: #65737a; --paper: #f1f3f2; --teal: #087e78; --line: #dce2df; --amber: #e7ad43; }
        body { background: var(--paper); color: var(--ink); font-family: "Segoe UI", Arial, sans-serif; }
        .site-header { background: #fff; border-top: 4px solid var(--amber); border-bottom: 1px solid var(--line); }
        .navbar { min-height: 72px; }
        .navbar-brand { color: var(--ink); font-size: 1.12rem; letter-spacing: -.04em; }
        .navbar-brand .brand-accent { color: var(--teal); }
        .nav-link { color: #52686a; padding: .55rem .75rem !important; }
        .nav-link:hover, .nav-link:focus { color: var(--teal); }
        .nav-actions { display: flex; align-items: center; gap: .25rem; flex-wrap: wrap; }
        .btn { border-radius: 4px; font-weight: 600; }
        .btn-primary { --bs-btn-bg: var(--teal); --bs-btn-border-color: var(--teal); --bs-btn-hover-bg: #105754; --bs-btn-hover-border-color: #105754; }
        .btn-outline-secondary { --bs-btn-color: #43595b; --bs-btn-border-color: #bdcac7; }
        .page-shell { max-width: 1160px; }
        .page-kicker { color: var(--teal); font-size: .7rem; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; }
        .card { border: 1px solid var(--line); border-radius: 3px; box-shadow: 0 2px 5px #203a320c !important; }
        .report-banner { position: relative; overflow: hidden; background: var(--ink); color: white; border-left: 6px solid var(--amber); }
        .report-banner { border-radius: 3px; }
        .stat-box { background: #fff; border-top: 3px solid var(--teal); padding: 1rem 1.1rem; height: 100%; }
        .stat-number { display: block; font-size: 1.65rem; line-height: 1.1; font-weight: 750; letter-spacing: -.04em; }
        .report-card { position: relative; overflow: hidden; }
        .report-card::before { content: ""; position: absolute; inset: 0 auto 0 0; width: 4px; background: var(--teal); }
        .report-card.level-warning::before { background: #e2a62d; }
        .report-card.level-danger::before { background: #c94b43; }
        .form-control, .form-select, .input-group-text { border-color: #cbd6d2; border-radius: 4px; }
        .form-control, .form-select { padding: .68rem .8rem; }
        .form-control:focus, .form-select:focus { border-color: #55948d; box-shadow: 0 0 0 .18rem #176b681b; }
        .form-label { color: #344e50; font-weight: 600; font-size: .9rem; }
        .alert { border-radius: 4px; }
        .site-footer { color: var(--muted); border-top: 1px solid var(--line); font-size: .82rem; }
        @media (max-width: 575.98px) { .nav-actions { padding: .5rem 0 .75rem; } .navbar-brand { margin-right: .5rem; } }
    </style>
</head>
<body>
<header class="site-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container page-shell">
            <a class="navbar-brand fw-bold" href="{{ route('laporan.create') }}">
                Lapor<span class="brand-accent">Banjir</span>
            </a>
            <div class="nav-actions ms-auto">
                @auth
                    <a class="nav-link" href="{{ route('laporan.index') }}">Daftar laporan</a>
                    <a class="nav-link" href="{{ route('profile') }}">Profil petugas</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline-block">
                        @csrf
                        <button class="btn btn-link nav-link text-decoration-none" type="submit">Keluar</button>
                    </form>
                @endauth
                @guest
                    <a class="nav-link" href="{{ route('login') }}">Login petugas</a>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                @endguest
                <a class="btn btn-primary btn-sm ms-2 px-3 py-2" href="{{ route('laporan.create') }}">Buat laporan</a>
            </div>
        </div>
    </nav>
</header>
<main class="container page-shell py-4 py-md-5">
    @include('components.alert')
    @yield('content')
</main>
<footer class="site-footer mt-4 py-3">
    <div class="container page-shell">Layanan pelaporan kejadian banjir - BPBD Kabupaten Bandung</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

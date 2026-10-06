<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaporBanjir - BPBD Kabupaten Bandung</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background-color: #f4f7f9;
        }

        .navbar {
            background: #0d6efd;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .hero {
            background: linear-gradient(135deg, #0d6efd, #0dcaf0);
            color: white;
            border-radius: 15px;
            padding: 40px;
        }

        .card {
            border: none;
            border-radius: 15px;
        }

        .status {
            font-weight: bold;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('laporan.index') }}">
            🌊 LaporBanjir
        </a>

        <div>
            <a class="nav-link d-inline-block"
               href="{{ route('laporan.index') }}">
                Daftar Laporan
            </a>

            <a class="btn btn-light btn-sm"
               href="{{ route('laporan.create') }}">
                + Laporkan Banjir
            </a>
        </div>

    </div>
</nav>

<div class="container py-4">

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
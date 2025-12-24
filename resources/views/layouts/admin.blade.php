<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Admin Politeknik Mitra Global</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <aside class="col-md-2 bg-light min-vh-100 p-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">📊 Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.prodi.index') }}" class="nav-link">🎓 Program Studi</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.berita.index') }}" class="nav-link">📰 Berita</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.prestasi.index') }}" class="nav-link">🏆 Prestasi</a>
                </li>
            </ul>
        </aside>

        <!-- CONTENT -->
        <main class="col-md-10 p-4">
            @yield('content')
        </main>

    </div>
</div>

</body>
</html>

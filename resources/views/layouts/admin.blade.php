<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Politeknik Mitra Global</title>

    <link rel="icon" type="image/png" href="{{ asset('image/logo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        .nav-link.text-dark:hover {
            background-color: #f1f1f1;
            border-radius: 6px;
        }
    </style>


</head>


<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Politeknik Mitra Global</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn text-white btn-danger btn-outline-secondary w-100 mt-2">
                    <i class="bi bi-box-arrow-right me-1"></i> Logout
                </button>
            </form>

        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <!-- SIDEBAR -->
            <aside class="col-md-2 bg-light min-vh-100 p-3">

                <!-- USER LOGIN -->
                <div class="d-flex align-items-center mb-4 px-2">
                    <i class="bi bi-person-circle fs-3 text-dark me-2"></i>
                    <div>
                        <div class="fw-semibold text-dark">
                            {{ Auth::user()->name }}
                        </div>
                        <small class="text-muted">Administrator</small>
                    </div>
                </div>

                <hr>

                <!-- MENU -->
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link text-dark">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.prodi.index') }}" class="nav-link text-dark">
                            <i class="bi bi-mortarboard-fill me-2"></i> Program Studi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.berita.index') }}" class="nav-link text-dark">
                            <i class="bi bi-newspaper me-2"></i> Berita
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.prestasi.index') }}" class="nav-link text-dark">
                            <i class="bi bi-trophy-fill me-2"></i> Prestasi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.pegawai.index') }}" class="nav-link text-dark">
                            <i class="bi bi-people-fill me-2"></i> Data Pegawai
                        </a>
                    </li>

                    <!-- CRUD USER -->
                    <li class="nav-item mt-2">
                        <a href="{{ route('admin.users.index') }}" class="nav-link text-dark">
                            <i class="bi bi-person-lines-fill me-2"></i> Manajemen User
                        </a>
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

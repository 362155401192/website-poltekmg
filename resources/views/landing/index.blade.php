<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Politeknik Mitra Global</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

<<<<<<< HEAD
{{-- ================= TOP BAR ================= --}}
<div class="bg-primary text-white py-2 small">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <i class="bi bi-telephone"></i> (0333) 391 0698
            &nbsp;&nbsp;
            <i class="bi bi-envelope"></i> politeknikmg@gmail.com
        </div>
        <div>
            <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
        </div>
    </div>
</div>

{{-- ================= NAVBAR ================= --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('logo.png') }}" height="45" class="me-2">
            <strong>POLITEKNIK<br>MITRA GLOBAL</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav mx-auto gap-lg-3">

                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                        Program Studi
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($prodis as $prodi)
                        <li>
                            <a class="dropdown-item" href="#">
                                {{ $prodi->nama }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#berita">Artikel Berita</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                        Mitra Kerjasama
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Industri</a></li>
                        <li><a class="dropdown-item" href="#">Akademik</a></li>
                    </ul>
                </li>
            </ul>

            <a href="#" class="btn btn-warning text-white fw-semibold px-4">
                Pendaftaran
            </a>
        </div>

    </div>
</nav>

{{-- ================= HERO ================= --}}
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="fw-bold">Politeknik Mitra Global</h1>
        <p class="lead">Website resmi informasi akademik dan kegiatan jurusan</p>
    </div>
</section>

{{-- ================= PROGRAM STUDI ================= --}}
<section class="py-5">
    <div class="container">
        <h3 class="mb-4 text-center">Program Studi</h3>

        <div class="row">
            @foreach($prodis as $prodi)
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5>{{ $prodi->nama }}</h5>
                        <small class="text-muted">{{ $prodi->kode }}</small>
                        <p class="mt-2">
                            {{ Str::limit($prodi->deskripsi, 100) }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
=======
    {{-- HERO --}}
    <section class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="fw-bold">Politeknik Mitra Global</h1>
            <p class="lead">Website resmi informasi akademik dan kegiatan kampus</p>
>>>>>>> fa2da189adbe7d41559c70a5867d244261ecc863
        </div>
    </section>

<<<<<<< HEAD
{{-- ================= BERITA ================= --}}
<section id="berita" class="bg-light py-5">
    <div class="container">
        <h3 class="mb-4 text-center">Berita Terbaru</h3>

        <div class="row">
            @foreach($beritas as $berita)
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h6>{{ $berita->judul }}</h6>
                        <small class="text-muted">
                            {{ $berita->created_at->format('d M Y') }}
                        </small>

                        <p class="mt-2">
                            {{ Str::limit(strip_tags($berita->konten), 120) }}
                        </p>

                        <a href="{{ route('berita.detail', $berita->slug) }}"
                           class="btn btn-sm btn-primary">
                            Baca Selengkapnya
                        </a>
=======
    {{-- PROGRAM STUDI --}}
    <section class="py-5">
        <div class="container">
            <h3 class="mb-4 text-center">Program Studi</h3>

            <div class="row">
                @foreach ($prodis as $prodi)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5>{{ $prodi->nama }}</h5>
                                <small class="text-muted">{{ $prodi->kode }}</small>
                                <p class="mt-2">{{ Str::limit($prodi->deskripsi, 100) }}</p>
                            </div>
                        </div>
>>>>>>> fa2da189adbe7d41559c70a5867d244261ecc863
                    </div>
                @endforeach
            </div>
        </div>
    </section>

<<<<<<< HEAD
{{-- ================= FOOTER ================= --}}
<footer class="bg-dark text-white text-center py-3">
    © {{ date('Y') }} Politeknik Mitra Global
</footer>
=======
    {{-- BERITA --}}
    <section class="bg-light py-5">
        <div class="container">
            <h3 class="mb-4 text-center">Berita Terbaru</h3>

            <div class="row">
                @foreach ($beritas as $berita)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h6>{{ $berita->judul }}</h6>
                                <small class="text-muted">
                                    {{ $berita->created_at->format('d M Y') }}
                                </small>
                                <p class="mt-2">{{ Str::limit(strip_tags($berita->konten), 120) }}</p>

                                <a href="{{ route('berita.detail', $berita->slug) }}" class="btn btn-sm btn-primary">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        © {{ date('Y') }} Politeknik Mitra Global
    </footer>
>>>>>>> fa2da189adbe7d41559c70a5867d244261ecc863

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

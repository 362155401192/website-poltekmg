<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Politeknik Mitra Global</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    {{-- HERO --}}
    <section class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="fw-bold">Politeknik Mitra Global</h1>
            <p class="lead">Website resmi informasi akademik dan kegiatan kampus</p>
        </div>
    </section>

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
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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

</body>

</html>

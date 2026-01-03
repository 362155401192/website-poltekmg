<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $prodi->nama }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-size: 18px;
            line-height: 1.8;
        }
        h2 {
            font-size: 2.4rem;
        }
        .meta-text {
            font-size: 1.1rem;
        }
        .content-text p {
            margin-bottom: 1rem;
        }
        .prodi-image {
            max-height: 260px;       /* diperkecil */
            object-fit: cover;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container py-5" style="max-width: 900px;">

    <a href="{{ url()->previous() }}" class="btn btn-secondary mb-4">
        ← Kembali
    </a>

    {{-- JUDUL --}}
    <h2 class="fw-bold mb-2">{{ $prodi->nama }}</h2>

    {{-- META --}}
    <div class="meta-text text-muted mb-3">
        Kode Program Studi: {{ $prodi->kode }}
    </div>

    <hr class="mb-4">

    {{-- FOTO (diperkecil & rapi) --}}
    @if ($prodi->foto)
        <div class="text-center mb-4">
            <img src="{{ asset('storage/' . $prodi->foto) }}"
                 class="img-fluid rounded prodi-image">
        </div>
    @endif

    {{-- KONTEN --}}
    <div class="content-text">
        {!! nl2br(e($prodi->deskripsi)) !!}
    </div>

</div>

</body>
</html>

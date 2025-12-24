<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $berita->judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <a href="{{ url('/') }}" class="btn btn-secondary mb-3">← Kembali</a>

    <h2>{{ $berita->judul }}</h2>
    <small class="text-muted">
        {{ $berita->created_at->format('d M Y') }}
    </small>

    <hr>

    <div>
        {!! $berita->konten !!}
    </div>
</div>

</body>
</html>

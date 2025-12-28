@extends('layouts.admin')

@section('content')
    <h4 class="mb-3">Edit Berita</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- JUDUL --}}
        <div class="mb-3">
            <label class="form-label">Judul Berita</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul', $berita->judul) }}" required>
        </div>

        {{-- THUMBNAIL (TEKS) --}}
        <div class="mb-3">
            <label class="form-label">Thumbnail (Teks Utama)</label>
            <input type="text" name="thumbnail" class="form-control" value="{{ old('thumbnail', $berita->thumbnail) }}"
                placeholder="Judul singkat berita">
        </div>

        {{-- KONTEN --}}
        <div class="mb-3">
            <label class="form-label">Konten Berita</label>
            <textarea name="konten" rows="6" class="form-control" required>{{ old('konten', $berita->konten) }}</textarea>
        </div>

        {{-- FOTO LAMA --}}
        <div class="mb-3">
            <label class="form-label">Foto Saat Ini</label><br>
            @if ($berita->foto)
                <img src="{{ asset('storage/' . $berita->foto) }}" class="img-thumbnail mb-2" width="200">
            @else
                <p class="text-muted">Belum ada foto</p>
            @endif
        </div>

        {{-- FOTO BARU --}}
        <div class="mb-3">
            <label class="form-label">Ganti Foto</label>
            <input type="file" name="foto" class="form-control" accept="image/*">
            <small class="text-muted">
                Kosongkan jika tidak ingin mengganti foto
            </small>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection

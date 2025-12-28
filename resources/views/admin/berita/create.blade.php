@extends('layouts.admin')

@section('content')
    <h4 class="mb-3">Tambah Berita</h4>

    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Thumbnail (TEKS)</label>
            <input type="text" name="thumbnail" class="form-control">
        </div>

        <div class="mb-3">
            <label>Konten</label>
            <textarea name="konten" class="form-control" rows="6" required></textarea>
        </div>

        <div class="mb-3">
            <label>Foto Berita</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
@endsection

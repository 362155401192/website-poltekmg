@extends('layouts.admin')

@section('content')
<h4 class="mb-3">Tambah Berita</h4>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="form-label">Judul Berita</label>
        <input type="text" name="judul" class="form-control"
               value="{{ old('judul') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Foto Berita</label>
        <input type="file" name="foto" class="form-control" accept="image/*">
        <small class="text-muted">Format: jpg, png, jpeg</small>
    </div>

    <div class="mb-3">
        <label class="form-label">Konten Berita</label>
        <textarea name="konten" rows="6" class="form-control" required>{{ old('konten') }}</textarea>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection

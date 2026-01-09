@extends('layouts.admin')

@section('content')
    <h4 class="mb-4">Tambah Foto Galeri</h4>

    <form action="{{ route('admin.galeri.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="card p-4 shadow-sm border-0">

        @csrf

        <div class="mb-3">
            <label class="form-label">Judul Foto (opsional)</label>
            <input type="text" name="judul" class="form-control"
                   value="{{ old('judul') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control" required>
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </form>
@endsection

@extends('layouts.admin')

@section('content')
    <h4 class="mb-4">Edit Foto Galeri</h4>

    <form action="{{ route('admin.galeri.update', $galeri) }}"
          method="POST"
          enctype="multipart/form-data"
          class="card p-4 shadow-sm border-0">

        @csrf
        @method('PUT')

        <div class="mb-3 text-center">
            <img src="{{ asset('storage/' . $galeri->foto) }}"
                 width="200"
                 class="rounded mb-3">
        </div>

        <div class="mb-3">
            <label class="form-label">Judul Foto</label>
            <input type="text" name="judul" class="form-control"
                   value="{{ old('judul', $galeri->judul) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Ganti Foto (opsional)</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-primary">Update</button>
            <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </form>
@endsection

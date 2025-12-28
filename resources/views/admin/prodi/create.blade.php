@extends('layouts.admin')

@section('content')
    <h4 class="mb-3">Tambah Program Studi</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.prodi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Program Studi</label>
            <input type="text" name="kode" class="form-control" value="{{ old('kode') }}"
                placeholder="TRPL / TRK / BSD" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Program Studi</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="form-control">{{ old('deskripsi') }}</textarea>
        </div>

        {{-- FOTO --}}
        <div class="mb-3">
            <label class="form-label">Foto Program Studi</label>
            <input type="file" name="foto" class="form-control" accept="image/*">
            <small class="text-muted">
                Format: JPG, PNG, max 2MB
            </small>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.prodi.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
@endsection

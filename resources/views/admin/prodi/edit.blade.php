@extends('layouts.admin')

@section('content')
    <h4 class="mb-3">Edit Program Studi</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.prodi.update', $prodi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Kode Program Studi</label>
            <input type="text" name="kode" class="form-control" value="{{ old('kode', $prodi->kode) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Program Studi</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $prodi->nama) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="form-control">{{ old('deskripsi', $prodi->deskripsi) }}</textarea>
        </div>

        {{-- FOTO --}}
        <div class="mb-3">
            <label class="form-label">Foto Program Studi</label>

            @if ($prodi->foto)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $prodi->foto) }}" alt="Foto Prodi" width="120" class="img-thumbnail">
                </div>
            @endif

            <input type="file" name="foto" class="form-control" accept="image/*">
            <small class="text-muted">
                Kosongkan jika tidak ingin mengganti foto
            </small>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.prodi.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
@endsection

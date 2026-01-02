@extends('layouts.admin')

@section('content')
    <h4 class="mb-3">Tambah Pegawai</h4>

    {{-- ERROR VALIDASI --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.pegawai.store') }}"
        method="POST" enctype="multipart/form-data">
        @csrf

        {{-- NAMA --}}
        <div class="mb-3">
            <label class="form-label">Nama Pegawai</label>
            <input type="text" name="nama" class="form-control"
                value="{{ old('nama') }}" required>
        </div>

        {{-- NIDN --}}
        <div class="mb-3">
            <label class="form-label">NIDN</label>
            <input type="text" name="nidn" class="form-control"
                value="{{ old('nidn') }}" required>
        </div>

        {{-- JABATAN --}}
        <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control"
                value="{{ old('jabatan') }}" required>
        </div>

        {{-- EMAIL --}}
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control"
                value="{{ old('email') }}" required>
        </div>

        {{-- NO HP --}}
        <div class="mb-3">
            <label class="form-label">No HP</label>
            <input type="text" name="nohp" class="form-control"
                value="{{ old('nohp') }}" required>
        </div>

        {{-- FOTO --}}
        <div class="mb-3">
            <label class="form-label">Foto Pegawai</label>
            <input type="file" name="foto" class="form-control" accept="image/*">
            <small class="text-muted">
                Opsional. Format JPG / PNG, max 2MB
            </small>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.pegawai.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container">
    <h4>Edit Pegawai</h4>

    <form action="{{ route('admin.pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('pegawai.form')
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection@extends('layouts.admin')

@section('content')
    <h4 class="mb-3">Edit Pegawai</h4>

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

    <form action="{{ route('admin.pegawai.update', $pegawai) }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- NAMA --}}
        <div class="mb-3">
            <label class="form-label">Nama Pegawai</label>
            <input type="text" name="nama" class="form-control"
                value="{{ old('nama', $pegawai->nama) }}" required>
        </div>

        {{-- NIDN --}}
        <div class="mb-3">
            <label class="form-label">NIDN</label>
            <input type="text" name="nidn" class="form-control"
                value="{{ old('nidn', $pegawai->nidn) }}" required>
        </div>

        {{-- JABATAN --}}
        <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control"
                value="{{ old('jabatan', $pegawai->jabatan) }}" required>
        </div>

        {{-- EMAIL --}}
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control"
                value="{{ old('email', $pegawai->email) }}" required>
        </div>

        {{-- NO HP --}}
        <div class="mb-3">
            <label class="form-label">No HP</label>
            <input type="text" name="nohp" class="form-control"
                value="{{ old('nohp', $pegawai->nohp) }}" required>
        </div>

        {{-- FOTO LAMA --}}
        <div class="mb-3">
            <label class="form-label">Foto Saat Ini</label><br>
            @if ($pegawai->foto)
                <img src="{{ asset('storage/' . $pegawai->foto) }}"
                    class="img-thumbnail mb-2"
                    style="width:150px; height:150px; object-fit:cover;">
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
        <a href="{{ route('admin.pegawai.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
@endsection


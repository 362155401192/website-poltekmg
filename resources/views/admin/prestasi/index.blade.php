@extends('layouts.admin')

@section('content')
<h4 class="mb-3">Data Prestasi</h4>

<a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary mb-3">
    + Tambah Prestasi
</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th width="5%">No</th>
            <th>Judul</th>
            <th>Tingkat</th>
            <th>Peraih</th>
            <th width="10%">Tahun</th>
            <th width="20%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($prestasis as $prestasi)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $prestasi->judul }}</td>
            <td>{{ $prestasi->tingkat }}</td>
            <td>{{ $prestasi->peraih }}</td>
            <td>{{ $prestasi->tahun }}</td>
            <td>
                <a href="{{ route('admin.prestasi.edit',$prestasi) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>
                <form action="{{ route('admin.prestasi.destroy',$prestasi) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus prestasi ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Data prestasi belum ada</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection

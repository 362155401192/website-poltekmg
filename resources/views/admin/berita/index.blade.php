@extends('layouts.admin')

@section('content')
<h4 class="mb-3">Data Berita</h4>

<a href="{{ route('admin.berita.create') }}" class="btn btn-primary mb-3">
    + Tambah Berita
</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th width="5%">No</th>
            <th>Judul</th>
            <th width="15%">Tanggal</th>
            <th width="20%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($beritas as $berita)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $berita->judul }}</td>
            <td>{{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}</td>
            <td>
                <a href="{{ route('admin.berita.edit',$berita) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>
                <form action="{{ route('admin.berita.destroy',$berita) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus berita ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Data berita belum ada</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection

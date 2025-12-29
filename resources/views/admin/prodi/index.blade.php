@extends('layouts.admin')

@section('content')
<h4 class="mb-3">Program Studi</h4>

<a href="{{ route('admin.prodi.create') }}" class="btn btn-primary mb-3">
    + Tambah Program Studi
</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th width="5%">No</th>
            <th width="15%">Foto</th>
            <th width="15%">Kode</th>
            <th>Nama Program Studi</th>
            <th width="20%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($prodis as $prodi)
        <tr>
            <td>{{ $loop->iteration }}</td>

            {{-- FOTO --}}
            <td class="text-center">
                @if($prodi->foto)
                    <img 
                        src="{{ asset('storage/' . $prodi->foto) }}" 
                        alt="{{ $prodi->nama }}"
                        width="80"
                        class="img-thumbnail"
                    >
                @else
                    <span class="text-muted">Tidak ada</span>
                @endif
            </td>

            <td>{{ $prodi->kode }}</td>
            <td>{{ $prodi->nama }}</td>

            <td>
                <a href="{{ route('admin.prodi.edit',$prodi) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>
                <form action="{{ route('admin.prodi.destroy',$prodi) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus program studi ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Data program studi belum ada</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection

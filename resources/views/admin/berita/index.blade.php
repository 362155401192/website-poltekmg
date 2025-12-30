@extends('layouts.admin')

@section('content')
    <h4 class="mb-3">Data Berita</h4>

    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary mb-3">
        + Tambah Berita
    </a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th width="5%">No</th>
                <th width="15%">Foto</th>
                <th>Judul</th>
                <th width="15%">Tanggal</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($beritas as $berita)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    {{-- FOTO --}}
                    <td class="text-center">
                        @if ($berita->foto)
                            <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->judul }}"
                                style="height:70px; width:100px; object-fit:cover;" class="rounded shadow-sm">
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>

                    <td>{{ $berita->judul }}</td>
                    <td>{{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.berita.edit', $berita) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('admin.berita.destroy', $berita) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus berita ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Data berita belum ada</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
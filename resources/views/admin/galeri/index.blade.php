@extends('layouts.admin')

@section('content')
    <h4 class="mb-4">Galeri Kampus</h4>

    <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary mb-3">
        + Tambah Foto
    </a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th width="5%">No</th>
                    <th>Judul</th>
                    <th width="15%">Foto</th>
                    <th width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($galleries as $gallery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gallery->judul ?? '-' }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $gallery->foto) }}"
                                 class="foto-galeri-admin"
                                 alt="{{ $gallery->judul }}">
                        </td>
                        <td>
                            <a href="{{ route('admin.galeri.edit', $gallery) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('admin.galeri.destroy', $gallery) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Hapus foto ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">
                            Belum ada foto di galeri
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

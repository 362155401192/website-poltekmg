@extends('layouts.admin')

@section('content')
    <h4 class="mb-3">Data Pegawai</h4>

    <a href="{{ route('admin.pegawai.create') }}" class="btn btn-primary mb-3">
        + Tambah Pegawai
    </a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th width="5%">No</th>
                <th width="15%">Foto</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>No HP</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($pegawais as $pegawai)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    {{-- FOTO --}}
                    <td class="text-center">
                        @if ($pegawai->foto)
                            <img src="{{ asset('storage/' . $pegawai->foto) }}"
                                alt="{{ $pegawai->nama }}"
                                style="height:70px; width:70px; object-fit:cover;"
                                class="rounded shadow-sm">
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>

                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->nidn }}</td>
                    <td>{{ $pegawai->jabatan }}</td>
                    <td>{{ $pegawai->email }}</td>
                    <td>{{ $pegawai->nohp }}</td>

                    <td>
                        <a href="{{ route('admin.pegawai.edit', $pegawai) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('admin.pegawai.destroy', $pegawai) }}"
                            method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus data pegawai ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">
                        Data pegawai belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

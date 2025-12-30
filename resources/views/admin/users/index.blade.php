@extends('layouts.admin')

@section('content')
    <h4 class="mb-3">Data Admin</h4>

    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-3">
        + Tambah Admin
    </a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th width="5%">No</th>
                <th>Nama</th>
                <th>Email</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        @if(auth()->id() !== $user->id)
                            <form action="{{ route('admin.users.destroy', $user) }}"
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus admin ini?')">
                                    Hapus
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        Data admin belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

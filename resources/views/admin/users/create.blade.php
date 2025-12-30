@extends('layouts.admin')

@section('content')
<h4 class="mb-3">Tambah Admin</h4>

<form method="POST" action="{{ route('admin.users.store') }}">
    @csrf

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection

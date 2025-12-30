@extends('layouts.admin')

@section('content')
<h4 class="mb-3">
    <i class="bi bi-pencil-square me-2"></i> Edit Admin
</h4>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body">

        <form method="POST" action="{{ route('admin.users.update', $user) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name"
                       class="form-control"
                       value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email"
                       class="form-control"
                       value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Password <small class="text-muted">(kosongkan jika tidak diubah)</small>
                </label>
                <input type="password" name="password"
                       class="form-control">
            </div>

            <div class="mb-4">
                <label class="form-label">Konfirmasi Password</label>
                <input type="password" name="password_confirmation"
                       class="form-control">
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </form>

    </div>
</div>
@endsection

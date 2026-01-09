@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
    <div class="card shadow border-0" style="width:380px;border-radius:18px">
        <div class="card-body p-4">

            <h4 class="fw-bold text-center">Welcome</h4>
            <p class="text-muted text-center mb-4">
                Silakan login untuk melanjutkan
            </p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control rounded-3" required autofocus>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control rounded-3" required>
                </div>

                <div class="d-flex justify-content-between mb-3 small">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="{{ route('password.request') }}">Lupa password?</a>
                </div>

                <button class="btn btn-primary w-100 py-2 rounded-3">
                    Login
                </button>
            </form>

        </div>
    </div>
</div>
@endsection

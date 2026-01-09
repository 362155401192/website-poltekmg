@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<style>
    .auth-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: linear-gradient(135deg, #eef2ff, #f5f3ff);
    }

    .auth-card {
        width: 420px;
        background: #fff;
        padding: 28px;
        border-radius: 18px;
        box-shadow: 0 25px 60px rgba(0,0,0,.25);
    }

    .auth-title {
        font-size: 24px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 4px;
    }

    .auth-subtitle {
        text-align: center;
        font-size: 14px;
        color: #6b7280;
        margin-bottom: 24px;
    }

    .auth-input {
        border-radius: 12px !important;
        padding: 12px 14px !important;
    }

    .auth-btn {
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        border-radius: 12px;
        padding: 12px;
        width: 100%;
        color: #fff;
        font-weight: 600;
        border: none;
    }

    .auth-btn:hover {
        opacity: .9;
    }
</style>

<div class="auth-wrapper">
    <div class="auth-card">

        <h2 class="auth-title">Create Account</h2>
        <p class="auth-subtitle">Daftar untuk membuat akun baru</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-input-label for="name" value="Nama Lengkap" />
                <x-text-input id="name" name="name"
                    class="block mt-1 w-full auth-input"
                    type="text" required autofocus />
            </div>

            <div class="mt-4">
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" name="email"
                    class="block mt-1 w-full auth-input"
                    type="email" required />
            </div>

            <div class="mt-4">
                <x-input-label for="password" value="Password" />
                <x-text-input id="password" name="password"
                    class="block mt-1 w-full auth-input"
                    type="password" required />
            </div>

            <div class="mt-4">
                <x-input-label for="password_confirmation" value="Konfirmasi Password" />
                <x-text-input id="password_confirmation" name="password_confirmation"
                    class="block mt-1 w-full auth-input"
                    type="password" required />
            </div>

            <div class="mt-6">
                <button class="auth-btn">Register</button>
            </div>

            <div class="text-center mt-4 text-sm text-gray-600">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">
                    Login
                </a>
            </div>
        </form>

    </div>
</div>
@endsection

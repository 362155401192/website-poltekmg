<x-guest-layout>
    <style>
        .login-box {
            width: 380px;
            background: #ffffff;
            padding: 28px;
            border-radius: 18px;
            box-shadow: 0 20px 50px rgba(0,0,0,.15);
        }

        .btn-login {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 12px;
            padding: 12px;
            width: 100%;
            color: #fff;
            font-weight: 600;
        }
    </style>

    <div class="flex items-center justify-center min-h-screen">
        <div class="login-box">

            <h2 class="text-xl font-bold text-center">Welcome</h2>
            <p class="text-sm text-gray-500 text-center mb-6">
                Silakan login untuk melanjutkan
            </p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-input-label value="Email" />
                    <x-text-input class="mt-1 w-full rounded-xl" type="email" name="email" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label value="Password" />
                    <x-text-input class="mt-1 w-full rounded-xl" type="password" name="password" required />
                </div>

                <div class="flex justify-between items-center mt-4 text-sm">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>

                    <a href="{{ route('password.request') }}" class="text-indigo-600">
                        Lupa password?
                    </a>
                </div>

                <button class="btn-login mt-6">Login</button>
            </form>
        </div>
    </div>
</x-guest-layout>

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Proses login & redirect sesuai role
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Autentikasi user
        $request->authenticate();

        // Regenerasi session (security)
        $request->session()->regenerate();

        // Ambil user yang login
        $user = auth()->user();

        // Redirect ADMIN
        if ($user && $user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // Redirect USER BIASA (ubah sesuai kebutuhan)
        // Bisa ke landing page atau dashboard user
        return redirect()->to('/');
        // atau:
        // return redirect()->route('dashboard');
    }

    /**
     * Logout user
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        // Hapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Kembali ke landing page
        return redirect('/');
    }
}

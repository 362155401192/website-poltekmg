<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Selama sudah login, boleh akses admin
        if (auth()->check()) {
            return $next($request);
        }

        abort(403, 'Akses ditolak');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIzin
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->user()->izin == null) {
                auth()->logout();
                return redirect()->route('login')->with('izin','Akun anda diblokir!');
            }
        }
        return $next($request);
    }
}

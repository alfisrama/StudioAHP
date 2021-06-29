<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminOnly
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->level !== 'admin') {
            if (Auth::user()->level == 'operator'){
                return redirect('dashboard');
            }else{
                return redirect('/');
            }
        }

        return $next($request);
    }
}

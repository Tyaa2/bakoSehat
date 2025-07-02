<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsDinkes
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role !== 'dinkes') {
            abort(403, 'Hanya Dinkes yang dapat mengakses halaman ini.');
        }

        return $next($request);
    }
}

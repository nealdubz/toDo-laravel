<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Check is user is logged in if so redirect to home
        if ($request->user()) {
            return redirect(route('home'));
        }
        return $next($request);
    }
}

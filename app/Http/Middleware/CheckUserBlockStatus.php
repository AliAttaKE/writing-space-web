<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserBlockStatus
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->is_block == 1 && $user->status == 0) {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Your account has been blocked.');
        }

        return $next($request);
    }
}

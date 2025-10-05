<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerOrder;

class CheckCustomerOrder
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to access this page.');
        }

        $customerOrder = CustomerOrder::where('customer_email', $user->email)->first();

        if (!$customerOrder) {
            return redirect()->back()->with('error', 'You are not authorized to place free orders.');
        }

        return $next($request);
    }
}
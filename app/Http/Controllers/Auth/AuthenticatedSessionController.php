<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\LoginSession;
use Illuminate\Validation\ValidationException;

use Jenssegers\Agent\Facades\Agent;
use Stevebauman\Location\Facades\Location;//location


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {       

      
        $request->authenticate();
        // $request->session()->regenerate();
        // getMoreDeatils();
        $url = '';



        if($request->user()->role === 'admin')
        {
            $url = 'admin/dashboard';
        }
        else
        {
            $url = 'customer/dashboard';
        }

        return redirect()->intended($url);
    }

    
    
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {

        session()->forget('logged_id');

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

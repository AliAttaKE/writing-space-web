<?php

namespace App\Http\Middleware;
use App\Helpers\Qs;
use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\OwnerProfile;
use App\Models\User;
use function PHPUnit\Framework\isEmpty;

class UserRoutes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */



    public function handle($request, Closure $next)
    {

        if(Qs::userIsWorker() && Auth::user()->user_is_approved == 0){
           return redirect('waitingforapproval');
        }
        if (!Qs::userIsWorker()) {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}

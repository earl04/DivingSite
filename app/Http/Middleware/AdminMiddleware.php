<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        // IF the user does not have admin role, redirect to login
        if(sizeof( Auth::user()->isAdmin() ) == 0 )
        {
            return redirect('login');
        }

        return $next($request);
    }
}

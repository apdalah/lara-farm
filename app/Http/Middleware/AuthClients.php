<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthClients
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
        if (false == Auth::guard('farmer')->check()) {
            return redirect()->route('login'); //redirect User to login page
        }
        return $next($request);
    }
}

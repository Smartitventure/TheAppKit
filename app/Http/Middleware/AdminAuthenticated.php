<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminAuthenticated
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

        if(Auth::User()->role->name == "custom"){
            return redirect('/aboutapp');
        }
        elseif(Auth::User()->role->name == "template"){
            return redirect('/dashboard');
        }
        else{
        return $next($request);
        }
    }
}

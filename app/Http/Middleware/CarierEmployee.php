<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CarierEmployee
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
        //check to see if the user is carier company or not to be able to access the carier Employee Part
        if(Auth::check() && (auth()->user()->type==1))
        {
            return $next($request);
        }
        return redirect()->to('/');
    }
}

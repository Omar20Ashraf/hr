<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class MediaCompany
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
        //check to see if the user is media employee or not to be able to access the media Company Part
        if(Auth::check() && (auth()->user()->type==4))
        {
            return $next($request);
        }
        return redirect()->to('/');
    }
}

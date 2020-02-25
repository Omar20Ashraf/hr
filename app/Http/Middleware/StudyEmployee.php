<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
class StudyEmployee
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
        //check to see if the user is study company or not to be able to access the study Employee Part
        if(Auth::check() && (auth()->user()->type==5))
        {
            return $next($request);
        }
        return redirect()->to('/');
    }
}

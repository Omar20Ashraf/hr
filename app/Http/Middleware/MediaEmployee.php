<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class MediaEmployee
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
       //check to see if the user is media company or not to be able to access the media Employee Part
       if(Auth::check())
       {
            if (auth()->user()->type==3) {
                # code...
               return $next($request);
            }else{
                return redirect()->route('mediaCompanyAuth');
            }

       }else{
            return redirect()->route('mediaCompanyAuth');
       }
       return redirect()->to('/');
    }
}

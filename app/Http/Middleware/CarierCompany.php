<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CarierCompany
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

        //check to see if the user is carier employee or not to be able to access the carier Company Part
        // dd('sdsad');
        if(Auth::check())
        {
            if(auth()->user()->type==2)
            {
                return $next($request);
            }else{
                return redirect()->route('carierEmployeeAuth');
            }
        }else{

            return redirect()->route('carierCompanyAuth');
        }
        return redirect()->to('/');
    }
}

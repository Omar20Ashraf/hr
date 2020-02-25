<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class StudyCompany
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
        //check to see if the user is study employee or not to be able to access the study Company Part
        if(Auth::check())
        {
            if(auth()->user()->type==6)
            {
                return $next($request);
            }else{

                return redirect()->route('studyEmployeeAuth');
            }
        }else{
            return redirect()->route('studyEmployeeAuth');
        }
        return redirect()->to('/');
    }
}

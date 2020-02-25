<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hesto\MultiAuth\Traits\LogsoutGuard;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        // check to see if user if authorize to access eny page that need auth,when user type the url direct
        $url = str_replace(url('/'), '', url()->previous());
        if(strpos($url, 'carier'))
        {
            if(strpos($url, 'Companies')){
                return redirect()->route('carierCompanyAuth');
            } elseif(strpos($url, 'Employee')){
                return redirect()->route('carierEmployeeAuth');
            }
        }elseif(strpos($url, 'media')){

            if(strpos($url, 'Companies')){
                return redirect()->route('mediaCompanyAuth');
            }elseif(strpos($url, 'Talente')){
                return redirect()->route('mediaEmployeeAuth');
            }
        }elseif(strpos($url, 'study')){

            if(strpos($url, 'Companies')){
                return redirect()->route('studyCompanyAuth');
            }elseif(strpos($url, 'Talente')){
                return redirect()->route('studyEmployeeAuth');
            }
        }
        return redirect()->to('/');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    use AuthenticatesUsers
        {
        logout as performLogout;
    }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */



    protected function authenticated()
    {
        if (Auth::check()) {
            $current_user = (Auth::user()->id);
            return redirect()->route('profile.show', $current_user);
        }
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('welcome');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

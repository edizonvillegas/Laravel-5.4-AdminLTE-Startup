<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    protected function authenticated()
    {
        if ( Auth::user()->position == 1 ) {// do your margic here
            return redirect()->route('home');
        } else {
            return redirect('/emp');
         }
    }

    // public function username() /* login using name or email */
    // {
    //    $login = request()->input('email');
    //    $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
    //    request()->merge([$field => $login]);
    //    return $field;
    // }

}

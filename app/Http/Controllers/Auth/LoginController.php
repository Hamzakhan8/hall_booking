<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
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

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials) && Auth::user()->role == 'admin')
        return redirect()->route('admin.dashboard');

        elseif(Auth::user()->role == 'hall')
        return redirect()->route('hall.dashboard');

        elseif(Auth::user()->role == 'couple')
        return redirect()->route('customer.dashboard');

        else
        return redirect()->route('front.home')
        ->with('login_error', 'Your login credentials dose not match!');

    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // public function authenticated()
    // {
    //         if (Auth::user()->role_as=='1')// 1 = 'admin'

    //         {
    //             return redirect('admin/dashboard')->with('status','welcome to admin dashboard');
    //         }



    //         else if(Auth::user()->role_as=='0'){

    //             return redirect('/home')->with('status','logged in successfull');

    //         }
    //         else{
    //             return redirect('/')->with('status','login first ');
    //         }

    //     }
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

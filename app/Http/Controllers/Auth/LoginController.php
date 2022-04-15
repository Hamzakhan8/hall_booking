<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Rules\PasswordCheck;
use App\Rules\UsernameCheck;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public const USERNAME = "username";

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

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('front_view.index');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required', new UsernameCheck()],
            'password' => ['required', new PasswordCheck()]
        ]);

        $column = filter_var($request['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if(Auth::attempt([$column => $request['username'], 'password' => $request['password']])
         && Auth::user()->role == 'admin')
        return redirect()->route('admin.dashboard');

        elseif(Auth::user()->role == 'hall')
        return redirect()->route('hall.dashboard');

        elseif(Auth::user()->role == 'couple')
        return redirect()->route('couple.dashboard');

        else
        return redirect()->route('front.home')
        ->with('login_error', 'Your login credentials dose not match our record!');

    }

    public function username()
    {
        return self::USERNAME;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->only(['login', 'showLoginForm']);
        $this->middleware('auth')->only('logout');
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        return redirect()->route('front.home');
    }
}

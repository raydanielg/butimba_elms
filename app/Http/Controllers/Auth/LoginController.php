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

    use AuthenticatesUsers;

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
        $this->middleware('auth')->only('logout');
    }

    public function ajaxLogin(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            return response()->json([
                'success' => false,
                'message' => 'Email au nenosiri si sahihi.',
            ], 422);
        }

        $request->session()->regenerate();
        $user = Auth::user();

        $redirect = match($user->role ?? 'user') {
            'super_admin'  => '/home',
            'business_admin' => '/home',
            'manager'      => '/home',
            'cashier'      => '/home',
            default        => '/home',
        };

        return response()->json([
            'success'  => true,
            'message'  => 'Karibu tena, ' . $user->name . '!',
            'redirect' => $redirect,
            'role'     => $user->role ?? 'user',
        ]);
    }
}

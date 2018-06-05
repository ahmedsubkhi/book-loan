<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\LoginProcess;
use Illuminate\Http\Request;

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
        /*

        // Masih belu clear
        $action = new LoginProcess();
        $username = $request->get('username');
        $password = $request->get('password');
        $data = $action->findingUser($username, $password);
        die($username);
        */
        $this->middleware('guest')->except('logout');
    }

		public function showLoginForm()
    {
        return view('login');
    }

		public function validateLogin(Request $request)
		{
			$this->validate($request, [
				 $this->username() => 'required|string',
				 'password' => 'required|string',
			]);
		}

		public function username()
		{
			 return 'email';
		}
}

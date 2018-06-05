<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class LoginController extends Controller
{
    public function index(){
			return view('login');
		}

    public function actlogin(Request $request){
			$username = $request->get('username');
			$password = $request->get('password');
			$selected_user = $this->findingUser($username, $password);

			if(!empty($selected_user)){
				session(['logindata' => $selected_user]);

				return redirect('/home');
			} else {
				return redirect('/login')->with('errors', 'Username atau password tidak dikenali !');
			}
		}

    private function findingUser($username, $password){
    	$salt = $this->theuserSalt($username);
    	$password_salt = md5($password . $salt);
    	$selected_user = User::select('id_user','username')
    					->where('username', $username)
    					->where('password', $password_salt)
    					->first();
			if(!empty($selected_user)){
				return $selected_user->username;
			} else {
				return NULL;
			}

    }

    private function theuserSalt($username)
    {
    	$salt = User::select('salt')->where('username', $username)->first();
			if(!empty($salt)){
				return $salt->salt;
			} else {
				return '';
			}
    }
}

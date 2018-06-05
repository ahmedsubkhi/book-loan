<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
  public function index(){
    return view('register');
  }


	public function actregister(Request $request){
		$username = $request->get('username');
		$selected_user = $this->isExists($username);

		if(!empty($selected_user)){
			return redirect('/register')->with('errors', 'Username sudah digunakan, gunakan yang lain !');

		} else {
			$user = new User();
			$salt = uniqid();
			$user->username = $username;
			$user->password = md5($request->get('password') . $salt);
			$user->salt = $salt;
			$user->is_active = 'Y';
			$user->save();

			return redirect('/login')->with('regsuccess', 'Silahkan login dengan data yang baru anda daftarkan !');
		}
	}

	private function isExists($username){
		$selected_user = User::select('id_user','username')
						->where('username', $username)
						->first();
		return $selected_user;
	}
}

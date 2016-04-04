<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request as Request;
use Hash;
use Auth;
use App\Models\SuperAdmin as SuperAdminModel;


class SuperAdminController extends BaseController {

    protected $table = 'superadmin';

	public function login() {

		return view('login');

	}

	public function postLogin(Request $request) {

		$error 	  = [];
		$username = $request->input('username');
		$password = Hash::all($request->input('password'));

		//$Model = new SuperAdminModel;
		//$data  = $Model->checkBoth($username,$password);
			
			if (Auth::guard('web')->attempt(['username' => $username , 'password' => $password])) {

					echo 'okokok';
				
				} else {

					echo 'problem';

					$error[] = 'Username or password is incorrect';
					
			}
			
	}



}

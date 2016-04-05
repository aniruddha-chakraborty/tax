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


class MinistryAdminController extends BaseController {

    protected $table 	  = 'ministryadmin';
    protected $redirectTo = '/ministry/dash';

	public function login() {

		return view('ministrylogin');

	}

	public function postLogin(Request $request) {

		$error 	  = [];
		$username = $request->input('username');
		$password = $request->input('password');
			
			if (Auth::guard('ministryAdmin')->attempt(['username' => $username , 'password' => $password])) {

					echo 'loged in ministry';

				} else {

					echo 'problem';
					$error[] = 'Username or password is incorrect';
			
				}

	}

	public function dash() {

		return view('ministryAdminDash');

	}


}

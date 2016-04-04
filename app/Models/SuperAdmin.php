<?php
namespace App\Models;

use App\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class SuperAdmin extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

	protected $table = 'superadmin';


	public function checkBoth($username,$password) {

		$query = DB::table('superadmin')->select('id')->where('username',$username)->where('password',$password)->first();

			if ($query) {

				return $query;
			
				} else {

				return false;
			}

	}

}

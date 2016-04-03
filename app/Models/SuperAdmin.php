<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use DB;


class SuperAdmin extends Model
{

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

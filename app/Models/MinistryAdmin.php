<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class MinistryAdmin extends Model implements AuthenticatableContract
{
	use Authenticatable;

	protected $table = 'ministryadmin';

}

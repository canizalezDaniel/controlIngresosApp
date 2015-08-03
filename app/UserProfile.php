<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {


		protected $table = 'user_profile';
	//
	public function getAgeAttribute()
	{


		return \Carbon\Carbon::parse($this->birthdate)->age;
	}

}

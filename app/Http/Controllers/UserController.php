<?php namespace App\Http\Controllers;

use App\User;


class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	public function getOrm()
	{
		$users=User::where('first_name','<>','Daniel')
		->with('profile')
		->orderBy('first_name','ASC')
		->get();
		dd($users->toArray());
	}

	public function getIndex()
	{
		
			$result = \DB::table('users')
				->select('users.id','first_name','last_name', 'user_profile.twitter','user_profile.website', 'user_profile.id as profile', 'user_profile.birthdate')
				//->where('first_name','<>','Daniel')
				//->orderBy('first_name','ASC')
				->leftJoin('user_profile','users.id','=','user_profile.user_id')
				->get();
			
				foreach ($result as $row) {
					
					$row->full_name=$row->first_name.' '. $row->last_name;
					$row->age=\Carbon\Carbon::parse($row->birthdate)->age;
				}

			//$result->full_name=$result->first_name.' '. $result->last_name;
			dd($result);

			return $result;

	}

}

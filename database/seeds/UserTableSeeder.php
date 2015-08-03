<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker=Faker::create();

		for ($i=0; $i < 30; $i++) 
		{ 
			# code...
		
	$id	= \DB::table('users')->insertGetId(array( 

			'first_name'=> $faker->userName,
			'last_name'=> $faker->lastName,
			'email'=> $faker->unique()->email,
			'password'=> \Hash::make('12345'),
			'type'=> 'user'


		));

	\DB::table('user_profile')->insert(array( 

			'user_id'=> $id,
			'bio'=> $faker->paragraph(rand(2,5)),
			'website'=> 'http://www.'.$faker->domainName,
			'twitter'=> 'https://twitter.com/'.$faker->userName,
			'birthdate'=>$faker->dateTimeBetween($startDate='-45 years', $endDate='-15 years')->format('Y-m-d')

			


		));



		}
	}

}

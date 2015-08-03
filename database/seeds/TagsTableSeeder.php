<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder {

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
	
	\DB::table('tags')->insert(array( 

			
			'name'=> $faker->sentence($nbWords = 4),
			'description'=> $faker->paragraph(rand(2,5))
		
			


		));



		}
	}

}

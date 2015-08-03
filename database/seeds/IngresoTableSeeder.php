<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class IngresoTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $faker=Faker::create();

        for ($i=0; $i < 8; $i++) {
            \DB::table('ingresos')->insert(array(

                'monto' => 5000,
                'fecha' => $faker->date('Y-m-d'),
                'concepto' => 'Pago Nomina'

            ));

        }
	}

}

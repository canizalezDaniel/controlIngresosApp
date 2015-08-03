<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class TransaccionesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $faker=Faker::create();

        for ($i=0; $i < 8; $i++) {
            \DB::table('transacciones')->insert(array(

                'monto' => $faker->randomFloat($nbMaxDecimals = 2),
                'fecha' => $faker->date('Y-m-d'),
                'tipoTarjeta' => 1,
                'tipoTransaccion' => 2,
                'concepto' => $faker->text($maxNbChars = 10)


            ));

        }
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transacciones', function(Blueprint $table)
		{
			$table->increments('id');
            $table->decimal('monto');
            $table->date('fecha');
            $table->integer('tipoTarjeta'); //1=TDD/2=TDC/3=TDA
            $table->integer('tipoTransaccion'); //1=Ingreso/2=Egreso
            $table->string('concepto');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transacciones');
	}

}

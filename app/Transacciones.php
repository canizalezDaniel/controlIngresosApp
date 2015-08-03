<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model {

	//
    protected $table='transacciones';

    protected $fillable = ['monto', 'fecha','tipoTarjeta', 'tipoTransaccion','concepto'];

    public function getMovimientosAttribute()
    {

        $cantidad = 0;
       $ingresos= $this->tipoTransaccion;

        //1=ingresos/2=egreso





    }

}

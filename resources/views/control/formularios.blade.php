


<div class="form-group">
    {!! Form::label('Monto', 'Monto');!!}
    <div class="form-group">
        <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
        <div class="input-group">
            <div class="input-group-addon">Bs.F</div>


            {!! Form::text('monto',null, ['class'=>'form-control', 'id'=>'exampleInputAmount', 'placeholder'=>'Ingrese el monto']); !!}

            <div class="input-group-addon">.00</div>
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('tipoTransaccion', 'Tipo de Transacción');!!}
    {!! Form::select('tipoTransaccion',array(''=>'Seleccionar tipo', '1'=>'Ingreso', '2'=>'Egreso', ''),null, ['class'=>'form-control', 'type'=>'email', 'placeholder'=>'DD-MM-YYYY']); !!}

</div>

<div class="form-group">
    {!! Form::label('Concepto', 'Concepto');!!}
    {!! Form::text('concepto',null, ['class'=>'form-control']); !!}

</div>

<div class="form-group">


<label class="radio-inline">

    {!! Form::radio('tipoTarjeta','1', 'false',null, ['id'=>'inlineRadio1']); !!}  TDD (Tarjeta Debito)

</label>
<label class="radio-inline">
    {!! Form::radio('tipoTarjeta','0', 'false',null, ['id'=>'inlineRadio1']); !!} TDC (Tarjeta Credito)
</label>
<label class="radio-inline">
    {!! Form::radio('tipoTarjeta','2', 'false',null, ['id'=>'inlineRadio1']); !!} TDA (Tarjeta Alimentacion)
</label>
</div>



<div class="form-group">
    {!! Form::label('Fecha', 'Fecha');!!}
    {!! Form::text('fecha',null, ['class'=>'form-control', 'id'=>'datepicker', 'placeholder'=>'DD-MM-YYYY']); !!}

</div>
<button type="submit" class="btn btn-default">Guardar</button>
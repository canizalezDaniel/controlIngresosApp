@extends('layouts.plantilla')

@section('content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard <small>Statistics Overview</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Movimientos de la cuenta
                </li>
            </ol>


            <p><a href="{{route('admin.control.create')}}"  class="btn btn-primary">Nuevo Movimiento</a></p>



            <table class="table table-condense table-hover table-striped">
                <thead>
                <tr class="success" >

                    <th>Fecha</th>
                    <th>Mes</th>
                    <th>Disponible</th>
                    <th>Accion</th>

                </tr>
                </thead>
                <tbody >

                <tr >

                    <td>  {{\Carbon\Carbon::today()->format('d-m-Y')}}</td>
                    <td><div class="col-xs-10">  {!! Form::select('fecha',array('01'=>'Enero', '02'=>'Febrero', '03'=>'Marzo'),null, ['class'=>'form-control', 'type'=>'email', 'placeholder'=>'DD-MM-YYYY']); !!}
                        </div></td>
                    <td>
                        <?php
                        $sum=0;
                        $suma=0;
                        foreach($tdd as $result)
                        {
                            if($result->tipoTransaccion == 1)
                                $sum = $sum+$result->monto;
                            else
                                 $sum = $sum-$result->monto;
                        }

                        echo number_format($sum,2)." Bs.f";
                        ?>

                    </td>
                    <td> <a href="#"  class="btn btn-success">Aceptar</a></td>

                </tr>


                </tbody>
            </table>

        </div>


    </div>


    <!-- /.row

    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
            </div>
        </div>
    </div>
    <!-- /.row

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">26</div>
                            <div>New Comments!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">12</div>
                            <div>New Tasks!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">124</div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Balance Grafica</h3>
                </div>
                <div class="panel-body">
                    <div id="morris-area-chart">
                        <div id="morris-area-chart">

                            <div id="chart" style="height: 250px;">

                                <script>
                                    new Morris.Area({
                                        element: 'chart',
                                        data: [

                                            @foreach($tdd as $mm)
                                            @if($mm->tipoTransaccion == 2)
                                            {y: '{{$mm->fecha}}', a:{{$mm->monto}}},
                                            @endif

                                    @endforeach


                                /*
                                             {y: 'Ene', a: 0, b: 0},
                                             {y: 'Feb', a: 0, b: 0},
                                             {y: 'Mar', a: 0, b: 0},
                                             {y: 'Abr', a: 0, b: 0},
                                             {y: 'Jun', a: 0, b: 0},
                                             {y: 'Jul', a: 2600, b: 3700},
                                             {y: 'Ago', a: 1200, b: 2900},
                                             {y: 'Sep', a: 0, b: 0},
                                             {y: 'Oct', a: 0, b: 0},
                                             {y: 'Nov', a: 0, b: 0},
                                             {y: 'Dic', a: 0, b: 0},*/
                                        ],
                                        xkey: 'y',
                                        parseTime: false,
                                        ykeys: ['a'],
                                        labels: ['TDD']
                                    });
                                </script>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row"> <!--
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Eventos Diarios</h3>
                </div>
                <div class="panel-body">
                    <!--<div id="morris-donut-chart"></div>
                    <div class="text-right">
                        <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr >
                            <th>Order #</th>
                            <th>Order Date</th>
                            <th>Order Time</th>
                            <th>Amount (USD)</th>
                        </tr>
                        </thead>
                        <tbody >
                        <tr >
                            <td>3326</td>
                            <td>10/21/2013</td>
                            <td>3:29 PM</td>
                            <td>$321.33</td>
                        </tr>
                        <tr>
                            <td>3325</td>
                            <td>10/21/2013</td>
                            <td>3:20 PM</td>
                            <td>$234.34</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Control de Ingresos</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">


                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr >
                                <th>ID</th>
                                <th>Fecha</th>
                                <th>Concepto</th>
                                <th>Monto Bs.f</th>
                                <th>Saldo Bs.f</th>

                            </tr>
                            </thead>
                            <tbody >

                            @foreach($tdd as $m)
                            <tr>
                                <td>{{$m->id}}</td>
                                <td>{{$m->fecha}}</td>
                                <td>{{$m->concepto}}</td>

                                    @if($m->tipoTransaccion == 2)
                                    <td>
                                        <label class="brand-danger">{{ number_format($m->monto,2)." -" }}</label>
                                        @else
                                            <td>
                                                {{number_format($m->monto,2)}}
                                                @endif
                                    </td>
                                <td><?php


                                    if($m->tipoTransaccion == 1){
                                       $suma = $suma+$m->monto;
                                        echo number_format($suma,2);}
                                    else{
                                        $suma = $suma-$m->monto;
                                        echo number_format($suma,2);
                                        }

                                    ?></td>



                            </tr>

                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="text-right">

                        <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>

                    </div>




                </div>

            </div>
        </div>
        <!--
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Control de Egresos</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr >
                                <th>Transaccion #</th>
                                <th>Fecha</th>
                                <th>Concepto</th>
                                <th>Monto</th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($tdd as $m)

                                @if($m->tipoTransaccion == 2)

                                            @if($m->monto > 2000)
                                    <tr class="danger">
                                            @else
                                        <tr>
                                            @endif
                                        <td>{{$m->id}}</td>
                                        <td>{{$m->fecha}}</td>
                                        <td>{{$m->concepto}}</td>
                                        <td>{{$m->monto}}</td>
                                    </tr>


                                @endif


                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="text-right">

                        <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection

@extends('layouts.plantilla')

@section('content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Panel Financiero <small>Statistics Overview</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-credit-card"></i> Saldos de las cuentas
                </li>
            </ol>





            <table class="table table-condensed table-hover table-striped">
                <thead>
                <tr class="success" >

                    <th>Cuenta</th>
                    <th>Tipo de Cuenta</th>
                    <th>Saldo Disponible</th>


                </tr>
                </thead>
                <tbody >

                <tr >

                    <td> <a href="{{route('admin.tdd.index')}}"> 000019987020</a></td>
                    <td> TDD (Tarjeta debito) </td>
                    <td>
                        <?php
                        $sumTDD=0;
                        $suma=0;
                        foreach($tdd as $result)
                        {
                            if($result->tipoTransaccion == 1)
                                $sumTDD = $sumTDD+$result->monto;
                            else
                                $sumTDD =$sumTDD-$result->monto;
                        }

                        echo number_format($sumTDD,2)." Bs.f";
                        ?>

                    </td>


                </tr>
                <tr >

                    <td> <a href="{{route('admin.tda.index')}}"> UNITICKET 2008</a></td>
                    <td> TDA (Tarjeta Alimentacion) </td>
                    <td>
                        <?php
                        $sumTDA=0;
                        $suma=0;
                        foreach($tda as $result)
                        {
                            if($result->tipoTransaccion == 1)
                                $sumTDA = $sumTDA+$result->monto;
                            else
                                $sumTDA = $sumTDA-$result->monto;
                        }

                        echo number_format($sumTDA,2)." Bs.f";
                        ?>

                    </td>


                </tr>


                </tbody>
            </table>

        </div>


    </div>


    <!-- /.ro-

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
                            <i class="fa fa-credit-card fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <div>Tarjeta Debito TDD</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Detalles</span>
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
                            <i class="fa fa-credit-card fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <div>Tarjeta Alimentacion TDA</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Detalles</span>
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
                            <i class="fa fa-credit-card fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <div>Tarjeta de Credito TDC</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Detalles</span>
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
                            <i class="fa fa-database fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            <div>Administracion</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Configurar</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
   <!-- row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Balance Grafico</h3>
                </div>
                <div class="panel-body">
                    <div id="morris-area-chart">

                        <div id="chart" style="height: 350px;">

                        <script>
                            Morris.Donut({
                                element: 'chart',
                                data: [
                                    {label: "Tarjeta Debito", value: <?php echo $sumTDD?>},
                                    {label: "Tarjeta Alimentaciond", value: <?php echo $sumTDA?>},

                                ]
                            });

                        </script>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row

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
        </div>
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

                           </td>



                            </tr>


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

                                    <tr class="danger">

                                        <tr>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>





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

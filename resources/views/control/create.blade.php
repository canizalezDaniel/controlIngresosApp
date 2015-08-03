@extends('layouts.plantilla')

@section('content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Panel Financiero <small>Statistics Overview</small>
            </h1>
            <p><a href="{{route('admin.control.index')}}"  class="btn btn-danger"> Volver </a></p>
        </div>









        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Ingresar nuevo movimiento</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">


                        {!! Form::open(['route'=>'admin.control.store', 'method'=>'POST'])!!}
                            @include('control.formularios')
                        {!! Form::close()!!}



                    </div>





                </div>

            </div>
        </div>


@endsection

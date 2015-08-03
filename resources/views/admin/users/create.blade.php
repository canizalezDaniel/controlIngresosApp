@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>

				<div class="panel-body">
					
					{!! Form::open(['route'=>'admin.users.store', 'method'=>'POST'])!!}
						
						  <div class="form-group">
						    {!! Form::label('email', 'E-Mail');!!}
						 	{!! Form::text('email',null, ['class'=>'form-control', 'type'=>'email', 'placeholder'=>'Ingresar su e-mail']); !!}
						 	
						 </div>
						  <div class="form-group">
						    {!! Form::label('password', 'Password');!!}
						 	{!! Form::password('password', ['class'=>'form-control']); !!}
						 	
						  </div>

						  <div class="form-group">
						    {!! Form::label('first_name', 'First Name');!!}
						 	{!! Form::text('first_name',null, ['class'=>'form-control', 'type'=>'text']); !!}
						 	
						  </div>

						  <div class="form-group">
						    {!! Form::label('last_name', 'Last Name');!!}
						 	{!! Form::text('last_name',null, ['class'=>'form-control', 'type'=>'text']); !!}
						 	
						  </div>
						  <div class="form-group">
						    {!! Form::label('type', 'Type');!!}
						 	{!! Form::select('type',[''=>'Seleccione una opcion','user'=>'Usuario','admin'=>'Administrador'],null,['class'=>'form-control']) !!}
						 	
						  </div>
						  
						  <button type="submit" class="btn btn-default">Crear Usuario</button>

				{!! Form::close() !!}
			
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

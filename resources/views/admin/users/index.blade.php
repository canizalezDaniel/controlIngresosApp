@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>

				<div class="panel-body">
					
					<p><a href="{{route('admin.users.create')}}"  class="btn btn-info">Nuevo Usuario</a></p>

					
					<p>{{$users->count()}} Usuarios de {{$users->total()}} en total</p>
					<table class="table table-hover">
						<tr>
							
							<th>#</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Fecha Nacimiento</th>
							<th>Tipo</th>
							<th>Acciones</th>
						</tr>
						@foreach ($users as $user)
							<tr>
								
								<td>{{$user->id}}</td>
								<td>{{$user->full_name}}</td>
								<td>{{$user->email}}</td>
								<td>{{ \Carbon\Carbon::parse($user->profile->birthdate)->format('d/m/Y')}}</td>
								<td>{{$user->type}}</td>
								<td>
									<a href="#">Editar</a>
									<a href="#">Eliminar</a>
								</td>
							</tr>
							
						@endforeach
					</table>
					 {!! $users->setPath('')->render()!!}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

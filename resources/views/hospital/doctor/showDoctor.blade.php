@extends('layouts.app')

@section('content')

<h3 align="center">Médico:</h3>
<h1 align="center">{{ $doctor->name }}</h1>
<hr>

<div class="container">
	<div class="row">

		<div class="col">
			<div class="card">
				<div class="card-body">
					
					<h5 class="card-title">Datos</h5>
					<table class="table-responsive">
						<tbody>
							<tr><th>ID:</th> <td>{{ $doctor->id }}</td></tr>
							<tr><th>Fecha de nacimiento:</th> <td> {{ $doctor->birthdate }}</td></tr>
							<tr><th>Teléfono:</th> <td> {{ $doctor->telephoneNumber }}</td></tr>
							<tr><th>Turno:</th> <td> {{ $doctor->turno }}</td></tr>
							<tr><th>Sexo:</th> <td> {{ $doctor->sexo }}</td></tr>
							<tr><th>Cédula:</th> <td> {{ $doctor->cedula }}</td></tr>
							<tr><th>Especialidad:</th> <td> {{ $doctor->especialidad }}</td></tr>
						</tbody>
					</table>

					<div class="container">
						<div class="row">

							<div class="col">
								<a role="button" class="btn btn-info" href="/doctor/{{$doctor->id}}/edit">Editar</a><br>
							</div>
							<div class="col">
								{!! Form::open(['action' => ['DoctorController@destroy', $doctor->id], 'method' => 'POST']) !!}
								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
								{!! Form::close() !!}
							</div>
						</div>
					</div>

				</div> <!--Card body-->
			</div> <!--Card-->
		</div> <!--Col-->

		<div class="col">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Pacientes</h5>
					<table class="table table-striped table-responsive">
						<thead>
							<tr>
								<th>DNI</th>
								<th>Nombre</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($patients as $p)
							<th scope="row"> <a href="/patient/{{$p->dni}}"> {{ $p->dni }} </a> </th>
							<td> {{ $p->name }} </td>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div> <!--Col-->

	</div> <!--Row-->
</div>

@endsection
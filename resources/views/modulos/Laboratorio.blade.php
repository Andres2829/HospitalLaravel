@extends('plantilla')

@section('content')

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Laboratorio Medico</h1> 

	</section>	

	<section class="content">
		
		<div class="box">
			
		

			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped">
					
					<thead>
						<tr>
							
							<th>ID</th>
							<th>Nombre y Apellido</th>
							<th>Documento</th>
							<th>Email</th>
							<th>Telefono</th>
							<th>Resestar/Certificar</th>

						</tr>
					</thead>

					<tbody>

						@foreach($pacientes as $paciente)

							<tr>
								
								<td>{{ $paciente->id }}</td>
								<td>{{ $paciente->name }}</td>
								<td>{{ $paciente->documento }}</td>
								<td>{{ $paciente->email }}</td>

								@if($paciente->telefono != "")

									<td>{{ $paciente->telefono }}</td>

								@else

									<td>No Disponible</td>

								@endif
								

								<td>
									
									<a href="Laboratorio_Receta/{{ $paciente->id}}">
										
										<button class="btn btn-success"><i class="fa fa-book"></i></button>

									</a>
									<a>_-</a>
									<a>-_</a>

									<a href="Certificados/{{ $paciente->id }}">
										
										<button class="btn btn-info"><i class="fa fa-list"></i></button>

									</a>
									

									

								</td>

							</tr>

						@endforeach
						
						

					</tbody>

				</table>

			</div>
			
		</div>

	</section>

</div>

@endsection
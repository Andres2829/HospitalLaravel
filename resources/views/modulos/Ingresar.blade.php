@extends('plantilla')

@section('contenido')

<div class="login-box">
	
	<div class="login-logo">
		<b>Clínica Médica</b>
	</div>

	<div class="login-box-body">
		
		<p class="login-box-msg">Ingresar al Sistema</p>

		<form method="post" action="{{ route('login') }}">

			@csrf
			
			<div class="form-group has-feedback">
				
				<input type="email" id="email" name="email"  required="" value="{{ old('email') }}">

				

				<span class="glyphicon glyphicon-user form-control-feedback"></span>

				@error('email')
					<br>
					<div class="alert alert-danger">Error con el Email o la Contraseña</div>

				@enderror

			</div>

			<div class="form-group has-feedback">
				
				<input type="password" id="password" name="password" class="form-control" required="" value="">

				<span class="glyphicon glyphicon-lock form-control-feedback"></span>

			</div>

			<div class="row">
				
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
				</div>

			</div>

		</form>

	</div>

</div>

@endsection
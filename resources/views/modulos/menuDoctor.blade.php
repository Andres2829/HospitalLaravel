<aside class="main-sidebar">
	
	<section class="sidebar">
		
		<ul class="sidebar-menu">
			
			<li>
				<a href="{{ url('Inicio') }}">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>

			<li>
				<a href="{{ url('Citas/'.auth()->user()->id) }}">
					<i class="fa fa-calendar-check-o"></i>
					<span>Citas</span>
				</a>
			</li>

			<li>
				<a href="{{ url('Pacientes') }}">
					<i class="fa fa-users"></i>
					<span>Pacientes</span>
				</a>
			</li>


<!--  Consultorio obtetra-->

		@if(auth()->user()->rol == "Doctor" && auth()->user()->id_consultorio == "3"  )
			<li>
				<a href="{{ url('ObtetraIndex') }}"><!--  llamadas de las blade -->
					<i class="fa fa-stethoscope	"></i>
					<span>Consultio Obstetra</span>
				</a>
			</li>
			
		@endif

		
		@if(auth()->user()->rol == "Doctor" && auth()->user()->id_consultorio == "3"  )
			<li>
				<a href="{{ url('Laboratorio') }}"><!--  llamadas de las blade -->
					<i class="fa fa-hospital-o"></i>
					<span>Laboratorio Clinico</span>
				</a>
			</li>
			
		@endif


		

		<!--  llamadas de las signos vitales -->
		@if(auth()->user()->rol == "Doctor" && auth()->user()->id_consultorio == "2"  )
			<li>
				<a href="{{ url('PacientesSig') }}"><!--  llamadas de las blade -->
					<i class="fa fa-heartbeat"></i>
					<span>Signos Vitales</span>
				</a>
			</li>
			
		@endif

<!--  Consultorio General-->

		


		
		@if(auth()->user()->rol == "Doctor" && auth()->user()->id_consultorio == "4"  )
			<li>
				<a href="{{ url('Laboratorio') }}"><!--  llamadas de las blade -->
					<i class="fa fa-hospital-o"></i>
					<span>Laboratorio Clinico</span>
				</a>
			</li>
			
		@endif

		
		@if(auth()->user()->rol == "Doctor" && auth()->user()->id_consultorio == "4"  )
			<li>
				<a href="{{ url('PacientesGen') }}"><!--  llamadas de las blade -->
					<i class="fa fa-user-plus"></i>
					<span>Consultorio de Medicina</span>
				</a>
			</li>
			
		@endif


	
		<!--  Fin  General-->

		
			@if(auth()->user()->rol == "Doctor" && auth()->user()->id_consultorio == "1"  )

					<li>
						<a href="http://localhost:82/Clinica_l8/appointmentListDen.php">
							<i class="fa fa-heartbeat"></i>
							<span>ODONTOLOGIA</span>
						</a>
					</li>

			@endif



		<!--  Consultorio obtetriz-->

		</ul>

	</section>

</aside> 
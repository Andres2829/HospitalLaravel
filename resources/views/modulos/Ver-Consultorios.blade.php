@extends('plantilla')

@section('content')

<link rel="stylesheet" href="http://localhost:82/Clinica-L8/public/css/cars.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<div class="content-wrapper">
	
	<section class="content-header">
    <div class="letras">
		
		<h1>Elija un Consultorio:</h1>
</div>

	</section>	
<section >
 <div class="imagen">
 <img src="img/consultorios.svg" alt="">
   </div>
</section>


<div class="newspaper">
@foreach($consultorios as $consultorio)
  <div class="container">

    <div class="main-card">
    
      <div class="cards">
    
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="img/logopatronato.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">{{ $consultorio->consultorio }}</div>
             <div  >
             <a href="Ver-Doctores/{{ $consultorio->id }}" id="btn">Ingresar</a>
		        </div>
           </div>
           
         </div>
        </div>
        
      </div>
    </div>
    
  </div>
  @endforeach
  </div>



@endsection


</div>



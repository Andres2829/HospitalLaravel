@extends('plantilla')

@section('content')

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="http://localhost:82/Clinica-L8/public/css/certificado.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <div class="container">
  <div class="title2" > Paciente: {{ $paciente->name }}</div>
  <div class="title2" >Historial Medico: {{ $paciente->id }}  </div>
  
    <div class="title">Certificado Medico</div>
    <div class="content">
    <form method="post" action="{{ url('actualizar-PacientesGen/'.$paciente->id) }}">
        <div class="user-details">

        
          @csrf
         @method('put')


         <div class="input-box">
              <span class="details">Fecha</span>
                <input type="hidden" name="paciente_ids"  value="{{ $paciente->id }}"> 
                <input type="date" name="fecha" placeholder="" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Certifico haber atendido al paciente</span>
                <input type="text" name="paciente" placeholder="Paciente" value="{{ $paciente->name }}"> 
          </div>

          <div class="input-box">
              <span class="details">Con Cedula de identidad</span>
                <input type="text" name="cedula" placeholder="Cedula" value="{{ $paciente->documento }}"> 
          </div>


          
          <div class="textarea-box2">
          <span class="details">Diagnostico</span>
          <textarea  type="text" name="diagnostico"  rows="9" cols="132">
            
            </textarea>
            </div>

         



          

          <div class="input-box">
              <span class="details"></span>
                <input type="hidden" name="" placeholder="Tratamientos" value=""> 
          </div>    
          

          <div class="input-box">
              <span class="details"></span>
                <input type="hidden" name="" placeholder="Tratamientos" value=""> 
          </div>    
          
          <div class="title"> Debiendo guardar reposo de las fechas </div>


          <div class="input-box">
              <span class="details"></span>
                <input type="hidden" name="" placeholder="Tratamientos" value=""> 
          </div> 
          
          <br><br>

          <div class="input-box">
              <span class="details">Desde el: </span>
                <input type="date" name="reposo_I" placeholder="Desde el:" value=""> 
          </div>

          
          <div class="input-box">
              <span class="details">Hasta el: </span>
                <input type="date" name="reposo_F" placeholder="Hasta el:" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Certificado para ser presentado en </span>
                <input type="text" name="presentar" placeholder="Presentar en" value=""> 
          </div> 



    
      
        </div>
        


        <div class="button">
          <input type="submit"   value="Certificar">
        </div>
      </form>
    </div>
  </div>

</body>

@endsection
</html>

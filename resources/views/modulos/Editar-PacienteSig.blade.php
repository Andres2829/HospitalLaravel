@extends('plantilla')

@section('content')

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="http://localhost:82/Clinica-L8/public/css/signos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <div class="container">
  <div class="title2" > Paciente: {{ $paciente->name }}</div>
  <div class="title2" >Historial Medico: {{ $paciente->id }}  </div>
  
    <div class="title">Recordatorio</div>
    <div class="content">
    <form method="post" action="{{ url('actualizar-pacienteSig/'.$paciente->id) }}">
        <div class="user-details">

        
          @csrf
         @method('put')


         <div class="input-box">
              <span class="details">Fecha</span>
                <input type="hidden" name="paciente_id" placeholder="Ingrese su nombre y apellido" value="{{ $paciente->id }}"> 


                <input type="date"  id="fechaNacimiento" name="fecha" placeholder="" value=""> 
               
          </div>

          <div class="input-box">
              <span class="details">Motivo de consulta</span>
                <input type="text" name="mot_consulta" placeholder="Motivo de Consulta" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Antecedentes Patologicos Personales</span>
                <input type="text" name="ant_pato_personales" placeholder="Antecedentes" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Antecedentes Ginecologos Obstetricos</span>
                <input type="text" name="ant_gine_obstetrico" placeholder="Antecedentes" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Examenes Fisicos</span>
                <input type="text" name="exa_fisicos" placeholder="Examenes" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Diagnostico</span>
                <input type="text" name="diagnostico" placeholder="Diagnosticos" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Tratamientos</span>
                <input type="text" name="tratamiento" placeholder="Tratamientos" value=""> 
          </div>    
          

          <div class="input-box">
              <span class="details"></span>
                <input type="hidden" name="" placeholder="Tratamientos" value=""> 
          </div>    
          

          <div class="input-box">
              <span class="details"></span>
                <input type="hidden" name="" placeholder="Tratamientos" value=""> 
          </div>    
          
          <div class="title">   Notas de Evolucion y Tratamientos a seguir de Pacientes</div>

          
          <br><br>

          <div class="input-box">
              <span class="details">Fecha </span>
                <input type="date" name="fecha_signos" placeholder="Fecha Tratamiento" value=""> 
          </div>

          
          <div class="input-box">
              <span class="details">Edad </span>
                <input type="text" name="edad" placeholder="Edad del Paciente" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Temperatura </span>
                <input type="text" name="temperatura" placeholder="Temperatura del Paciente" value=""> 
          </div>


          <div class="input-box">
              <span class="details">Pulso </span>
                <input type="text" name="pulso" placeholder="Pulso del Paciente" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Presion </span>
                <input type="text" name="presion" placeholder="Presion del Paciente" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Peso </span>
                <input type="text" name="peso" placeholder="Peso del Paciente" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Talla </span>
                <input type="text" name="talla" placeholder="Talla del Paciente" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Saturacion de Oxigeno </span>
                <input type="text" name="saturacion_oxigeno" placeholder="Saturacion" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Evolucion del Paciente </span>
                <input type="text" name="evolucion" placeholder="Evolucion" value=""> 
          </div>


          <div class="title"> Examen Covid </div>
      
          <div class="input-box">
              <span class="details">Fecha de Examen COVID </span>
                <input type="date" name="fechacov"  value=""> 
          </div>
         
          <div class="input-box">
            <span class="details">RESULTADOS COVID</span>
            <div class="gender-details">
                        <input type="hidden" name="covidsi" value="nulo"> 
                        <input type="checkbox" name="covidsi" id="dot-1" value="SI">
                        <div class="category">
                        <label for="dot-1">
                        <span class="dot uno"></span>
                        <span class="gender">SI</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                        <input type="hidden" name="covidno"  value="nulo"> 
                        <input type="checkbox" name="covidno" id="dot-2" value="NO">
                        <div class="category">
                        <label for="dot-2">
                        <span class="dot dos"></span>
                        <span class="gender">NO</span>
                      
                        </label>
                    </div>
                    </div>
          </div>
    

        </div>
        
        <div class="button">
          <input type="submit"   value="Registrar">
        </div>
      </form>
    </div>
  </div>


     <script src="http://localhost:82/Clinica-L8/public/js/scrips.js"></script>
</body>

@endsection
</html>



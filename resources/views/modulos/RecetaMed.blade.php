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
  
    <div class="title">Receta Medica</div>
    <div class="content">
    <form method="post" action="{{ url('actualizar-RecetaMed/'.$paciente->id) }}">
        <div class="user-details">

        
          @csrf
         @method('put')


         <div class="input-box">
              <span class="details">Fecha</span>
                <input type="hidden" name="paciente_idR"  value="{{ $paciente->id }}"> 
                <input type="date" name="fecha" placeholder="" value=""> 
          </div>

          <div class="input-box">
             
                <input type="hidden" name="" placeholder="" value=""> 
          </div>

          <div class="input-box">
             
                <input type="hidden" name="" placeholder="" value=""> 
          </div>


          
          <div class="textarea-box2">
                <span class="details">Receta</span>
                        <textarea  type="text" name="receta"  rows="9" cols="132">
                        
                        </textarea>
            </div>




            <div class="textarea-box2">
                <span class="details">Indicaciones</span>
                        <textarea  type="text" name="indicaciones"  rows="9" cols="132">
                        
                        </textarea>
            </div>



          
          
          
          
        </div>

    
      
        <div class="button">
          <input type="submit"   value="Recetar-Paciente">
          </div>

        </div>
        


     
        
      </form>

    </div>
  </div>

</body>

@endsection
</html>

@extends('plantilla')

@section('content')

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="http://localhost:82/Clinica-L8/public/css/registros.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registro de Paciente</div>
    <div class="content">
    <form method="post" >
        <div class="user-details">

         
           @csrf
					 
           <div class="input-box">

             <span class="details">Nombre y Apellido</span>
               <input type="text" name="name" placeholder="Ingrese su nombre y apellido" > 
             </div>

             <div class="input-box">
               <span class="details">Cedula </span>
               <input type="text" placeholder="Ingrese su Cedula" name="documento" >
             </div>

             <div class="input-box">
               <span class="details">Telefono </span>
               <input type="text" placeholder="Ingrese su Telefono" name="telefono" >
             </div>

             <div class="input-box">
               <span class="details">Sexo </span>
               <input type="text" placeholder="Ingrese su Genero" name="sexo" >
              </div>



             <div class="input-box">
               <span class="details">Email </span>
               <input type="text" placeholder="Ingrese su Email" name="email" >
             </div>
          
             <div class="input-box">
               <span class="details">Contraseña </span>
               
               <input type="text"  name="password" >
             </div>

             <div class="input-box">
               <span class="details">Direccion </span>
               <input type="text" placeholder="Dirección" name="direccion" >
             </div>

             <div class="input-box">
               <span class="details">Fecha Nacimiento </span>
               <input type="date"  name="fecha_nacimiento" >
             </div>

             <div class="input-box">
               <span class="details">Fecha Inscripción </span>
               <input type="date"  name="fecha_inscripcion" >
             </div>

             <div class="input-box">
               <span class="details">Ocupación </span>
               <input type="text" placeholder="Ingrese su Ocupacion" name="ocupacion" >
             </div>

             <div class="input-box">
               <span class="details">Estado Civil </span>
               <input type="text" placeholder="Ingrese su Estado" name="estadoc" >
             </div>
          
             <div class="input-box">
               <span class="details">Provincia </span>
               <input type="text" placeholder="Provincia" name="provincia" >
             </div>

             <div class="input-box">
               <span class="details">Canton </span>
               <input type="text" placeholder="Canton" name="canton" >
             </div>

             <div class="input-box">
               <span class="details">Parroquia </span>
               <input type="text" placeholder="Ingrese su Parroquia" name="parroquia" >
             </div>

             <div class="input-box">
               <span class="details">Domicilio </span>
               <input type="text" placeholder="Ingrese su Domicilio" name="domicilio" >
             </div>
        </div>


        
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>

@endsection
</html>

  @extends('plantilla')

  @section('content')

  <!DOCTYPE html>

  <html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      
      <link rel="stylesheet" href="http://localhost:82/Clinica-L8/public/css/registros.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
  <body>
    <div class="container">
    <div class="title2" > Paciente: {{ $paciente->name }}</div>
      <div class="title">Registro del Paciente</div>
      <div class="content">
      <form method="post" action="{{ url('actualizar-paciente/'.$paciente->id) }}">
          <div class="user-details">

          
            @csrf
      @method('put')
            <div class="input-box">

              <span class="details">Nombre y Apellido</span>
                <input type="text" name="name" placeholder="Ingrese su nombre y apellido" value="{{ $paciente->name }}"> 
          
              </div>

              <div class="input-box">
                <span class="details">Cedula </span>
                <input type="text" placeholder="Ingrese su Cedula" name="documento" value="{{ $paciente->documento }}">
              </div>

              <div class="input-box">
                <span class="details">Telefono </span>
                <input type="text" placeholder="Ingrese su Telefono" name="telefono" value="{{ $paciente->telefono }}">
              </div>
              @enderror
              <div class="input-box">
                <span class="details">Sexo </span>
                <input type="text" placeholder="Ingrese su Genero" name="sexo" value="{{ $paciente->sexo }}">
                @enderror
                </div>



              <div class="input-box">
                <span class="details">Email </span>
                <input type="text" placeholder="Ingrese su Email" name="email" value="{{ $paciente->email }}">
          @error('email')

            <div class="alert alert-danger">El Email ya Existe.</div>

            @enderror
              </div>
            
              <div class="input-box">
                <span class="details">Nueva Contraseña </span>
                <input type="text" placeholder="Opcional" name="passwordN">
                <input type="hidden" class="form-control input-lg" name="password" value="{{ $paciente->password }}">
              </div>

              <div class="input-box">
                <span class="details">Direccion </span>
                <input type="text" placeholder="Dirección" name="direccion" value="{{ $paciente->direccion }}">
              </div>

              <div class="input-box">
                <span class="details">Fecha Nacimiento </span>
                <input type="date"  name="fecha_nacimiento" value="{{ $paciente->fecha_nacimiento }}">
              </div>

              <div class="input-box">
                <span class="details">Fecha Inscripción </span>
                <input type="date"  name="fecha_inscripcion" value="{{ $paciente->fecha_inscripcion }}">
              </div>

              <div class="input-box">
                <span class="details">Ocupación </span>
                <input type="text" placeholder="Ingrese su Ocupacion" name="ocupacion" value="{{ $paciente->ocupacion }}">
              </div>

              <div class="input-box">
                <span class="details">Estado Civil </span>
                <input type="text" placeholder="Ingrese su Estado" name="estadoc" value="{{ $paciente->estadoc }}">
              </div>
            
              <div class="input-box">
                <span class="details">Provincia </span>
                <input type="text" placeholder="Provincia" name="provincia" value="{{ $paciente->provincia }}">
              </div>

              <div class="input-box">
                <span class="details">Canton </span>
                <input type="text" placeholder="Canton" name="canton" value="{{ $paciente->canton }}">
              </div>

              <div class="input-box">
                <span class="details">Parroquia </span>
                <input type="text" placeholder="Ingrese su Parroquia" name="parroquia" value="{{ $paciente->parroquia }}">
              </div>

              <div class="input-box">
                <span class="details">Domicilio </span>
                <input type="text" placeholder="Ingrese su Domicilio" name="domicilio" value="{{ $paciente->domicilio }}">
              </div>
          </div>


          
          <div class="button">
            <input type="submit" value="Actualizar Paciente">
          </div>
        </form>
      </div>
    </div>

  </body>

  @endsection
  </html>

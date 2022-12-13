<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="http://localhost:82/Clinica-L8/public/css/login.css" />

    <link rel="stylesheet" href="http://localhost:82/Clinica-L8/public/css/normalize.css" />
    <title>Login</title>
  </head>
  <body>
    <main class="login-design">
      <div class="waves">
        <img src="http://localhost:82/Clinica-L8/public/img/loginPerson.png" alt="" />
      </div>
      <div class="login">
        <div class="login-data">
          <img src="http://localhost:82/Clinica-L8/public/img/collab.png" alt="" />

          <h1>Inicio de Sesión</h1>
          
            <form method="post" action="{{ route('login') }}">
              @csrf

            <div class="input-group">
              <label class="input-fill">

                <input type="email" id="email" name="email"  required="" value="{{ old('email') }}">
               
                <span class="input-label">Correo Electrónico</span>
                <i class="fas fa-envelope"></i>
                
             
      


              </label>
            </div>
            <div class="input-group">
              <label class="input-fill">

                <input type="password" id="password" name="password" class="form-control" required="" value="">

                <span class="input-label">Contraseña</span>
                
                <i class="fas fa-lock"></i>
              </label>
            </div>
            <a href="#">¿Necesitas una Cuenta?</a>
            <input type="submit" value="Iniciar Sesión" class="btn-login" />
          </form>
        </div>
      </div>
    </main>
  </body>
</html>

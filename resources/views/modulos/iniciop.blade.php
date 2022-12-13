<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruba Index</title>

    <!-- ESTILOS -->
   
    <link rel="stylesheet" href="http://localhost:82/Clinica-L8/public/css/app.css">

    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body>

    <header id="header">
    
        <img class="logo" alt="logo" src="http://localhost:82/Clinica-L8/public/img/logo.png">
        <div class="menu"></div>
        <nav>
            <ul class="menulist">
                <li><a href="{{ url('contacto') }}" >INICIO</a></li>
                <li><a href="http://localhost:82/OdontogramaClinica/appointmentListDen.php">TRABAJOS</a></li>
                <li><a href="#">PROYECTOS</a></li>
                <li><a href="#">CONTÁCTAME</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <img src="http://localhost:82/Clinica-L8/public/img/fondo.png" alt="fondo" id="fondo">
        <h2 id="slogan">¡Cuidamos tu Salud!</h2>

     
        <a href="{{ url('Ingresarnew') }}" id="btn">Ingresar</a>
      
        <img src="http://localhost:82/Clinica-L8/public/img/viento.png" alt="viento" id="viento">
        <img src="http://localhost:82/Clinica-L8/public/img/persona.png" alt="persona" id="persona">
    </section>


    <h2 class="titulo">QUIENES SOMOS</h2>

  <div class="sec1">
   
  
    <div class="cajon">

  
        <div class="servicio-cont">
            <div class="servicio-ind">
           
            <h2  >Mision</h2>
            <p  class="formato-text" >“Ejercer la rectoría, regulación, planificación, coordinación, control y gestión de la Salud Pública ecuatoriana a través de la gobernanza y vigilancia y control sanitario y garantizar el derecho a la Salud”</p>
            </div>

            <div class="servicio-ind">
           
           <h2 >Patronato</h2>
           <p  class="formato-text" >  Somos una entidad de derecho Publico adscrita al gobierno autonomo descentralizado Municipal de Tulcan, con la determinacion de ayudar a toda la ciudadania que necesite atencion medica
            </p>
           </div>

                <div class="servicio-ind">
                  
                    <h2  >Vision</h2>
                    <p  class="formato-text" >El Ministerio de Salud Pública, ejercerá plenamente la gobernanza del Sistema Nacional de Salud, con un modelo referencial en Latinoamérica que priorice la promoción de la salud y la prevención de enfermedades, con altos niveles de atención de calidad, con calidez</p>
                    </div>
        </div>
  
        </div>
    

    </div>
 </section>
 <h2 class="titulo">CONTAMOS CON</h2>
<section>

<div class="card">
        <div class="head">
            <div class="circle"></div>
            <div class="img">
                <img src="img/2.svg" alt="">
            </div>
        </div>

        <div class="description">
            <h3>Garcia Joselyn</h3>
            <h4>Odontologia</h4>
            <p>Limpieza de Niños                </p>
                        <p>Limpieza de Adultos               </p>
                        <p>Fluor                             </p>
                        <p>Curaciones</p>
                        <p>Calza Pequeña</p>
                        <p>Calza Mediana</p>
                        <p>Calza Grande</p>
                        <p>Recostruccion de Dientes</p>
                      
                    
                    
        </div>
        <div class="contact">
            <a href="{{ url('Ingresarnew') }}">Agenda tu Cita </a>
        </div>
        
    </div>

    <div class="card">
        <div class="head">
            <div class="circle"></div>
            <div class="img">
                <img src="img/4.svg" alt="">
            </div>
        </div>

        <div class="description">
            <h3>Chuga Ximena</h3>
            <h4>Centro Medico</h4>
             
            <p>Consultas y Certificados Medicos       </p>
                <p>Suturas y Retiros de Puntos       </p>
                <p>Control de presion arterial,g lucosa, talla, peso       </p>
                <p>Tratamiento de Hipertencion y Diabetes       </p>
                <p>Enfermedades Autoinmunes     </p>
        </div>

        <div class="contact">
            <a href="{{ url('Ingresarnew') }}">Agenda tu Cita</a>
        </div>
    </div>

    <div class="card">
        <div class="head">
            <div class="circle"></div>
            <div class="img">
                <img src="img/3.svg" alt="">
            </div>
        </div>

        <div class="description">
            <h3>Tatamuez Lady</h3>
            <h4>Obtetriz</h4>
            <p>Educacion Sexual </p>
                        <p>Seguimiento de Embarazos </p>
                        <p>Papa Nicolao</p>
                        <p>Cuidado Médico Rutinario</p>
                       <p> Planificación familiar y cuidado de maternidad</p>
                       <p> Tratamiento para condiciones ginecológicas</p>
        </div>

        <div class="contact">
            <a href="{{ url('Ingresarnew') }}">Agenda tu Cita</a>
        </div>
    </div>
    <div class="card">
        <div class="head">
            <div class="circle"></div>
            <div class="img">
                <img src="img/6.svg" alt="">
            </div>
        </div>

        <div class="description">
            <h3>Ana Escobar</h3>
            <h4>Enfermeria</h4>
            <p>Control de Presion Arterial,Glucosa,Talla,Peso       </p>
        </div>

        <div class="contact">
            <a href="{{ url('Ingresarnew') }}">Agenda tu Cita</a>
        </div>
    </div>
    <div class="card">
        <div class="head">
            <div class="circle"></div>
            <div class="img">
                <img src="img/7.jpg" alt="">
            </div>
        </div>

        <div class="description">
            <h3>Jhesmy Vaca</h3>
            <h4>Servicios Profecionales</h4>
            <p>Atencion psicológica individual y grupl </p>
                        <p>Terapia de Lenguaje </p>
                        <p>Terapia de Aprendizaje </p>
                        <p>Terapia de memoria</p>
                       <p> Atencion psiquiátrica individual</p>
                       <p> Evaluación y Diagnóstico</p>
        </div>

        <div class="contact">
            <a href="{{ url('Ingresarnew') }}" >>Agenda tu Cita</a>
        </div>
    </div>

</section>




 

    <h2 class="titulo">ENCUENTRANOS EN</h2>



    
    <section class="banner">
        <div class="containerB">
            
            <div class="col2">
                
                <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.443146991208!2d-77.74589928524644!3d0.7857428994267897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e296fd313851317%3A0xfa71248fed7d2084!2sPatronato%20de%20amparo%20social!5e0!3m2!1ses-419!2sec!4v1638132447486!5m2!1ses-419!2sec" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
              
            </div>
            <div class="col2">
            
            <h1 class="titulo2"> Puedes encontrarnos en</h2>
                <p id="txtBanner">
             <p>Avenida Ventimilla, Tulcan </p>
        
                </p>
                <h2 class="titulo2">  Queremos Escucharte</h2>
                <p id="txtBanner">
                        <p>Puedes enviarnos tus suguerencias o quejas a :</p>
                        <p>comunicacion_patronato@outlook.com</p>
                </p>
            </div>
        </div>
    </section>



<div class="sec3">

    <footer >

    <div class="container__footer" >
        <div class="box__footer">
            <div class="logo">
            <img src="http://localhost:82/Clinica-L8/public/img/logopatronato.jpg" alt="">
         </div>
            <div class="terms">
            <p>comunicacion_patronato@outlook.com</p>
            </div>
    </div>
    <div class="box__footer">
        <h2>Horarios de Atencion</h2>
        <div class="border"></div>
        <a >Lunes a Viernes </a>
        <a>8:00 am  ||  17:00 pm</a>
       <br></br>
        <h2>Fines de Semana</h2>
        <div class="border"></div>
        <a>No hay Atencion</a>
    </div>

   

    <div class="box__footer">
        <h2>Redes Sociales</h2>
        <div class="border"></div>
        <a href="https://www.facebook.com/patronatoGADMT/about"> <i class="fab fa-facebook-square"></i> Facebook</a>
     
        <a href="https://www.instagram.com/patronatotulcan/"><i class="fab fa-instagram-square"></i> Instagram</a>
    </div>

</div>

<div class="box__copyright">
    <hr>
    <p>Patronato Municipal de Amparo Social <b>Upec</b></p>
</div>
</footer>

</div>

</body>


    <!-- SCRIPT -->
    <script src="./js/script.js"></script>
    <script src="http://localhost:82/Clinica-L8/public/js/scrips.js"></script>


</html>
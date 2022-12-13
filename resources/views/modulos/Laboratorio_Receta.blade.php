@extends('plantilla')

@section('content')



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Laboratorio </title>
    <link rel="stylesheet" href="http://localhost:82/Clinica-L8/public/css/laboratorio.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
  <div class="title2" > Paciente: {{ $paciente->name }}</div>
  <div class="title2" >Historial Medico: {{ $paciente->id }}  </div>
    <div class="title">Laboratorio Clinico</div>
    <div class="title2" >Examen del Paciente </div>

    <div class="content">
    <form method="post" action="{{ url('actualizar-Laboratorio/'.$paciente->id) }}">
        <div class="user-details">

        @csrf
         @method('put')

        <div class="input-box"   >
              <span class="details">Fecha</span>
                <input type="hidden" name="paciente_idL" placeholder="Ingrese su nombre y apellido" value="{{ $paciente->id }}"> 
                <?php $fcha = date("Y-m-d");?>
                <input type="date" name="fechaLa" class="form-control"  value="<?php echo $fcha;?>"  >
                
          </div>

          <div class="input-box">
              <span class="details">Edad</span>
               
                <input type="text" name="edad" placeholder="" value=""> 
          </div>

          <div class="input-box">
              <span class="details">Solicitado por el Dr.</span>
               
                <input type="text" name="solicitado" placeholder="" value="{{ auth()->user()->name }}"> 
          </div>



       
         <br> <br>
         

          <div class="input-box">   
            <span class="details">HEMATOLOGIA</span>
            <div class="gender-details">
                            <input type="hidden" name="biometria" value="nulo" >
                            <input type="checkbox" name="biometria" id="dot-1" value="Biometría Hemática">
                        <div class="category">
                        <label for="dot-1">
                        <span class="dot uno"></span>
                        <span class="gender">Biometría Hemática</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                        <input type="hidden" name="hematocrito" value="nulo" >
                        <input type="checkbox" name="hematocrito" id="dot-2" value="Hematocrito-Hemoglobina">
                        <div class="category">
                        <label for="dot-2">
                        <span class="dot dos"></span>
                        <span class="gender">Hematocrito-Hemoglobina</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                        <input type="hidden" name="contaje" value="nulo" >
                        <input type="checkbox" name="contaje" id="dot-3" value="Contaje de plaquetas">
                        <div class="category">
                        <label for="dot-3">
                        <span class="dot tres"></span>
                        <span class="gender">Contaje de plaquetas</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                        <input type="hidden" name="velocidad" value="nulo" >
                        <input type="checkbox" name="velocidad" id="dot-4" value="Velocidad de Sedimentacion">
                        <div class="category">
                        <label for="dot-4">
                        <span class="dot cuatro"></span>
                        <span class="gender">Velocidad de Sedimentación</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                        <input type="hidden" name="reticulocitos" value="nulo" >
                        <input type="checkbox" name="reticulocitos" id="dot-5" value="Reticulocitos">
                        <div class="category">
                        <label for="dot-5">
                        <span class="dot cinco"></span>
                        <span class="gender">Reticulocitos</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                        <input type="hidden" name="hematozoario" value="nulo" >
                        <input type="checkbox" name="hematozoario" id="dot-6" value="Hematozoario">
                        <div class="category">
                        <label for="dot-6">
                        <span class="dot seis"></span>
                        <span class="gender">Hematozoario</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                        <input type="hidden" name="grupo" value="nulo" >
                        <input type="checkbox" name="grupo" id="dot-7" value="Grupo y Factor">
                        <div class="category">
                        <label for="dot-7">
                        <span class="dot siete"></span>
                        <span class="gender">Grupo y Factor</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                        <input type="hidden" name="coombsD" value="nulo" >
                        <input type="checkbox" name="coombsD" id="dot-8" value="Coombs directo">
                        <div class="category">
                        <label for="dot-8">
                        <span class="dot ocho"></span>
                        <span class="gender">Coombs directo</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                        <input type="hidden" name="ComombsI" value="nulo" >
                        <input type="checkbox" name="ComombsI" id="dot-9" value="Comombs indirecto">
                        <div class="category">
                        <label for="dot-9">
                        <span class="dot nueve"></span>
                        <span class="gender">Comombs indirecto</span>
                        </label>
                    </div>
                    </div>
          </div>

          <div class="input-box">
            <span class="details">HEMOSTASIA</span>
            
            <div class="gender-details">
            <input type="hidden" name="tp" value="nulo" >
                        <input type="checkbox" name="tp" id="dot-10" value="TP-INR">
                        <div class="category">
                        <label for="dot-10">
                        <span class="dot diez"></span>
                        <span class="gender">TP-INR</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="ttp" value="nulo" >
                        <input type="checkbox" name="ttp" id="dot-11" value="TTP">
                        <div class="category">
                        <label for="dot-11">
                        <span class="dot once"></span>
                        <span class="gender">TTP</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="tiempoH" value="nulo" >
                        <input type="checkbox" name="tiempoH" id="dot-12" value="Tiempo de Hemorragia">
                        <div class="category">
                        <label for="dot-12">
                        <span class="dot doce"></span>
                        <span class="gender">Tiempo de Hemorragia</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="tiempoC" value="nulo" >
                        <input type="checkbox" name="tiempoC" id="dot-13" value="Tiempo de Coagulación">
                        <div class="category">
                        <label for="dot-13">
                        <span class="dot trece"></span>
                        <span class="gender">Tiempo de Coagulación</span>
                        </label>
                    </div>
                    </div>

          </div>
          <div class="input-box">
            <span class="details">BIOQUÍMICA CLÍNICA</span>
            
            <div class="gender-details">
                        <input type="hidden" name="glucosa" value="nulo" >
                        <input type="checkbox" name="glucosa" id="dot-14" value="Glucosa Basal">
                        <div class="category">
                        <label for="dot-14">
                        <span class="dot catorce"></span>
                        <span class="gender">Glucosa Basal</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="curva" value="nulo" >
                        <input type="checkbox" name="curva" id="dot-15" value="Curva de tolerancia">
                        <div class="category">
                        <label for="dot-15">
                        <span class="dot quince"></span>
                        <span class="gender">Curva de tolerancia- </span>
                        <input type="text" name="curvaTole" placeholder="horas " value="">
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="hemoglobina" value="nulo" >
                        <input type="checkbox" name="hemoglobina" id="dot-16" value="Hemoglobina Glicosilada ( HbA 1c%)">
                        <div class="category">
                        <label for="dot-16">
                        <span class="dot dieciseis"></span>
                        <span class="gender">Hemoglobina Glicosilada ( HbA 1c%)</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="urea" value="nulo" >
                        <input type="checkbox" name="urea" id="dot-17" value="Urea">
                        <div class="category">
                        <label for="dot-17">
                        <span class="dot diecisiete"></span>
                        <span class="gender">Urea</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="bun" value="nulo" >
                        <input type="checkbox" name="bun" id="dot-18" value="BUN (Nitrógeno ureico)">
                        <div class="category">
                        <label for="dot-18">
                        <span class="dot diezciocho"></span>
                        <span class="gender">BUN (Nitrógeno ureico) </span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="creatinina" value="nulo" >
                        <input type="checkbox" name="creatinina" id="dot-19" value="Creatinina">
                        <div class="category">
                        <label for="dot-19">
                        <span class="dot diezcinueve"></span>
                        <span class="gender">Creatinina</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="acido" value="nulo" >
                        <input type="checkbox" name="acido" id="dot-20" value="Ácido Úrico">
                        <div class="category">
                        <label for="dot-20">
                        <span class="dot veinte"></span>
                        <span class="gender">Ácido Úrico</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="colesterol" value="nulo" >
                        <input type="checkbox" name="colesterol" id="dot-21" value="Colesterol Total">
                        <div class="category">
                        <label for="dot-21">
                        <span class="dot veinteuno"></span>
                        <span class="gender">Colesterol Total</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="trigliceridos" value="nulo" >
                        <input type="checkbox" name="trigliceridos" id="dot-22" value="Triglicéridos">
                        <div class="category">
                        <label for="dot-22">
                        <span class="dot veintedos"></span>
                        <span class="gender">Triglicéridos</span>
                        </label>
                    </div>
                    </div>


                    
          </div>
          
          <div class="input-box">
          <span class="details">BIOQUÍMICA CLÍNICA</span>
          
          <div class="gender-details">
          <input type="hidden" name="hdl" value="nulo" >
                        <input type="checkbox" name="hdl" id="dot-23" value="HDL-LDL">
                        <div class="category">
                        <label for="dot-23">
                        <span class="dot veintetres"></span>
                        <span class="gender">HDL-LDL</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="lipidos" value="nulo" >
                        <input type="checkbox" name="lipidos" id="dot-24" value="Lípidos Totales">
                        <div class="category">
                        <label for="dot-24">
                        <span class="dot  veintecuatro"></span>
                        <span class="gender">Lípidos Totales</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="proteinas" value="nulo" >
                        <input type="checkbox" name="proteinas" id="dot-25" value="Proteínas Totales">
                        <div class="category">
                        <label for="dot-25">
                        <span class="dot  veintecinco"></span>
                        <span class="gender">Proteínas Totales</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="albumina" value="nulo" >
                        <input type="checkbox" name="albumina" id="dot-26" value="Albumina">
                        <div class="category">
                        <label for="dot-26">
                        <span class="dot  veinteseis"></span>
                        <span class="gender">Albumina</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="globulina" value="nulo" >
                        <input type="checkbox" name="globulina" id="dot-27" value="Globulina">
                        <div class="category">
                        <label for="dot-27">
                        <span class="dot veintesiete"></span>
                        <span class="gender">Globulina</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="bilirubinas" value="nulo" >
                        <input type="checkbox" name="bilirubinas" id="dot-28" value="Bilirubinas">
                        <div class="category">
                        <label for="dot-28">
                        <span class="dot veinteocho"></span>
                        <span class="gender">Bilirubinas</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="tgo" value="nulo" >
                        <input type="checkbox" name="tgo" id="dot-29" value="TGO">
                        <div class="category">
                        <label for="dot-29">
                        <span class="dot veintenueve"></span>
                        <span class="gender">TGO</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="tgp" value="nulo" >
                        <input type="checkbox" name="tgp" id="dot-30" value="TGP">
                        <div class="category">
                        <label for="dot-30">
                        <span class="dot treinta"></span>
                        <span class="gender">TGP</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="fosfatasa" value="nulo" >
                        <input type="checkbox" name="fosfatasa" id="dot-31" value="Fosfatasa alcalina">
                        <div class="category">
                        <label for="dot-31">
                        <span class="dot treintauno"></span>
                        <span class="gender">Fosfatasa alcalina</span>
                        </label>
                    </div>
                    </div>


                    <div class="gender-details">
                    <input type="hidden" name="gamma" value="nulo" >
                        <input type="checkbox" name="gamma" id="dot-32" value="Gamma GT">
                        <div class="category">
                        <label for="dot-32">
                        <span class="dot treintados"></span>
                        <span class="gender">Gamma GT</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="ldh" value="nulo" >
                        <input type="checkbox" name="ldh" id="dot-33" value="LDH">
                        <div class="category">
                        <label for="dot-33">
                        <span class="dot treintatres"></span>
                        <span class="gender">LDH</span>
                        </label>
                    </div>
                    </div>
                  
          </div>
          <div class="input-box">
            <span class="details">BIOQUÍMICA CLÍNICA</span>

            <div class="gender-details">
            <input type="hidden" name="amilasa" value="nulo" >
                        <input type="checkbox" name="amilasa" id="dot-34" value="Amilasa">
                        <div class="category">
                        <label for="dot-34">
                        <span class="dot treintacuatro"></span>
                        <span class="gender">Amilasa</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="lipasa" value="nulo" >
                        <input type="checkbox" name="lipasa" id="dot-35" value="Lipasa">
                        <div class="category">
                        <label for="dot-35">
                        <span class="dot treintacinco"></span>
                        <span class="gender">Lipasa</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="cpk" value="nulo" >
                        <input type="checkbox" name="cpk" id="dot-36" value="CPK">
                        <div class="category">
                        <label for="dot-36">
                        <span class="dot treintaseis"></span>
                        <span class="gender">CPK</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="ck" value="nulo" >
                        <input type="checkbox" name="ck" id="dot-37" value="CK-MB">
                        <div class="category">
                        <label for="dot-37">
                        <span class="dot treintasiete"></span>
                        <span class="gender">CK-MB</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="troponina" value="nulo" >
                        <input type="checkbox" name="troponina" id="dot-38" value="Troponina">
                        <div class="category">
                        <label for="dot-38">
                        <span class="dot treintaocho"></span>
                        <span class="gender">Troponina</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="sodio" value="nulo" >
                        <input type="checkbox" name="sodio" id="dot-39" value="Sodio,potaciony cloro">
                        <div class="category">
                        <label for="dot-39">
                        <span class="dot treintanueve"></span>
                        <span class="gender">Sodio,potaciony cloro</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="calcio" value="nulo" >
                        <input type="checkbox" name="calcio" id="dot-40" value="Calcio Total">
                        <div class="category">
                        <label for="dot-40">
                        <span class="dot cuarenta"></span>
                        <span class="gender">Calcio Total</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="calcioI" value="nulo" >
                        <input type="checkbox" name="calcioI" id="dot-41" value="Calcio Iónico">
                        <div class="category">
                        <label for="dot-41">
                        <span class="dot cuarentauno"></span>
                        <span class="gender">Calcio Iónico</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="fosfato" value="nulo" >
                        <input type="checkbox" name="fosfato" id="dot-42" value="Fósfato">
                        <div class="category">
                        <label for="dot-42">
                        <span class="dot cuarentados"></span>
                        <span class="gender">Fósfato</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="magnesio" value="nulo" >
                        <input type="checkbox" name="magnesio" id="dot-43" value="Magnesio">
                        <div class="category">
                        <label for="dot-43">
                        <span class="dot cuarentatres"></span>
                        <span class="gender">Magnesio</span>
                        </label>
                    </div>
                    </div>

                    


          </div>
        
          <div class="input-box">
            <span class="details">SEROLOÍA Y ENFERMEDADES INFECCIOSAS</span>
            
            <div class="gender-details">
            <input type="hidden" name="asto" value="nulo" >
                        <input type="checkbox" name="asto" id="dot-44" value="ASTO">
                        <div class="category">
                        <label for="dot-44">
                        <span class="dot cuarentacuatro"></span>
                        <span class="gender">ASTO</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="fr" value="nulo" >
                        <input type="checkbox" name="fr" id="dot-45" value="FR">
                        <div class="category">
                        <label for="dot-45">
                        <span class="dot cuarentacinco"></span>
                        <span class="gender">FR</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="pcr" value="nulo" >
                        <input type="checkbox" name="pcr" id="dot-46" value="PCR">
                        <div class="category">
                        <label for="dot-46">
                        <span class="dot cuarentaseis"></span>
                        <span class="gender">PCR</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="aglutinaciones" value="nulo" >
                        <input type="checkbox" name="aglutinaciones" id="dot-47" value="Aglutinaciones febriles">
                        <div class="category">
                        <label for="dot-47">
                        <span class="dot cuarentasiete"></span>
                        <span class="gender">Aglutinaciones febriles</span>
                        </label>
                    </div>
                    </div>
                    
                    <div class="gender-details">
                    <input type="hidden" name="vdrl" value="nulo" >
                        <input type="checkbox" name="vdrl" id="dot-48" value="V.D.R.L">
                        <div class="category">
                        <label for="dot-48">
                        <span class="dot cuarentaocho"></span>
                        <span class="gender">V.D.R.L</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="hiv" value="nulo" >
                        <input type="checkbox" name="hiv" id="dot-49" value="HIV">
                        <div class="category">
                        <label for="dot-49">
                        <span class="dot cuarentanueve"></span>
                        <span class="gender">HIV</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="toxoplasma" value="nulo" >
                        <input type="checkbox" name="toxoplasma" id="dot-50" value="Toxoplasma">
                        <div class="category">
                        <label for="dot-50">
                        <span class="dot cincuenta"></span>
                        <span class="gender">Toxoplasma- </span>
        
                        <input type="text" name="toxoplasmalg" placeholder="lgG"  value="">
                        <input type="text" name="toxoplasmalm" placeholder="lgM"  value="">
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="rubeola" value="nulo" >
                        <input type="checkbox" name="rubeola" id="dot-51" value="Rubeola">
                        <div class="category">
                        <label for="dot-51">
                        <span class="dot cincuentauno"></span>
                        <span class="gender">Rubeola</span>
                        <input type="text" name="rubeolalg" placeholder="lgG"  value="">
                        <input type="text"  name="rubeolalm" placeholder="lgM"  value="">
                        </label>
                    </div>
                    </div>



                    
            

          </div>
          <div class="input-box">
            <span class="details">SEROLOÍA Y ENFERMEDADES INFECCIOSAS</span>
            
            <div class="gender-details">
            <input type="hidden" name="citomegalovirus" value="nulo" >
                        <input type="checkbox" name="citomegalovirus" id="dot-52" value="Citomegalovirus">
                        <div class="category">
                        <label for="dot-52">
                        <span class="dot cincuentados"></span>
                        <span class="gender">Citomegalovirus-</span>
                        <input type="text" name="citomegaloviruslg" placeholder=""   value="">
                        <input type="text"  name="citomegaloviruslm" placeholder=""  value="">
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="herpes1" value="nulo" >
                        <input type="checkbox" name="herpes1" id="dot-53" value="Herpes 1">
                        <div class="category">
                        <label for="dot-53">
                        <span class="dot cincuentatres"></span>
                        <span class="gender">Herpes_|-</span>
                        <input type="text"  name="herpes1lg" placeholder="lgG"  value="" >
                        <input type="text" name="herpes1lm" placeholder="lgM"  value="">
                        </label>
                    </div>
                    </div>
                    <div class="gender-details">
                    <input type="hidden" name="herpes2" value="nulo" >
                        <input type="checkbox" name="herpes2" id="dot-54" value="Herpes 2">
                        <div class="category">
                        <label for="dot-54">
                        <span class="dot cincuentacuatro"></span>
                        <span class="gender">Herpes_||-</span>
                        <input type="text"  name="herpes2lg" placeholder="lgG"   value="">
                        <input type="text" name="herpes2lm"  placeholder="lgM"  value="">
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="hepatitisA" value="nulo" >
                        <input type="checkbox" name="hepatitisA" id="dot-55" value="Hepatitis A: Anti HAV" >
                        <div class="category">
                        <label for="dot-55">
                        <span class="dot cincuentacinco"></span>
                        <span class="gender">Hepatitis A: Anti HAV</span>
                        <input type="text"  name="hepatitisAlm" placeholder="lgM"  value="">
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="hepatitisB" value="nulo" >
                        <input type="checkbox" name="hepatitisB" id="dot-56" value="Hepatitis B: HBsAg">
                        <div class="category">
                        <label for="dot-56">
                        <span class="dot cincuentaseis"></span>
                        <span class="gender">Hepatitis B: HBsAg</span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="hepatitisC" value="nulo" >
                        <input type="checkbox" name="hepatitisC" id="dot-57" value="Hepatitis C: Anti HCV">
                        <div class="category">
                        <label for="dot-57">
                        <span class="dot cincuentasiete"></span>
                        <span class="gender">Hepatitis C: Anti HCV</span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="helicobacter" value="nulo" >
                        <input type="checkbox" name="helicobacter" id="dot-58" value="Helicobacter Pylori LgG">
                        <div class="category">
                        <label for="dot-58">
                        <span class="dot cincuentaocho"></span>
                        <span class="gender">Helicobacter Pylori LgG </span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="mononucleosis" value="nulo" >
                        <input type="checkbox" name="mononucleosis" id="dot-59" value="Mononucleosis">
                        <div class="category">
                        <label for="dot-59">
                        <span class="dot cincuentanueve"></span>
                        <span class="gender">Mononucleosis </span>
                        
                        </label>
                    </div>
                    </div>
          </div>

          <div class="input-box">
            <span class="details">ESTUDIOS HORMONALES</span>
            
            <div class="gender-details">
            <input type="hidden" name="t3" value="nulo" >
                        <input type="checkbox" name="t3" id="dot-60" value="T3 total">
                        <div class="category">
                        <label for="dot-60">
                        <span class="dot sesenta"></span>
                        <span class="gender">T3 total</span>
                       
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="t3L" value="nulo" >
                        <input type="checkbox" name="t3L" id="dot-61" value="T3 libre(fT3)">
                        <div class="category">
                        <label for="dot-61">
                        <span class="dot sesentauno"></span>
                        <span class="gender">T3 libre(fT3)</span>
                       
                        </label>
                    </div>
                    </div>
                    <div class="gender-details">
                    <input type="hidden" name="t4T" value="nulo" >
                        <input type="checkbox" name="t4T" id="dot-62" value="T4 total">
                        <div class="category">
                        <label for="dot-62">
                        <span class="dot sesentados"></span>
                        <span class="gender">T4 total</span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="t4L" value="nulo" >
                        <input type="checkbox" name="t4L" id="dot-63" value="T4 libre(fT4)">
                        <div class="category">
                        <label for="dot-63">
                        <span class="dot sesentatres"></span>
                        <span class="gender">T4 libre(fT4)</span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="tsh" value="nulo" >
                        <input type="checkbox" name="tsh" id="dot-64" value="TSH">
                        <div class="category">
                        <label for="dot-64">
                        <span class="dot sesentacuatro"></span>
                        <span class="gender">TSH</span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="testE" value="nulo" >
                        <input type="checkbox" name="testE" id="dot-65" value="Test de embarazo">
                        <div class="category">
                        <label for="dot-65">
                        <span class="dot sesentacinco"></span>
                        <span class="gender">Test de embarazo</span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="hcg" value="nulo" >
                        <input type="checkbox" name="hcg" id="dot-66" value="HCG-beta cuantitativa">
                        <div class="category">
                        <label for="dot-66">
                        <span class="dot sesentaseis"></span>
                        <span class="gender">HCG-beta cuantitativa</span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="fsh" value="nulo" >
                        <input type="checkbox" name="fsh" id="dot-67" value="FSH">
                        <div class="category">
                        <label for="dot-67">
                        <span class="dot sesentasiete"></span>
                        <span class="gender">FSH </span>
                        
                        </label>
                      </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="lh" value="nulo" >
                        <input type="checkbox" name="lh" id="dot-68" value="LH">
                        <div class="category">
                        <label for="dot-68">
                        <span class="dot sesentaocho"></span>
                        <span class="gender">LH </span>
                        
                        </label>
                      </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="prolactina" value="nulo" >
                        <input type="checkbox" name="prolactina" id="dot-69" value="Prolactina">
                        <div class="category">
                        <label for="dot-69">
                        <span class="dot sesentanueve"></span>
                        <span class="gender">Prolactina </span>
                        
                        </label>
                      </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="estrogenos" value="nulo" >
                        <input type="checkbox" name="estrogenos" id="dot-70" value="Estrógenos">
                        <div class="category">
                        <label for="dot-70">
                        <span class="dot setenta"></span>
                        <span class="gender">Estrógenos </span>
                        
                        </label>
                      </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="progesterona" value="nulo" >
                        <input type="checkbox" name="progesterona" id="dot-71" value="Progesterona">
                        <div class="category">
                        <label for="dot-71">
                        <span class="dot setentauno"></span>
                        <span class="gender">Progesterona </span>
                        
                        </label>
                      </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="testoterona" value="nulo" >
                        <input type="checkbox" name="testoterona" id="dot-72" value="Testoterona">
                        <div class="category">
                        <label for="dot-72">
                        <span class="dot setentados"></span>
                        <span class="gender">Testoterona</span>
                        
                        </label>
                      </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="insulina" value="nulo" >
                        <input type="checkbox" name="insulina" id="dot-73" value="Insulina">
                        <div class="category">
                        <label for="dot-73">
                        <span class="dot setentatres"></span>
                        <span class="gender">Insulina  </span>
                        
                        </label>
                      </div>
                    </div>
        </div>

        <div class="input-box">
            <span class="details">AUTOINMUNIDAD</span>
            
            <div class="gender-details">
            <input type="hidden" name="ana" value="nulo" >
                        <input type="checkbox" name="ana" id="dot-74" value="Antinucleares (ANA)">
                        <div class="category">
                        <label for="dot-74">
                        <span class="dot setentacuatro"></span>
                        <span class="gender"> Antinucleares (ANA)  </span>
                        
                        </label>
                      </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="dna" value="nulo" >
                        <input type="checkbox" name="dna" id="dot-75" value="Anti DNA">
                        <div class="category">
                        <label for="dot-75">
                        <span class="dot setentacinco"></span>
                        <span class="gender">Anti DNA  </span>
                        
                        </label>
                      </div>
                    </div>


                    <div class="gender-details">
                    <input type="hidden" name="antifosfolípidos" value="nulo" >
                        <input type="checkbox" name="antifosfolípidos" id="dot-76" value="Antifosfolípidos">
                        <div class="category">
                        <label for="dot-76">
                        <span class="dot setentaseis"></span>
                        <span class="gender">Antifosfolípidos</span>
                        <input type="text" name="antifosfolípidosLG" placeholder="lgG" value="">
                        <input type="text" name="antifosfolípidosLM"placeholder="lgM" value="">
                        </label>
                    </div>
                    </div>



                    <div class="gender-details">
                    <input type="hidden" name="tpo" value="nulo" >
                        <input type="checkbox" name="tpo" id="dot-77" value="Anti TPO ">
                        <div class="category">
                        <label for="dot-77">
                        <span class="dot setentasiete"></span>
                        <span class="gender">Anti TPO </span>
                        
                        </label>
                      </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="Atiroglobulina" value="nulo" >
                        <input type="checkbox" name="Atiroglobulina" id="dot-78" value="Anti Tiroglobulina">
                        <div class="category">
                        <label for="dot-78">
                        <span class="dot setentaocho"></span>
                        <span class="gender">Anti Tiroglobulina </span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="antiCoagulante" value="nulo" >
                        <input type="checkbox" name="antiCoagulante" id="dot-79" value="AntiCoagulante Lúpico">
                        <div class="category">
                        <label for="dot-79">
                        <span class="dot setentanueve"></span>
                        <span class="gender">AntiCoagulante Lúpico</span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="ccp" value="nulo" >
                        <input type="checkbox" name="ccp" id="dot-80" value="Anti CCP">
                        <div class="category">
                        <label for="dot-80">
                        <span class="dot ochenta"></span>
                        <span class="gender">Anti CCP </span>
                        
                        </label>
                    </div>
                    </div>

                  
                    </div>


           <div class="input-box">
            <span class="details">MARCADORES ONCOLOGICOS</span>
            <div class="gender-details">
            <input type="hidden" name="afp" value="nulo" >
                        <input type="checkbox" name="afp" id="dot-81" value="AFP">
                        <div class="category">
                        <label for="dot-81">
                        <span class="dot ochentauno"></span>
                        <span class="gender">AFP</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="cea" value="nulo" >
                        <input type="checkbox" name="cea" id="dot-82" value="CEA">
                        <div class="category">
                        <label for="dot-82">
                        <span class="dot ochentados"></span>
                        <span class="gender">CEA</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="psa" value="nulo" >
                        <input type="checkbox" name="psa" id="dot-83" value="PSA total">
                        <div class="category">
                        <label for="dot-83">
                        <span class="dot ochentatres"></span>
                        <span class="gender">PSA total</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="psaL" value="nulo" >
                        <input type="checkbox" name="psaL" id="dot-84" value="PSA libre">
                        <div class="category">
                        <label for="dot-84">
                        <span class="dot ochentacuatro"></span>
                        <span class="gender">PSA libre</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="ca" value="nulo" >
                        <input type="checkbox" name="ca" id="dot-85" value="Ca 125">
                        <div class="category">
                        <label for="dot-85">
                        <span class="dot ochentacinco"></span>
                        <span class="gender">Ca 125</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="ca19" value="nulo" >
                        <input type="checkbox" name="ca19" id="dot-86" value="Ca 19-9">
                        <div class="category">
                        <label for="dot-86">
                        <span class="dot ochentaseis"></span>
                        <span class="gender">Ca 19-9</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="tiroglobulina" value="nulo" >
                        <input type="checkbox" name="tiroglobulina" id="dot-87" value="Tiroglobulina">
                        <div class="category">
                        <label for="dot-87">
                        <span class="dot ochentasiete"></span>
                        <span class="gender">Tiroglobulina</span>
                        </label>
                    </div>
                    </div>

                    
          </div>

          <div class="input-box">
            <span class="details">URIÁNALISIS</span>
            
            <div class="gender-details">
            <input type="hidden" name="emo" value="nulo" >
                        <input type="checkbox" name="emo" id="dot-88" value="EMO">
                        <div class="category">
                        <label for="dot-88">
                        <span class="dot ochentaocho"></span>
                        <span class="gender">EMO</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="gram" value="nulo" >
                        <input type="checkbox" name="gram" id="dot-89" value="Gram de gota fresca">
                        <div class="category">
                        <label for="dot-89">
                        <span class="dot ochentanueve"></span>
                        <span class="gender">Gram de gota fresca</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="proteinuria" value="nulo" >
                        <input type="checkbox" name="proteinuria" id="dot-90" value="Proteinuria de 24 Horas">
                        <div class="category">
                        <label for="dot-90">
                        <span class="dot noventa"></span>
                        <span class="gender">Proteinuria de 24 Horas</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="microalbuminuria" value="nulo" >
                        <input type="checkbox" name="microalbuminuria" id="dot-91" value="Microalbuminuria">
                        <div class="category">
                        <label for="dot-91">
                        <span class="dot noventauno"></span>
                        <span class="gender">Microalbuminuria</span>
                        </label>
                    </div>
                    </div>



                    <div class="gender-details">
                    <input type="hidden" name="clearence" value="nulo" >
                        <input type="checkbox" name="clearence" id="dot-92" value="Clearence de creatinin">
                        <div class="category">
                        <label for="dot-92">
                        <span class="dot noventados"></span>
                        <span class="gender">Clearence de creatinina</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="TestEO" value="nulo" >
                        <input type="checkbox" name="TestEO" id="dot-93" value="Test de embarazo en orina">
                        <div class="category">
                        <label for="dot-93">
                        <span class="dot noventatres"></span>
                        <span class="gender">Test de embarazo en orina</span>
                        </label>
                    </div>
                    </div>

          </div>
          <div class="input-box">
            <span class="details">COPROLOGÍA</span>
            
            <div class="gender-details">
            <input type="hidden" name="coproparasitario" value="nulo" >
                        <input type="checkbox" name="coproparasitario" id="dot-94" value="Coproparasitario">
                        <div class="category">
                        <label for="dot-94">
                        <span class="dot noventacuatro"></span>
                        <span class="gender">Coproparasitario</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="coproparasitarioS" value="nulo" >
                        <input type="checkbox" name="coproparasitarioS" id="dot-95" value="Coproparasitario Seriado">
                        <div class="category">
                        <label for="dot-95">
                        <span class="dot noventacinco"></span>
                        <span class="gender">Coproparasitario Seriado</span>
                    
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="sangre" value="nulo" >
                        <input type="checkbox" name="sangre" id="dot-96" value="Sangre Oculta">
                        <div class="category">
                        <label for="dot-96">
                        <span class="dot noventaseis"></span>
                        <span class="gender">Sangre Oculta</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="polimorfonucleares" value="nulo" >
                        <input type="checkbox" name="polimorfonucleares" id="dot-97" value="Polimorfonucleares">
                        <div class="category">
                        <label for="dot-97">
                        <span class="dot noventasiete"></span>
                        <span class="gender">Polimorfonucleares</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="rotavirus" value="nulo" >
                        <input type="checkbox" name="rotavirus" id="dot-98" value="Rotavirus">
                        <div class="category">
                        <label for="dot-98">
                        <span class="dot noventaocho"></span>
                        <span class="gender">Rotavirus </span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="oxiuros" value="nulo" >
                        <input type="checkbox" name="oxiuros" id="dot-99" value="Oxiuros">
                        <div class="category">
                        <label for="dot-99">
                        <span class="dot noventanueve"></span>
                        <span class="gender">Oxiuros</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="ph" value="nulo" >
                        <input type="checkbox" name="ph" id="dot-100" value="pH en Heces">
                        <div class="category">
                        <label for="dot-100">
                        <span class="dot cien"></span>
                        <span class="gender">pH en Heces</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="antígeno" value="nulo" >
                        <input type="checkbox" name="antígeno" id="dot-101" value="Antígeno de Helicobacter">
                        <div class="category">
                        <label for="dot-101">
                        <span class="dot cienuno"></span>
                        <span class="gender">Antígeno de Helicobacter</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="pylori" value="nulo" >
                        <input type="checkbox" name="pylori" id="dot-102" value="Pylori">
                        <div class="category">
                        <label for="dot-102">
                        <span class="dot ciendos"></span>
                        <span class="gender">Pylori</span>
                        </label>
                    </div>
                    </div>


                    
          </div>
          
          <div class="input-box">
          <span class="details">MICROBIOLOGIA</span>
          
          <div class="gender-details">
          <input type="hidden" name="muestra" value="nulo" >
                        <input type="checkbox" name="muestra" id="dot-103" value="Muestra">
                        <div class="category">
                        <label for="dot-103">
                        <span class="dot cientres"></span>
                        <span class="gender">Muestra-</span>
                        <input type="text" name="muestraE" placeholder="" value="">
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="fresco" value="nulo" >
                        <input type="checkbox" name="fresco" id="dot-104" value="Fresco">
                        <div class="category">
                        <label for="dot-104">
                        <span class="dot  ciencuatro"></span>
                        <span class="gender">Fresco</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="gramm" value="nulo" >
                        <input type="checkbox" name="gramm" id="dot-105" value="Gram">
                        <div class="category">
                        <label for="dot-105">
                        <span class="dot  ciencinco"></span>
                        <span class="gender">Gram</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="baar" value="nulo" >
                        <input type="checkbox" name="baar" id="dot-106" value="B.A.A.R">
                        <div class="category">
                        <label for="dot-106">
                        <span class="dot  cienseis"></span>
                        <span class="gender">B.A.A.R</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="koh" value="nulo" >
                        <input type="checkbox" name="koh" id="dot-107" value="KOH">
                        <div class="category">
                        <label for="dot-107">
                        <span class="dot ciensiete"></span>
                        <span class="gender">KOH</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="cultivoA" value="nulo" >
                        <input type="checkbox" name="cultivoA" id="dot-108" value="ultivo y antibiograma">
                        <div class="category">
                        <label for="dot-108">
                        <span class="dot cienocho"></span>
                        <span class="gender">Cultivo y antibiograma</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="cultivoH" value="nulo" >
                        <input type="checkbox" name="cultivoH" id="dot-109" value="Cultivos de Hongos">
                        <div class="category">
                        <label for="dot-109">
                        <span class="dot ciennueve"></span>
                        <span class="gender">Cultivos de Hongos</span>
                        </label>
                    </div>
                    </div>

                    
                    </div>



                    <div class="input-box">
          <span class="details">OTROS</span>
          
          <div class="gender-details">
          <input type="hidden" name="papanicolao" value="nulo" >
                        <input type="checkbox" name="papanicolao" id="dot-110" value="Papanicolao">
                        <div class="category">
                        <label for="dot-110">
                        <span class="dot ciendiez"></span>
                        <span class="gender">Papanicolao</span>
                        
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="eosinófilos" value="nulo" >
                        <input type="checkbox" name="eosinófilos" id="dot-111" value="Eosinófilos nazales">
                        <div class="category">
                        <label for="dot-111">
                        <span class="dot  cienonce"></span>
                        <span class="gender">Eosinófilos nazales</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="espermograma" value="nulo" >
                        <input type="checkbox" name="espermograma" id="dot-112" value="Espermograma">
                        <div class="category">
                        <label for="dot-112">
                        <span class="dot  ciendoce"></span>
                        <span class="gender">Espermograma</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="cristalografia" value="nulo" >
                        <input type="checkbox" name="cristalografia" id="dot-113" value="Cristalografia">
                        <div class="category">
                        <label for="dot-113">
                        <span class="dot  cientrece"></span>
                        <span class="gender">Cristalografia</span>
                        </label>
                    </div>
                    </div>

                    <div class="gender-details">
                    <input type="hidden" name="otros" value="nulo" >    
                        <input type="checkbox" name="otros" id="dot-114" value="Otros no especificados en la lista">
                        <div class="category">
                        <label for="dot-114">
                        <span class="dot ciencatorce"></span>
                        <span class="gender">Otros no especificados en la lista</span>
                        <input type="text" name="ottros" placeholder="Otros" value="">
                        
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



     

</body>

@endsection

</html>

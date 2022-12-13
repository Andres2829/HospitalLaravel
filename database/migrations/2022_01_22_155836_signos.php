<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Signos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('signos', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('paciente_id')->unsigned();

            $table-> date('fecha');
            $table-> varchar('mot_consulta');
            $table-> varchar('ant_pato_personales');
            $table-> varchar('ant_gine_obstetrico');
            $table-> varchar('exa_fisicos');
            $table-> varchar('diagnostico');
            $table-> varchar('tratamiento');
            $table-> date('fecha_signos');
            $table-> varchar('edad');
            $table-> varchar('temperatura');
            $table-> varchar('pulso');
            $table-> varchar('presion');
            $table-> varchar('peso');
            $table-> varchar('talla');
            $table-> varchar('saturacion_oxigeno');
            $table-> varchar('evolucion');
            $table-> varchar('fechacov');
            $table-> varchar('covidsi');
            $table-> varchar('covidno');            
          

            $table->foreign('paciente_id')->references('id')->on('users')->onDelete("cascade");

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

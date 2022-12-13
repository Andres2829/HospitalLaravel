<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CertificadoMed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificadoMed', function (Blueprint $table) {
           

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('paciente_ids')->unsigned();

            $table-> date('fecha');
            $table-> string('paciente');
            $table-> string('cedula');
            $table-> string('diagnostico');
            $table-> date('reposo_I');
            $table-> date('reposo_F');
            $table-> string('presentar');
            $table-> string('presentas');

            $table->foreign('paciente_ids')->references('id')->on('users')->onDelete("cascade");
            
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

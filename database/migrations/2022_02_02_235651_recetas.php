<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
    
            $table->bigInteger('paciente_idR')->unsigned();
            $table-> date('fecha');
            $table-> string('recete');
            $table-> string('indicaciones');
    
            $table->foreign('paciente_idR')->references('id')->on('users')->onDelete("cascade");
            
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

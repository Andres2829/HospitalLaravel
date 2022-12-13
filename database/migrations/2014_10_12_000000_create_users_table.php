<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('documento');
            $table->string('telefono');
            $table->string('sexo');
            $table->string('id_consultorio');
            $table->string('rol');
            $table->rememberToken();
            $table->timestamps();
            $table->string('direccion');
            $table->string('fecha_nacimiento');
            $table->string('fecha_inscripcion');
            $table->string('ocupacion');
            $table->string('estadoc');
            $table->string('provincia');
            $table->string('canton');
            $table->string('parroquia');
            $table->string('domicilio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

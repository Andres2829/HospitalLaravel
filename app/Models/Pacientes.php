<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [

    	'name', 'email', 'password', 'sexo', 'id_consultorio', 'telefono', 'documento', 'rol','direccion','fecha_nacimiento','fecha_inscripcion','ocupacion','estadoc','provincia','canton','parroquia','domicilio'

    ];

    public $timestamps = false;

}
 
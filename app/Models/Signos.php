<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signos extends Model
{
    use HasFactory;
    protected $table = 'signos';

    protected $fillable = [

    	'paciente_id','fecha','mot_consulta','ant_pato_personales','ant_gine_obstetricos',
        'exa_fisicos','diagnostico','tratamiento','fecha_signos','edad',
        'temperatura','pulso','presion','peso','talla','saturacion_oxigeno','evolucion',
        'fechacov','covidsi','covidno','c'

    ];
    public $timestamps = false;
    
}

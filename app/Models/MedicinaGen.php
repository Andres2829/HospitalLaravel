<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinaGen extends Model
{
    use HasFactory;
    protected $table = 'certificadomed';

    protected $fillable = [

    	'paciente_ids','fecha','paciente','cedula','diagnostico','reposo_I','reposo_F','presentar'

    ];
    public $timestamps = false;
}

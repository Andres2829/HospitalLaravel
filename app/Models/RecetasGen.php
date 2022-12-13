<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecetasGen extends Model
{
    use HasFactory;
    protected $table = 'receta';

    protected $fillable = [

    	'paciente_idR','fecha','receta','indicaciones'

    ];
    public $timestamps = false;
    
}
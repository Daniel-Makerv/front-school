<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $table = "maestros";
    protected $primaryKey = 'id';

    protected $fillable = [ 
        'id_usuario', 'id_salon','id_ciclo_escolar'

    ];

    // public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "estudiantes";

    protected $fillable = [
        'id_usuario', 'matricula', 'id_grado', 'id_salon', 'id_ciclo_escolar'
    ];

    // public $timestamps = false;
}

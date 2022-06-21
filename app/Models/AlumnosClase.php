<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnosClase extends Model
{
    use HasFactory;
    protected $table = "alumnos_clases";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_clase', 'id_alumno'
    ];
}

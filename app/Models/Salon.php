<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = "salones";

    protected $fillable = [
        'nombre_salon', 'id_grado'
    ];

    // public $timestamps = false;
}

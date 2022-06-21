<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table = "grados";
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre_grado',
        'id_ciclo_escolar'
    ];

    // public $timestamps = false;
  
    public function Estudiante(){
        return $this->belongsTo('App\Models\Estudiante', 'id_grado');
    }
}

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
    public function getCicloEscolarAttribute()
    {
      $consulta = CicloEscolar::query()
      ->where('id',$this->id_ciclo_escolar)
      ->first();
      $inicio_ciclo = explode("-", $consulta->inicio_ciclo);
      $fin_ciclo = explode("-", $consulta->fin_ciclo);
      return $inicio_ciclo[0].'-'.$fin_ciclo[0];
    }
}

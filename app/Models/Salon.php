<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = "salones";
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre_salon', 'id_grado'
    ];

    public function getGradoAttribute()
    {
      $consulta = Grado::query()
      ->where('id',$this->id_grado)
      ->first();
      return $consulta->nombre_grado;
    }
}

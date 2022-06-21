<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;

    protected $table = "clases";
    protected $primaryKey = 'id';


    protected $fillable = [
        'nombre_clase', 'id_grado', 'id_salon'
    ];

    public function getGradoAttribute()
    {
      $consulta = Grado::query()
      ->where('id',$this->id_grado)
      ->first();
      return $consulta->nombre_grado;
    }
    public function getSalonAttribute()
    {
      $consulta = Salon::query()
      ->where('id',$this->id_salon)
      ->first();
      return $consulta->nombre_salon;
    }
}

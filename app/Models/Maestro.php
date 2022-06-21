<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $table = "maestros";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_usuario', 'id_salon', 'id_ciclo_escolar'

    ];

    // public $timestamps = false;


    public function getNombreMaestroAttribute()
    {
        $getMaestro = User::query()
            ->where('id', $this->id_usuario)
            ->first();
        return $getMaestro->apellido_paterno . ' ' . $getMaestro->apellido_materno . ' ' . $getMaestro->nombre;
    }
    public function getSalonAttribute()
    {
        $getSalon = Salon::query()
            ->where('id', $this->id_salon)
            ->first();
        return $getSalon->nombre_salon;
    }
    public function getCicloEscolarAttribute()
    {
        $getCiclo = CicloEscolar::query()
            ->where('id', $this->id_ciclo_escolar)
            ->first();

        $inicio_ciclo = explode("-", $getCiclo->inicio_ciclo);
        $fin_ciclo = explode("-", $getCiclo->fin_ciclo);
        return $inicio_ciclo[0] . '-' . $fin_ciclo[0];
    }
}

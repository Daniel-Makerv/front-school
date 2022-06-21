<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Estudiante extends Model
{
    protected $table = "estudiantes";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_usuario', 'matricula', 'grado', 'salon', 'id_ciclo_escolar'
    ];
    public function Grado(){
        return $this->hasOne('App\Models\Grado');
     }
    // public $timestamps = false;
    public function Usuario()
    {
        return $this->hasOne(User::class, 'id', 'id_usuario');
    }
   
    public function Salon()
    {
        return $this->hasOne(Salon::class, 'id', 'id_salon');
    }
    public function CicloEscolar()
    {
        return $this->hasOne(CicloEscolar::class, 'id', 'id_ciclo_escolar');
    }
}

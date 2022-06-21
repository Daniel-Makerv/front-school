<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'nombre', 'apellido_paterno', 'apellido_materno', 'telefono', 'fecha_nacimiento', 'sexo', 'email', 'password', 'status', 'id_rol_sistema'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol_sistema()
    {
        return $this->hasOne(RolesSistema::class, 'id', 'id_rol_sistema');
    }

    public function getNombreCompletoAttribute()
    {

        return "{$this->apellido_paterno} {$this->apellido_materno} {$this->nombre}";
    }

    public function getMatriculaAttribute()
    {
        if ($this->id_rol_sistema == 3) {
            $matricula = Estudiante::query()
                ->where('id_usuario', $this->id)
                ->first();
        }
        return $matricula->matricula;
    }
    public function getGradoAttribute()
    {
        $grado = Estudiante::query()
            ->where('id_usuario', $this->id)
            ->first();

        return $grado->grado . '-' . $grado->salon;
    }
    public function getCicloEscolarAttribute()
    {
        $getEstudiante = Estudiante::query()
            ->where('id_usuario', $this->id)
            ->first();
        $getCicloEscolar = CicloEscolar::query()
            ->where('id', $getEstudiante->pluck('id_ciclo_escolar'))
            ->first();

        $inicio_ciclo = explode("-", $getCicloEscolar->inicio_ciclo);
        $fin_ciclo = explode("-", $getCicloEscolar->fin_ciclo);
        return $inicio_ciclo[0] . '-' . $fin_ciclo[0];
    }
}

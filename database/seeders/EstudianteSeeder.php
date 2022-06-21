<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estudiante::insert([
            [
                'id' => 1,
                'id_usuario' => 3,
                'matricula' => '221811690',
                'id_grado' => 1,
                'id_salon' => 1,
                'id_ciclo_escolar' => 1,
            ],
            [
                'id' => 2,
                'id_usuario' => 4,
                'matricula' => '221811691',
                'id_grado' => 1,
                'id_salon' => 1,
                'id_ciclo_escolar' => 1,
            ],
        ]);
    }
}

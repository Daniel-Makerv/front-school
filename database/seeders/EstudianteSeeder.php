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
                'grado' => '1',
                'salon' => 'A',
                'id_ciclo_escolar' => 1,
            ],
            [
                'id' => 2,
                'id_usuario' => 4,
                'matricula' => '221811691',
                'grado' => '1',
                'salon' => 'B',
                'id_ciclo_escolar' => 1,
            ],
            [
                'id' => 3,
                'id_usuario' => 5,
                'matricula' => '221811702',
                'grado' => '1',
                'salon' => 'C',
                'id_ciclo_escolar' => 2,
            ],
        ]);
    }
}

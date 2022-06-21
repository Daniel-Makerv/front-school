<?php

namespace Database\Seeders;

use App\Models\Grado;
use Illuminate\Database\Seeder;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grado::insert([
            [
                'id' => 1,
                'nombre_grado' => '1°',
                'id_ciclo_escolar' => 1,
            ],
            [
                'id' => 2,
                'nombre_grado' => '2°',
                'id_ciclo_escolar' => 1,
            ],
            [
                'id' => 3,
                'nombre_grado' => '3°',
                'id_ciclo_escolar' => 1,
            ],
           
        ]);
    }
}

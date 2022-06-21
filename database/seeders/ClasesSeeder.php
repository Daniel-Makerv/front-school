<?php

namespace Database\Seeders;

use App\Models\Clase;
use Illuminate\Database\Seeder;

class ClasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clase::insert([
            [
                'id' => 1,
                'nombre_clase' => 'Geografia',
                'id_grado' => 1,
                'id_salon' =>  1,

            ],
            [
                'id' => 2,
                'nombre_clase' => 'Matematicas',
                'id_grado' => 1,
                'id_salon' =>  1,

            ],
            [
                'id' => 3,
                'nombre_clase' => 'Español',
                'id_grado' => 1,
                'id_salon' =>  1,
            ],
        ]);
    }
}

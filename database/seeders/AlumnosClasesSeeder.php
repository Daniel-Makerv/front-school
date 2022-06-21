<?php

namespace Database\Seeders;

use App\Models\AlumnosClase;
use Illuminate\Database\Seeder;

class AlumnosClasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlumnosClase::insert([
            [
                'id' => 1,
                'id_clase' => 1,
                'id_alumno' => 1,
            ],
            [
                'id' => 2,
                'id_clase' => 2,
                'id_alumno' => 2,
            ],
           
        ]);
    }
}

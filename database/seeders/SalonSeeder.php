<?php

namespace Database\Seeders;

use App\Models\Salon;
use Illuminate\Database\Seeder;

class SalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salon::insert([
            [
                'id' => 1,
                'nombre_salon' => 'A',
                'id_grado' => 1,
            ],
            [
                'id' => 2,
                'nombre_salon' => 'B',
                'id_grado' => 1,
            ],
            [
                'id' => 3,
                'nombre_salon' => 'C',
                'id_grado' => 1,
            ],
        ]);
    }
}

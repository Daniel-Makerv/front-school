<?php

namespace Database\Seeders;

use App\Models\Maestro;
use Illuminate\Database\Seeder;

class MaestroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maestro::insert([
            [
                'id' => 1,
                'id_usuario' => 2,
                'id_salon' => 1,
                'id_ciclo_escolar' => 1,
            ],
        ]);
    }
}

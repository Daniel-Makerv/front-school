<?php

namespace Database\Seeders;

use App\Models\CicloEscolar;
use Illuminate\Database\Seeder;

class CicloEscolarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CicloEscolar::insert([
            [
                'id' => 1,
                'inicio_ciclo' => '2019-06-20',
                'fin_ciclo' => '2022-06-20',
            ],
            [
                'id' => 2,
                'inicio_ciclo' => '2015-06-20',
                'fin_ciclo' => '2018-06-20',
            ],
            [
                'id' => 3,
                'inicio_ciclo' => '2022-06-20',
                'fin_ciclo' => '2025-06-20',
            ],
        ]);
    }
}

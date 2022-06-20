<?php

namespace Database\Seeders;

use App\Models\RolesSistema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        RolesSistema::insert([
            [
                'id' => 1,
                'tipo_rol' => 'Administrador',
            ],
            [
                'id' => 2,
                'tipo_rol' => 'Maestro',
            ],
            [
                'id' => 3,
                'tipo_rol' => 'Alumno',
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'id' => 1,
                'nombre' => 'Master',
                'apellido_paterno' => 'De La Cruz',
                'apellido_materno' => 'Rivera',
                'telefono' => '7223491801',
                'fecha_nacimiento' => '2000-08-29',
                'sexo' => 'Masculino',
                'email' => 'danieldlcr5@gmail.com',
                'password' => Hash::make('@daniel'),
                'status' => 1,
                'id_rol_sistema' => '1',
            ],
            [
                'id' => 2,
                'nombre' => 'Profesor',
                'apellido_paterno' => 'De La Cruz',
                'apellido_materno' => 'Rivera',
                'telefono' => '7223491801',
                'fecha_nacimiento' => '2000-08-29',
                'sexo' => 'Masculino',
                'email' => 'al221811690@gmail.com',
                'password' => Hash::make('@daniel'),
                'status' => 1,
                'id_rol_sistema' => '2',
            ]

        ]);
    }
}

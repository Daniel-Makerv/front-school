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
            //usuario administrador director
            [
                'id' => 1,
                'nombre' => 'Director',
                'apellido_paterno' => 'De La Cruz',
                'apellido_materno' => 'Rivera',
                'telefono' => '7223491801',
                'fecha_nacimiento' => '2000-08-29',
                'sexo' => 'Masculino',
                'email' => 'danieldlcr5@gmail.com',
                'password' => Hash::make('@daniel'),
                'status' => 1,
                'id_rol_sistema' => 1,
            ],
             //usuario profesor 
            [
                'id' => 2,
                'nombre' => 'Profesor',
                'apellido_paterno' => 'Gonzalez',
                'apellido_materno' => 'Martinez',
                'telefono' => '7223491801',
                'fecha_nacimiento' => '2000-08-29',
                'sexo' => 'Masculino',
                'email' => 'al221811690@gmail.com',
                'password' => Hash::make('@daniel'),
                'status' => 1,
                'id_rol_sistema' => 2,
            ],
            //usuario estudiante 
            [
                'id' => 3,
                'nombre' => 'Miguel',
                'apellido_paterno' => 'Fidel',
                'apellido_materno' => 'Hambriz',
                'telefono' => '7223491801',
                'fecha_nacimiento' => '2000-08-29',
                'sexo' => 'Masculino',
                'email' => 'miguel@gmail.com',
                'password' => Hash::make('@daniel'),
                'status' => 1,
                'id_rol_sistema' => 3,
            ],
            [
                'id' => 4,
                'nombre' => 'Raul',
                'apellido_paterno' => 'Roman',
                'apellido_materno' => 'Cortez',
                'telefono' => '7223491801',
                'fecha_nacimiento' => '2000-08-29',
                'sexo' => 'Masculino',
                'email' => 'raul@gmail.com',
                'password' => Hash::make('@daniel'),
                'status' => 1,
                'id_rol_sistema' => 3,
            ],
            [
                'id' => 5,
                'nombre' => 'Geovanni',
                'apellido_paterno' => 'Gomez',
                'apellido_materno' => 'Rodriguez',
                'telefono' => '7133491801',
                'fecha_nacimiento' => '2001-08-29',
                'sexo' => 'Masculino',
                'email' => 'geovanni@gmail.com',
                'password' => Hash::make('@daniel'),
                'status' => 1,
                'id_rol_sistema' => 3,
            ]

        ]);
    }
}

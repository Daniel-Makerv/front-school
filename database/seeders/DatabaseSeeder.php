<?php

namespace Database\Seeders;

use App\Models\CicloEscolar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolSeeder::class,
            UserSeeder::class,
            TabsSeeder::class,
            CicloEscolarSeeder::class,
            GradoSeeder::class,
            SalonSeeder::class,
            MaestroSeeder::class,
            EstudianteSeeder::class,
        ]);
    }
}

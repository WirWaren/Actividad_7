<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Escuela;

class RoboticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escuela::factory()->count(100)->create();
        //
        /*
        DB::table('escuelas')->insert([
            'nombre' => 'Admon',
            'correo' => 'admon@robotics.com',
            'contraseña' => 'Adm@2022',
            'rol' => 'Administrativo'

        ]);

        DB::table('escuelas')->insert([
            'nombre' => 'Tecmilenio',
            'correo' => 'tecmilenio@robotics.com',
            'contraseña' => 'Adm@2022',
            'rol' => 'Profesor'

        ]);

        DB::table('escuelas')->insert([
            'nombre' => 'Estudiante',
            'correo' => 'student@robotics.com',
            'contraseña' => 'Adm@2022',
            'rol' => 'Estudiante'

        ]);
        */


    }
}

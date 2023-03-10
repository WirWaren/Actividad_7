<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::factory()->count(100)->create();
        /*
        DB::table('cursos')->insert([
            'Llave_Curso' => 'Rob101',
            'Kit_Robotica' => 'Starter Kit',
            'Nombre_Curso' => 'Introduction to Robotics',
        ]);

        DB::table('cursos')->insert([
            'Llave_Curso' => 'Rob102',
            'Kit_Robotica' => 'Starter Kit',
            'Nombre_Curso' => 'Introduction to Automation',
        ]);
        
        DB::table('cursos')->insert([
            'Llave_Curso' => 'Rob103',
            'Kit_Robotica' => 'Educational Robotics Kit',
            'Nombre_Curso' => 'Programming for Robotics',
        ]);

        DB::table('cursos')->insert([
            'Llave_Curso' => 'Rob104',
            'Kit_Robotica' => 'Kit5',
            'Nombre_Curso' => 'Characteristics of a Robot',
        ]);
        */
    }
}

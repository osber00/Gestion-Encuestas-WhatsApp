<?php

namespace Database\Seeders;

use App\Models\Dependencia;
use App\Models\Empleado;
use App\Models\Encuesta;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DataInicialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->admin();
        $this->dependencias();
        $this->empleados();
        //$this->usuarios();
        //$this->encuestas();
    }

    private function admin()
    {
        User::create([
            'name' => 'María Carolina Wihiler',
            'email' => 'maria.wihilerv@cecar.edu.co',
            'password' => bcrypt('d*9e8SXfN24t'),
        ]);
    }

    private function dependencias()
    {
        $dependencias = ['Admisiones','Crédito & Cobranza','Atención de estudiantes','Centro de Idiomas','Icetex'];

        foreach ($dependencias as $dependencia){
            Dependencia::create([
                'nombre' => $dependencia,
                'slug' => Str::slug($dependencia)
            ]);
        }
    }

    private function empleados()
    {
        for ($i=1; $i<=10; $i++){
            Empleado::create([
                'nombres'=> 'Colaborador '.$i,
                'apellidos'=> 'Apellido '.$i,
                'correo'=> 'colaborador'.$i.'@cecar.edu.co',
                'identificacion'=> '987654321'.$i,
                'servicio'=> rand(1000,100000),
                'dependencia_id'=> rand(1,5),
            ]);
        }
    }

    public function usuarios()
    {
        for ($i = 1; $i <= 60; $i++){
            Usuario::create([
                'telefono' => rand(3102341202,3242341202)
            ]);
        }
    }

    public function encuestas()
    {
        for ($i = 1; $i <= 80; $i++){
            Encuesta::create([
                'empleado_id' => rand(1,16),
                'usuario_id' => rand(1,60),
                'p1' => rand(1,5),
                'p2' => rand(0,1),
                'p3' => rand(1,4),
                'p4' => rand(1,5),
                'p5' => rand(1,5),
            ]);
        }
    }
}

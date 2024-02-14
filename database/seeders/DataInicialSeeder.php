<?php

namespace Database\Seeders;

use App\Models\Dependencia;
use App\Models\Empleado;
use App\Models\User;
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
        for ($i=1; $i<=16; $i++){
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
}

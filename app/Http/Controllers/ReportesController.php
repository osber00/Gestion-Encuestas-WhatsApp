<?php

namespace App\Http\Controllers;

use App\Models\Dependencia;
use App\Models\Empleado;
use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    public function reportecolaborador(Empleado $empleado)
    {
        $reporte = Encuesta::where('empleado_id', $empleado->id)
            ->selectRaw('
                AVG(p1) as rta_p1,
                AVG(p2) as rta_p2,
                AVG(p3) as rta_p3,
                AVG(p4) as rta_p4,
                AVG(p5) as rta_p5')->first();

        $pregunta1 = round($reporte->rta_p1);
        $pregunta2 = $reporte->rta_p2 * 100;
        $pregunta3 = round($reporte->rta_p3);
        $pregunta4 = round($reporte->rta_p4);
        $pregunta5 = round($reporte->rta_p5);

        $numero_encuestas = Encuesta::where('empleado_id',$empleado->id)->count();

        //dd($reporte, $pregunta1, $pregunta2, $pregunta3, $pregunta4, $pregunta5);
        $mensajes = Encuesta::where('empleado_id',$empleado->id)->where('observaciones','<>', null)->orderBy('id','desc')->get();
        return view('reportes.reporte-colaborador', compact('empleado','numero_encuestas','pregunta1','pregunta2','pregunta3','pregunta4','pregunta5', 'mensajes'));
    }

    public function reportedependencia(Dependencia $dependencia)
    {
        $numero_encuestas =  Encuesta::join('empleados', 'encuestas.empleado_id', '=', 'empleados.id')
            ->where('empleados.dependencia_id', $dependencia->id)
            ->count();
        $respuestas_p1 = $this->reportePregunta1($dependencia->id);
        $respuestas_p2 = $this->reportePregunta2($dependencia->id);
        $respuestas_p3 = $this->reportePregunta3($dependencia->id);
        $respuestas_p4 = $this->reportePregunta4($dependencia->id);
        $respuestas_p5 = $this->reportePregunta5($dependencia->id);
        //dd($respuestas_p1, $respuestas_p2, $respuestas_p3, $respuestas_p4, $respuestas_p5);
        return view('reportes.reporte-dependencia', compact('dependencia','numero_encuestas','respuestas_p1','respuestas_p2','respuestas_p3','respuestas_p4','respuestas_p5'));
    }

    private function reportePregunta1($dependencia_id)
    {
        return DB::table('empleados')
            ->join('encuestas', 'empleados.id', '=', 'encuestas.empleado_id')
            ->where('empleados.dependencia_id', $dependencia_id)
            ->selectRaw('
                    ROUND((SUM(CASE WHEN p1 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_1,
                    ROUND((SUM(CASE WHEN p1 = 2 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_2,
                    ROUND((SUM(CASE WHEN p1 = 3 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_3,
                    ROUND((SUM(CASE WHEN p1 = 4 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_4,
                    ROUND((SUM(CASE WHEN p1 = 5 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_5')->first();
    }

    private function reportePregunta2($dependencia_id)
    {
        return DB::table('empleados')
            ->join('encuestas', 'empleados.id', '=', 'encuestas.empleado_id')
            ->where('empleados.dependencia_id', $dependencia_id)
            ->selectRaw('
                    ROUND((SUM(CASE WHEN p2 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_1,
                    ROUND((SUM(CASE WHEN p2 = 0 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_2')->first();
    }

    private function reportePregunta3($dependencia_id)
    {
        return DB::table('empleados')
            ->join('encuestas', 'empleados.id', '=', 'encuestas.empleado_id')
            ->where('empleados.dependencia_id', $dependencia_id)
            ->selectRaw('
                    ROUND((SUM(CASE WHEN p3 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_1,
                    ROUND((SUM(CASE WHEN p3 = 2 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_2,
                    ROUND((SUM(CASE WHEN p3 = 3 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_3,
                    ROUND((SUM(CASE WHEN p3 = 4 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_4')->first();
    }

    private function reportePregunta4($dependencia_id)
    {
        return DB::table('empleados')
            ->join('encuestas', 'empleados.id', '=', 'encuestas.empleado_id')
            ->where('empleados.dependencia_id', $dependencia_id)
            ->selectRaw('
                    ROUND((SUM(CASE WHEN p4 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_1,
                    ROUND((SUM(CASE WHEN p4 = 2 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_2,
                    ROUND((SUM(CASE WHEN p4 = 3 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_3,
                    ROUND((SUM(CASE WHEN p4 = 4 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_4,
                    ROUND((SUM(CASE WHEN p4 = 5 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_5')->first();
    }

    private function reportePregunta5($dependencia_id)
    {
        return DB::table('empleados')
            ->join('encuestas', 'empleados.id', '=', 'encuestas.empleado_id')
            ->where('empleados.dependencia_id', $dependencia_id)
            ->selectRaw('
                    ROUND((SUM(CASE WHEN p5 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_1,
                    ROUND((SUM(CASE WHEN p5 = 2 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_2,
                    ROUND((SUM(CASE WHEN p5 = 3 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_3,
                    ROUND((SUM(CASE WHEN p5 = 4 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_4,
                    ROUND((SUM(CASE WHEN p5 = 5 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_5')->first();
    }
}

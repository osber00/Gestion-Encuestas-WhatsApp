<?php

namespace App\Http\Controllers;

use App\Exports\ReporteGeneralExport;
use App\Models\Encuesta;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InicioController extends Controller
{
    public function inicio()
    {
        $numero_encuestas = Encuesta::count();
        $res_p1 = $this->porcentaje_respuestas_pregunta1();
        $res_p2 = $this->porcentaje_respuestas_pregunta2();
        $res_p3 = $this->porcentaje_respuestas_pregunta3();
        $res_p4 = $this->porcentaje_respuestas_pregunta4();
        $res_p5 = $this->porcentaje_respuestas_pregunta5();
        $respuestas_p1 = $res_p1[0];
        $respuestas_p2 = $res_p2[0];
        $respuestas_p3 = $res_p3[0];
        $respuestas_p4 = $res_p4[0];
        $respuestas_p5 = $res_p5[0];
        //dd($respuestas_p1->rta_3);
        //dd($respuestas_p2);
        //$example = $this->contar_respuestas_pregunta5();
        //dd($example);
        return view('inicio.inicio', compact('numero_encuestas',
            'respuestas_p1','respuestas_p2', 'respuestas_p3', 'respuestas_p4', 'respuestas_p5'
        ));

    }

    public function descargar_reporte_general()
    {
        $numero_encuestas = Encuesta::count();
        $res_p1 = $this->porcentaje_respuestas_pregunta1();
        $res_p2 = $this->porcentaje_respuestas_pregunta2();
        $res_p3 = $this->porcentaje_respuestas_pregunta3();
        $res_p4 = $this->porcentaje_respuestas_pregunta4();
        $res_p5 = $this->porcentaje_respuestas_pregunta5();
        $respuestas_p1 = $res_p1[0];
        $respuestas_p2 = $res_p2[0];
        $respuestas_p3 = $res_p3[0];
        $respuestas_p4 = $res_p4[0];
        $respuestas_p5 = $res_p5[0];

        $cont_res_p1 = $this->contar_respuestas_pregunta1();
        $cont_res_p2 = $this->contar_respuestas_pregunta2();
        $cont_res_p3 = $this->contar_respuestas_pregunta3();
        $cont_res_p4 = $this->contar_respuestas_pregunta4();
        $cont_res_p5 = $this->contar_respuestas_pregunta5();
        return Excel::download(
            new ReporteGeneralExport(
                $respuestas_p1,
                $respuestas_p2,
                $respuestas_p3,
                $respuestas_p4,
                $respuestas_p5,
                $cont_res_p1,
                $cont_res_p2,
                $cont_res_p3,
                $cont_res_p4,
                $cont_res_p5,
                $numero_encuestas
            ),
            'Reporte General.xlsx');
    }

    private function porcentaje_respuestas_pregunta1()
    {
        $porcentajes = Encuesta::selectRaw('
            ROUND((SUM(CASE WHEN p1 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_1,
            ROUND((SUM(CASE WHEN p1 = 2 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_2,
            ROUND((SUM(CASE WHEN p1 = 3 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_3,
            ROUND((SUM(CASE WHEN p1 = 4 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_4,
            ROUND((SUM(CASE WHEN p1 = 5 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_5')->get();
        return $porcentajes;
    }

    private function porcentaje_respuestas_pregunta2()
    {
        $porcentajes = Encuesta::selectRaw('
            ROUND((SUM(CASE WHEN p2 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_1,
            ROUND((SUM(CASE WHEN p2 = 0 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_2')->get();
        return $porcentajes;
    }

    private function porcentaje_respuestas_pregunta3()
    {
        $porcentajes = Encuesta::selectRaw('
            ROUND((SUM(CASE WHEN p3 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_1,
            ROUND((SUM(CASE WHEN p3 = 2 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_2,
            ROUND((SUM(CASE WHEN p3 = 3 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_3,
            ROUND((SUM(CASE WHEN p3 = 4 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_4')->get();
        return $porcentajes;
    }

    private function porcentaje_respuestas_pregunta4()
    {
        $porcentajes = Encuesta::selectRaw('
            ROUND((SUM(CASE WHEN p4 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_1,
            ROUND((SUM(CASE WHEN p4 = 2 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_2,
            ROUND((SUM(CASE WHEN p4 = 3 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_3,
            ROUND((SUM(CASE WHEN p4 = 4 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_4,
            ROUND((SUM(CASE WHEN p4 = 5 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_5')->get();
        return $porcentajes;
    }

    private function porcentaje_respuestas_pregunta5()
    {
        $porcentajes = Encuesta::selectRaw('
            ROUND((SUM(CASE WHEN p5 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_1,
            ROUND((SUM(CASE WHEN p5 = 2 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_2,
            ROUND((SUM(CASE WHEN p5 = 3 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_3,
            ROUND((SUM(CASE WHEN p5 = 4 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_4,
            ROUND((SUM(CASE WHEN p5 = 5 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as rta_5')->get();
        return $porcentajes;
    }

    private function contar_respuestas_pregunta1()
    {
        $respuestasP1 = Encuesta::selectRaw('
            SUM(CASE WHEN p1 = 1 THEN 1 ELSE 0 END) as rta_1,
            SUM(CASE WHEN p1 = 2 THEN 1 ELSE 0 END) as rta_2,
            SUM(CASE WHEN p1 = 3 THEN 1 ELSE 0 END) as rta_3,
            SUM(CASE WHEN p1 = 4 THEN 1 ELSE 0 END) as rta_4,
            SUM(CASE WHEN p1 = 5 THEN 1 ELSE 0 END) as rta_5
        ')->first();

        return $respuestasP1;
    }

    private function contar_respuestas_pregunta2()
    {
        $respuestasP2 = Encuesta::selectRaw('
            SUM(CASE WHEN p2 = 1 THEN 1 ELSE 0 END) as rta_1,
            SUM(CASE WHEN p2 = 0 THEN 1 ELSE 0 END) as rta_2
        ')->first();

        return $respuestasP2;
    }

    private function contar_respuestas_pregunta3()
    {
        $respuestasP3 = Encuesta::selectRaw('
            SUM(CASE WHEN p3 = 1 THEN 1 ELSE 0 END) as rta_1,
            SUM(CASE WHEN p3 = 2 THEN 1 ELSE 0 END) as rta_2,
            SUM(CASE WHEN p3 = 3 THEN 1 ELSE 0 END) as rta_3,
            SUM(CASE WHEN p3 = 4 THEN 1 ELSE 0 END) as rta_4
        ')->first();

        return $respuestasP3;
    }

    private function contar_respuestas_pregunta4()
    {
        $respuestasP4 = Encuesta::selectRaw('
            SUM(CASE WHEN p4 = 1 THEN 1 ELSE 0 END) as rta_1,
            SUM(CASE WHEN p4 = 2 THEN 1 ELSE 0 END) as rta_2,
            SUM(CASE WHEN p4 = 3 THEN 1 ELSE 0 END) as rta_3,
            SUM(CASE WHEN p4 = 4 THEN 1 ELSE 0 END) as rta_4,
            SUM(CASE WHEN p4 = 5 THEN 1 ELSE 0 END) as rta_5
        ')->first();

        return $respuestasP4;
    }

    private function contar_respuestas_pregunta5()
    {
        $respuestasP5 = Encuesta::selectRaw('
            SUM(CASE WHEN p5 = 1 THEN 1 ELSE 0 END) as rta_1,
            SUM(CASE WHEN p5 = 2 THEN 1 ELSE 0 END) as rta_2,
            SUM(CASE WHEN p5 = 3 THEN 1 ELSE 0 END) as rta_3,
            SUM(CASE WHEN p5 = 4 THEN 1 ELSE 0 END) as rta_4,
            SUM(CASE WHEN p5 = 5 THEN 1 ELSE 0 END) as rta_5
        ')->first();

        return $respuestasP5;
    }
}

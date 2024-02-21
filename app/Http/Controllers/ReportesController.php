<?php

namespace App\Http\Controllers;

use App\Models\Dependencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    public function reportexdependencias()
    {
        $dependencias = Dependencia::all();
        return view('reportes.reportexdependencias', compact('dependencias'));
    }

    public function reportedependencia(Dependencia $dependencia)
    {
        $informe = DB::table('empleados')
            ->join('encuestas', 'empleados.id', '=', 'encuestas.empleado_id')
            ->where('empleados.dependencia_id', $dependencia->id)
            ->selectRaw('
                    ROUND((SUM(CASE WHEN p1 = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as p1_1,
                    ROUND((SUM(CASE WHEN p1 = 2 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as p1_2,
                    ROUND((SUM(CASE WHEN p1 = 3 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as p1_3,
                    ROUND((SUM(CASE WHEN p1 = 4 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as p1_4,
                    ROUND((SUM(CASE WHEN p1 = 5 THEN 1 ELSE 0 END) / COUNT(*)) * 100, 2) as p1_5
                ')
            ->first();

        return $informe;
    }
}

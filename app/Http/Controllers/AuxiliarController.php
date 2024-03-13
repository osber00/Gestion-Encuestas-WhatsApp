<?php

namespace App\Http\Controllers;

use App\Constants\Constastes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuxiliarController extends Controller
{
    public static function formatoFecha($fecha)
    {
        $fechaTemp = Carbon::parse($fecha);
        $mes = Constastes::$meses[($fechaTemp->format('n')) - 1];
        $dia = Constastes::$dias[($fechaTemp->format('l'))];
        return $dia.' '.$fechaTemp->format('d').' de '.$mes.' '.$fechaTemp->format('h:i:s A');
    }
}

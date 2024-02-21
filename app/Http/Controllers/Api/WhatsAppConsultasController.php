<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use App\Models\Encuesta;
use App\Models\Usuario;
use Illuminate\Http\Request;

class WhatsAppConsultasController extends Controller
{

    public function consultartelefono($telefono)
    {
        $existe = Usuario::where('telefono',$telefono)->first();
        if ($existe == null){
            $usuario = Usuario::create([
                'telefono' => $telefono
            ]);
            return response()->json(['usuario_id'=> $usuario->id]);
        }else{
            return response()->json(['usuario_id'=> $existe->id]);
        }

    }

    public function empleadoservicio($servicio, $telefono)
    {
        $usuario = Usuario::where('telefono', $telefono)->first();
        $empleado = Empleado::with('dependencia')->where('activo',true)->where('servicio',$servicio)->first();
        $hoy = now()->toDateString();
        if ($usuario != null && $empleado != null){
            $encuestaHoy = Encuesta::where('usuario_id', $usuario->id)
                ->where('empleado_id',$empleado->id)
                ->whereDate('created_at', $hoy)
                ->exists();
            if ($encuestaHoy){
                return response()->json(['encuesta_hoy'=>true]);
            }
        }


        if ($empleado){
            return response()->json(['usuario' => $empleado]);
        }else{
            return 'false';
        }
    }

    public function guardarencuesta(Request $request)
    {
        $p2 = $request->pregunta2 == 'true' ? 1 : 0;
        $encuesta = Encuesta::create([
            'empleado_id' => $request->empleado_id,
            'usuario_id' => $request->usuario_id,
            'p1' => $request->pregunta1,
            'p2' => $p2,
            'p3' => $request->pregunta3,
            'p4' => $request->pregunta4,
            'p5' => $request->pregunta5,
            'observaciones' => null,
        ]);
        return response()->json(['encuesta' => $encuesta->id]);
    }
}

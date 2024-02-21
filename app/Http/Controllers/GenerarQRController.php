<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GenerarQRController extends Controller
{
    public function generarQR(Empleado $empleado)
    {
        $numero_bot = env('NUMERO_WHATSAPP');
        $url = URL::to("https://wa.me/".$numero_bot."?text=Hola!%20quiero%20hacer%20la%20encuesta%20de%20satisfacci%C3%B3n%20del%20servicio%20".$empleado->servicio);
        $qr_imagen = public_path("qrcodes/".Str::slug($empleado->nombres)."-".Str::slug($empleado->apellidos).".svg");
        QrCode::format('svg')
            ->size(400)
            //->eye('square')
            //->style('square')
            //->color(0,0,0)
            //->backgroundColor(255,255,255)
            ->generate($url, $qr_imagen);

        if (file_exists($qr_imagen)){
            $nombreImagen = basename($qr_imagen);
            $urlDescargaImagenQr = asset('qrcodes/'.$nombreImagen);
            //return response()->download($urlDescargaImagenQr);
            return redirect()->away($urlDescargaImagenQr);
        }

        return false;

    }
}

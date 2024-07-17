<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class ReporteGeneralExport implements FromView, WithTitle, ShouldAutoSize
{
    private $respuestas_p1;
    private $respuestas_p2;
    private $respuestas_p3;
    private $respuestas_p4;
    private $respuestas_p5;
    private $cont_resp1;
    private $cont_resp2;
    private $cont_resp3;
    private $cont_resp4;
    private $cont_resp5;
    private $num_encuestas;

    public function __construct($respuestas_p1, $respuestas_p2, $respuestas_p3, $respuestas_p4, $respuestas_p5, $cont_resp1, $cont_resp2, $cont_resp3, $cont_resp4, $cont_resp5, $num_encuestas)
    {
        $this->respuestas_p1 = $respuestas_p1;
        $this->respuestas_p2 = $respuestas_p2;
        $this->respuestas_p3 = $respuestas_p3;
        $this->respuestas_p4 = $respuestas_p4;
        $this->respuestas_p5 = $respuestas_p5;

        $this->cont_resp1 = $cont_resp1;
        $this->cont_resp2 = $cont_resp2;
        $this->cont_resp3 = $cont_resp3;
        $this->cont_resp4 = $cont_resp4;
        $this->cont_resp5 = $cont_resp5;

        $this->num_encuestas = $num_encuestas;
    }

    public function view(): View
    {
        $respuestas_p1 = $this->respuestas_p1;
        $respuestas_p2 = $this->respuestas_p2;
        $respuestas_p3 = $this->respuestas_p3;
        $respuestas_p4 = $this->respuestas_p4;
        $respuestas_p5 = $this->respuestas_p5;
        $cont_resp1 = $this->cont_resp1;
        $cont_resp2 = $this->cont_resp2;
        $cont_resp3 = $this->cont_resp3;
        $cont_resp4 = $this->cont_resp4;
        $cont_resp5 = $this->cont_resp5;
        $num_encuestas = $this->num_encuestas;
        return view('exports.reporte-general',compact('respuestas_p1','respuestas_p2','respuestas_p3','respuestas_p4','respuestas_p5', 'cont_resp1','cont_resp2','cont_resp3','cont_resp4','cont_resp5','num_encuestas'));
    }

    public function title(): string
    {
        return 'Reporte general';
    }
}

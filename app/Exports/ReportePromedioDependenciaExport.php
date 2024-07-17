<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class ReportePromedioDependenciaExport implements FromView, WithTitle, ShouldAutoSize
{
    private $dependencia;
    private $promedios;
    private $num_encuestas;

    public function __construct($dependencia, $promedios, $num_encuestas)
    {
        $this->dependencia = $dependencia;
        $this->promedios = $promedios;
        $this->num_encuestas = $num_encuestas;

    }

    public function view(): View
    {
        $promedios = $this->promedios;
        $num_encuestas = $this->num_encuestas;
        return view('exports.reporte-promedio-dependencia', compact('promedios','num_encuestas'));
    }

    public function title(): string
    {
        return $this->dependencia;
    }
}

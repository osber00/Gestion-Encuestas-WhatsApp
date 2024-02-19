<?php

namespace App\Http\Livewire\Dependencias;

use App\Models\Dependencia;
use Livewire\Component;

class IndexDependencias extends Component
{

    public $dependencias = [];

    public function mount()
    {
        $this->dependencias = Dependencia::all();
    }

    public function editarDependencia($dependencia)
    {
        $this->emitTo('dependencias.editar-dependencia','editar-dependencia-modal', $dependencia);
    }

    public function render()
    {
        return view('livewire.dependencias.index-dependencias')->layout('layouts.admin-layout');
    }
}

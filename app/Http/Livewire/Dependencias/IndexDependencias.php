<?php

namespace App\Http\Livewire\Dependencias;

use App\Models\Dependencia;
use Livewire\Component;

class IndexDependencias extends Component
{

    public $dependencias = [];
    public $feedback;

    public function mount()
    {
        $this->feedback = null;
        $this->dependencias = Dependencia::all();
    }

    protected $listeners = [
        'actualizar'
    ];

    public function actualizar($data)
    {
        $this->feedback = $data;
        $this->dependencias = Dependencia::all();
    }

    public function crearDependencia()
    {
        $this->reset('feedback');
        $this->emitTo('dependencias.crear-dependencia', 'crear-dependencia-modal');
    }

    public function editarDependencia(Dependencia $dependencia)
    {
        $this->reset('feedback');
        $this->emitTo('dependencias.editar-dependencia','editar-dependencia-modal', $dependencia);
    }

    public function render()
    {
        return view('livewire.dependencias.index-dependencias')->layout('layouts.admin-layout');
    }
}

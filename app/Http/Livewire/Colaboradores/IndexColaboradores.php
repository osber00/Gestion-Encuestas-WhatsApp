<?php

namespace App\Http\Livewire\Colaboradores;

use App\Models\Empleado;
use Livewire\Component;

class IndexColaboradores extends Component
{
    public $empleados = [];
    public $feedback;

    public function mount()
    {
        $this->feedback = null;
        $this->empleados = Empleado::all();
    }

    protected $listeners = [
        'actualizar'
    ];

    public function actualizar($data)
    {
        $this->feedback = $data;
        $this->empleados = Empleado::all();
    }

    public function crearColaborador()
    {
        $this->reset('feedback');
        $this->emitTo('colaboradores.crear-colaborador', 'crear-colaborador-modal');
    }

    public function editarColaborador(Empleado $empleado)
    {
        $this->reset('feedback');
        $this->emitTo('colaboradores.editar-colaborador','editar-colaborador-modal', $empleado);
    }

    public function render()
    {
        return view('livewire.colaboradores.index-colaboradores')->layout('layouts.admin-layout');
    }
}

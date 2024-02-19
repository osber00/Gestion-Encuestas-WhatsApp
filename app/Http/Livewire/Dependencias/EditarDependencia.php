<?php

namespace App\Http\Livewire\Dependencias;

use Livewire\Component;

class EditarDependencia extends Component
{

    protected $listeners = [
        'editar-dependencia-modal' => 'editardependenciamodal'
    ];

    public function editardependenciamodal($dependencia)
    {

        $this->emit('modal-edicion-dependencia');
    }

    public function render()
    {
        return view('livewire.dependencias.editar-dependencia')->layout('layouts.admin-layout');
    }
}

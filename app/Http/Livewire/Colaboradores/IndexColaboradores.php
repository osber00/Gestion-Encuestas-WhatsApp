<?php

namespace App\Http\Livewire\Colaboradores;

use App\Models\Empleado;
use Livewire\Component;
use Livewire\WithPagination;

class IndexColaboradores extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $busqueda = '';
    public $feedback;

    public function mount()
    {
        $this->feedback = null;
        //$this->empleados = Empleado::all();
    }

    protected $listeners = [
        'actualizar'
    ];

    public function actualizar($data)
    {
        $this->feedback = $data;
        //$this->empleados = Empleado::all();
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

    public function updatedBusqueda()
    {
        $this->resetPage();
    }

    public function render()
    {
        $empleados = Empleado::where(function($query) {
            $query->where('nombres', 'like', '%'.$this->busqueda.'%')
                ->orWhere('apellidos', 'like', '%'.$this->busqueda.'%')
                ->orWhere('correo', 'like', '%'.$this->busqueda.'%')
                ->orWhere('identificacion', 'like', '%'.$this->busqueda.'%');
            })->paginate(10);
        return view('livewire.colaboradores.index-colaboradores', compact('empleados'))->layout('layouts.admin-layout');
    }
}

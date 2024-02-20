<?php

namespace App\Http\Livewire\Colaboradores;

use App\Models\Dependencia;
use App\Models\Empleado;
use Livewire\Component;

class EditarColaborador extends Component
{
    public $empleado;
    public $nombres;
    public $apellidos;
    public $correo;
    public $identificacion;
    public $servicio;
    public $dependencia_id;
    public $activo;
    public $duplicidad;
    public $dependencias;

    public function mount(Empleado $empleado)
    {
        $this->empleado = $empleado;
        $this->nombres = $empleado->nombres;
        $this->apellidos = $empleado->apellidos;
        $this->correo = $empleado->correo;
        $this->identificacion = $empleado->identificacion;
        $this->servicio = $empleado->servicio;
        $this->dependencia_id = $empleado->dependencia_id;
        $this->activo = $empleado->activo;
        $this->duplicidad = false;
        $this->dependencias = Dependencia::all();
    }

    protected function getRules()
    {
        return [
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|string|email|unique:empleados,correo,' . $this->empleado->id,
            'identificacion' => 'required|string|max:255|unique:empleados,identificacion,' . $this->empleado->id,
            'servicio' => 'required|string|max:255',
            'dependencia_id' => 'required|exists:dependencias,id',
            'activo' => 'required|boolean',
        ];
    }

    protected $listeners = [
        'editar-colaborador-modal' => 'editarColaboradorModal'
    ];


    public function editarColaboradorModal(Empleado $empleado)
    {
        $this->empleado = $empleado;
        $this->nombres = $empleado->nombres;
        $this->apellidos = $empleado->apellidos;
        $this->correo = $empleado->correo;
        $this->identificacion = $empleado->identificacion;
        $this->servicio = $empleado->servicio;
        $this->dependencia_id = $empleado->dependencia_id;
        $this->activo = $empleado->activo;
        $this->duplicidad = false;
        $this->resetValidation();
        $this->emit('modal-edicion-colaborador');
    }

    public function update()
    {
        $this->validate();
        $this->empleado->update([
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'correo' => $this->correo,
            'identificacion' => $this->identificacion,
            'servicio' => $this->servicio,
            'dependencia_id' => $this->dependencia_id,
            'activo' => $this->activo,
        ]);

        $this->emit('cerrar-modal-edicion-colaborador');
        $this->emitTo('colaboradores.index-colaboradores', 'actualizar', [
            'tipo' => 'success',
            'mje' => 'El empleado se actualizó correctamente',
            'icono' => 'check'
        ]);
    }

    public function render()
    {
        return view('livewire.colaboradores.editar-colaborador')->layout('layouts.admin-layout');
    }
}

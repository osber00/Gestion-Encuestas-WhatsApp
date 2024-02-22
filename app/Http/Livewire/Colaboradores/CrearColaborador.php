<?php

namespace App\Http\Livewire\Colaboradores;

use App\Models\Dependencia;
use App\Models\Empleado;
use Livewire\Component;

class CrearColaborador extends Component
{

    public $nombres;
    public $apellidos;
    public $correo;
    public $identificacion;
    public $servicio;
    public $dependencia_id;
    public $activo;
    public $duplicidad;
    public $dependencias;

    public function mount()
    {
        $this->resetInputFields();
        $this->dependencias = Dependencia::all();
    }

    protected $listeners = [
        'crear-colaborador-modal' => 'crearColaboradorModal'
    ];

    protected function resetInputFields()
    {
        $this->nombres = null;
        $this->apellidos = null;
        $this->correo = null;
        $this->identificacion = null;
        $this->servicio = null;
        $this->dependencia_id = null;
        $this->activo = null;
        $this->duplicidad = false;
    }

    protected function getRules()
    {
        return [
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|string|email|unique:empleados,correo',
            'identificacion' => 'required|string|max:255|unique:empleados,identificacion',
            'servicio' => 'required|string|max:255',
            'dependencia_id' => 'required|exists:dependencias,id',
            'activo' => 'required'
        ];
    }

    public function crearColaboradorModal()
    {
        $this->resetValidation();
        $this->resetInputFields();
        $this->emit('modal-creacion-colaborador');
    }

    public function create()
    {
        $this->validate();
        $existe = Empleado::where('correo', $this->correo)->exists();
        if (!$existe) {
            $empleado = new Empleado();
            $empleado->nombres = $this->nombres;
            $empleado->apellidos = $this->apellidos;
            $empleado->correo = $this->correo;
            $empleado->identificacion = $this->identificacion;
            $empleado->servicio = $this->servicio;
            $empleado->dependencia_id = $this->dependencia_id;
            $empleado->activo = $this->activo;
            $empleado->save();

            $this->resetInputFields();

            $this->emit('cerrar-modal-creacion-colaborador');
            $this->emitTo('colaboradores.index-colaboradores', 'actualizar',
                [
                    'tipo' => 'success',
                    'mje' => 'El empleado se creó correctamente',
                    'icono' => 'check'
                ]
            );
        } else {
            $this->duplicidad = true;
        }
    }


    public function render()
    {
        return view('livewire.colaboradores.crear-colaborador')->layout('layouts.admin-layout');
    }
}

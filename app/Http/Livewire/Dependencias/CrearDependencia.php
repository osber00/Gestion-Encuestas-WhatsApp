<?php

namespace App\Http\Livewire\Dependencias;

use App\Models\Dependencia;
use Illuminate\Support\Str;
use Livewire\Component;

class CrearDependencia extends Component
{
    public $nombre;
    public $duplicidad;

    public function mount()
    {
        $this->nombre = null;
        $this->duplicidad = false;
    }

    protected $listeners = [
        'crear-dependencia-modal' => 'creardependenciamodal'
    ];

    protected function getRules()
    {
        return [
            'nombre' => 'required|min:3|max:80|unique:dependencias,slug',
        ];
    }

    public function creardependenciamodal()
    {
        $this->resetValidation();
        $this->reset('duplicidad','nombre');
        $this->emit('modal-creacion-dependencia');
    }

    public function create()
    {
        //sleep(3);
        $this->validate();
        $existe = Dependencia::where('slug', Str::slug($this->nombre))->exists();
        if (!$existe) {
            $dependencia = new Dependencia();
            $dependencia->nombre = $this->nombre;
            $dependencia->slug = Str::slug($this->nombre);
            $dependencia->save();
            $this->reset('nombre');
            $this->emit('cerrar-modal-creacion-dependencia');
            $this->emitTo('dependencias.index-dependencias', 'actualizar',
                [
                    'tipo' => 'success',
                    'mje' => 'La dependencia se creó correctamente',
                    'icono' => 'check'
                ]
            );
        } else {
            $this->duplicidad = true;
        }
    }

    public function render()
    {
        return view('livewire.dependencias.crear-dependencia')->layout('layouts.admin-layout');
    }
}

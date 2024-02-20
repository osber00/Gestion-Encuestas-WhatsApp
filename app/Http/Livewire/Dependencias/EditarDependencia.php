<?php

namespace App\Http\Livewire\Dependencias;

use App\Models\Dependencia;
use Illuminate\Support\Str;
use Livewire\Component;

class EditarDependencia extends Component
{
    public $dependencia_id, $nombre;
    public $duplicidad;

    public function mount()
    {
        $this->dependencia_id = null;
        $this->nombre = null;
        $this->duplicidad = false;
    }

    protected $listeners = [
        'editar-dependencia-modal' => 'editardependenciamodal'
    ];

    protected function getRules()
    {
        return [
            'nombre' => 'required|min:3|max:80'
        ];
    }

    public function editardependenciamodal(Dependencia $dependencia)
    {
        $this->resetValidation();
        $this->reset('duplicidad');
        $this->dependencia_id = $dependencia->id;
        $this->nombre = $dependencia->nombre;
        $this->emit('modal-edicion-dependencia');
    }

    public function update()
    {
        sleep(3);
        $this->validate();
        $existe = Dependencia::where('id','<>', $this->dependencia_id)->where('slug',Str::slug($this->nombre))->exists();
        if ($existe == false){
            $model = Dependencia::find($this->dependencia_id);
            $model->nombre = $this->nombre;
            $model->save();
            $this->reset('duplicidad');
            $this->emit('cerrar-modal-edicion-dependencia');
            $this->emitTo('dependencias.index-dependencias','actualizar',
                [
                    'tipo'=> 'success',
                    'mje'=> 'La información de la dependencia se modificó',
                    'icono' => 'check'
                ]
            );
        }else{
            $this->duplicidad = true;
        }
    }

    public function render()
    {
        return view('livewire.dependencias.editar-dependencia')->layout('layouts.admin-layout');
    }
}

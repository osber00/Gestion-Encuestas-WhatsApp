<div class="modal fade text-start" wire:ignore.self id="modal-creacion-colaborador" tabindex="-1" aria-labelledby="modalcreacion" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear nuevo colaborador</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="create">
                <div class="modal-body">
                    @if($duplicidad)
                        <x-informacion tipo="danger" icono="ban">¡El colaborador ya existe!</x-informacion>
                    @endif
                    <div wire:loading wire:target="create" class="w-full text-center">
                        <p class="badge bg-label-danger text-center"><i class="fa fa-circle-notch fa-spin"></i> Procesando, espere por favor</p>
                    </div>
                    <div class="mb-1">
                        <label>Nombres:</label>
                        <input type="text" wire:model.defer='nombres' placeholder="Nombres del empleado" class="form-control" autocomplete="off" />
                        @error('nombres')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label>Apellidos:</label>
                        <input type="text" wire:model.defer='apellidos' placeholder="Apellidos del empleado" class="form-control" autocomplete="off" />
                        @error('apellidos')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label>Correo:</label>
                        <input type="email" wire:model.defer='correo' placeholder="Correo electrónico del empleado" class="form-control" autocomplete="off" />
                        @error('correo')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label>Identificación:</label>
                        <input type="text" wire:model.defer='identificacion' placeholder="Identificación del empleado" class="form-control" autocomplete="off" />
                        @error('identificacion')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label>Servicio:</label>
                        <input type="text" wire:model.defer='servicio' placeholder="Servicio del empleado" class="form-control" autocomplete="off" />
                        @error('servicio')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label>Dependencia:</label>
                        <select wire:model.defer='dependencia_id' class="form-control">
                            <option value="">Seleccione una dependencia</option>
                            @foreach($dependencias as $dependencia)
                                <option value="{{$dependencia->id}}">{{$dependencia->nombre}}</option>
                            @endforeach
                        </select>
                        @error('dependencia_id')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label>Activo</label>
                        <select wire:model.defer='activo' class="form-control">
                            <option value="null">Seleccione el estado</option>
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                        @error('activo')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" wire:loading.remove wire:target="create">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('modal-creacion-colaborador',()=>{
            $('#modal-creacion-colaborador').modal('show');
        })

        Livewire.on('cerrar-modal-creacion-colaborador',()=>{
            $('#modal-creacion-colaborador').modal('hide')
        })
    </script>
@endpush

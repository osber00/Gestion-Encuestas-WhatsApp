<div class="modal fade text-start" wire:ignore.self id="modal-creacion-dependencia" tabindex="-1" aria-labelledby="modalcreacion" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear nueva dependencia</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="create">
                <div class="modal-body">
                    @if($duplicidad)
                        <x-informacion tipo="danger" icono="ban">¡La dependencia ya existe!</x-informacion>
                    @endif
                    <div wire:loading wire:target="create" class="w-full text-center">
                        <p class="badge bg-label-danger text-center"><i class="fa fa-circle-notch fa-spin"></i> Procesando, espere por favor</p>
                    </div>
                    <div class="mb-1">
                        <label>Nombre: </label>
                        <input type="text" wire:model.defer='nombre' placeholder="Nombre de la dependencia" class="form-control" autocomplete="off" />
                        @error('nombre')
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
        Livewire.on('modal-creacion-dependencia',()=>{
            $('#modal-creacion-dependencia').modal('show');
        })

        Livewire.on('cerrar-modal-creacion-dependencia',()=>{
            $('#modal-creacion-dependencia').modal('hide')
        })
    </script>
@endpush

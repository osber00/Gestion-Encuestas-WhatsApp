<div class="modal fade text-start" wire:ignore.self id="modal-edicion-dependencia" tabindex="-1" aria-labelledby="modaledicion" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modaledicion">Modificar dependencia</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="store">
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" wire:loading.remove wire:target="update">Guardar</button>
                    <button type="button" class="btn btn-outline-primary" wire:loading wire:target="update">Procesando...</button>
                </div>

            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('modal-edicion-dependencia',()=>{
            $('#modal-edicion-dependencia').modal('show');
        })
    </script>
@endpush

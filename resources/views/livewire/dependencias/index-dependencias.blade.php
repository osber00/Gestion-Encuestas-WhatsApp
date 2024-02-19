<div>
    <x-titulo-pagina>Dependencias</x-titulo-pagina>

    <div class="card">
        <h5 class="card-header">Dependencias</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th class="text-center">Colaboradores</th>
                    <th>Modificar</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($dependencias as $dependencia)
                    <tr>
                        <td>
                            <i class="ti ti-building-community ti-lg text-primary me-3"></i> <strong>{{$dependencia->nombre}}</strong>
                        </td>
                        <td class="text-center"><span class="badge bg-label-danger">{{$dependencia->empleados_count}}</span></td>
                        <td>
                            <button wire:click="editarDependencia({{$dependencia->id}})" class="btn btn-sm btn-warning"><i class="fa fa-cog mx-1"></i> Editar</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @livewire('dependencias.editar-dependencia')
</div>

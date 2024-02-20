<div>
    <x-titulo-pagina>Dependencias</x-titulo-pagina>

    @if($feedback != null)
        <x-informacion tipo="{{$feedback['tipo']}}" icono="{{$feedback['icono']}}">{{$feedback['mje']}}</x-informacion>
    @endif

    <div class="card">
        <div>
            <h5 class="card-header">
                <i class="fa fa-building"></i> Dependencias
                <span class="ti ti-dots-vertical"></span>
                <button wire:click="crearDependencia" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle mx-1"></i> Nueva</button>
            </h5>
        </div>
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
                        <td class="text-center"><span class="badge bg-label-danger">{{$dependencia->empleados_activos_count}}</span></td>
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
    @livewire('dependencias.crear-dependencia')
</div>

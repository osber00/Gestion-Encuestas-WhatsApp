<div>
    <x-titulo-pagina>Colaboradores</x-titulo-pagina>

    @if($feedback != null)
        <x-informacion tipo="{{$feedback['tipo']}}" icono="{{$feedback['icono']}}">{{$feedback['mje']}}</x-informacion>
    @endif

    <div class="card">
        <div>
            <h5 class="card-header">
                <i class="fa fa-user-group"></i> Colaboradores
                <span class="ti ti-dots-vertical"></span>
                <button wire:click="crearColaborador" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle mx-1"></i> Nuevo</button>
            </h5>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Identificación</th>
                    <th>Servicio</th>
                    <th>Dependencia</th>
                    <th>Activo</th>
                    <th>Modificar</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($empleados as $empleado)
                    <tr>
                        <td>{{$empleado->nombres}}</td>
                        <td>{{$empleado->apellidos}}</td>
                        <td>{{$empleado->correo}}</td>
                        <td>{{$empleado->identificacion}}</td>
                        <td>{{$empleado->servicio}}</td>
                        <td>{{$empleado->dependencia->nombre}}</td>
                        <td>
                            @if($empleado->activo)
                                <i class='fa fa-check-circle text-primary'></i>
                            @else
                                <i class='fa fa-times-circle text-danger'></i>
                            @endif
                        </td>
                        <td>
                            <button wire:click="editarColaborador({{$empleado->id}})" class="btn btn-sm btn-warning"><i class="fa fa-cog mx-1"></i> Editar</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @livewire('colaboradores.editar-colaborador')
    @livewire('colaboradores.crear-colaborador')
</div>

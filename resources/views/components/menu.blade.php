@php
    $menu = [
       [
            'nombre' => 'Inicio',
            'icono'   => 'ti-home-2',
            'route'  => route('inicio'),
            'active' => request()->routeIs('inicio'),
        ],
        [
            'nombre' => 'Dependencias',
            'icono'   => 'ti-building',
            'route'  => route('dependencias'),
            'active' => request()->routeIs('dependencias') or request()->routeIs('reporte-dependencia'),
        ],
        [
            'nombre' => 'Colaboradores',
            'icono'   => 'ti-users',
            'route'  => route('colaboradores'),
            'active' => request()->routeIs('colaboradores') or request()->routeIs('reporte-colaborador'),
        ],
        /*[
            'nombre' => 'Rep. Dependencias',
            'icono'   => 'ti-layout-grid',
            'route'  => route('reporte-dependencias'),
            'active' => request()->routeIs('reporte-dependencias'),
        ]*/
    ]
@endphp

<ul class="menu-inner py-1">
    <!-- Apps & Pages -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Panel Admin</span>
    </li>
    @foreach($menu as $opcion)
        <li class="menu-item @if($opcion['active']) active @endif">
            <a href="{{$opcion['route']}}" class="menu-link">
                <i class="menu-icon tf-icons ti {{$opcion['icono']}}"></i>
                <div data-i18n="{{$opcion['nombre']}}">{{$opcion['nombre']}}</div>
            </a>
        </li>
    @endforeach
    <li class="menu-item">
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <button type="submit" class="menu-link bg-transparent border-0">
                <i class="menu-icon tf-icons ti ti-anchor-off"></i>
                <div data-i18n="Salir">Salir</div>
            </button>
        </form>
    </li>
</ul>

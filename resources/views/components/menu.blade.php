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
            'active' => request()->routeIs('dependencias'),
        ],
        [
            'nombre' => 'Colaboradores',
            'icono'   => 'ti-users',
            'route'  => route('colaboradores'),
            'active' => request()->routeIs('colaboradores'),
        ]
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
                <div data-i18n="Dependencias">{{$opcion['nombre']}}</div>
            </a>
        </li>
    @endforeach
</ul>

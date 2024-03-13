<x-admin-layout>

    <x-titulo-pagina><a href="{{route('colaboradores')}}">Colaboradores</a> /Reporte individual</x-titulo-pagina>

    <div class="alert alert-primary bg-primary text-white" role="alert">El informe considera datos de {{$numero_encuestas}} encuestas llevadas a cabo.</div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title m-0 me-2 pt-1 mb-2">{{$empleado->nombres}} {{$empleado->apellidos}}</h5>
                </div>
                <div class="card-body pb-0">
                    <ul class="timeline ms-1 mb-0">
                        <li class="timeline-item timeline-item-transparent ps-4">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">1. ¿Qué tan satisfecho/a está con el servicio prestado por el funcionario de nuestra institución?</h6>
                                </div>
                                <div class="d-flex flex-wrap mt-3">
                                    <div class="ms-1">
                                        @if($pregunta1 == 1)
                                            <h6 class="mb-0">Muy satisfecho/a 😊</h6>
                                        @endif
                                        @if($pregunta1 == 2)
                                            <h6 class="mb-0">Satisfecho/a 🙂</h6>
                                        @endif
                                        @if($pregunta1 == 3)
                                            <h6 class="mb-0">Neutral 😐</h6>
                                        @endif
                                        @if($pregunta1 == 4)
                                            <h6 class="mb-0">Insatisfecho/a 😕</h6>
                                        @endif
                                        @if($pregunta1 == 5)
                                            <h6 class="mb-0">Muy insatisfecho/a 😞</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent ps-4">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">2. ¿Considera que el funcionario fue amable y cortés durante sus interacciones con él/ella?</h6>
                                </div>
                                <div class="d-flex flex-wrap mt-3">
                                    <div class="ms-1">
                                        @if($pregunta2 >= 50)
                                            <h6 class="mb-0">Si 😊 {{$pregunta2}}%</h6>
                                        @else
                                            <h6 class="mb-0">No 😞 {{$pregunta2}}%</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent ps-4">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">3. ¿Recibió respuestas claras y precisas a sus consultas o solicitudes por parte del funcionario?</h6>
                                </div>
                                <div class="d-flex flex-wrap mt-3">
                                    <div class="ms-1">
                                        @if($pregunta3 == 1)
                                            <h6 class="mb-0">Si, siempre 😊</h6>
                                        @endif
                                        @if($pregunta3 == 2)
                                            <h6 class="mb-0">En la mayoría de los casos 🙂</h6>
                                        @endif
                                        @if($pregunta3 == 3)
                                            <h6 class="mb-0">En algunos casos 😐</h6>
                                        @endif
                                        @if($pregunta3 == 4)
                                            <h6 class="mb-0">No, casi nunca 😕</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent ps-4">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">4. ¿Cómo calificaría el tiempo de respuesta del funcionario al atender sus necesidades o resolver sus problemas?</h6>
                                </div>
                                <div class="d-flex flex-wrap mt-3">
                                    <div class="ms-1">
                                        @if($pregunta4 == 1)
                                            <h6 class="mb-0">Excelente 😊</h6>
                                        @endif
                                        @if($pregunta4 == 2)
                                            <h6 class="mb-0">Bueno 🙂</h6>
                                        @endif
                                        @if($pregunta4 == 3)
                                            <h6 class="mb-0">Regular 😐</h6>
                                        @endif
                                        @if($pregunta4 == 4)
                                            <h6 class="mb-0">Malo 😕</h6>
                                        @endif
                                        @if($pregunta4 == 5)
                                            <h6 class="mb-0">Muy malo 😕</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent ps-4">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">5. En general, ¿recomendaría al funcionario que lo atendió a otros usuarios que requieran sus servicios?</h6>
                                </div>
                                <div class="d-flex flex-wrap mt-3">
                                    <div class="ms-1">
                                        @if($pregunta5 == 1)
                                            <h6 class="mb-0">Definitivamente sí 😊</h6>
                                        @endif
                                        @if($pregunta5 == 2)
                                            <h6 class="mb-0">Probablemente sí 🙂</h6>
                                        @endif
                                        @if($pregunta5 == 3)
                                            <h6 class="mb-0">No estoy seguro/a 😐</h6>
                                        @endif
                                        @if($pregunta5 == 4)
                                            <h6 class="mb-0">Probablemente no 😕</h6>
                                        @endif
                                        @if($pregunta5 == 5)
                                            <h6 class="mb-0">Definitivamente no 😕</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        @foreach($mensajes as $mensaje)
            <div class="col-lg-12 col-md-12">
                <div class="col-md">
                    <div class="card mb-4">
                        <div class="card-header header-elements">
                            <small class="me-2 fw-bold">
                                <i class="ti ti-calendar-event text-primary"></i> {{$mensaje->fecha}}
                            </small>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><i class="ti ti-message"></i> {{$mensaje->observaciones}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-admin-layout>

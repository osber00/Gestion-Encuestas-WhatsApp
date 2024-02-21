<x-admin-layout>
    <x-titulo-pagina>Reporte general</x-titulo-pagina>

    <div class="alert alert-primary bg-primary text-white" role="alert">El informe considera datos de {{$numero_encuestas}} encuestas llevadas a cabo.</div>

    <div class="row">
        {{--Pregunta 1--}}
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">1. ¿Qué tan satisfecho/a está con el servicio prestado por el funcionario de nuestra institución?</h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Muy satisfecho/a</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-primary"
                                        role="progressbar"
                                        style="width: {{$respuestas_p1->rta_1}}%"
                                        aria-valuenow="{{$respuestas_p1->rta_1}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p1->rta_1}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Satisfecho/a</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-success"
                                        role="progressbar"
                                        style="width: {{$respuestas_p1->rta_2}}%"
                                        aria-valuenow="{{$respuestas_p1->rta_2}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p1->rta_2}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Neutral</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: {{$respuestas_p1->rta_3}}%"
                                        aria-valuenow="{{$respuestas_p1->rta_3}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p1->rta_3}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Insatisfecho/a</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-warning"
                                        role="progressbar"
                                        style="width: {{$respuestas_p1->rta_4}}%"
                                        aria-valuenow="{{$respuestas_p1->rta_4}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p1->rta_4}}%</span>
                            </div>
                        </li>

                        <li class="d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Muy insatisfecho/a</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: {{$respuestas_p1->rta_5}}%"
                                        aria-valuenow="{{$respuestas_p1->rta_5}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p1->rta_5}}%</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{--Pregunta 2--}}
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">2. ¿Considera que el funcionario fue amable y cortés durante sus interacciones con él/ella?</h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">SI</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-primary"
                                        role="progressbar"
                                        style="width: {{$respuestas_p2->rta_1}}%"
                                        aria-valuenow="{{$respuestas_p2->rta_1}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p2->rta_1}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">NO</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: {{$respuestas_p2->rta_2}}%"
                                        aria-valuenow="{{$respuestas_p2->rta_2}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p2->rta_2}}%</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{--Pregunta 3--}}
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">3. ¿Recibió respuestas claras y precisas a sus consultas o solicitudes por parte del funcionario?</h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Si, siempre</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-primary"
                                        role="progressbar"
                                        style="width: {{$respuestas_p3->rta_1}}%"
                                        aria-valuenow="{{$respuestas_p3->rta_1}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p3->rta_1}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">En la mayoría de los casos</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-success"
                                        role="progressbar"
                                        style="width: {{$respuestas_p3->rta_2}}%"
                                        aria-valuenow="{{$respuestas_p3->rta_2}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p3->rta_2}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">En algunos casos</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: {{$respuestas_p3->rta_3}}%"
                                        aria-valuenow="{{$respuestas_p3->rta_3}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p3->rta_3}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">No, casi nunca</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-warning"
                                        role="progressbar"
                                        style="width: {{$respuestas_p3->rta_4}}%"
                                        aria-valuenow="{{$respuestas_p3->rta_4}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p3->rta_4}}%</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{--Pregunta 4--}}
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">4. ¿Cómo calificaría el tiempo de respuesta del funcionario al atender sus necesidades o resolver sus problemas?</h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Excelente</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-primary"
                                        role="progressbar"
                                        style="width: {{$respuestas_p4->rta_1}}%"
                                        aria-valuenow="{{$respuestas_p4->rta_1}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p4->rta_1}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Bueno</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-success"
                                        role="progressbar"
                                        style="width: {{$respuestas_p4->rta_2}}%"
                                        aria-valuenow="{{$respuestas_p4->rta_2}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p4->rta_2}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Regular</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: {{$respuestas_p4->rta_3}}%"
                                        aria-valuenow="{{$respuestas_p4->rta_3}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p4->rta_3}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Malo</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-warning"
                                        role="progressbar"
                                        style="width: {{$respuestas_p4->rta_4}}%"
                                        aria-valuenow="{{$respuestas_p4->rta_4}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p4->rta_4}}%</span>
                            </div>
                        </li>

                        <li class="d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Muy malo</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: {{$respuestas_p4->rta_5}}%"
                                        aria-valuenow="{{$respuestas_p4->rta_5}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p4->rta_5}}%</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{--Pregunta 5--}}
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">5. En general, ¿recomendaría al funcionario que lo atendió a otros usuarios que requieran sus servicios?</h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Definitivamente sí</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-primary"
                                        role="progressbar"
                                        style="width: {{$respuestas_p5->rta_1}}%"
                                        aria-valuenow="{{$respuestas_p5->rta_1}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p5->rta_1}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Probablemente sí</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-success"
                                        role="progressbar"
                                        style="width: {{$respuestas_p5->rta_2}}%"
                                        aria-valuenow="{{$respuestas_p5->rta_2}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p5->rta_2}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">No estoy seguro/a</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: {{$respuestas_p5->rta_3}}%"
                                        aria-valuenow="{{$respuestas_p5->rta_3}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p5->rta_3}}%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Probablemente no</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-warning"
                                        role="progressbar"
                                        style="width: {{$respuestas_p5->rta_4}}%"
                                        aria-valuenow="{{$respuestas_p5->rta_4}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p5->rta_4}}%</span>
                            </div>
                        </li>

                        <li class="d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <div>
                                    <h6 class="mb-0">Definitivamente no</h6>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: {{$respuestas_p5->rta_5}}%"
                                        aria-valuenow="{{$respuestas_p5->rta_5}}"
                                        aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">{{$respuestas_p5->rta_5}}%</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>

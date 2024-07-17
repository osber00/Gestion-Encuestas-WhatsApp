<table>
    <thead>
    <tr>
        <th>Pregunta / Opciones | Número de encuestas: {{$num_encuestas}}</th>
        <th>Núm. Respuestas</th>
        <th>Porcentaje</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><strong>1. ¿Qué tan satisfecho/a está con el servicio prestado por el funcionario de nuestra institución?</strong></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Muy satisfecho/a</td>
        <td>{{$cont_resp1->rta_1}}</td>
        <td style="text-align: right">{{$respuestas_p1->rta_1}}%</td>
    </tr>
    <tr>
        <td>Satisfecho/a</td>
        <td>{{$cont_resp1->rta_2}}</td>
        <td style="text-align: right">{{$respuestas_p1->rta_2}}%</td>
    </tr>
    <tr>
        <td>Neutral</td>
        <td>{{$cont_resp1->rta_3}}</td>
        <td style="text-align: right">{{$respuestas_p1->rta_3}}%</td>
    </tr>
    <tr>
        <td>Insatisfecho/a</td>
        <td>{{$cont_resp1->rta_4}}</td>
        <td style="text-align: right">{{$respuestas_p1->rta_4}}%</td>
    </tr>
    <tr>
        <td>Muy insatisfecho/a</td>
        <td>{{$cont_resp1->rta_5}}</td>
        <td style="text-align: right">{{$respuestas_p1->rta_5}}%</td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td><strong>2. ¿Considera que el funcionario fue amable y cortés durante sus interacciones con él/ella?</strong></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>SI</td>
        <td>{{$cont_resp2->rta_1}}</td>
        <td style="text-align: right">{{$respuestas_p2->rta_1}}%</td>
    </tr>
    <tr>
        <td>NO</td>
        <td>{{$cont_resp2->rta_2}}</td>
        <td style="text-align: right">{{$respuestas_p2->rta_2}}%</td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td><strong>3. ¿Recibió respuestas claras y precisas a sus consultas o solicitudes por parte del funcionario?</strong></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Si, siempre</td>
        <td>{{$cont_resp3->rta_1}}</td>
        <td style="text-align: right">{{$respuestas_p3->rta_1}}%</td>
    </tr>
    <tr>
        <td>En la mayoría de los casos</td>
        <td>{{$cont_resp3->rta_2}}</td>
        <td style="text-align: right">{{$respuestas_p3->rta_2}}%</td>
    </tr>
    <tr>
        <td>En algunos casos</td>
        <td>{{$cont_resp3->rta_3}}</td>
        <td style="text-align: right">{{$respuestas_p3->rta_3}}%</td>
    </tr>
    <tr>
        <td>No, casi nunca</td>
        <td>{{$cont_resp3->rta_4}}</td>
        <td style="text-align: right">{{$respuestas_p3->rta_4}}%</td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td><strong>4. ¿Cómo calificaría el tiempo de respuesta del funcionario al atender sus necesidades o resolver sus problemas?</strong></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td>Excelente</td>
        <td>{{$cont_resp4->rta_1}}</td>
        <td style="text-align: right">{{$respuestas_p4->rta_1}}%</td>
    </tr>
    <tr>
        <td>Bueno</td>
        <td>{{$cont_resp4->rta_2}}</td>
        <td style="text-align: right">{{$respuestas_p4->rta_2}}%</td>
    </tr>
    <tr>
        <td>Regular</td>
        <td>{{$cont_resp4->rta_3}}</td>
        <td style="text-align: right">{{$respuestas_p4->rta_3}}%</td>
    </tr>
    <tr>
        <td>Malo</td>
        <td>{{$cont_resp4->rta_4}}</td>
        <td style="text-align: right">{{$respuestas_p4->rta_4}}%</td>
    </tr>
    <tr>
        <td>Muy malo</td>
        <td>{{$cont_resp4->rta_5}}</td>
        <td style="text-align: right">{{$respuestas_p4->rta_5}}%</td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td><strong>5. En general, ¿recomendaría al funcionario que lo atendió a otros usuarios que requieran sus servicios?</strong></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Definitivamente sí</td>
        <td>{{$cont_resp5->rta_1}}</td>
        <td style="text-align: right">{{$respuestas_p5->rta_1}}%</td>
    </tr>
    <tr>
        <td>Probablemente sí</td>
        <td>{{$cont_resp5->rta_2}}</td>
        <td style="text-align: right">{{$respuestas_p5->rta_2}}%</td>
    </tr>
    <tr>
        <td>No estoy seguro/a</td>
        <td>{{$cont_resp5->rta_3}}</td>
        <td style="text-align: right">{{$respuestas_p5->rta_3}}%</td>
    </tr>
    <tr>
        <td>Probablemente no</td>
        <td>{{$cont_resp5->rta_4}}</td>
        <td style="text-align: right">{{$respuestas_p5->rta_4}}%</td>
    </tr>
    <tr>
        <td>Definitivamente no</td>
        <td>{{$cont_resp5->rta_5}}</td>
        <td style="text-align: right">{{$respuestas_p5->rta_5}}%</td>
    </tr>

    </tbody>
</table>

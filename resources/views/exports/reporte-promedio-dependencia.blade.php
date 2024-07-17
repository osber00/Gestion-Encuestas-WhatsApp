<table>
    <tbody>
        <tr>
            <td>Número de encuestas {{$num_encuestas}}</td>
        </tr>
        <tr>
            <td>1. ¿Qué tan satisfecho/a está con el servicio prestado por el funcionario de nuestra institución?</td>
        </tr>
        <tr>
            @if(intval($promedios->promedio_p1) == 1)
            <td>Muy satisfecho/a</td>
            @endif
            @if(intval($promedios->promedio_p1) == 2)
                <td>Satisfecho/a</td>
            @endif
            @if(intval($promedios->promedio_p1) == 3)
                <td>Neutral</td>
            @endif
            @if(intval($promedios->promedio_p1) == 4)
                <td>Insatisfecho/a</td>
            @endif
            @if(intval($promedios->promedio_p1) == 5)
                <td>Muy insatisfecho/a</td>
            @endif
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>2. ¿Considera que el funcionario fue amable y cortés durante sus interacciones con él/ella?</td>
        </tr>
        <tr>
            @if($promedios->promedio_p2 > 0.5)
                <td>SI</td>
            @elseif($promedios->promedio_p2 == 0.5)
                <td>Neutral</td>
            @else
                <td>NO</td>
            @endif
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>3. ¿Recibió respuestas claras y precisas a sus consultas o solicitudes por parte del funcionario?</td>
        </tr>
        <tr>
            @if(intval($promedios->promedio_p3) == 1)
                <td>Si, siempre</td>
            @endif
            @if(intval($promedios->promedio_p3) == 2)
                <td>En la mayoría de los casos</td>
            @endif
            @if(intval($promedios->promedio_p3) == 3)
                <td>En algunos casos</td>
            @endif
            @if(intval($promedios->promedio_p3) == 4)
                <td>No, casi nunca</td>
            @endif
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>4. ¿Cómo calificaría el tiempo de respuesta del funcionario al atender sus necesidades o resolver sus problemas?</td>
        </tr>
        <tr>
            @if(intval($promedios->promedio_p4) == 1)
                <td>Excelente</td>
            @endif
            @if(intval($promedios->promedio_p4) == 2)
                <td>Bueno</td>
            @endif
            @if(intval($promedios->promedio_p4) == 3)
                <td>Regular</td>
            @endif
            @if(intval($promedios->promedio_p4) == 4)
                <td>Malo</td>
            @endif
            @if(intval($promedios->promedio_p4) == 5)
                <td>Muy malo</td>
            @endif
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>5. En general, ¿recomendaría al funcionario que lo atendió a otros usuarios que requieran sus servicios?</td>
        </tr>
        <tr>
            @if(intval($promedios->promedio_p5) == 1)
                <td>Definitivamente sí</td>
            @endif
            @if(intval($promedios->promedio_p5) == 2)
                <td>Probablemente sí</td>
            @endif
            @if(intval($promedios->promedio_p5) == 3)
                <td>No estoy seguro/a</td>
            @endif
            @if(intval($promedios->promedio_p5) == 4)
                <td>Probablemente no</td>
            @endif
            @if(intval($promedios->promedio_p5) == 5)
                <td>Definitivamente no</td>
            @endif
        </tr>
    </tbody>
</table>

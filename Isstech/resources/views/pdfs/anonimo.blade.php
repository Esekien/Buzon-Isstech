<p><b>MENSAJE ANONIMO</b></p>
        <p class="pBorde">FOLIO: {{$findQueja->id_Queja_Sugerencia_Felicitacion}}</p>

        <table>
            <br>
            <tr>
                <td colspan="2"><b>Detalles del mensaje</b></td>
            </tr>
            <tr>
                <td>Tipo del mensaje: </td>
                <td>{{$findQueja->tipo}}</td>
            </tr>
            <tr>
                <td>Nombre del servidor público: </td>
                <td>{{$findQueja->nombre_del_servidor_publico}}</td>
            </tr>
            <tr>
                <td>Cargo del servidor público: </td>
                <td>{{$findQueja->cargo}}</td>
            </tr>
            <tr>
                <td>Descripción del área de servicio: </td>
                <td>{{$findQueja->area_de_servicio}}</td>
            </tr>
            <tr>
                <td>Fecha y hora: </td>
                <td>{{$findQueja->fecha_hora}}</td>
            </tr>
            <tr>
                <td colspan="2">Descripción del mensaje: </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="5">{{$findQueja->descripcion}}</td>
            </tr>
        </table>
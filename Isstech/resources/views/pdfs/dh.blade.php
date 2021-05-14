<p><b> MENSAJE DE DERECHOHABIENTE</b></p>
<p class="pBorde">FOLIO: {{$findQueja->id_Queja_Sugerencia_Felicitacion}}</p>


<table>
    <tr>
        <td colspan="2"><b>Información personal </b></td>
    </tr>
    @foreach($findQueja->dhSend as $registro)
    <tr>
        <td>Nombres: </td>
        <td>{{$registro->nombre}}</td>
    </tr>
    <tr>
        <td>Apellido paterno: </td>
        <td>{{$registro->apellido_paterno}}</td>
    </tr>
    <tr>
        <td>Apellido materno:</td>
        <td>{{$registro->apellido_materno}}</td>
    </tr>
    <tr>
        <td>Teléfono: </td>
        <td>{{$findQueja->telefono_celular}}</td>
    </tr>
    <tr>
        <td>Correo: </td>
        <td>{{$findQueja->correo}}</td>
    </tr>
    @endforeach


<tr>
    <td colspan="2"><b>Dirección</b></td>
</tr>

    @foreach($findQueja->direccionSend as $registro)
    <tr>
        <td>Código postal: </td>
        <td>{{$registro->codigo_postal}}</td>
    </tr>
    <tr>
        <td>Calle: </td>
        <td>{{$registro->calle}}</td>
    </tr>
    <tr>
        <td>Numero: </td>
        <td>{{$registro->numero}}</td>
    </tr>
    <tr>
        <td>Colonia: </td>
        <td>{{$registro->colonia}}</td>
    </tr>
    <tr>
        <td>Ciudad o municipio: </td>
        <td>{{$registro->ciudad_municipio}}</td>
    </tr>
    @endforeach
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
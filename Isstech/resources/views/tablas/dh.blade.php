@extends('elements.sidebarAdmin')


@section('links')
<link rel="stylesheet" href="{{URL::asset('/css/styleAdmin.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

@endsection()

@section('body')

<div class="container-fluid main2">
<h2>Derechohabiente</h2>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <table id="Table1" class="table table-striped">
                <thead>
                    <tr class="columnas">
                        <th class="column1">Visualizar</th>
                        <th class="column1">Estatus</th>
                        <th class="column1">ID</th>
                        <th class="column2">Tipo</th>
                        <th class="column3">Servidor público</th>
                        <th class="column4">Cargo</th>
                        <th class="column5">Área de servicio</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($dh as $item)
                    <tr>
                        <td class="column1">
                            <a class="btn btn-outline-secondary" href="{{route('Buzon-Isstech.visualizar',$item->id_Queja_Sugerencia_Felicitacion)}}" role="button">
                                <i class="icon ion-md-eye"></i>
                                visualizar</a>
                        </td>
                        @if($item->estatus == True)
                            <td class="column1"><span class="badge rounded-pill bg-warning text-dark">Por revisar</span></td>
                        @endif
                        @if($item->estatus == False)
                            <td class="column1"><span class="badge rounded-pill bg-success">Revisado</span></td>
                        @endif
                        <td class="column1">{{$item->id_Queja_Sugerencia_Felicitacion}}
                        </td>
                        <td class="column2">{{$item->tipo}}</td>
                        <td class="column3">{{$item->nombre_del_servidor_publico}}</td>
                        <td class="column4">{{$item->cargo}}</td>
                        <td class="column5">{{$item->area_de_servicio}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>






@endsection()



@section('js')
<script type="text/javascript" src="{{URL::asset('/js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

<script>
    $('#Table1').DataTable({
        responsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate":{
                'next': 'Siguiente',
                'previous': 'Anterior'
            }
        }

    });
</script>
@endsection()
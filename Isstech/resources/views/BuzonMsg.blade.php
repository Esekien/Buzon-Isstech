@extends('elements.sidebarAdmin')

@section('links')
<link rel="stylesheet" href="{{URL::asset('/css/styleAdmin.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection()

@section('body')
<div class="container-fluid main3">
        @if ( session('mensaje2') )
            <br>
            <div class="alert alert-success">{{ session('mensaje2') }}</div>
        @endif
        @include('errors')

    <div class="row">
        <div class="col-lg-10">
            <h3>Felicitación, Queja o Sugerencia</h3>
        </div>

        <div class="col-lg-2 d-flex botones">
            <a class="btn btn-danger m-1 mb-2" href="{{route('Buzon-Isstech.pdf',$findQueja->id_Queja_Sugerencia_Felicitacion)}}" role="button"> <i class='bx bxs-file-pdf'></i> PDF</a>
            @if($findQueja->anonimo == 0)
                <button type="button" class="btn btn-dark m-1 mb-2 " data-toggle="modal" data-target="#exampleModalCenter"> <i class='bx bx-mail-send'></i>Seguimiento</button>
            @endif
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Ingrese los campos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('Buzon-Isstech.msgCorreo') }}" method="POST">
                                @csrf
                                <div class="container">
                                    
                                    <div class="row">
                                        <label for="inputEmail4">Email</label>
                                        <input name="correoE" type="email" class="form-control" value="{{$findQueja->correo}}" id="inputEmail4">
                                    </div>
                                    <div class="row">
                                        <label for="">Descripción</label>
                                        <textarea name="mensaje" class="form-control"  rows="6"></textarea>                                        
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <input type="submit"  class="btn btn-primary" value="Enviar" />
                            </form>
                        </div>
                        

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @if($findQueja->anonimo == 0)
            <div class="col">
                <div class="card shadow-lg p-3 mb-3 bg-white rounded">
                    @if($findQueja->id_clips_fk != NULL)
                    <div class="card-body">
                        <!--EL FOREACH ES PARA PODER ACCEDER A LOS DATOS DE MIS FK QUE VIENEN DE LAS FUNCIONES (WITH)-->
                        @foreach($findQueja->dhSend as $registro)
                            
                            <h2>Información personal:</h2>
                            <label>Nombre:</label>
                            <h5>{{$registro->nombre}}</h5>
                            <label>Apellido paterno:</label>
                            <h5>{{$registro->apellido_paterno}}</h5>
                            <label>Apellido materno:</label>
                            <h5>{{$registro->apellido_materno}}</h5>
                            <label>Teléfono:</label>
                            <h5>{{$findQueja->telefono_celular}}</h5>
                            <label>Correo:</label>
                            <h5>{{$findQueja->correo}}</h5>
                        @endforeach
                    </div>
                    @endif
                    @if($findQueja->id_nodhabientes_fk != NULL)
                    <div class="card-body">
                        <!--EL FOREACH ES PARA PODER ACCEDER A LOS DATOS DE MIS FK QUE VIENEN DE LAS FUNCIONES (WITH)-->
                        @foreach($findQueja->nodhSend as $registro)
                            
                            <h2>Información personal:</h2>
                            <label>Nombre:</label>
                            <h5>{{$registro->nombre}}</h5>
                            <label>Apellido paterno:</label>
                            <h5>{{$registro->apellido_paterno}}</h5>
                            <label>Apellido materno:</label>
                            <h5>{{$registro->apellido_materno}}</h5>
                            <label>Teléfono:</label>
                            <h5>{{$findQueja->telefono_celular}}</h5>
                            <label>Correo:</label>
                            <h5>{{$findQueja->correo}}</h5>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>       
            <div class="col">
                <div class="card shadow-lg p-3 mb-3 bg-white rounded">
                    <div class="card-body">
                        <!--EL FOREACH ES PARA PODER ACCEDER A LOS DATOS DE MIS FK QUE VIENEN DE LAS FUNCIONES (WITH)-->
                        @foreach($findQueja->direccionSend as $registro)
                            <h2>Dirección</h2>
                            <label>Código postal:</label>
                            <h5>{{$registro->codigo_postal}}</h5>
                            <label>Calle:</label>
                            <h5>{{$registro->calle}}</h5>
                            <label>Número:</label>
                            <h5>{{$registro->numero}}</h5>
                            <label>Colonia:</label>
                            <h5>{{$registro->colonia}}</h5>
                            <label>Ciudad o municipio:</label>
                            <h5>{{$registro->ciudad_municipio}}</h5>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h2>Detalles del mensaje</h2>
                    <label>Tipo del mensaje: </label>
                    <h5>{{$findQueja->tipo}}</h5>
                    <label>Nombre del servidor público:</label>
                    <h5>{{$findQueja->nombre_del_servidor_publico}}</h5>
                    <label>Cargo del servidor público:</label>
                    <h5>{{$findQueja->cargo}}</h5>
                    <label>Descripción del área de servicio:</label>
                    <h5>{{$findQueja->area_de_servicio}}</h5>
                    <label>Descripción del mensaje:</label>
                    <h5>{{$findQueja->descripcion}}</h5>
                    <label>Fecha y hora:</label>
                    <h5>{{$findQueja->fecha_hora}}</h5>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection()

@section('js')
<script type="text/javascript" src="{{URL::asset('/js/main.js')}}"></script>
@endsection()
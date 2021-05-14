<!-- el extends sirve para traer el html de otro archivo a este y el section sirve para poner html en una seccion-->
@extends('elements.header')

@section('body')
<title>Contacto</title>


<br>
<div class="main-contacto container">
  <div class="row">
    <div class="fas3 col-md-4 text-center animate-box">
      <div class="services">
        <span class="icon">
          <img src="{{URL::asset('/imagenes/derechohabiente.png')}}" alt="">
        </span>
        <div>
          <h3>Derechohabiente</h3>
          
          <p>Envía tu queja, sugerencia o felicitación mediante tu CLIP para tener un seguimiento de lo enviado.</p>
          <!-- FALTA REDIRIGIR LAS RUTAS -->
          <a href="{{route('contacto.derechohabiente')}}" class="color btn btn-dark" role="button">Enviar</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center animate-box">
      <div class="services">
        <span class="icon">
          <img src="{{URL::asset('/imagenes/noderechohabiente.png')}}" alt="">
        </span>
        <div>
          <h3>No derechohabiente</h3>
          
          <p>Envía tu queja, sugerencia o felicitación con tus datos personales para tener un seguimiento de lo enviado.</p>

          <a href="{{route('contacto.noderechohabiente')}}" class="color btn btn-dark" role="button">Enviar</a>
        </div>
      </div>
    </div>
    <div class="fas3 col-md-4 text-center animate-box">
      <div class="services">
        <span class="icon">
          <img src="{{URL::asset('/imagenes/anonimo.png')}}" alt="">
        </span>
        <div>
          <h3>Anonimo</h3>
          <p>Envía tu queja, sugerencia o felicitación de manera anónima sin embargo no podrás tener un seguimiento de lo enviado</p>
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Enviar
          </button>
          
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Está seguro?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Si realiza una queja, sugerencia o felicitación anónimamente no se le podrá informar el seguimiento realizado.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{route('contacto.anonimo')}}" class="color btn btn-dark" role="button">Enviar</a>
              </div>
            </div>
          </div>
        </div>






      </div>
    </div>
  </div>
</div>


@endsection()
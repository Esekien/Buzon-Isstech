<!-- el extends sirve para traer el html de otro archivo a este y el section sirve para poner html en una seccion-->
@extends('elements.header')

@section('body')
<title>Contacto</title>


<br>
<div class=" container">
  <div class="row">
    <div class="fas3 col-md-4 text-center animate-box">
      <div class="services">
        <span class="icon">
          <img src="{{URL::asset('/imagenes/derechohabiente.png')}}" alt="">
        </span>
        <div >
          <h3>Derechohabiente</h3>
          <p>Envia tu queja, sugerencia o felicitacion mediante tu CLIP para tener un seguimiento de lo enviado.</p>
          <!-- FALTA REDIRIGIR LAS RUTAS -->
          <a href="{{route('contacto.derechohabiente')}}" class="color btn btn-dark" role="button" >Enviar</a>
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
          <p>Envia tu queja, sugerencia o felicitacion con tus datos personales para tener un seguimiento de lo enviado.</p>
          
          <a href="{{route('contacto.noderechohabiente')}}" class="color btn btn-dark" role="button" >Enviar</a>
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
          <p>Envia tu queja, sugerencia o felicitacion de manera anonima sin embargo no podras tener un seguimiento de lo enviado.</p>
          <a href="{{route('contacto.anonimo')}}" class="color btn btn-dark" role="button" >Enviar</a>
        </div>
      </div>
    </div>
  </div>






  <!-- <div class="container">
    <table class="table table-striped ">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido paterno</th>
          <th scope="col">Apellido materno</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clip as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->nombre}}</td>
          <td>{{$item->apellido_paterno}}</td>
          <td>{{$item->apellido_materno}}</td>
        </tr>
        @endforeach()
      </tbody>
    </table>
  </div> -->

  @endsection()

  @extends('elements.footer')
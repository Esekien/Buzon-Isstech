<!-- el extends sirve para traer el html de otro archivo a este y el section sirve para poner html en una seccion-->
@extends('elements.header')

@section('body')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript" src="{{URL::asset('/js/formContacto.js')}}"></script>
<style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>


<div class="main">
  <br>

  <div class="container">
    <h1>Envió de una Queja, Sugerencia o Felicitación</h1>
    <div class="progress">
      <div class="progress-bar  progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <br>
    @if ( session('mensaje') )
    <br>
    <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif
    @include('errors')

    <!--PARA DEFINIR LA RUTA A ENVIAR EL POST-->
    @if(Route::currentRouteName() == 'contacto.derechohabiente')
    <form id="regiration_form" novalidate action="{{ route('sendformDH') }}" method="POST">
      @endif
      @if(Route::currentRouteName() == 'contacto.noderechohabiente')
      <form id="regiration_form" novalidate action="{{ route('sendformNoDH') }}" method="POST">
        @endif
        @if(Route::currentRouteName() == 'contacto.anonimo')
        <form id="regiration_form" novalidate action="{{ route('sendformAN') }}" method="POST">
          @endif
          @csrf
          <!--  @csrf SIRVE PARA PROTEGER EL SITIO WEB DE ATAQUES que no envien cosas en nuestro form de otro citio-->
          <!--PAGINA 1-->
          <fieldset>
            @if(Route::currentRouteName() == 'contacto.derechohabiente' OR Route::currentRouteName() == 'contacto.noderechohabiente' )
            <h2>Información personal</h2>
            <!--CAMPOS A MOSTRAR SEGUN EL TIPO DE USUARIO-->
            @if(Route::currentRouteName() == 'contacto.derechohabiente')
            <div class="container">
              <label for="CLIP"><strong>CLIP:</strong></label>
              <input  type="text" class="form-control" name="clip" id="CLIP" placeholder="Ingrese su CLIP" value="{{  old('clip') }}">
              <small class="form-text text-muted">Es su número de registro ISSTECH.</small>
            </div>
            @endif
            @if(Route::currentRouteName() == 'contacto.noderechohabiente')
            <div class="container">
              <div class="row">
                <div class="col">
                  <label for="CLIP"><strong>Nombre:</strong></label>
                  <input type="text" class="form-control" name="nombre" id="CLIP" placeholder="Ingrese su nombre" value="{{  old('nombre') }}">
                </div>
                <div class="col">
                  <label for="CLIP"><strong>Apellido paterno:</strong></label>
                  <input type="text" class="form-control" name="paterno" id="CLIP" placeholder="Ingrese su apellido paterno" value="{{  old('paterno') }}">
                </div>
                <div class="col">
                  <label for="CLIP"><strong>Apellido materno:</strong></label>
                  <input type="text" class="form-control" name="materno" id="CLIP" placeholder="Ingrese su apellido materno" value="{{  old('materno') }}">
                </div>
              </div>


            </div>

            @endif
            <div class="container">
              <label for="telefono"><strong>Telefono/Celular:</strong></label>
              <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingrese su Telefono/Celular" value="{{  old('telefono') }}">
            </div>

            <div class="container">
              <label for="exampleInputEmail1"><strong>Correo electrónico:</strong></label>
              <input type="email" name="correo" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su Correo electrónico:" value="{{  old('correo') }}">
            </div>
            <div class="container">
              <h3>Dirección</h3>
              <div class="row">
                <div class="col-md-4">
                  <input type="number" name="codigo_postal" class="form-control" " placeholder=" Código postal" value="{{  old('codigo_postal') }}">
                </div>
                <div class="col-md-4">
                  <input type="text" name="calle" class="form-control" " placeholder=" Calle" value="{{  old('calle') }}">
                </div>
                <div class="col-md-4">
                  <input type="number" name="numero" class="form-control" " placeholder=" Numero" value="{{  old('numero') }}">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="colonia" class="form-control" " placeholder=" Colonia" value="{{  old('colonia') }}">
                </div>
                <div class="col-md-6">
                  <input type="text" name="ciudad_municipio" class="form-control" " placeholder=" Ciudad o municipio" value="{{  old('ciudad_municipio') }}">
                </div>

              </div>
            </div>
            <br>
            @endif
            <center>
              <div class="g-recaptcha" data-sitekey="6LenyZsaAAAAAAXcxmlvll1Tp_jqG-a-WiZ7lDP7"></div>
            </center>
            <br>
            <input type="button" name="data[password]" class="next boton1 btn btn-dark btn-block" value="Siguiente">
            
          </fieldset>
          <!--PAGINA 2-->
          <fieldset>
            <h2>Queja, Felicitación o Sugerencia.</h2>
            <div class="container">
              <label for="select"><strong>¿Qué desea usted enviar?</strong></label>
              <select id="select" name="tipo" class="form-select" aria-label="Default select example">
                <option selected>Elegir</option>
                <option value="Queja">Queja</option>
                <option value="Felicitación">Felicitación</option>
                <option value="Sugerencia">Sugerencia</option>
              </select>
            </div>
            <div class="container">
              <label><strong>Fecha y hora de lo ocurrido</strong></label>
              <div class="row">
                <div class="col">
                  <input type="datetime-local" id="birthdaytime" name="fecha"  class="form-control" placeholder="fecha" value="{{  old('fecha') }}">
                </div>
              </div>
            </div>
            <div class="container">
              <label><strong>Referencia del servidor público</strong></label>
              <div class="row">
                <div class="col-6">
                  <input type="text" name="nservidor" class="form-control" placeholder="Nombre completo con apellido del servidor público" value="{{  old('nservidor') }}">
                </div>
                <div class="col-6">
                  <input type="text" name="cargo" class="form-control" placeholder="Cargo que desempeña el servidor público" value="{{  old('cargo') }}">
                </div>
              </div>
            </div>
            <div class="container">
              <label><strong>Área donde se solicitó el servicio</strong></label>
              <div class="form">
                <select id="select" name="area" class="form-select" aria-label="Default select example">
                  <option selected>Elegir</option>
                  <option value="Administrativo">Administrativo</option>
                  <option value="Cobros">Cobros</option>
                  <option value="Atencion medica">Atencion medica</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>
              <label><strong>Descripción</strong></label>
              <div class="form">
                <textarea class="form-control" name="descripcion" placeholder="Espacio para enviar sugerencias o felicitaciones. En caso de queja, favor de narrar los hechos de forma concreta, aportando información como fecha, hora y lugar." id="floatingTextarea" value="{{  old('descripcion') }}"></textarea>
              </div>

            </div>
            <br>
            <input type="button" name="previous" class="previous btn btn-default boton2 btn btn-dark btn-block" value="Previo">
            <br>
            <input type="submit" name="submit" class="submit btn  boton3  btn-primary btn-block" value="Enviar" id="submit_data">

          </fieldset>

        </form>
  </div>

  @endsection()
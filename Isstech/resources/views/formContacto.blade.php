<!-- el extends sirve para traer el html de otro archivo a este y el section sirve para poner html en una seccion-->
@extends('elements.header')

@section('body')


<div class="main">
  <div class="container">
    <!-- aqui lo pondremos dinamico-->
    <header>Envio de un derechohabiente</header>
    <div class="progress-bar">
      <div class="paso">
          <p>datos</p>
          <div class="num">
          <span>1</span>
        </div>
      </div>
      <div class="paso">
        <p>datos</p>
        <div class="num">
          <span>2</span>
        </div>
      </div>
    </div>
    <div class="form-princ">
      <form>
        <!-- pg1-->
        <div class="pagina">
          <!-- aqui lo pondremos dinamico-->
          <h3>Informacion personal</h3>
          <div class="container">
            <label for="CLIP"><strong>CLIP:</strong></label>
            <input type="text" class="form-control" id="CLIP" placeholder="Ingrese su CLIP">
            <small class="form-text text-muted">Es su numero de registro ISSTECH.</small>
          </div>
          <div class="container">
            <label for="telefono"><strong>Telefono/Celular:</strong></label>
            <input type="number" class="form-control" id="telefono" placeholder="Ingrese su Telefono/Celular">
          </div>
          <div class="container">
            <label for="exampleInputEmail1"><strong>Correo electronico:</strong></label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su Correo electronico">
          </div>
          <div class="container">
            <h3>Dirección</h3>
            <div class="row">
              <div class="col-md-4">
                <input type="number" class="form-control" " placeholder=" Codigo postal">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" " placeholder=" Calle">
              </div>
              <div class="col-md-4">
                <input type="number" class="form-control" " placeholder=" Numero">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control" " placeholder=" Colonia">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" " placeholder=" Ciudad o municipio">
              </div>

            </div>
          </div>
          <div class="container">
            <br>
            <button class="boton1 btn btn-dark btn-block">Siguiente</button>
          </div>
        </div>
        <!-- pg2-->
        <div class="pagina">
          <h3>Queja, Felicitación o Sugerencia.</h3>
          <div class="container">
            <label for="select"><strong>¿Qué desea usted enviar?</strong></label>
            <select id="select" class="form-select" aria-label="Default select example">
              <option selected>Elegir</option>
              <option value="1">Queja</option>
              <option value="2">Felicitación</option>
              <option value="3">Sugerencia</option>
            </select>
          </div>
          <div class="container">
            <label><strong>Referencia del servidor público</strong></label>
            <div class="row">
              <div class="col-6">
                <input type="text" class="form-control" placeholder="Nombre completo con apellido del servidor público">
              </div>
              <div class="col-6">
                <input type="text" class="form-control" placeholder="Cargo que desempeña el servidor público">
              </div>
            </div>
          </div>
          <div class="container">
            <label><strong>Area donde se solicito el servicio</strong></label>
            <div class="form">
              <textarea class="form-control" placeholder="Descripción del area del servicio" id="floatingTextarea"></textarea>
            </div>
            <label><strong>Descripción</strong></label>
            <div class="form">
              <textarea class="form-control" placeholder="Espacio para enviar sugerencias o felicitaciones. En caso de queja, favor de narrar los hechos de forma concreta, aportando información como fecha, hora y lugar." id="floatingTextarea"></textarea>
            </div>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col">
                <button type="submit" class="boton1 btn btn-dark btn-block">Atras</button>
              </div>
              <div class="col">
                <button type="submit" class="boton2 btn btn-dark btn-block">Enviar nota</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection()
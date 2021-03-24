<!-- Es la cabeza de la pagina -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="Logo" src="{{URL::asset('/imagenes/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
        Instituto de Seguridad Social de los Trabajadores del Estado de Chiapas
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Perfil</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Configuracion</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">contacto</a>
          </li>
        </ul>
      </div>
    </div>

  </nav>
  @yield('body')

  @extends('elements.footer')
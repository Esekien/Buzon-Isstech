<!-- Es la cabeza de la pagina -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand-lg  navbar-dark shadow-lg">
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg"> -->
    <div class="container">
      <a class="navbar-brand" href="#">
        <img class="Logo" src="{{URL::asset('/imagenes/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
        ISSTECH
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div  id="navbarNav">
        <ul class="navbar-nav ml-auto ">
          @guest
          <li class="nav-item ">
            <a href="{{ route('login') }}" class="nav-link">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item ">
            <a href="{{ route('register') }}" class="nav-link">{{ __('Register') }}</a>
          </li>
          @endif
          @else    
          <li class="nav-item ">
              <a  class="nav-link">
                {{ Auth::user()->name }}
              </a>
          </li>    
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
          </li>  

          <!-- EL DROPDOWN PARA DESCONECTARSE
            <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li> -->
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  @yield('body')
  @yield('links')
  @yield('js')

  
  
  @extends('elements.footer')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('/css/buzonAdmin.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>




    <title>Buzon</title>
</head>
@yield('links')

<body id="body-pd">
    <header class="header shadow-lg" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        <div class="col">
            <p class="username">{{ Auth::user()->name }}</p>
        </div>
        <img src="{{URL::asset('/imagenes/logo.png')}}" width="100" height="50" alt="">
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{ route('Buzon-Isstech') }}" class="nav__logo">
                    <i class='bx bxs-business nav__logo-icon'></i>
                    <span class="nav__logo-name">ISSTECH</span>
                </a>
                <div class="nav__list">
                    <a href="{{ route('Buzon-Isstech') }}" class="nav__link active">
                        <i class='bx bx-home nav__icon'></i>
                        <span class="nav__name">Inicio</span>
                    </a>
                    <a href="{{ route('Buzon-Isstech.dh') }}" class="nav__link">
                        <i class='bx bxs-user-detail nav__icon'></i>

                        <span class="nav__name">Derechohabiente</span>
                    </a>
                    <a href="{{ route('Buzon-Isstech.ndh') }}" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">No derechohabiente</span>
                    </a>
                    <a href="{{ route('Buzon-Isstech.anonimo') }}" class="nav__link">
                        <i class='bx bxs-mask nav__icon'></i>
                        <span class="nav__name">Anónimo</span>
                    </a>

                    <a href="{{ route('Buzon-Isstech.grafica') }}" class="nav__link">
                        <i class='bx bx-bar-chart nav__icon'></i>
                        <span class="nav__name">Gráfica</span>
                    </a>
                    
                </div>
            </div>
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class='bx bx-log-out nav__icon blanco'></i>
                <span class="nav__name blanco2">{{ __('Salir') }}</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a>
        </nav>
    </div>

    @yield('body')

    @yield('js')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>
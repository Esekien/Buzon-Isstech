<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
</head>
<style>
    .pBorde {
        margin-right: 500px;
        border-style: groove;
    }

    .img1 {
        position: absolute;

    }

    .img2 {
        position: absolute;

        left: 650px;

    }

    .centro {
        position: absolute;
        left: 120px;
        margin-bottom: 15px;
    }

    .lista {

        position: absolute;
        top: 60px;

        align-content: center;

    }

    .lista div {
        margin: 5px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 4px;
    }

    tr:nth-child(2n-1) {
        background-color: #dddddd;
    }
</style>

<body>
    <div>
        <img class="img1" src="{{URL::asset('/imagenes/logo.png')}}" width="90" height="40" alt="">
        <h4 class="centro">Instituto de Seguridad Social de los Trabajadores del Estado de Chiapas</h4>
        <img class="img2" src="{{URL::asset('/imagenes/escudo-chiapas.png')}}" width="45" height="35" alt="">
    </div>
    
    <div class="lista">
        <!--para que genere el formato de anonimo-->
        @if($findQueja->anonimo == True)
            @include('pdfs.anonimo')
        @endif

        <!--para que genere el formato de DH-->
        @if($findQueja->id_clips_fk != null)
            @include('pdfs.dh')
        @endif

        <!--para que genere el formato de NDH-->
        @if($findQueja->id_nodhabientes_fk != null)
            @include('pdfs.ndh')
        @endif
        
    </div>
</body>

</html>
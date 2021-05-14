@extends('elements.header')

@section('body')

<link rel="stylesheet" href="{{URL::asset('/css/login.css')}}">


<div class=" container w-75 bg-primary mt-5 rounded shadow">
    <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
        </div>
        <div class="col bg-white p-5 rounded-end">
            <div class="text-end">
                <div class="row">
                    <div class="col">
                        <center><img class="logo-bienvenido" height="130" width="100" src="{{URL::asset('/imagenes/LOGO.jpg')}}"></center>
                    </div>
                </div>
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>
            </div>
            <form method="POST" action="{{ route('login') }}">
                <div class="mb-4">
                    @csrf
                    <label for="email" class="form-label">Correo</label>
                    <input id="email" type="email" placeholder="correo@ejemplo.com" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-4">

                    <label for="contraseña" class="form-label">contraseña</label>
                    <input id="password" type="password" placeholder="••••••••••••" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="d-grid">
                    <button type="submit" class="bt1 btn btn-primary">iniciar sesion</button>
                </div>

                
            </form>

        </div>
    </div>
</div>
@endsection
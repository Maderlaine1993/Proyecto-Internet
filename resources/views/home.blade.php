@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Tabla Rol') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->

<div class="container">

    <!--Cards superiores-->
    <div class="card-group mt-3">

        <div class="card text-center border-info">
            <div class="card-body">
                <h4 class="card-title">Usuario</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
                    tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
                    nec tortor sit amet, maximus mattis dui. </p>
                <a href="#" class="btn btn-primary">Entrar</a>
            </div>
        </div>

        <div class="card text-center border-info">
            <div class="card-body">
                <h4 class="card-title">Roles</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
                    tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
                    nec tortor sit amet, maximus mattis dui. </p>
                <a href="/read/rol" class="btn btn-primary">Entrar</a>
            </div>
        </div>
    </div>

    <!--Cards inferiores-->
    <div class="card-group mt-3">

        <div class="card text-center border-info">
            <div class="card-body">
                <h4 class="card-title">Paquetes</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
                    tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
                    nec tortor sit amet, maximus mattis dui. </p>
                <a href="/read/paquete" class="btn btn-primary">Entrar</a>
            </div>
        </div>

        <div class="card text-center border-info">
            <div class="card-body">
                <h4 class="card-title">Factura</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
                    tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
                    nec tortor sit amet, maximus mattis dui. </p>
                <a href="/read/factura" class="btn btn-primary">Entrar</a>
            </div>
        </div>

    </div>
</div>
@endsection

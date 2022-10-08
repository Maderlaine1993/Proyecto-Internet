@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Vista Trabajador') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->

<h1 class="text-center mt-3">Area A Trabajar</h1><br>
<div class="container">

    <!--Cards superiores-->
    <div class="card-group mt-3">

        <div class="card text-center border-info">
            <div class="card-body">
                <h4 class="card-title">CLIENTES</h4>
                <a href="/read/cliente" class="btn btn-primary">Entrar</a>
            </div>
        </div>

        <div class="card text-center border-info">
            <div class="card-body">
                <h4 class="card-title">PAQUETES</h4>
                <a href="/read/paquete" class="btn btn-primary">Entrar</a>
            </div>
        </div>
    </div>
    <!--Cards superiores-->
    <div class="card-group mt-3">
        <div class="card text-center border-info">
            <div class="card-body">
                <h4 class="card-title">CONTRATO</h4>
                <a href="/read/contrato" class="btn btn-primary">Entrar</a>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection

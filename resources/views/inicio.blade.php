@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Vista Trabajador') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->

<h1 class="text-center mt-3">BIENVENIDO</h1><br>
<div class="container">

    <div class="card-group mt-3">

        <div class="card text-center border-info">
            <div class="card-body">
                <h4 class="card-title">TRABAJADORES</h4>
                <a href="/login" class="btn btn-primary">Entrar</a>
            </div>
        </div>

        <div class="card text-center border-info">
            <div class="card-body">
                <h4 class="card-title">CLIENTES</h4>
                <a href="/login" class="btn btn-primary">Entrar</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

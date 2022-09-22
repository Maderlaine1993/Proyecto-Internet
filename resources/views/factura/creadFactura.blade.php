@extends('layauts.base') <!--para heredar de base-->
@section('title', 'Formulario Factura') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->

<div class="container">
    <div class=" row justify-content-center">
        <div class="col-md-7 mt-5 ml-5">

            <!-- Validacion de Errores -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <?php
            date_default_timezone_set('America/Guatemala');
            $fecha = date('Y-m-d');

            ?>

            <div class="card">
                <form action="{{route('paquete.saveFactura')}}" method="POST">
                    @csrf

                    <div class=" card-header text-center" style="background-color: #005555">
                        <h2 style="color: #FEFBE7"> Registrar Factura </h2>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Descripcion" name="descripcion_f">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="date" class="form-control" value="<?= $fecha ?>" name="fecha">
                            </div>
                        </div>
                        <br>
                        <div class="row form-group">
                            <button id="Guardado" type="submit" class="btn btn-outline-info col-md-4 offset-2 mr-3">
                                <i class="fas fa-save"></i> Realizar
                            </button>

                            <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/read/factura') }}">Cancelar</a>
                        </div>

                        <br>
                    </div>
                </form>
            </div>
        </div>
@endsection

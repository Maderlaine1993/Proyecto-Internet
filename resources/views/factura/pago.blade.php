@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Formulario Cliente') <!--nombre pagina, nombre de seccion-->
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

            <div class="card">
                    <div class=" card-header text-center" style="background-color: #005555">
                        <h2 style="color: #FEFBE7"> Pago</h2>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Numero de Tarjeta">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Nombre de Tarjeta">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Fecha de Expiracion">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="CCV">
                            </div>
                        </div>
                        <br>
                            <div class="row form-group">
                                <a class="btn btn-outline-info btn-xs col-md-4" href=" {{ url('/homeCliente') }}">
                                    <i class="fas fa-save"></i> Enviar</a>

                                <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/homeCliente') }}">Cancelar</a>
                            </div>

                            <br>
                        </div>
                </form>
            </div>
        </div>
@endsection

@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Actualizar Paquete') <!--nombre pagina, nombre de seccion-->
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
                <form action="{{route('updatePaquete', $paquete->codigo)}}" method="POST">
                    @csrf @method('PATCH')

                    <div class=" card-header text-center" style="background-color: #005555">
                        <h2 style="color: #FEFBE7"> Actualizar Paquete </h2>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value="{{$paquete->saldo}}"
                                       placeholder="Saldo" name="saldo">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value="{{$paquete->cuotas}}"
                                       placeholder="Cuotas" name="cuotas">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value="{{$paquete->velocidad}}"
                                       placeholder="Velocidad (Mbps)" name="velocidad">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="date" class="form-control" value="{{$paquete->fecha_contrato}}"
                                       placeholder="Fecha de Contrato" name="fecha_contrato">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value="{{$paquete->tiempo_contrato}}"
                                       placeholder="Tiempo del contrato" name="tiempo_contrato">
                            </div>
                        </div>
                        <br>

                        <div class="row form-group">
                            <button id="Guardado" type="submit" class="btn btn-outline-info col-md-4 offset-2 mr-3">
                                <i class="fas fa-save"></i> Modificar
                            </button>

                            <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/read/paquete') }}">Cancelar</a>
                        </div>

                        <br>
                    </div>
                </form>
            </div>
        </div>
@endsection

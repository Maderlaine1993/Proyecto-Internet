@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Formulario Contrato') <!--nombre pagina, nombre de seccion-->
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
                <form action="{{route('contrato.saveContrato')}}" method="POST">
                    @csrf

                    <div class=" card-header text-center" style="background-color: #005555">
                        <h2 style="color: #FEFBE7"> Crear Contrato </h2>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Tiempo del contrato" name="tiem_contrato">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Numeros de cuotas" name="no_pago">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Saldo" name="saldo">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="date" class="form-control" value="<?= $fecha ?>" name="fecha">
                            </div>
                        </div>
                        <br>
                        <!--Para visualizar nombre clientes-->
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Clientes</label>
                                <select name="nit" class="form-select" aria-label="Default select example" value="{{old('nit_clientes')}}">
                                    <option class="align-self-center text-center" value="">--Clientes--</option>

                                    @foreach($nit as $nits)
                                        <option class="text-center" value="{{$nits->nit}}" > {{$nits->nombre}} {{$nits->apellido}} </option>
                                    @endforeach
                                </select>
                            </div>
                           <br>
                            <!--Para visualizar el estado-->
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Paquetes</label>
                                    <select name="codigo" class="form-select" aria-label="Default select example" value="{{old('codigos_paquetes')}}">
                                        <option class="align-self-center text-center" value="">--Paquetes--</option>

                                        @foreach($codigo as $codigos)
                                            <option class="text-center" value="{{$codigos->codigo}}" > {{$codigos->descripcion}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                        <div class="row form-group">
                            <button id="Guardado" type="submit" class="btn btn-outline-info col-md-4 offset-2 mr-3">
                                <i class="fas fa-save"></i> Realizar
                            </button>

                            <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/read/contrato') }}">Cancelar</a>
                        </div>

                        <br>
                    </div>
                </form>
            </div>
        </div>
@endsection

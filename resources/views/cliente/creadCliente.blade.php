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
                <form action="{{route('cliente.saveCliente')}}" method="POST">
                    @csrf

                    <div class=" card-header text-center" style="background-color: #005555">
                        <h2 style="color: #FEFBE7"> Registrar Cliente </h2>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="NIT" name="nit">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Nombre" name="nombre">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Apellido" name="apellido">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Direccion" name="direccion">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Correo" name="correo">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Telefono" name="telefono">
                            </div>
                        </div>
                        <br>
                        <!--Para visualizar el estado-->
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Estado</label>
                                <select name="id_estado" class="form-select" aria-label="Default select example" value="{{old('id_estado_estado')}}">
                                    <option class="align-self-center text-center" value="">--Estado--</option>

                                    @foreach($estado as $estados)
                                        <option class="text-center" value="{{$estados->id_estado}}" > {{$estados->descripcion_estado}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                        <div class="row form-group">
                            <button id="Guardado" type="submit" class="btn btn-outline-info col-md-4 offset-2 mr-3">
                                <i class="fas fa-save"></i> Registrar
                            </button>

                            <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/read/cliente') }}">Cancelar</a>
                        </div>

                        <br>
                    </div>
                </form>
            </div>
        </div>
@endsection

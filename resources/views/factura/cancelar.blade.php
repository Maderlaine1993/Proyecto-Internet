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
                    <div class=" card-header text-center" style="background-color: #005555">
                        <h2 style="color: #FEFBE7"> Solicitud de Cancelacion de Paquete </h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <label for="exampleInputEmail1" class="form-label">NIT</label>
                                @foreach($cliente as $clientes)
                                <input type="text" class="form-control" value="{{$clientes->nit}}" name="nit">
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                @foreach($cliente as $clientes)
                                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" value="{{$clientes->nombre}} {{$clientes->apellido}}" name="nombre">
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                @foreach($contrato as $contratos)
                                    <label for="exampleInputEmail1" class="form-label">Paquete</label>
                                    <input type="text" class="form-control" value="{{$contratos->descripcion}}" name="nombre">
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                @foreach($contrato as $contratos)
                                    <label for="exampleInputEmail1" class="form-label">Velocidad</label>
                                    <input type="text" class="form-control" value="{{$contratos->velocidad}}" name="nombre">
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                @foreach($contrato as $contratos)
                                    <label for="exampleInputEmail1" class="form-label">Fecha de Contrato</label>
                                    <input type="text" class="form-control" value="{{$contratos->created_at}}" name="nombre">
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                @foreach($contrato as $contratos)
                                    <label for="exampleInputEmail1" class="form-label">Tiempo de Contrato</label>
                                    <input type="text" class="form-control" value="{{$contratos->tiem_contrato}}" name="nombre">
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                    <label for="exampleInputEmail1" class="form-label">Motivo</label>
                                    <input style="WIDTH: 600px; HEIGHT: 98px" type="text" class="form-control">
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
                    </div>
                </form>
            </div>
        </div>
@endsection


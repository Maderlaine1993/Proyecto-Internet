@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Formulario Contrato') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->

<div class="container">
    <div class=" row justify-content-center">
        <div class="col-md-7 mt-5 ml-5">
            <div class="card">

                    <div class=" card-header text-center" style="background-color: #005555">
                        <h2 style="color: #FEFBE7"> Login Cliente </h2>
                    </div>

                    <div class="card-body">
                        <form action="{{route('session')}}" method="POST">
                            @csrf

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
                                       placeholder="Email" name="correo">
                            </div>
                        </div>
                        <br>
                                <div class="row form-group">
                                    <button id="Guardado" type="submit" class="btn btn-outline-info col-md-4 offset-2 mr-3">
                                        <i class="fas fa-save"></i> Ingresar
                                    </button>

                                    <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/') }}">Cancelar</a>
                                </div>
                                <br>
                        </form>
                    </div>
                </form>
            </div>
            <br>
            <a class="btn btn-primary btn-sm" href=" {{ url('/') }}">Regresar</a>
        </div>
@endsection

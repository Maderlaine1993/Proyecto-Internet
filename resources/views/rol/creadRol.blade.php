@extends('layauts.base') <!--para heredar de base-->
@section('title', 'Tabla Rol') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->

<div class="container">
    <div class=" row justify-content-center">
        <div class="col-md-7 mt-5 ml-5">

            <div class="card">
                <form action="{{route('rol.saveRol')}}" method="POST">
                    @csrf

                    <div class=" card-header text-center" style="background-color: #005555">
                        <h2 style="color: #FEFBE7"> Registrar Rol </h2>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value=""
                                       placeholder="Descripcion" name="descripcion">
                            </div>
                        </div>
                        <br>

                        <div class="row form-group">
                            <button id="Guardado" type="submit" class="btn btn-outline-info col-md-4 offset-2 mr-3">
                                <i class="fas fa-save"></i> Registrar
                            </button>

                            <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/read/rol') }}">Cancelar</a>
                        </div>

                        <br>
                    </div>
                </form>
            </div>
        </div>

@endsection

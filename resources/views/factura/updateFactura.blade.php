@extends('layauts.base') <!--para heredar de base-->
@section('title', 'Actualizar Factura') <!--nombre pagina, nombre de seccion-->
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
                <form action="{{route('updateFactura', $factura->no_factura)}}" method="POST">
                    @csrf @method('PATCH')

                    <div class=" card-header text-center" style="background-color: #005555">
                        <h2 style="color: #FEFBE7"> Modificar Factura </h2>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg">
                                <input type="text" class="form-control" value="{{$factura->descripcion_f}}"
                                       placeholder="Descripcion" name="descripcion_f">
                            </div>
                        </div>
                        <br>

                        <div class="row form-group">
                            <button id="Guardado" type="submit" class="btn btn-outline-info col-md-4 offset-2 mr-3">
                                <i class="fas fa-save"></i> Modificar
                            </button>

                            <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/read/factura') }}">Cancelar</a>
                        </div>

                        <br>
                    </div>
                </form>
            </div>
        </div>
@endsection

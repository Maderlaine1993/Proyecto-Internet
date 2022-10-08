@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Tabla Contrato') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ml-5">
            <h1 class="text-center mt-5" style="color: #005555"><i class="fas fa-file-contract"> Contrato</i></h1><br>
            <!-- Mensaje de Error -->
            @if(session('Guardado'))
                <div class="alert alert-success">
                    {{ session('Guardado') }}
                </div>
            @endif

        <!-- Mensaje de Error -->
            @if(session('Eliminado'))
                <div class="alert alert-success">
                    {{ session('Eliminado') }}
                </div>
            @endif


            <a class="btn btn-success mb-4" href="{{url('/createContrato')}}">CREAR CONTRATO</a>

            <table class="table table-light table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>No. Contrato</th>
                    <th>Cliente</th>
                    <th>Tiempo de validacion</th>
                    <th>Cuotas</th>
                    <th>Saldo</th>
                    <th>Fecha</th>
                    <th>Anular</th>
                </tr>
                </thead>

                <tbody>
                @foreach($contrato as $contratos)
                    <tr>
                        <td>{{$contratos->id}}</td>
                        <td>cliente</td>
                        <td>{{$contratos->tiem_contrato}}</td>
                        <td>{{$contratos->no_pago}}</td>
                        <td>Q {{$contratos->saldo}}</td>
                        <td>{{$contratos->created_at}}</td>
                        <td>
                            <div class="btn btn-group">

                                <form action="{{route('deleteContrato', $contratos->id)}}" method="POST">
                                    @csrf @method('DELETE')

                                    <button type="submit" onclick="return confirm('¿Seguro de borrar el paquete?');" class="btn btn-outline-danger mb-2 mr-2 m-1">
                                        <i class="far fa-trash-alt"> </i>
                                    </button>
                                </form>
                            </div>
                        </td>

                    </tr>
                @endforeach

                </tbody>

            </table>
            <!-- Paginacion -->
            {{ $contrato->links() }}

            <a class="btn btn-primary btn-sm" href=" {{ url('/home') }}">Regresar</a>

        </div>
    </div>
</div>
@endsection

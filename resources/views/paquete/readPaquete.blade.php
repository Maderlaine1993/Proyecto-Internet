@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Tabla Paquete') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ml-5">
            <h1 class="text-center mt-5" style="color: #005555"><i class="fas fa-truck-moving" style="color:#005555"></i> Paquetes</h1><br>
            <!-- Mensaje de Error -->
            @if(session('Guardado'))
                <div class="alert alert-success">
                    {{ session('Guardado') }}
                </div>
            @endif

            <!-- Mensaje de Error -->
            @if(session('Modificado'))
                <div class="alert alert-success">
                    {{ session('Modificado') }}
                </div>
            @endif

            <!-- Mensaje de Error -->
            @if(session('Eliminado'))
                <div class="alert alert-success">
                    {{ session('Eliminado') }}
                </div>
            @endif


            <a class="btn btn-success mb-4" href="{{url('/createPaquete')}}">REGISTRAR PAQUETE</a>

            <table class="table table-light table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>No. Codigo</th>
                    <th>Saldo</th>
                    <th>Cuotas</th>
                    <th>Velocidad (Mbps)</th>
                    <th>Fecha de Contrato</th>
                    <th>Tiempo del contrato</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($paquete as $paquetes)
                    <tr>
                        <td>{{$paquetes->codigo}}</td>
                        <td>{{$paquetes->saldo}}</td>
                        <td>{{$paquetes->cuotas}}</td>
                        <td>{{$paquetes->velocidad}}</td>
                        <td>{{$paquetes->fecha_contrato}}</td>
                        <td>{{$paquetes->tiempo_contrato}}</td>
                        <td>
                            <div class="btn btn-group">

                                <a href="{{ route('editPaquete', $paquetes->codigo) }}" class="btn btn-outline-info mb-2 me-2 m-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{route('deletePaquete', $paquetes->codigo)}}" method="POST">
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
            {{ $paquete->links() }}

        </div>
    </div>
</div>
@endsection

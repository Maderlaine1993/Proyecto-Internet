@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Tabla Paquete') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ml-5">
            <h1 class="text-center mt-5" style="color: #005555"><i class="fas fa-users" style="color:#005555"> Clientes</i></h1>


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


            <a class="btn btn-success mb-4" href="{{url('/createCliente')}}">REGISTRAR CLIENTE</a>

            <table class="table table-light table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>NIT</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($cliente as $clientes)
                    <tr>
                        <td>{{$clientes->nit}}</td>
                        <td>{{$clientes->nombre}}</td>
                        <td>{{$clientes->apellido}}</td>
                        <td>{{$clientes->direccion}}</td>
                        <td>{{$clientes->correo}}</td>
                        <td>{{$clientes->telefono}}</td>

                        <td>{{$clientes->descripcion_estado}}</td>
                        <td>
                            <div class="btn btn-group">

                                <a href="{{ route('editCliente', $clientes->nit) }}" class="btn btn-outline-info mb-2 me-2 m-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{route('deleteCliente', $clientes->nit)}}" method="POST">
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
            {{ $cliente->links() }}

            <a class="btn btn-primary btn-sm" href=" {{ url('/home') }}">Regresar</a>

        </div>
    </div>
</div>
@endsection

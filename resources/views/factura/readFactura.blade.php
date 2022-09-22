@extends('layauts.base') <!--para heredar de base-->
@section('title', 'Tabla Factura') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ml-5">
            <h1 class="text-center mt-5" style="color: #005555"> Facturas</h1><br>
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


            <a class="btn btn-success mb-4" href="{{url('/createFactura')}}">CREAR FACTURA</a>

            <table class="table table-light table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>No. Factura</th>
                    <th>Fecha de Creacion</th>
                    <th>Fecha de Modificada</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($factura as $facturas)
                    <tr>
                        <td>{{$facturas->no_factura}}</td>
                        <td>{{$facturas->created_at}}</td>
                        <td>{{$facturas->updated_at}}</td>
                        <td>{{$facturas->descripcion_f}}</td>
                        <td>
                            <div class="btn btn-group">

                                <a href="{{ route('editFactura', $facturas->no_factura) }}" class="btn btn-outline-info mb-2 me-2 m-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{route('deleteFactura', $facturas->no_factura)}}" method="POST">
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
            {{ $factura->links() }}

        </div>
    </div>
</div>
@endsection

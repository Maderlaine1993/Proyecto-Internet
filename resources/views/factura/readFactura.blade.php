@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Tabla Factura') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ml-5">
            <h1 class="text-center mt-5" style="color: #005555"><i class="fas fa-file-invoice-dollar"> Facturas</i></h1><br>
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


            <a class="btn btn-success mb-4" href="{{url('/createFactura')}}">CREAR FACTURA</a>

            <table class="table table-light table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>No. Factura</th>
                    <th>Cliente</th>
                    <th>Fecha de Creacion</th>
                    <th>Descripcion</th>
                    <th>Serie</th>
                    <th>DTE</th>
                    <th>Anular</th>
                </tr>
                </thead>

                <tbody>
                @foreach($factura as $facturas)
                    <tr>
                        <td>{{$facturas->no_factura}}</td>
                        <td>he</td>
                        <td>{{$facturas->created_at}}</td>
                        <td>{{$facturas->descripcion_f}}</td>
                        <td>{{$facturas->serie}}</td>
                        <td>{{$facturas->dte}}</td>
                        <td>
                            <div class="btn btn-group">

                                <form action="{{route('deleteFactura', $facturas->no_factura)}}" method="POST">
                                    @csrf @method('DELETE')

                                    <button type="submit" onclick="return confirm('??Seguro de borrar el paquete?');" class="btn btn-outline-danger mb-2 mr-2 m-1">
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

            <a class="btn btn-primary btn-sm" href=" {{ url('/home') }}">Regresar</a>

        </div>
    </div>
</div>
@endsection

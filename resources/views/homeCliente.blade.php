@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Tabla Contrato') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ml-5">
            <h1 class="text-center mt-5" style="color: #005555"><i class="fas fa-file-contract"> Paquete
                    @foreach($contrato as $contratos){{$contratos->descripcion}}@endforeach</i></h1><br>

            @foreach($contrato as $contratos)
                <p class="fw-bold">Fecha de contrato: {{$contratos->created_at}} </p>
                <p class="fw-bold">Tiempo de contrato: {{$contratos->tiem_contrato}}</p>
                <p class="fw-bold">Velocidad: {{$contratos->velocidad}}</p>
            @endforeach

            @foreach($cliente as $clientes)
                <p class="fw-bold text-end">Estado: {{$clientes->descripcion_estado}}</p>
            @endforeach

            <a class="btn btn-success mb-4" href="{{url('/pago')}}">Realizar Pago</a>
            <a class="btn btn-danger mb-4" href="{{url('/cancelar')}}">Cancelar Paquete</a>
            <table class="table table-light table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>No. Pago</th>
                    <th>Factura</th>
                    <th>Fecha</th>
                    <th>Saldo</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($contrato as $contratos)
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Q {{$contratos->saldo}}</td>
                        <td></td>
                    </tr>
                @endforeach

                </tbody>

            </table>
            <!-- Paginacion -->
            {{ $contrato->links() }}

            <br>
            <a class="btn btn-primary btn-sm" href=" {{ url('/loginCliente') }}">Regresar</a>
        </div>
    </div>
</div>
@endsection



@extends('layouts.app') <!--para heredar de base-->
@section('title', 'Tabla Rol') <!--nombre pagina, nombre de seccion-->
@section('content')<!--para heredar la navbar-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ml-5">
            <h1 class="text-center mt-5" style="color: #005555"><i class="fas fa-truck-moving" style="color:#005555"></i> Roles</h1><br>

            <table class="table table-light table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripcion</th>
                </tr>
                </thead>

                <tbody>
                @foreach($rol as $rols)
                    <tr>
                        <td>{{$rols->id_rol}}</td>
                        <td>{{$rols->descripcion}}</td>
                    </tr>
                @endforeach

                </tbody>

            </table>
            <!-- Paginacion -->
            {{ $rol->links() }}

        </div>
    </div>
</div>

@endsection

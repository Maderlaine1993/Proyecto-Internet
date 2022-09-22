<?php

namespace App\Http\Controllers;

use App\Models\rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //VISTA DE TABLA
    public function readRol()
    {
        return view('rol.readRol');
    }

    //VISTA DE FORMULARIO
    public function createRol()
    {
        return view('rol.creadRol');
    }

    //GUARDAR DATOS DE FORMULARIO
    public function saveRol(Request $request)
    {
        $roldata = request()->except('_token');

        rol::insert($roldata);

         return "Rol guardado";
    }

    //VISTA FORMULARIO DE ACTUALIZACION
    public function editRol(rol $rol)
    {
        return view('rol.updataRol');
    }

    //GUARDAR FORMULARIO DE ACTUALIZACION
    public function updateRol(Request $request, rol $rol)
    {
        //
    }

    //ELIMINACION DE ROL
    public function deleteRol(rol $rol)
    {
        //
    }
}

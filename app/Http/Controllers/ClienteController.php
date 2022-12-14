<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    //VISTA TABLA
    public function readCliente()
    {
        $datos['cliente']= DB::table('clientes')
            ->join('estado','clientes.id_estado', '=', 'estado.id_estado')
            ->select('clientes.*', 'estado.descripcion_estado')
            ->paginate(10);//el numero de filas;

        return view('cliente.readCliente', $datos);
    }

    //FORMULARIO
    public function createCliente()
    {
        $estado = estado::all();
        return view('cliente.creadCliente', compact('estado'));
    }

    //GUARDAR FORMULARIO
    public function saveCliente(Request $request)
    {
        $cliente = $this->validate($request, [
            'nit'       => "required|unique:clientes",
            'nombre'    => "required",
            'apellido'  => "required",
            'direccion' => "required",
            'correo'    => "required|email",
            'telefono'  => "required",
            'id_estado' => "required",
            'contraseña'=> "required"

        ]);

        cliente::create([
            "nit"       => $cliente["nit"],
            "nombre"    => $cliente["nombre"],
            "apellido"  => $cliente["apellido"],
            "direccion" => $cliente["direccion"],
            "correo"    => $cliente["correo"],
            "telefono"  => $cliente["telefono"],
            "id_estado" => $cliente["id_estado"],
            "contraseña" => $cliente["contraseña"],
        ]);

        return redirect('/read/cliente')->with('Guardado', "Cliente Guardado");
    }

    //FORMULARIO DE ACTUALIZAR
    public function editCliente($nit)
    {
        //Llave foreana
        $estado = estado::all();

        $cliente = cliente::findOrFail($nit);

        return view('cliente.updateCliente', compact('cliente', 'estado'));
    }

    //GUARDAR ACTUALIZACION
    public function updateCliente(Request $request, $nit)
    {
        $datoCliente = request()->except((['_token', '_method']));


        cliente::where('nit', '=', $nit)->update($datoCliente);

        return redirect('/read/cliente')->with('Modificado', "Cliente Modificado");
    }

    //ELIMINAR
    public function deleteCliente($nit)
    {
        cliente::destroy($nit);
        return redirect('/read/cliente')->with('Eliminado', "Cliente Eliminado");
    }
}

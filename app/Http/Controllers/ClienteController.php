<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    //VISTA TABLA
    public function readCliente()
    {
        $datos['cliente'] = cliente::paginate(3);

        return view('cliente.readCliente', $datos);
    }

    //FORMULARIO
    public function createCliente()
    {
        return view('cliente.creadCliente');
    }

    //GUARDAR FORMULARIO
    public function saveCliente(Request $request)
    {
        $cliente = $this->validate($request, [
            'nit' => "required|unique:clientes",
            'nombre' => "required",
            'apellido' => "required",
            'direccion' => "required",
            'correo' => "required|email",
            'telefono' => "required",

        ]);

        cliente::create([
            "nit" => $cliente["nit"],
            "nombre" => $cliente["nombre"],
            "apellido" => $cliente["apellido"],
            "direccion" => $cliente["direccion"],
            "correo" => $cliente["correo"],
            "telefono" => $cliente["telefono"],
        ]);

        return redirect('/read/cliente')->with('Guardado', "Cliente Guardado");
    }

    //ACTUALIZAR
    public function editCliente($nit)
    {
        $cliente = cliente::findOrFail($nit);
        return view('cliente.updateCliente', compact('cliente'));
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

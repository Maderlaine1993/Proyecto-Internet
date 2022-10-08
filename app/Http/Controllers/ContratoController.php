<?php

namespace App\Http\Controllers;

use App\Models\contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    //VISTA TABLA
    public function readContrato()
    {
        $datos['contrato'] = contrato::paginate(3);

        return view('contrato.readContrato', $datos);
    }

    //FORMULARIO
    public function createContrato()
    {
        return view('contrato.creadContrato');
    }

    //GUARDAR FORMULARIO
    public function saveContrato(Request $request)
    {
        $contrato = $this->validate($request, [
            'tiem_contrato' => "required",
            'no_pago'       => "required",
            'saldo'         => "required",

        ]);

        contrato::create([
            "tiem_contrato"  => $contrato["tiem_contrato"],
            "no_pago"  => $contrato["no_pago"],
            "saldo"    => $contrato["saldo"],
        ]);

        return redirect('/read/contrato')->with('Guardado', "Contrato Guardado");
    }


    //ELIMINAR
    public function deleteContrato($id)
    {
        contrato::destroy($id);
        return redirect('/read/contrato')->with('Eliminado', "Contrato Eliminado");
    }
}

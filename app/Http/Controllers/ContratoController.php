<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\contrato;
use App\Models\paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratoController extends Controller
{
    //VISTA TABLA
    public function readContrato()
    {
        $dato['contrato']= DB::table('contratos')
            ->join('clientes','contratos.nit', '=', 'clientes.nit')
            ->join('paquetes','contratos.codigo', '=', 'paquetes.codigo')
            ->select('contratos.*', 'clientes.nombre','clientes.apellido', 'paquetes.descripcion')
            ->paginate(10);//el numero de filas;

        return view('contrato.readContrato', $dato);
    }

    //FORMULARIO
    public function createContrato()
    {
        //Para visualizar las llaves foraneas
        $nit = cliente::all();
        $codigo = paquete::all();
        return view('contrato.creadContrato', compact('nit', 'codigo'));
    }

    //GUARDAR FORMULARIO
    public function saveContrato(Request $request)
    {
        $contrato = $this->validate($request, [
            'tiem_contrato' => "required",
            'no_pago'       => "required",
            'saldo'         => "required",
            'nit'           => "required",
            'codigo'        => "required"

        ]);

        contrato::create([
            "tiem_contrato" => $contrato["tiem_contrato"],
            "no_pago"       => $contrato["no_pago"],
            "saldo"         => $contrato["saldo"],
            "nit"           => $contrato["nit"],
            "codigo"        => $contrato["codigo"]
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

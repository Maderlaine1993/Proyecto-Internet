<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\factura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturaController extends Controller
{
    //VISTA TABLA
    public function readFactura()
    {
        $datos['factura'] = factura::paginate(3);

        return view('factura.readFactura', $datos);
    }

    //FORMULARIO
    public function createFactura()
    {
        return view('factura.creadFactura');
    }

    //GUARDAR FORMULARIO
    public function saveFactura(Request $request)
    {
        $factura= $this->validate($request, [
            'descripcion_f' => "required",
            'serie'         => "required",
            'dte'           => "required",

        ]);

        factura::create([
            "descripcion_f" => $factura["descripcion_f"],
            "serie"         => $factura["serie"],
            "dte"           => $factura["dte"],
        ]);

        return redirect('/read/factura')->with('Guardado', "Factura Guardado");
    }


    //ELIMINAR
    public function deleteFactura($no_factura)
    {
        factura::destroy($no_factura);

        return redirect('/read/factura')->with('Eliminado', "Factura Eliminado");
    }

    //VISTA DEL LOGIN CLIENTE
    public function loginCliente(){
        return view('loginCliente');
    }

    //LOGEAR AL CLIENTE
    public function session(Request $request)
    {
        $nit = $request->input('nit');
        $correo = $request->input('correo');
        $data = DB::select("SELECT * FROM clientes WHERE nit = $nit");
        if (count($data) == 0) {
            echo "NO EXISTE";
            session_destroy();
            return;
        }
        session_start();
        $_SESSION["nit"] = $nit;

        return redirect('/homeCliente');
    }

    public function indexCliente(){

        session_start();

        //CONSULTA A LA BD
        $contrato=DB::table('contratos')
            ->join('clientes','contratos.nit', '=', 'clientes.nit')
            ->join('paquetes','contratos.codigo', '=', 'paquetes.codigo')
            ->select('contratos.*', 'clientes.nombre','clientes.apellido', 'paquetes.velocidad', 'paquetes.descripcion')
            ->where('contratos.nit', '=', $_SESSION["nit"])
            ->paginate(10);//el numero de filas;

        //CONSULTA A LA BD
        $cliente= DB::table('clientes')
            ->join('estado','clientes.id_estado', '=', 'estado.id_estado')
            ->select('clientes.*', 'estado.descripcion_estado')
            ->where('clientes.nit', '=', $_SESSION["nit"])
            ->paginate(10);//el numero de filas;

        return view('homeCliente', compact('contrato', 'cliente'));
    }

    //VISUALIZAR EL FORMULARIO DE CANCELACION
    public function cancelar(){

        session_start();

        //CONSULTA A LA BD
        $contrato=DB::table('contratos')
            ->join('clientes','contratos.nit', '=', 'clientes.nit')
            ->join('paquetes','contratos.codigo', '=', 'paquetes.codigo')
            ->select('contratos.*', 'clientes.nombre','clientes.apellido', 'paquetes.velocidad', 'paquetes.descripcion')
            ->where('contratos.nit', '=', $_SESSION["nit"])
            ->paginate(10);

        //CONSULTA EN MODEL
        $cliente= cliente::all()->where('nit', '=', $_SESSION["nit"]);


        return view('factura.cancelar', compact( 'contrato', 'cliente'));
    }

    //FORMULARIO DE PAGO
    public function pago(){
        return view('factura.pago');
    }


}

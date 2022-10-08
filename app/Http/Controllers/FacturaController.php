<?php

namespace App\Http\Controllers;

use App\Models\factura;
use Illuminate\Http\Request;

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
}

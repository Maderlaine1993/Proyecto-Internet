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

        ]);

        factura::create([
            "descripcion_f" => $factura["descripcion_f"],
        ]);

        return redirect('/read/factura')->with('Guardado', "Factura Guardado");
    }

    //ACTUALIZAR
    public function editFactura($no_factura)
    {
        $factura = factura::findOrFail($no_factura);
        return view('factura.updateFactura', compact('factura'));
    }

    //GUARDAR ACTUALIZACION
    public function updateFactura(Request $request, $no_factura)
    {
        $datoFactura= request()->except((['_token', '_method']));


        factura::where('no_factura', '=', $no_factura)->update($datoFactura);

        return redirect('/read/factura')->with('Modificado', "Factura Modificado");
    }

    //ELIMINAR
    public function deleteFactura($no_factura)
    {
        factura::destroy($no_factura);
        return redirect('/read/factura')->with('Eliminado', "Factura Eliminado");
    }
}

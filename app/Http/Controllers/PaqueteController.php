<?php

namespace App\Http\Controllers;

use App\Models\paquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{

    //VISTA TABLA
    public function readPaquete()
    {
        $datos['paquete'] = paquete::paginate(3);

        return view('paquete.readPaquete', $datos);
    }

    //FORMULARIO
    public function createPaquete()
    {
        return view('paquete.creadPaquete');
    }

    //GUARDAR FORMULARIO
    public function savePaquete(Request $request)
    {
        $paquete = $this->validate($request, [
            'codigo' => "required|unique:paquetes",
            'descripcion' => "required",
            'velocidad' => "required",
            'precio' => "required",
        ]);

        paquete::create([
            "codigo" => $paquete["codigo"],
            "descripcion" => $paquete["descripcion"],
            "velocidad" => $paquete["velocidad"],
            "precio" => $paquete["precio"],
        ]);

        return redirect('/read/paquete')->with('Guardado', "Paquete Guardado");
    }

    //ACTUALIZAR
    public function editPaquete($codigo)
    {
        $paquete = paquete::findOrFail($codigo);
        return view('paquete.updatePaquete', compact('paquete'));
    }

    //GUARDAR ACTUALIZACION
    public function updatePaquete(Request $request, $codigo)
    {
        $datoPaquete = request()->except((['_token', '_method']));


        paquete::where('codigo', '=', $codigo)->update($datoPaquete);

        return redirect('/read/paquete')->with('Modificado', "Paquete Modificado");
    }

    //ELIMINAR
    public function deletePaquete($codigo)
    {
        paquete::destroy($codigo);
        return redirect('/read/paquete')->with('Eliminado', "Paquete Eliminado");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\factura;
use App\Models\paquete;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexCliente(){


        $dato['contrato']= DB::table('contratos')
            ->join('clientes','contratos.nit', '=', 'clientes.nit')
            ->join('paquetes','contratos.codigo', '=', 'paquetes.codigo')
            ->select('contratos.*', 'clientes.nombre','clientes.apellido', 'paquetes.velocidad')
            ->paginate(10);//el numero de filas;

        $datosC['cliente']= DB::table('clientes')
            ->join('estado','clientes.id_estado', '=', 'estado.id_estado')
            ->select('clientes.*', 'estado.descripcion_estado')
            ->paginate(10);//el numero de filas;


        return view('homeCliente', $dato, $datosC);
    }
}

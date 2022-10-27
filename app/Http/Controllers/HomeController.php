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

    //VISTA DEL TRABAJADOR
    public function index()
    {
        return view('home');
    }


    //VISTA DE INICIO
    public function incio(){
        return view('inicio');
    }


}

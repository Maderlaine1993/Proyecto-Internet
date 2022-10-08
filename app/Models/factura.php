<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    use HasFactory;

    public $table='facturas';
    public $timestamps=true;
    protected $fillable =[
        'no_factura','descripcion_f', 'serie', 'dte',
    ];
    protected $primaryKey = 'no_factura';
}

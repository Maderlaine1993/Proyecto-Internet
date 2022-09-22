<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paquete extends Model
{
    use HasFactory;

    public $table='paquetes';
    public $timestamps=false;
    protected $fillable =[
        'codigo', 'saldo', 'cuotas', 'velocidad', 'fecha_contrato', 'tiempo_contrato',
    ];
    protected $primaryKey = 'codigo';
}

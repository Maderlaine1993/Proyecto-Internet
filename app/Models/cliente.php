<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    public $table='clientes';
    public $timestamps=false;
    protected $fillable =[
        'nit', 'nombre', 'apellido', 'direccion','correo','telefono',
    ];
    protected $primaryKey = 'nit';
}

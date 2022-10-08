<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrato extends Model
{
    use HasFactory;

    public $table='contratos';
    public $timestamps=true;
    protected $fillable =[
        'id', 'tiem_contrato', 'no_pago','saldo',
    ];
    protected $primaryKey = 'id';
}

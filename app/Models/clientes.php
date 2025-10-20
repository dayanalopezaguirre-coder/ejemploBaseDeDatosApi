<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [
    'nombre_cliente',
    'domicilio',
    'email',
    'descuento_especial',
    'telefono',
    ];
}

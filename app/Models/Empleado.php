<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nombren completo',
        'Departamento',
        'antiguedad',
        'nomina',
    ];
}

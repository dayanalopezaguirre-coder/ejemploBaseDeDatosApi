<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alumno extends Model
{
    public function matricula():HasOne
{   
    //clase alumno, llave foranea en esta tabla(alumno), llave primaria en la tabla alumno
    return $this->hasOne(Matricula::class);
}
}

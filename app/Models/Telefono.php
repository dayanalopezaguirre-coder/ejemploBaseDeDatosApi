<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Telefono extends Model
{
       public function alumno():HasOne
{   
    //clase alumno, llave foranea en esta tabla(alumno), llave primaria en la tabla alumno
    return $this->hasOne(Alumno::class, 'id', 'alumno_id');
}
}

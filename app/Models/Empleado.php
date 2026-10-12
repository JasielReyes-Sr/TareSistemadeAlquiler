<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = '_empleado';

    protected $primaryKey = 'Id_Empleado';

    public $timestamps = false;

    public function registros()
    {
        return $this->hasMany(
            Registro::class,
            'Id_Empleado',
            'Id_Empleado'
        );
    }
}


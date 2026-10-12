<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = '_registro';

    protected $primaryKey = 'Id_Registro';

    public $timestamps = false;

    public function cliente()
    {
        return $this->belongsTo(
            Cliente::class,
            'Id_Cliente',
            'Id_Cliente'
        );
    }

    public function empleado()
    {
        return $this->belongsTo(
            Empleado::class,
            'Id_Empleado',
            'Id_Empleado'
        );
    }

    public function alquileres()
    {
        return $this->hasMany(
            Alquiler::class,
            'Id_Registro',
            'Id_Registro'
        );
    }
}


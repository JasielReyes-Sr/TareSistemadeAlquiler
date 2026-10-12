<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = '_equipo';

    protected $primaryKey = 'Id_Equipo';

    public $timestamps = false;

    public function alquileres()
    {
        return $this->hasMany(
            Alquiler::class,
            'Id_Equipo',
            'Id_Equipo'
        );
    }
}


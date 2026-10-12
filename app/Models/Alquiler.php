<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = '_alquiler';

    protected $primaryKey = 'Id_Alquiler';

    public $timestamps = false;

    public function registro()
    {
        return $this->belongsTo(
            Registro::class,
            'Id_Registro',
            'Id_Registro'
        );
    }

    public function equipo()
    {
        return $this->belongsTo(
            Equipo::class,
            'Id_Equipo',
            'Id_Equipo'
        );
    }
}


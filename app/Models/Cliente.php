<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = '_cliente';

    protected $primaryKey = 'Id_Cliente';

    public $timestamps = false;

    public function registros()
    {
        return $this->hasMany(
            Registro::class,
            'Id_Cliente',
            'Id_Cliente'
        );
    }
}



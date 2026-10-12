<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = '_categoria';

    protected $primaryKey = 'Id_Categoria';

    public $timestamps = false;

    public function equipos()
    {
        return $this->hasMany(
            Equipo::class, 'Id_Categoria', 'Id_Categoria'
        );
    }
}


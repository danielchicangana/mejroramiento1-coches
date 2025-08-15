<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nif', 'nombre', 'direccion', 'ciudad', 'tfno'
    ];

    public function coches()
    {
        return $this->hasMany(Coche::class);
    }
}

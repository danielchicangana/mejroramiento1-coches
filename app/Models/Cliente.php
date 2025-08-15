<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['dni','nombre','apellidos','direccion','tfno'];
    public function coches() {
        return $this->hasMany(Coche::class);
    }
}

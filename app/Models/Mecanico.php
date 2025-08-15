<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mecanico extends Model
{
    protected $fillable = ['dni','nombre','apellidos','fecha_contratacion','salario'];
    public function coches() {
        return $this->belongsToMany(Coche::class, 'repara')
            ->withPivot('fecha_reparacion', 'horas');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $fillable = ['marca','modelo','matricula','color','cliente_id'];
    public function cliente() { return $this->belongsTo(Cliente::class); }
    public function nuevo() { return $this->hasOne(CocheNuevo::class); }
    public function usado() { return $this->hasOne(CocheUsado::class); }
    public function mecanicos() {
        return $this->belongsToMany(Mecanico::class, 'repara')
            ->withPivot('fecha_reparacion', 'horas');
    }
}

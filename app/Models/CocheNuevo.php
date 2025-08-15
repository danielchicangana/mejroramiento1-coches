<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CocheNuevo extends Model
{
    protected $table = 'coche_nuevo';
    protected $fillable = ['unidades','coche_id'];
    public function coche() { return $this->belongsTo(Coche::class); }
}

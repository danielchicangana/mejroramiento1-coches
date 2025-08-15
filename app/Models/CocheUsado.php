<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CocheUsado extends Model
{
    protected $table = 'coche_usado';
    protected $fillable = ['kilometros','coche_id'];
    public function coche() { return $this->belongsTo(Coche::class); }
}

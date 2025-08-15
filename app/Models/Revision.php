<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $fillable = [
        'codigo', 'filtro', 'aceite', 'frenos', 'coche_id'
    ];

    public function coche()
    {
        return $this->belongsTo(Coche::class);
    }
}

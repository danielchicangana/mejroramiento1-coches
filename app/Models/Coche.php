<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $fillable = [
        'matricula', 'marca', 'modelo', 'color', 'precio', 'cliente_id'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function revisions()
    {
        return $this->hasMany(Revision::class);
    }
}

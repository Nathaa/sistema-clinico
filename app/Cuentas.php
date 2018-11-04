<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuentas extends Model
{
    protected $fillable = [
        'monto', 'descripcion', 'cita_id', 'expediente_id',
    ];

    public function cita()
    {
        return $this->belongsTo(Citas::class);
    }

    public function expediente()
    {
        return $this->belongsTo(Expedientes::class);
    }
}

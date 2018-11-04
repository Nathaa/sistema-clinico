<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedientes extends Model
{
    protected $fillable = [
        'name', 'nacimiento', 'edad', 'dirreccion', 'telefono', 'sexo', 'ocupacion', 'tratamiento', 'diagnostico', 'alergias', 'cita_id', 'cuenta_id',
    ];
    protected $dates = ['deleted_at'];

    public function citas()
    {
        return $this->hasMany(Citas::class);
    }
}

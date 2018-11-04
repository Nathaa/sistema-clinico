<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $table = 'citas';
    protected $primaryKey = 'expediente_id';
    protected $fillable = [
        'descripcion', 'fecha', 'hora', 'expediente_id',
    ];

    public function expediente()
    {
        return $this->belongsTo(Expedientes::class);
    }
}
